<?php

    namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

    class BlogCommentFactory extends Factory {
        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition() {
            return [
                'blogs_id' => Blog::all()->random()->id,
                'comment' => $this->faker->realText()
            ];
        }
    }
