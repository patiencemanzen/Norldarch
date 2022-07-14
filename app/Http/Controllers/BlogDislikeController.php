<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogDislikeRequest;
use App\Http\Requests\UpdateBlogDislikeRequest;
use App\Models\BlogDislike;

class BlogDislikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogDislikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogDislikeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogDislike  $blogDislike
     * @return \Illuminate\Http\Response
     */
    public function show(BlogDislike $blogDislike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogDislike  $blogDislike
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogDislike $blogDislike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogDislikeRequest  $request
     * @param  \App\Models\BlogDislike  $blogDislike
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogDislikeRequest $request, BlogDislike $blogDislike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogDislike  $blogDislike
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogDislike $blogDislike)
    {
        //
    }
}
