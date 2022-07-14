<?php

    namespace Database\Seeders;

    use App\Models\BlogCategory;
    use Illuminate\Database\Seeder;

    class BlogCategorySeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            BlogCategory::factory()->count(10)->create();
        }
    }
