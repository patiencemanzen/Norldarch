<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class BlogComment extends Model {
        use HasFactory;

        protected $fillable = [
            'blog_id',
            'comment',
            'user_id'
        ];

        /**
         * Blog like belongs to blog
         *
         * @return BelongsTo
         */
        public function blog(): BelongsTo {
            return $this->belongsTo(Blog::class);
        }

        /**
         * Blog comment belong to user
         *
         * @return BelongsTo
         */
        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
