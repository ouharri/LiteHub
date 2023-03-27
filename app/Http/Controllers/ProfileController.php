<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Cloudinary\Api\Exception\ApiError;
use Cloudinary\Cloudinary;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.index');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.index', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * @throws ApiError
     */
    public function modify(ProfileUpdateRequest $request)
    {

        $image = $request->file('avatar')?->getRealPath();
        if ($image) {

            $cloudinary = new Cloudinary(
                [
                    'cloud' => [
                        'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                        'api_key' => env('CLOUDINARY_API_KEY'),
                        'api_secret' => env('CLOUDINARY_API_SECRET'),
                    ],
                ]
            );

            $upload = $cloudinary->uploadApi()->upload(
                $image,
                [
                    'public_id' => 'user' . Auth::user()->id . 'LiteHub',
                    'folder' => 'LiteHub/images',
                ]
            );
        }

        (new User)->FindOrFail($request->user()->id)
            ->update(
                $image ?
                    array_merge(
                        $request->all(),
                        ['avatar' => 'https://res.cloudinary.com/dggvib6ib/image/upload/v1679926507/LiteHub/images/' . 'user' . Auth::user()->id . 'LiteHub']
                    ) :
                    $request->all(),
            );

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
