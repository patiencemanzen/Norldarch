<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class BlogContent extends Model {
        use HasFactory;

        /**
         * Blog content belongs to blog
         *
         * @return BelongsTo
         */
        public function blog(): BelongsTo {
            return $this->belongsTo(Blog::class);
        }
    }
