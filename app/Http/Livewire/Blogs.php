<?php

    namespace App\Http\Livewire;

    use App\Http\Requests\StoreBlogCommentRequest;
    use App\Models\Blog;
    use App\Models\BlogDislike;
    use App\Models\BlogLike;
    use Illuminate\Http\Request;
    use Livewire\Component;

    class Blogs extends Component {
        protected $listeners = [
            'refreshComponent' => '$refresh'
        ];

        public $blogs;

        public $identifier;

        public $blog_id;

        public $comment;

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function like($blogId) {
            if(!user())
                return \Session::put('info', 'Login to upvote the blog, and many more');

            if(!Blog::doesExist($blogId))
                return \Session::put('error', 'Blog Does not exist');

            $liked = BlogLike::userExistWithBlog($blogId);

            if(!$liked):
                user()->blogLikes()->create([
                    'blog_id' => $blogId,
                    'count' => 1,
                ]);
            endif;

            $this->emit('refreshComponent');

            $this->emitTo('component-to-refresh', 'flashComponent');

            return \Session::put('success', 'Successfully upvoted the blog');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function dislike($blogId) {
            if(!user())
                return \Session::put('info', 'Login to downvote the blog, and many more');

            if(!Blog::doesExist($blogId))
                return \Session::put('error', 'Blog Does not exist');

            $disliked = BlogDislike::userExistWithBlog($blogId);

            if(!$disliked):
                user()->blogDislikes()->create([
                    'blog_id' => $blogId,
                    'count' => 1,
                ]);
            endif;

            $this->emit('refreshComponent');

            $this->emitTo('component-to-refresh', 'flashComponent');

            return \Session::put('success', 'Your downvote recorded successfully');
        }

        /**
         * Store a newly created comment in storage.
         *
         * @param  \App\Http\Requests\StoreBlogCommentRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function storeComment(Request $request) {
            $validatedData = $this->validate([
                'blog_id' => 'required|integer',
                'comment' => 'required|string',
            ]);

            user()->blogComments()->create($validatedData);

            $this->emitTo('component-to-refresh', 'flashComponent');

            return \Session::put('success', 'Comments posted successfully');
        }

        public function render() {
            return view('livewire.blogs');
        }
    }
