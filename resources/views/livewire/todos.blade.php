<div x-data="{count: 0}">
    <div>
        <span x-text="count"></span>
        <button x-on:click="count++">+</button>
    </div>
    <form wire:submit="addTodo">
        <input type="text" wire:model="todo"/>
        <button @click="$wire.addTodo()" type="button">Submit</button>
    </form>

    <ul>
        @foreach($todos as $todo)
            <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
