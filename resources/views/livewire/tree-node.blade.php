<div class="node">
    <strong>{{ $user->name }}</strong> ({{ $user->username }})

    @if ($user->children->isNotEmpty())
        <div>
            @foreach ($user->children as $child)
                @include('livewire.tree-node', ['user' => $child])
            @endforeach
        </div>
    @endif
</div>
