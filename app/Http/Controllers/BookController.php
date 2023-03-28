<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
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
            'books' => Book::with('categorie')
                ->with('Publisher')
                ->with('Author')
                ->get(),
        ]);
    }

    public function detail(int $id): Response
    {
        return response()->view('books.detail', [
            'book' => Book::with('categorie')
                ->with('Publisher')
                ->with('Author')
                ->with('comments')
                ->findorfail($id),
            'comments' => comment::with('user')
                ->where('post_id', $id)
                ->get(),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Factory|View
    {
        $Books = Book::with('categorie')
            ->with('Publisher')
            ->with('Author')
            ->get();

        return view('books.create', [
            'books' => $Books,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @throws ApiError
     */
    public function store(Request $request): RedirectResponse
    {

        $cover = $request->file('cover')?->getRealPath();
        $pdf = $request->file('pdf')?->getRealPath();

        $last = (new Book)->get()->last()->id ?? 1;

        $COVER = 'cover' . $last . 'Book-LiteHub';

        $PDF = 'pdf' . $last . 'Book-LiteHub';

        if ($cover && $pdf) {

            $cloudinary = new Cloudinary(
                [
                    'cloud' => [
                        'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                        'api_key' => env('CLOUDINARY_API_KEY'),
                        'api_secret' => env('CLOUDINARY_API_SECRET'),
                    ],
                ]
            );

            $cloudinary->uploadApi()->upload(
                $cover,
                [
                    'public_id' => $COVER,
                    'folder' => 'LiteHub/images',
                ]
            );
            $cloudinary->uploadApi()->upload(
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
                        'pdf' => 'https://res.cloudinary.com/dggvib6ib/image/upload/v1679926507/LiteHub/pdf/' . $PDF,
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
