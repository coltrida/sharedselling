@auth
    @if(auth()->user()->email_verified_at)
        <x-layouts.stile>
            @if(auth()->user()->isAdmin())
                <livewire:pages.admin.home />
            @else
                <livewire:pages.user.home />
            @endif
        </x-layouts.stile>
    @else
        <x-layouts.noauthorized>
            <livewire:pages.auth.verify-email />
        </x-layouts.noauthorized>
    @endif
@else
    <x-layouts.stile>
        <livewire:pages.home />
    </x-layouts.stile>
@endauth


