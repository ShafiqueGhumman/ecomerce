<div class="flex">
    <!-- Navigation Menu -->
    <div class="w-1/4 p-4">
        <div class="font-semibold p-6 text-xl ">


            <div class="flex justify-between p-2">
                <h2>Woman’s Fashion</h2>
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#000000" stroke-width="2" strokeh2necap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>


            <div class="flex justify-between p-2">
                <h2>Men Fashion</h2>
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#000000" stroke-width="2" strokeh2necap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>

            <div class="p-2">
                <h2>Electronics</h2>
            </div>

            <div class="p-2">
                <h2>Home & lifestyle</h2>
            </div>

            <div class="p-2">
                <h2>Medicine</h2>
            </div>

            <div class="p-2">
                <h2>Sports & Outdoor</h2>
            </div>

            <div class="p-2">
                <h2>Baby & toys</h2>
            </div>

            <div class="p-2">
                <h2>Groceries & Pets</h2>
            </div>


            <div class="p-2">
                <h2>Health & Beauty</h2>
            </div>

        </div>
    </div>
    <hr>

    <!-- Advertisement -->
    <div class="p-4">

        <div class="w-full mx-auto">

            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span
                            class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                            Slide</span>
                        <img src="{{ asset('assets/images/iphone1.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/images/iphone2.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/images/iphone3.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>

            </div>

            <p class="mt-5">This carousel slider component is part of a larger, open-source library of Tailwind CSS
                components. Learn
                more
                by going to the official <a class="text-blue-600 hover:underline"
                    href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite
                    Documentation</a>.
            </p>
        </div>
    </div>


</div>