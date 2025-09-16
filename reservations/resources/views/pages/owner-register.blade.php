<x-layouts.app>
    <x-slot:header>
        <div class="flex justify-between items-center w-full">
            <span
                class="flex items-center gap-2 text-xl font-bold text-stone-100"
            >
                Find&Dine
            </span>

            <span class="text-sm font-bold text-orange-600">
                <a href="{{ route("welcome") }}"><- return</a>
            </span>
        </div>
    </x-slot>

    <div class="py-10 mx-5">
        <div class="flex flex-col gap-2">
            <span class="text-lg font-bold text-stone-100">
                Register as owner
            </span>
            <span class="text-sm text-stone-500 w-1/2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aspernatur assumenda beatae corporis, culpa, distinctio dolor,
                dolore est inventore itaque maxime molestiae neque omnis
                pariatur quam quasi qui quod repellendus sit!
            </span>
        </div>

        <form class="mt-8 max-w-5xl space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Restaurant name --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-300">
                        Restaurant name
                    </label>
                    <input
                        type="text"
                        placeholder="Your restaurant"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Contact name --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        Contact name
                    </label>
                    <input
                        type="text"
                        placeholder="John Doe"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Email --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        Email
                    </label>
                    <input
                        type="email"
                        placeholder="you@example.com"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Phone --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        Phone
                    </label>
                    <input
                        type="tel"
                        placeholder="+1 234 567 890"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Address --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-300">
                        Address
                    </label>
                    <input
                        type="text"
                        placeholder="123 Main Street"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        City
                    </label>
                    <input
                        type="text"
                        placeholder="City"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        Postcode
                    </label>
                    <input
                        type="text"
                        placeholder="12345"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Cuisine --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        Cuisine
                    </label>
                    <select
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    >
                        <option class="bg-neutral-900">Select a cuisine</option>
                        <option class="bg-neutral-900">Italian</option>
                        <option class="bg-neutral-900">Mexican</option>
                        <option class="bg-neutral-900">Indian</option>
                        <option class="bg-neutral-900">Other</option>
                    </select>
                </div>

                {{-- Capacity --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        Seating capacity
                    </label>
                    <input
                        type="number"
                        min="1"
                        placeholder="50"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Website --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-300">
                        Website (optional)
                    </label>
                    <input
                        type="url"
                        placeholder="https://yourrestaurant.com"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Password --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        Password
                    </label>
                    <input
                        type="password"
                        placeholder="••••••••"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Confirm password --}}
                <div>
                    <label class="block text-sm font-medium text-gray-300">
                        Confirm password
                    </label>
                    <input
                        type="password"
                        placeholder="••••••••"
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    />
                </div>

                {{-- Notes --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-300">
                        Notes (optional)
                    </label>
                    <textarea
                        rows="4"
                        placeholder="Additional info..."
                        class="mt-2 w-full rounded-lg bg-neutral-900/70 border border-neutral-700 text-white placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 px-4 py-2.5"
                    ></textarea>
                </div>

                {{-- Terms --}}
                <div class="md:col-span-2 flex items-start gap-3">
                    <input
                        type="checkbox"
                        class="mt-1 h-5 w-5 rounded-md bg-neutral-900 border-neutral-700 text-orange-500 focus:ring-orange-500"
                    />
                    <label class="text-sm text-gray-300">
                        I agree to the
                        <a
                            href="#"
                            class="text-orange-400 hover:text-orange-300 underline"
                        >
                            Terms
                        </a>
                        and
                        <a
                            href="#"
                            class="text-orange-400 hover:text-orange-300 underline"
                        >
                            Privacy Policy
                        </a>
                        .
                    </label>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-lg bg-orange-600 hover:bg-orange-500 px-5 py-2.5 font-semibold text-white focus:outline-none focus:ring-2 focus:ring-orange-500"
                >
                    Create owner account
                </button>

                <a href="#" class="text-sm text-gray-400 hover:text-gray-300">
                    Already have an account? Log in
                </a>
            </div>
        </form>
    </div>
</x-layouts.app>
