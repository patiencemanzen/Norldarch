<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
    use Illuminate\Http\Request;

    class BlogController extends Controller {
        public function searchBlogs(Request $request) {
            $blogs = Blog::where('title', 'like', '%' . $request->name . '%')
                            ->orWhere('caption', 'like', '%' . $request->name . '%')
                            ->orderBy('created_at', 'desc')
                            ->get();

            if(!$blogs) return response()->json(['data' => [], 'message' => 'No blogs with query found']);

            return response()->json([
                'data' => BlogResource::collection($blogs),
                'message' => "Blogs listed successfully"
            ]);
        }
    }
