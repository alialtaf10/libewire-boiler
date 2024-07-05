<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Test;

class TestComponent extends Component
{
    public $tests;
    public $test = '';

    public function mount(){
        $this->tests = Test::all();
    }
    public function add(){
        $new_test = new Test;
        $new_test->title = $this->test;
        $new_test->save();
        $this->tests = Test::all();
        $this->test = '';
    }
    public function render()
    {
        return view('livewire.test-component');
    }
}
