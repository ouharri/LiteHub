<?php

namespace App\Http\Controllers;

use App\Http\Requests\users\userStoreRequest;
use App\Http\Requests\users\userUpdateRequest;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use LaravelIdea\Helper\App\Models\_IH_User_C;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
        $user = (new User)->find(1);
        $group = (new Group)->find(2);

        $group->users()->attach(1);
//       return (new User)->find(1)
//           ?->with('roles')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(userStoreRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        //
    }
}
