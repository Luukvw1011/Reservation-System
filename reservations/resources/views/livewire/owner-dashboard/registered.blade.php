<div
    class="rounded-3xl bg-stone-950 p-6 shadow-xl shadow-black/40 ring-1 ring-stone-900"
>
    <div class="flex justify-between items-center">
        <div class="flex flex-col">
            <span class="text-lg font-medium text-stone-50">
                Registered restaurants
            </span>
            <span class="mt-2 text-sm text-stone-400">
                Overview of venues connected to your owner account.
            </span>
        </div>

        <div>
            <a
                class="text-sm font-medium text-emerald-300 hover:text-emerald-200"
                href="#"
            >
                Manage venues ->
            </a>
        </div>
    </div>

    <div class="mt-6 grid gap-4 lg:grid-cols-3">
        @foreach ($restaurants as $restaurant)
            <div
                class="rounded-2xl bg-stone-900/80 p-4 shadow-[0_18px_35px_-24px_rgba(0,0,0,0.75)]"
            >
                <div class="flex justify-between">
                    <div>
                        <p class="font-medium text-stone-50">
                            {{ $restaurant["title"] }}
                        </p>
                        <p class="text-xs text-stone-400">
                            {{ $restaurant["city"] }} ·
                            {{ $restaurant["type"] }}
                        </p>
                    </div>

                    <div>
                        <span
                            class="inline-flex items-center rounded-full px-2.5 py-1 text-xs font-medium capitalize ring-1 {{ $restaurant["status_badge_classes"] }}"
                        >
                            {{ $restaurant["status_label"] }}
                        </span>
                    </div>
                </div>

                <div class="text-xs text-stone-400 mt-2">
                    votes: {{ $restaurant["votes"] }}
                </div>
            </div>
        @endforeach

        <!-- The components in this div should be fetched from the db  -->
    </div>
</div>
