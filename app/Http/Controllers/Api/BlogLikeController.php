<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreBlogLikeRequest;
    use App\Models\Blog;
    use App\Models\BlogLike;

    class BlogLikeController extends Controller {
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreBlogLikeRequest $request) {
            $blogId = $request->validated()['blog_id'];

            if(!Blog::doesExist($blogId))
                return errorResponse("Blog doesn't exist", 404);

            $liked = BlogLike::userExistWithBlog($blogId);

            if(!$liked):
                user()->blogLikes()->create([
                    'blog_id' => $blogId,
                    'count' => 1,
                ]);
            endif;

            return successResponse(null, 'Successfully upvoted the blog');
        }
    }
