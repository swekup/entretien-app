<x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-nav-link>
<x-nav-link href="{{ route('film.list') }}" :active="request()->routeIs('films/list')">
    {{ __('Films') }}
</x-nav-link>
