<div>

    <form wire:submit="save">
        <div class="grid gap-6 md:grid-cols-4">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                <input wire:model="name" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div>
                <label for="cost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cost</label>
                <input wire:model="cost" type="number" id="cost" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="€" required />
            </div>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select multiple category</label>
                <select id="countries" wire:change="categorySelected" wire:model="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category}}">{{$category->name}}</option>
                    @endforeach
                </select>

                <div class="mt-2">
                    @foreach($categoryList as $item)
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">
                        {{$item->name}}
                    </span>
                    @endforeach
                </div>

            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                <input wire:model="photo" class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            </div>
        </div>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</div>
