<form wire:submit.prevent="submit" class="space-y-6">
    @if ($successMessage !== "")
        <div
            class="rounded-xl border border-emerald-500/40 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-200"
        >
            {{ $successMessage }}
        </div>
    @endif

    <div class="flex flex-col space-y-8">
        <div class="flex justify-evenly">
            @foreach ($steps as $index => $_)
                @if ($index === $step)
                    <div class="bg-orange-600 rounded-3xl px-5 py-3">
                        {{ $index + 1 }}
                    </div>
                @else
                    <div class="bg-gray-800 rounded-3xl px-5 py-3">
                        {{ $index + 1 }}
                    </div>
                @endif
            @endforeach
        </div>

        <div class="flex flex-col w-1/2 self-center text-center gap-3">
            <hr />

            <div class="flex flex-col items-center gap-1 text-sm">
                <span class="text-xs uppercase tracking-wide text-neutral-500">
                    Step {{ $step + 1 }} of {{ count($steps) }}
                </span>
                <span class="text-lg font-semibold text-neutral-100">
                    {{ $steps[$step]['label'] }}
                </span>
            </div>
        </div>

        @include($steps[$step]["component"])
    </div>

    <div class="flex justify-between items-center gap-4">
        <button
            type="button"
            wire:click="previousStep"
            class="rounded-xl border border-neutral-700 px-5 py-2 text-sm font-medium text-neutral-300 transition hover:border-neutral-600 hover:text-neutral-100 disabled:cursor-not-allowed disabled:opacity-40"
            {{ $step === 0 ? 'disabled' : '' }}
        >
            Back
        </button>

        @if ($step < count($steps) - 1)
            <button
                type="button"
                wire:click="nextStep"
                class="rounded-xl bg-orange-500 px-6 py-2 text-sm font-semibold text-white transition hover:bg-orange-600"
            >
                Next
            </button>
        @else
            <button
                type="submit"
                class="rounded-xl bg-emerald-500 px-6 py-2 text-sm font-semibold text-white transition hover:bg-emerald-600"
            >
                Submit
            </button>
        @endif
    </div>
</form>
