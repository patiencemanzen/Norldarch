<?php

    namespace Database\Factories;

    use App\Models\Blog;
    use Illuminate\Database\Eloquent\Factories\Factory;

    class BlogContentFactory extends Factory {
        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition() {
            return [
                'blog_id' => Blog::all()->random()->id,
                'contents' => $this->faker->realTextBetween(11111, 200000),
                'active_status' => true
            ];
        }
    }
