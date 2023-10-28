<x-app-layout>
    <main class="mt-10 dark:text-gray-50">

        <div class="mb-4 md:mb-0 w-full mx-auto relative ">
            <div class="px-4 pt-10 lg:px-0">
                <h2 class="text-4xl font-semibold  leading-tight">
                    {{ $posts->postTitle }}
                </h2>
                <a href="#" class="py-2 text-green-700 inline-flex items-center justify-center mb-2">
                    FFeee eeeeeee
                </a>
            </div>

        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <div class="px-4 lg:px-0 mt-12  text-lg leading-relaxed w-full lg:w-3/4">
                <img class="w-full mb-4 object-cover lg:rounded" src="" style="height: 28em;" />

                <div class="py-4" id="desBox">
                   {!! $posts->postDes !!}
                </div>
            </div>

            {{-- Author Box --}}
            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                <div class="p-4 border-t border-b md:border md:rounded">
                    <div class="flex py-2">
                        <img src="https://mir-s3-cdn-cf.behance.net/user/276/f21bb4488984503.6011267a9f7cc.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold  text-sm"> Pranto Biswas </p>
                            <p class="font-semibold  text-xs"> Admin </p>
                        </div>
                    </div>
                    <p class=" py-3">
                      Pranto writes about technology Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it.
                    </p>
                    <button
                        class="px-2 py-1 dark:text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                        Follow
                        <i class='bx bx-user-plus ml-2'></i>
                    </button>
                </div>
            </div>


        </div>
    </main>
</x-app-layout>
