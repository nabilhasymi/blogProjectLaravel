<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="h-full px-2 pb-4 bg-gray-800 grid grid-rows-12 gap-4 md:h-screen lg:grid-cols-2">
        <div
            class="relative rounded-xl row-span-4 p-4 flex flex-col bg-bottle bg-cover bg-top md:row-span-6 lg:col-span-1 lg:row-span-12 group overflow-hidden">
            <!-- Content -->
            <h3 class="text-6xl font-semibold max-w-[70%] md:max-w-[50%] z-10 group-hover:text-slate-100">The Simple
                Bottle Water</h3>
            <span class="text-sm text-slate-600 block pt-1 pb-4 z-10 group-hover:text-slate-100">MORE OFFERS</span>
            <button
                class="flex items-center gap-4 bg-white px-4 py-2 mt-auto rounded-lg shadow-lg max-w-fit hover:bg-slate-100 active:bg-slate-200 transition-all z-10">
                <div class="col text-start border-r-2 border-gray-300 pr-4">
                    <span class="block text-xs text-slate-400">shop</span>
                    <a href="#" class=" text-sm font-medium">All Products</a>
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#5f6368">
                        <path
                            d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                    </svg>
                </div>
            </button>

            <!-- Hover Overlay -->
            <div
                class="absolute inset-0 bg-gradient-to-t from-black to-slate-700 opacity-0 group-hover:opacity-80 transition-opacity duration-300">
            </div>
        </div>

        <div
            class="relative rounded-xl row-span-4 p-4 flex flex-col bg-blog md:row-span-3 lg:row-span-6 group overflow-hidden">
            <!-- Content -->
            <h3 class="text-5xl font-semibold text-slate-100 z-10">See our blog</h3>
            <span class="mt-auto w-fit -rotate-45 cursor-pointer z-10">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                    fill="#fff">
                    <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                </svg>
            </span>
            <!-- Hover Overlay -->
            <div
                class="absolute inset-0 bg-gradient-to-t from-black to-slate-700 opacity-0 group-hover:opacity-80 transition-opacity duration-300 ">
            </div>
        </div>

        <div
            class="relative rounded-xl row-span-4 p-4 flex flex-col bg-lime-300 md:row-span-3 lg:row-span-6 group overflow-hidden">
            <!-- Content -->
            <div class="row flex">
                <span class="text-lg max-w-32 md:max-w-none z-10 group-hover:text-slate-100">Have some Questions?</span>
                <span class="ml-auto w-fit -rotate-45 cursor-pointer z-10 group-hover:text-slate-100">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                        fill="#fff">
                        <path
                            d="M120-160v-640l760 320-760 320Zm66.67-102 520.66-218-520.66-220v158.67L428-480l-241.33 60v158Zm0 0v-438 438Z" />
                    </svg>
                </span>
            </div>
            <div class="row mt-auto z-10 group-hover:text-slate-100">
                <h3 class="text-4xl font-semibold">Contact us</h3>
            </div>

            <!-- Hover Overlay -->
            <div
                class="absolute inset-0 bg-gradient-to-t from-black to-slate-700 opacity-0 group-hover:opacity-80 transition-opacity duration-300">
            </div>
        </div>
    </main>
</x-Layout>
