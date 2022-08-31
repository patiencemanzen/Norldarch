<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreBlogCommentRequest;

    class BlogCommentController extends Controller {
        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StoreBlogCommentRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreBlogCommentRequest $request) {
            user()
                ->blogComments()
                ->create($request->validated());

            return redirect()
                ->back()
                ->withSucess('Comments submitted successfully');
        }
    }
