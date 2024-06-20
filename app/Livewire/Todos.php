<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos;

    public function mount()
    {
        $this->todos = [
            'Goto to the store',
            'Goto to the market',
        ];
    }

    public function render()
    {
        return view('livewire.todos');
    }

    public function addTodo()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }
}
