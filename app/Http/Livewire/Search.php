<?php

    namespace App\Http\Livewire;

    use App\Models\Blog;
    use Livewire\Component;

    class Search extends Component {
        public $blogs;

        public function render() {
            return view('livewire.search');
        }
    }
