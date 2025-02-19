<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
class PhotoController extends Controller
{
    public function index()
    {
        // Display a listing of photos
    }

    public function create()
    {
        // Show the form for creating a new photo
    }

    public function store(Request $request)
    {
        // Store a newly created photo in storage
    }

    public function show($id)
    {
        // Display the specified photo
    }

    public function edit($id)
    {
        // Show the form for editing the specified photo
    }

    public function update(Request $request, $id)
    {
        // Update the specified photo in storage
    }

    public function destroy($id)
    {
        // Remove the specified photo from storage
    }
}
