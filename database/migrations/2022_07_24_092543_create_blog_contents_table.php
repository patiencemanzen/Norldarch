<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateBlogContentsTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('blog_contents', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('blog_id');
                $table->longText('contents');
                $table->boolean('active_status')->nullable()->default(true);
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('blog_contents');
        }
    }
