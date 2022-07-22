<?php

    namespace App\Http\Livewire;

    use Livewire\Component;

    class Hero extends Component {
        public $blogs;

        public function render() {
            return view('livewire.hero');
        }
    }
