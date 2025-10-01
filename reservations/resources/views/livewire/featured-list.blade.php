<div
    x-data="{ open: @entangle("showModal") }"
    class="grid grid-cols-3 gap-4 mt-5"
>
    @foreach ($restaurants as $restaurant)
        <div
            x-on:click="open = true"
            wire:click="openModal('{{ $restaurant->id }}')"
            wire:key="featured-{{ $restaurant->id }}"
            class="restaurant-item-wrapper"
        >
            <img
                alt="{{ $restaurant->title }}"
                class="featured-image h-full w-full object-cover object-center lg:h-3/4 lg:w-full rounded-t-md cursor-pointer"
                src="{{ $restaurant->image }}"
            />
            <div
                class="restaurant-item flex items-center justify-between p-3 bg-stone-800 rounded-b-md"
            >
                <div class="flex-row">
                    <div>{{ $restaurant->title }}</div>
                    <div class="text-stone-500 text-sm">
                        {{ $restaurant->type }}
                    </div>
                </div>

                <span class="rating">
                    {{ $restaurant->rating }}
                    <span class="text-stone-500 text-sm ms-1">
                        ({{ $restaurant->votes }})
                    </span>
                </span>
            </div>
        </div>
    @endforeach

    <div
        x-cloak
        x-show="open"
        x-transition.opacity.duration.200ms
        class="fixed inset-0 z-40 bg-black/60 backdrop-blur-sm"
        x-on:click="
            open = false
            $wire.closeModal()
        "
        aria-hidden="true"
    ></div>

    <div
        x-cloak
        x-show="open"
        x-on:keydown.escape.window="
            open = false
            $wire.closeModal()
        "
        wire:show="showModal"
        class="fixed inset-0 z-50 flex items-center justify-center px-4 py-8 sm:px-6"
        role="dialog"
        aria-modal="true"
        aria-label="Restaurant details"
    >
        <div
            x-show="open"
            x-transition.duration.200ms.scale.opacity
            class="relative w-full max-w-3xl overflow-hidden rounded-2xl bg-stone-900 text-stone-50 shadow-2xl ring-1 ring-stone-700/60"
        >
            <button
                type="button"
                class="absolute right-3 top-3 inline-flex h-10 w-10 items-center justify-center rounded-full bg-stone-800/70 text-stone-300 transition hover:bg-stone-700 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500/70 cursor-pointer"
                x-on:click="
                    open = false
                    $wire.closeModal()
                "
                aria-label="Close details"
            >
                <span class="sr-only">Close</span>
                &times;
            </button>

            <div class="max-h-[80vh] overflow-y-auto p-6 sm:p-8">
                @if ($modalContent)
                    <article class="space-y-6">
                        <header
                            class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
                        >
                            <div>
                                <h2 class="text-2xl font-semibold text-white">
                                    {{ $modalContent->title }}
                                </h2>
                                <p class="text-sm text-stone-400">
                                    {{ $modalContent->type }}
                                </p>
                            </div>

                            <div
                                class="flex items-center gap-2 text-sm text-stone-400"
                            >
                                @if (! is_null($modalContent->rating))
                                    <span
                                        class="text-lg font-semibold text-emerald-300"
                                    >
                                        {{ number_format($modalContent->rating, 1) }}
                                    </span>
                                @else
                                    <span
                                        class="text-lg font-semibold text-stone-500"
                                    >
                                        —
                                    </span>
                                @endif

                                <span>
                                    ({{ $modalContent->votes ? number_format($modalContent->votes) : "No reviews yet" }})
                                </span>
                            </div>
                        </header>

                        @if ($modalContent->image)
                            <div
                                class="overflow-hidden rounded-xl bg-stone-800 ring-1 ring-stone-700/50"
                            >
                                <img
                                    src="{{ $modalContent->image }}"
                                    alt="{{ $modalContent->title }} hero image"
                                    class="h-64 w-full object-cover object-center sm:h-80"
                                />
                            </div>
                        @endif

                        <dl class="space-y-5 text-sm text-stone-200">
                            @if ($modalContent->notes)
                                <div>
                                    <dt
                                        class="text-xs font-medium uppercase tracking-[0.3em] text-stone-500"
                                    >
                                        About
                                    </dt>
                                    <dd
                                        class="mt-2 leading-relaxed text-stone-100"
                                    >
                                        {{ $modalContent->notes }}
                                    </dd>
                                </div>
                            @endif

                            <div class="grid gap-5 sm:grid-cols-2">
                                <div>
                                    <dt
                                        class="text-xs font-medium uppercase tracking-[0.3em] text-stone-500"
                                    >
                                        Contact
                                    </dt>
                                    <dd class="mt-2 space-y-1">
                                        <p>
                                            {{ $modalContent->contact_phone ?? "—" }}
                                        </p>
                                        <p>
                                            {{ $modalContent->contact_email ?? "—" }}
                                        </p>
                                    </dd>
                                </div>

                                <div>
                                    <dt
                                        class="text-xs font-medium uppercase tracking-[0.3em] text-stone-500"
                                    >
                                        Location
                                    </dt>
                                    <dd class="mt-2">
                                        {{ $modalContent->city ?? "—" }}
                                    </dd>
                                </div>
                            </div>

                            <div>
                                <dt
                                    class="text-xs font-medium uppercase tracking-[0.3em] text-stone-500"
                                >
                                    Website
                                </dt>
                                <dd class="mt-2">
                                    @if ($modalContent->website)
                                        <a
                                            href="{{ $modalContent->website }}"
                                            target="_blank"
                                            rel="noopener"
                                            class="text-amber-400 hover:text-amber-300 hover:underline"
                                        >
                                            {{ $modalContent->website }}
                                        </a>
                                    @else
                                        <span>—</span>
                                    @endif
                                </dd>
                            </div>
                        </dl>
                    </article>
                @else
                    <div
                        class="flex items-center justify-center py-16 text-sm text-stone-400"
                    >
                        Loading restaurant details...
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
