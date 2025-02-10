<div class="grid gap-6 lg:grid-cols-1 lg:gap-8">

    <div
        class=" items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
    >
        <div class="flex justify-end">
            <a href="{{ url()->previous() }}" wire:navigate
               class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                    back
                </span>
            </a>
        </div>


        <div class="pt-3 sm:pt-5">
            <h2 class="text-3xl font-semibold text-black dark:text-white">{{$product->name}}</h2>

            <p class="mt-4 text-sm/relaxed">
            <div
                 class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row   hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg md:h-auto md:w-96 md:rounded-none md:rounded-s-lg"
                     src="{{'/storage/product/'.$product->id.'/1.jpg'}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{$product->description}}
                    </h5>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">€ {{$product->cost}}</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                    </div>
                </div>
            </div>
            </p>
        </div>

        <div class="mt-12 flex justify-between">
            <div>
                <h2 class="text-white text-2xl">Category: {{$product->subcategory->category->name}}</h2>
            </div>
            <div>
                <h2 class="text-white text-2xl">Subcategory: {{$product->subcategory->name}}</h2>
            </div>
        </div>

        <div class="mt-4">
            <h2 class="text-white text-2xl">
                Tags:
                @foreach($product->tags as $tag)
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">
                        {{$tag->name}}
                    </span>
                @endforeach
            </h2>
        </div>

    </div>
</div>


