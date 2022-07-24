<?php
    namespace App\Http\Controllers;

    use App\Http\Requests;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

    class AdminController extends Controller {
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */
        public function dashboard() {
            $blogs = Blog::orderBy('created_at', 'desc')->get();
            $categories = BlogCategory::orderBy('created_at', 'desc')->get();

            return view('auth.admin.dashboard', compact('blogs', 'categories'));
        }
    }
