<?php

    namespace App\Http\Controllers;

    use App\Models\Blog;
    use Illuminate\Http\Request;

    class HomeController extends Controller {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            $blogs = Blog::orderBy('created_at', 'desc')->get();

            return view('index', compact('blogs'));
        }
    }
