<?php

    namespace App\Http\Livewire;

    use App\Models\Blog;
    use Livewire\Component;

    class Blogs extends Component {
        public $blogs;
        public $identifier;

        public function render() {
            return view('livewire.blogs');
        }
    }
