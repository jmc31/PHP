<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Create Todo</h1>
        
        <form action="/todo/store" method="POST">
            @csrf
            <div class="max-w-sm space-y-5">
                <!-- Floating Input for Title -->

                <!-- <div class="mt-10">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-700 italic">{{ $error }}</li>  
                            @endforeach
                        </ul>
                        @endif
                </div> -->
              
                <div class="relative mb-5">
                    <input type="text" name="title" id="title" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                    focus:pt-6
                    focus:pb-2
                    [&:not(:placeholder-shown)]:pt-6
                    [&:not(:placeholder-shown)]:pb-2
                    autofill:pt-6
                    autofill:pb-2" placeholder="Title here" required
                    value="{{ old('title') }}"
                    >
                    <label for="title" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:scale-90
                    peer-focus:translate-x-0.5
                    peer-focus:-translate-y-1.5
                    peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                    peer-[:not(:placeholder-shown)]:scale-90
                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Title</label>
                    
                    @error('title')
                        <p class="text-red-700 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


            </div>
            <div class="max-w-sm space-y-5">
                <!-- Floating Textarea for Description -->
                <div class="relative">
                    <textarea id="description" name="description" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                    focus:pt-6
                    focus:pb-2
                    [&:not(:placeholder-shown)]:pt-6
                    [&:not(:placeholder-shown)]:pb-2
                    autofill:pt-6
                    autofill:pb-2" placeholder="Describe your todo here" required>{{ old('description') }}</textarea>
                    <label for="description" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:text-xs
                    peer-focus:-translate-y-1.5
                    peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                    peer-[:not(:placeholder-shown)]:text-xs
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Description</label>

                    @error('description')
                    <p class="text-red-700 text-sm">
                        {{ $message }}
                    </p>
                @enderror

                </div>
                <!-- Select Dropdown for Completed -->
                <p class="text-sm">Completed?</p>
                <div class="relative">
                    <select name="completed" id="completed" class="w-full p-4 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>