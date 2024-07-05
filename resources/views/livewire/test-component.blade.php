<div>
    <form action="" wire:submit='add'>
        <input type="text" wire:model='test' placeholder="Add Title" class="form-control">

        <button type="submit" style="background:blue; color:white; padding: 3px">Add</button>
    </form>
    <h2>Tests</h2>
@if (!($tests->count()>0))
    <h4 class="text-grey">No Tests To Show</h4>
@else
    <ul>
        @foreach ($tests as $test)
            <li>{{ $test->title }}</li>       
        @endforeach
    </ul>
@endif
</div>
