<?php

    namespace Database\Seeders;

    use App\Models\BlogContent;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class BlogContentSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table('blog_contents')->truncate();

            BlogContent::factory()->count(10)->create();
        }
    }
