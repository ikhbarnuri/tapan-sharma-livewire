<div>
    <form wire:submit="addTodo">
        <input type="text" wire:model="todo"/>
        <button type="submit">Submit</button>
    </form>

    <ul>
        @foreach($todos as $todo)
            <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
