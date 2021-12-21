<x-app-layout>
    <div class="flex space-x-6 filters">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Category One">Category One</option>
                <option value="Category One">Category Two</option>
                <option value="Category One">Category Three</option>
                <option value="Category One">Category Four</option>
            </select>
        </div><!-- end filters -->

        <div class="w-1/3">
            <select name="ohter_filters" id="ohter_filters" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Filter One">Filter One</option>
                <option value="Filter One">Filter Two</option>
                <option value="Filter One">Filter Three</option>
                <option value="Filter One">Filter Four</option>
            </select>
        </div><!-- other filters -->

        <div class="relative w-2/3">


            <input type="search" placeholder="Find an idea"
                class="w-full px-4 py-2 pl-8 bg-white border-none placeholder:text-gray-900 rounded-xl">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div><!-- other filters -->
</x-app-layout>
