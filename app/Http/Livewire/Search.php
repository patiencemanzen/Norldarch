<?php

    namespace App\Http\Livewire;

    use App\Models\Blog;
    use Livewire\Component;

    class Search extends Component {
        public $blogs;

        public $blogsResult;

        public $searchInputs;

        public function search() {
            $this->blogsResult = Blog::where('title', 'like', '%' . $this->searchInputs . '%')
                            ->orderBy('created_at', 'desc')
                            ->get();
        }

        public function render() {
            return view('livewire.search');
        }
    }
