<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- DisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    {{-- DisyUI --}}

    <!-- Add these links to your HTML file -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <title>Document</title>
</head>


<body data-theme="cupcake">
    {{-- NAVBAR --}}
   @include('layout.navbar')
    {{-- NAVBAR --}}

    <div class="bg-gray-400 w-full h-[20em]">

    </div>
    <div class="px-4 pb-6">

        {{-- CUstomer Says --}}
        <div>
            <h1 class="text-[#85581F] text-center py-6 font-bold text-3xl">What Our Customer Says?</h1>
            <div class="px-6 flex gap-4 justify-center">
                <div
                    class="w-[20%] flex flex-col justify-center gap-3 border-2 rounded-xl border-gray-400 items-center py-4 shadow-xl">
                    <h1 class="font-extrabold text-6xl text-red-600">"</h1>
                    <p class="text-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
                        itaque iusto quas maiores atque
                        necessitatibus tempora repellat voluptas nisi ex!
                    </p>
                    <span class="w-7 bg-gray-400 h-1"></span>
                    <div class="bg-gray-400 h-10 w-10 rounded-full"></div>
                    <p class="text-lg">Abi</p>
                </div>
                <div
                    class="w-[20%] flex flex-col justify-center gap-3 border-2 rounded-xl border-gray-400 items-center py-4 shadow-xl">
                    <h1 class="font-extrabold text-6xl text-red-600">"</h1>
                    <p class="text-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
                        itaque iusto quas maiores atque
                        necessitatibus tempora repellat voluptas nisi ex!
                    </p>
                    <span class="w-7 bg-gray-400 h-1"></span>
                    <div class="bg-gray-400 h-10 w-10 rounded-full"></div>
                    <p class="text-lg">Abi</p>
                </div>
                <div
                    class="w-[20%] flex flex-col justify-center gap-3 border-2 rounded-xl border-gray-400 items-center py-4 shadow-xl">
                    <h1 class="font-extrabold text-6xl text-red-600">"</h1>
                    <p class="text-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
                        itaque iusto quas maiores atque
                        necessitatibus tempora repellat voluptas nisi ex!
                    </p>
                    <span class="w-7 bg-gray-400 h-1"></span>
                    <div class="bg-gray-400 h-10 w-10 rounded-full"></div>
                    <p class="text-lg">Abi</p>
                </div>
            </div>


        </div>





    </div>
    {{-- CUstomer Says --}}

    {{-- OUR MENU --}}

    <div class="flex flex-col justify-center w-full">
        <h1 class="text-[#85581F] text-center py-6 font-bold text-3xl">Our Menu</h1>
        <ul class="mx-auto flex gap-4 font-bold">
            <li><a href="">Nasi Kotak</a></li>
            <li><a href="">Snack Box</a></li>
            <li><a href="">Coffee Break</a></li>
            <li><a href="">Lainnya</a></li>
        </ul>
        <div class="w-full flex flex-wrap gap-3 mt-3 justify-center mb-8">
            @for ($i = 0; $i < 8; $i++)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5">
                    <div class="card card-compact w-full bg-base-100 shadow-xl">
                        <figure><img class="object-cover" src={{ asset('/img/Menu_makanan.png') }} alt="Shoes" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">Nasi Kotak </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="card-actions justify-end">
                                <button class="btn text-white bg-[#764507]">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <h1 class="font-extrabold text-center text-lg-center"><a href="">See All Menu</a></h1>
    </div>

    {{-- OUR MENU --}}

    {{-- FOOTER --}}


    {{-- FOOTER --}}
    </div>
    <div class="w-full h-[40vh] bg-[#EDDBC7] flex justify-between py-6 px-[10em]">
        <div class="w-1/2">
            <img src={{ asset('/img/Logo.png') }} alt="">
            <p class="text-[#61677A] mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. </p>

            <p class="text-[#61677A] mt-6">© 2023 Angelica Cafe | All rights reserved</p>
        </div>
        <div>
            <ul class="flex gap-3">
                <li><a href="" class="font-bold text-xl text-[#85581F]">Home</a></li>
                <li><a href="" class="font-bold text-xl text-[#85581F]">Menu</a></li>
                <li><a href="" class="font-bold text-xl text-[#85581F]">About Us</a></li>
                <li><a href="" class="font-bold text-xl text-[#85581F]">Contact</a></li>
            </ul>
        </div>
    </div>




</body>

</html>
