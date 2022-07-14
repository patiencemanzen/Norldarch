<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreBlogCategoryRequest;
    use App\Http\Requests\UpdateBlogCategoryRequest;
    use App\Models\BlogCategory;

    class BlogCategoryController extends Controller {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            $categories = BlogCategory::all();
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create() {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StoreBlogCategoryRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreBlogCategoryRequest $request) {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\BlogCategory  $blogCategory
         * @return \Illuminate\Http\Response
         */
        public function show(BlogCategory $blogCategory) {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\BlogCategory  $blogCategory
         * @return \Illuminate\Http\Response
         */
        public function edit(BlogCategory $blogCategory) {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateBlogCategoryRequest  $request
         * @param  \App\Models\BlogCategory  $blogCategory
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateBlogCategoryRequest $request, BlogCategory $blogCategory) {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\BlogCategory  $blogCategory
         * @return \Illuminate\Http\Response
         */
        public function destroy(BlogCategory $blogCategory) {
            //
        }
    }
