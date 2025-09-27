<x-layouts.app>
    @php
        $owner = auth()->user();
        $ownerSinceDisplay = null;
        $lastActivityDisplay = null;

        if ($owner) {
            $ownerSinceDisplay =
                $owner->owner_since instanceof \Illuminate\Support\Carbon
                    ? $owner->owner_since->format("d M Y")
                    : $owner->owner_since ?? null;

            $lastActivityDisplay =
                $owner->last_login_at instanceof \Illuminate\Support\Carbon
                    ? $owner->last_login_at->diffForHumans()
                    : $owner->last_login_at ?? null;
        }
    @endphp

    <div class="mx-auto max-w-6xl space-y-12 px-6 py-12 text-stone-100">
        <header class="flex flex-col gap-3">
            <p
                class="text-xs font-medium uppercase tracking-[0.35em] text-emerald-300"
            >
                Owner Dashboard
            </p>
            <h1 class="text-3xl font-semibold text-stone-50">
                Stay in command
            </h1>
            <p class="max-w-3xl text-stone-300">
                Track how your restaurant is performing at a glance. Review
                upcoming reservations, manage tasks, and keep your guests
                delighted.
            </p>
        </header>

        <section
            class="flex flex-col gap-4 rounded-3xl bg-gradient-to-br from-stone-950 via-stone-900 to-stone-950 p-6 shadow-xl shadow-black/40 ring-1 ring-stone-900 sm:flex-row sm:items-center sm:justify-between"
        >
            <div>
                <p
                    class="text-xs font-medium uppercase tracking-[0.3em] text-stone-500"
                >
                    Signed in as
                </p>
                <h2 class="mt-2 text-xl font-semibold text-stone-50">
                    {{ optional($owner)->name ?? "Owner name" }}
                </h2>
                <p class="text-sm text-stone-400">
                    {{ optional($owner)->email ?? "owner@example.com" }}
                </p>
            </div>
            <dl class="grid gap-4 text-sm sm:grid-cols-3">
                <div
                    class="rounded-2xl bg-stone-900/70 px-4 py-3 text-left shadow-[0_18px_35px_-24px_rgba(0,0,0,0.75)]"
                >
                    <dt
                        class="text-xs uppercase tracking-[0.2em] text-stone-500"
                    >
                        Owner since
                    </dt>
                    <dd class="mt-1 font-medium text-stone-100">
                        {{ $ownerSinceDisplay ?? "Not set" }}
                    </dd>
                </div>
                <div
                    class="rounded-2xl bg-stone-900/70 px-4 py-3 text-left shadow-[0_18px_35px_-24px_rgba(0,0,0,0.75)]"
                >
                    <dt
                        class="text-xs uppercase tracking-[0.2em] text-stone-500"
                    >
                        Account status
                    </dt>
                    <dd class="mt-1 font-medium text-emerald-300">Active</dd>
                </div>
                <div
                    class="rounded-2xl bg-stone-900/70 px-4 py-3 text-left shadow-[0_18px_35px_-24px_rgba(0,0,0,0.75)]"
                >
                    <dt
                        class="text-xs uppercase tracking-[0.2em] text-stone-500"
                    >
                        Last activity
                    </dt>
                    <dd class="mt-1 font-medium text-stone-100">
                        {{ $lastActivityDisplay ?? "Just now" }}
                    </dd>
                </div>
            </dl>
        </section>

        <section
            class="rounded-3xl bg-stone-950 p-6 shadow-xl shadow-black/40 ring-1 ring-stone-900"
        >
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h2 class="text-lg font-medium text-stone-50">
                    Registered restaurants
                </h2>
                <a
                    href="#"
                    class="text-sm font-medium text-emerald-300 hover:text-emerald-200"
                >
                    Manage venues →
                </a>
            </div>
            <p class="mt-2 text-sm text-stone-400">
                Overview of venues connected to your owner account.
            </p>
            <ul class="mt-6 grid gap-4 lg:grid-cols-3">
                <li
                    class="rounded-2xl bg-stone-900/80 p-4 shadow-[0_18px_35px_-24px_rgba(0,0,0,0.75)]"
                >
                    <p class="font-medium text-stone-50">Riverfront Bistro</p>
                    <p class="text-xs text-stone-400">
                        Amsterdam · 85 seats · Open since 2018
                    </p>
                    <p class="mt-3 text-xs text-emerald-300">
                        Last synced 12 minutes ago
                    </p>
                </li>
                <li
                    class="rounded-2xl bg-stone-900/80 p-4 shadow-[0_18px_35px_-24px_rgba(0,0,0,0.75)]"
                >
                    <p class="font-medium text-stone-50">The Garden Terrace</p>
                    <p class="text-xs text-stone-400">
                        Rotterdam · 120 seats · Rooftop dining
                    </p>
                    <p class="mt-3 text-xs text-sky-300">
                        Menu update pending review
                    </p>
                </li>
                <li
                    class="rounded-2xl bg-stone-900/80 p-4 shadow-[0_18px_35px_-24px_rgba(0,0,0,0.75)]"
                >
                    <p class="font-medium text-stone-50">Noord Harbor Grill</p>
                    <p class="text-xs text-stone-400">
                        Utrecht · 60 seats · Seafood focus
                    </p>
                    <p class="mt-3 text-xs text-amber-300">
                        Team roster synced this morning
                    </p>
                </li>
            </ul>
        </section>

        <section class="grid gap-6 md:grid-cols-2">
            <article
                class="rounded-2xl bg-emerald-950/70 p-6 shadow-lg shadow-black/40 ring-1 ring-stone-900/70"
            >
                <p class="text-sm text-emerald-200/80">
                    Today&#39;s reservations
                </p>
                <p class="mt-2 text-3xl font-semibold text-white">18</p>
                <p class="mt-3 text-xs text-stone-300">
                    3 walk-ins pending confirmation
                </p>
            </article>
            <article
                class="rounded-2xl bg-sky-950/70 p-6 shadow-lg shadow-black/40 ring-1 ring-stone-900/70"
            >
                <p class="text-sm text-sky-200/90">Occupancy</p>
                <p class="mt-2 text-3xl font-semibold text-white">78%</p>
                <p class="mt-3 text-xs text-stone-300">
                    Dinner peak 19:30–21:00
                </p>
            </article>
        </section>

        <section class="grid gap-8 lg:grid-cols-[2fr,1fr]">
            <div
                class="rounded-3xl bg-gradient-to-br from-stone-950 via-stone-925 to-stone-950 shadow-xl shadow-black/40 ring-1 ring-stone-900"
            >
                <div class="border-b border-stone-900/70 px-6 py-5">
                    <h2 class="text-lg font-medium text-stone-50">
                        Upcoming reservations
                    </h2>
                    <p class="text-sm text-stone-400">
                        Guests arriving in the next 48 hours
                    </p>
                </div>
                <div class="space-y-3 px-6 py-6 text-sm">
                    <article
                        class="rounded-2xl bg-stone-900/80 p-5 shadow-[0_16px_32px_-28px_rgba(0,0,0,0.8)]"
                    >
                        <div class="flex items-start justify-between gap-6">
                            <div class="space-y-2">
                                <p class="font-medium text-stone-50">
                                    Elise Martins
                                </p>
                                <p class="text-xs text-stone-400">
                                    Table for 4 · Today · 19:00
                                </p>
                            </div>
                            <span
                                class="rounded-full bg-emerald-900/70 px-3 py-1 text-xs font-medium text-emerald-300"
                            >
                                Confirmed
                            </span>
                        </div>
                    </article>
                    <article
                        class="rounded-2xl bg-stone-900/80 p-5 shadow-[0_16px_32px_-28px_rgba(0,0,0,0.8)]"
                    >
                        <div class="flex items-start justify-between gap-6">
                            <div class="space-y-2">
                                <p class="font-medium text-stone-50">
                                    Daniel Liu
                                </p>
                                <p class="text-xs text-stone-400">
                                    Table for 2 · Today · 20:30
                                </p>
                            </div>
                            <span
                                class="rounded-full bg-amber-900/70 px-3 py-1 text-xs font-medium text-amber-300"
                            >
                                Awaiting reply
                            </span>
                        </div>
                    </article>
                    <article
                        class="rounded-2xl bg-stone-900/80 p-5 shadow-[0_16px_32px_-28px_rgba(0,0,0,0.8)]"
                    >
                        <div class="flex items-start justify-between gap-6">
                            <div class="space-y-2">
                                <p class="font-medium text-stone-50">
                                    Corporate Group
                                </p>
                                <p class="text-xs text-stone-400">
                                    Private room · Tomorrow · 13:00
                                </p>
                            </div>
                            <span
                                class="rounded-full bg-sky-900/70 px-3 py-1 text-xs font-medium text-sky-300"
                            >
                                Prepaid
                            </span>
                        </div>
                    </article>
                </div>
                <div
                    class="border-t border-stone-900/70 px-6 py-4 text-right text-xs"
                >
                    <a
                        href="#"
                        class="font-medium text-emerald-300 hover:text-emerald-200"
                    >
                        View full reservation list →
                    </a>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
