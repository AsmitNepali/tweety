<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if(auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar-links')
                    </div>
                @endif
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                    @yield('content')
                </div>
                @if(auth()->check())
                    <div class="lg:w-1/6 bg-blue-100 rounded-lg  p-4 px-6 h-full">
                        @include('_friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>