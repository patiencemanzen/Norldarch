<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreBlogDislikeRequest;
    use App\Models\Blog;
    use App\Models\BlogDislike;

    class BlogDislikeController extends Controller {
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreBlogDislikeRequest $request) {
            $blogId = $request->validated()['blog_id'];

            if(!Blog::doesExist($blogId))
                return errorResponse("Blog doesn't exist", 404);

            $disliked = BlogDislike::userExistWithBlog($blogId);

            if(!$disliked):
                user()->blogDislikes()->create([
                    'blog_id' => $blogId,
                    'count' => 1,
                ]);
            endif;

            return successResponse(null, 'Successfully downvoted the blog');
        }
    }
