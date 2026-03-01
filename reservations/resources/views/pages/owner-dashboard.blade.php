<x-layouts.app>
    @php
        $owner = auth()->user();
        $ownerSinceDisplay = null;

        if ($owner) {
            $ownerSinceDisplay =
                $owner->owner_since instanceof \Illuminate\Support\Carbon
                    ? $owner->owner_since->format("d M Y")
                    : $owner->owner_since ?? null;
        }
    @endphp

    <div class="mx-auto max-w-6xl space-y-12 px-6 py-12 text-stone-100">
        <header class="flex flex-col gap-3">
            <h1 class="text-2xl font-medium">Owner Dashboard</h1>
            <p class="max-w-3xl text-stone-300">
                Track how your restaurant is performing at a glance. Review
                upcoming reservations, manage tasks, and keep your guests
                delighted.
            </p>
        </header>

        <section
            class="flex flex-col gap-4 rounded-3xl bg-stone-950 p-6 shadow-xl shadow-black/40 ring-1 ring-stone-900 sm:flex-row sm:items-center sm:justify-between"
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
            <dl class="grid gap-4 text-sm sm:grid-cols-2">
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
            </dl>
        </section>

        <livewire:owner-dashboard.registered />

        <div class="grid grid-cols-2 gap-5">
            <livewire:todays-reservations-card />
            <livewire:occupancy-card />
        </div>

        <livewire:upcoming-reservations-card />
    </div>
</x-layouts.app>
