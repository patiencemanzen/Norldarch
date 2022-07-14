<?php

    namespace Database\Factories;

    use Illuminate\Database\Eloquent\Factories\Factory;

    class BlogFactory extends Factory {
        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition() {
            return [
                'blog_categories' => '1',
                'title' => $this->faker->realTextBetween(10, 100),
                'caption' => $this->faker->realText()
            ];
        }
    }
