<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Cloudinary\Api\Exception\ApiError;
use Cloudinary\Cloudinary;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('books.index', [
            'books' => Book::all(),
        ]);
    }

    public function detail(int $id): Response
    {
        echo $id;
        return response()->view('books.detail', [
            'book' => $id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Factory|View
    {

        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     * @throws ApiError
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'cover' => 'required',
            'pdf' => 'required',
        ]);

        $cover = $request->file('cover')?->getRealPath();

        $pdf = $request->file('pdf')?->getRealPath();

        $last = (new Book)->get()->last()->id ?? 1;

        $COVER = 'cover' . $last . 'Book-LiteHub';

        $PDF = 'pdf' . $last . 'Book-LiteHub';

        if ($cover) {

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
                $cover,
                [
                    'public_id' => $COVER,
                    'folder' => 'LiteHub/images',
                ]
            );

        }
        if ($pdf) {

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
                $pdf,
                [
                    'public_id' => $PDF,
                    'folder' => 'LiteHub/pdf',
                ]
            );
        }

        (new Book)->create(
            $cover && $pdf ?
                array_merge(
                    $request->all(),
                    [
                        'cover' => 'https://res.cloudinary.com/dggvib6ib/image/upload/v1679926507/LiteHub/images/' . $COVER,
                        'pdf' => 'https://res.cloudinary.com/dggvib6ib/pdf/upload/v1679926507/LiteHub/images/' . $PDF,
                    ]
                ) :
                $request->all()
        );

        return redirect()->route('books.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        //
    }
}
