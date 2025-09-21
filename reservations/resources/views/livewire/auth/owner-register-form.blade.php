<form class="mt-8 max-w-3xl space-y-8" wire:submit="save">
    {{-- Owner Info --}}
    <div>
        <h2 class="text-lg font-semibold text-white mb-4">Owner information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Name --}}
            <div>
                <label class="block text-sm font-medium text-gray-300">
                    Full name
                </label>
                <input
                    wire:model="formObject.fullName"
                    type="text"
                    placeholder="John Doe"
                    class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                />
                <div>
                    @error("formObject.fullName")
                        <span class="error text-red-500 mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-sm font-medium text-gray-300">
                    Email
                </label>
                <input
                    wire:model="formObject.email"
                    type="email"
                    placeholder="you@example.com"
                    class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                />
                <div>
                    @error("formObject.email")
                        <span class="error text-red-500 mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Phone --}}
            <div>
                <label class="block text-sm font-medium text-gray-300">
                    Phone
                </label>
                <input
                    wire:model="formObject.phoneNumber"
                    type="tel"
                    placeholder="+1 234 567 890"
                    class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                />
                <div>
                    @error("formObject.phoneNumber")
                        <span class="error text-red-500 mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    {{-- Restaurant Info --}}
    <div>
        <h2 class="text-lg font-semibold text-white mb-4">
            Restaurant information
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Restaurant name --}}
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-300">
                    Restaurant name
                </label>
                <input
                    wire:model="formObject.restaurantName"
                    type="text"
                    placeholder="Your restaurant"
                    class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                />
                <div>
                    @error("formObject.restaurantName")
                        <span class="error text-red-500 mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Cuisine type --}}
            <div>
                <label class="block text-sm font-medium text-gray-300">
                    Cuisine type
                </label>
                <select
                    wire:model="formObject.cuisineType"
                    class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                >
                    <option class="bg-neutral-900">Select a cuisine</option>
                    <option class="bg-neutral-900">Italian</option>
                    <option class="bg-neutral-900">Mexican</option>
                    <option class="bg-neutral-900">Indian</option>
                    <option class="bg-neutral-900">Chinese</option>
                    <option class="bg-neutral-900">Other</option>
                </select>
            </div>

            {{-- Image upload --}}
            {{-- <div> --}}
            {{-- <label class="block text-sm font-medium text-gray-300"> --}}
            {{-- Restaurant image --}}
            {{-- </label> --}}
            {{-- <input --}}
            {{-- wire:model="formObject.image" --}}
            {{-- type="file" --}}
            {{-- class="mt-2 block w-full text-sm text-gray-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-neutral-700 file:text-gray-200 hover:file:bg-neutral-600 cursor-pointer" --}}
            {{-- /> --}}
            {{-- <p class="mt-1 text-xs text-gray-500">PNG, JPG up to 5MB</p> --}}
            {{-- </div> --}}
        </div>
    </div>

    {{-- Submit --}}
    <div class="flex items-center gap-4">
        <button
            type="submit"
            class="inline-flex items-center justify-center rounded-lg bg-orange-600 hover:bg-orange-500 px-5 py-2.5 font-semibold text-white focus:outline-none focus:ring-2 focus:ring-orange-500"
        >
            Register
        </button>

        <a
            href="{{ route("login-page") }}"
            class="text-sm text-gray-400 hover:text-gray-300"
        >
            Already have an account? Log in
        </a>
    </div>
</form>
