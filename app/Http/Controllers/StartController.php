<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Star;
=======
use App\Models\Start;
>>>>>>> origin/main
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
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
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(Star $start): Response
=======
    public function show(Start $start): Response
>>>>>>> origin/main
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(Star $start): Response
=======
    public function edit(Start $start): Response
>>>>>>> origin/main
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, Star $start): RedirectResponse
=======
    public function update(Request $request, Start $start): RedirectResponse
>>>>>>> origin/main
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(Star $start): RedirectResponse
=======
    public function destroy(Start $start): RedirectResponse
>>>>>>> origin/main
    {
        //
    }
}
