<?php

    namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

    class BlogDislikeFactory extends Factory {
        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition() {
            return [
                'user_id' => User::all()->random()->id,
                'blog_id' => Blog::all()->random()->id,
                'count' => 1,
                'active_status' => true
            ];
        }
    }
