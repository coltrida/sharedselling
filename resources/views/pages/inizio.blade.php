<x-layouts.stile>

    @auth
        @if(auth()->user()->isAdmin())
            <livewire:pages.admin.home />
        @else
            <livewire:pages.user.home />
        @endif
    @else
        <livewire:pages.home />
    @endauth

</x-layouts.stile>
