<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogContentRequest;
use App\Http\Requests\UpdateBlogContentRequest;
use App\Models\BlogContent;

class BlogContentController extends Controller
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
     * @param  \App\Http\Requests\StoreBlogContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogContentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogContent  $blogContent
     * @return \Illuminate\Http\Response
     */
    public function show(BlogContent $blogContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogContent  $blogContent
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogContent $blogContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogContentRequest  $request
     * @param  \App\Models\BlogContent  $blogContent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogContentRequest $request, BlogContent $blogContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogContent  $blogContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogContent $blogContent)
    {
        //
    }
}
