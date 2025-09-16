<x-layouts.app>
    <!-- Hero -->
    <x-slot:header>
        <!-- Navigation section -->
        <div class="flex items-center gap-10">
            <span
                class="flex items-center gap-2 text-xl font-bold text-stone-100"
            >
                Find&Dine
            </span>

            <nav>
                <ul
                    class="nav-items flex items-center gap-6 text-stone-500 text-sm leading-none"
                >
                    <li>Explore</li>
                    <li>Favorites</li>
                    <li>Reservations</li>
                </ul>
            </nav>
        </div>

        <div class="account-buttons flex gap-3 text-stone-300">
            <a class="border-2 px-3 py-1 rounded border-stone-300">Register</a>
            <a class="border-2 px-3 py-1 rounded border-stone-300">Log in</a>
        </div>
    </x-slot>

    <section
        class="relative h-[65vh] md:h-[80vh] w-full bg-cover bg-center"
        style="
            background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&amp;w=1974&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        "
        aria-label="Find restaurants hero"
    >
        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="max-w-3xl w-full px-4 text-center">
                <h1
                    class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight drop-shadow"
                >
                    Find your next favorite
                    <br class="hidden md:block" />
                    restaurant
                </h1>

                <p class="mt-4 md:mt-6 text-base md:text-xl text-white/80">
                    Discover and book tables at the best restaurants in your
                    city.
                </p>

                <livewire:search-action />
            </div>
        </div>
    </section>

    <livewire:search-result />

    <section class="p-6">
        <div class="flex justify-between">
            <span class="text-lg font-bold text-stone-100">
                Featured restaurants
            </span>
            <a href="#" class="text-sm font-bold text-orange-600">
                View all ->
            </a>
        </div>

        <livewire:featured-list />
    </section>

    <footer
        class="bg-stone-950/50 p-5 text-sm text-stone-500 flex justify-between"
    >
        <span>© 2024 Find&Dine. All rights reserved.</span>

        <ul class="nav-items flex gap-5">
            <li>Contact</li>
            <li>Terms</li>
            <li>
                <a href="{{ route("owner-register") }}">
                    For restaurant owners
                </a>
            </li>
        </ul>
    </footer>
</x-layouts.app>
