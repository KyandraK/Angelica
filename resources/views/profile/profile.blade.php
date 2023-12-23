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

    <title>Document</title>
</head>

<style>
    .gambar {
        /* background-image: url({{ url('/img/MenuBackground.png') }}); */
        background-size: cover;
    }
</style>

<body data-theme="cupcake">
    {{-- NAVBAR --}}
    @include('layout.navbar')
    {{-- NAVBAR --}}

    {{-- OUR MENU --}}
    <div class="h-full pt-[7em]">
        <div class="flex flex-col border-2 rounded-xl px-6 mx-32 py-4 mb-6">
            <div class="flex gap-4">
                <a href="/profile/profile">
                    <h1 class="font-semibold text-xl underline underline-offset-8">Personal Profile</h1>
                </a>
                <a href="/profile/address">
                    <h1 class="font-semibold text-xl">Address List</h1>
                </a>
                <a href="/profile/transaction">
                    <h1 class="font-semibold text-xl">Transaction List</h1>
                </a>
            </div>
            <div class="divider"></div>

            {{-- CONTENT --}}
            <div class="flex gap-3">
                <div class="w-[70%]">
                    <h1 class="text-3xl font-bold">Change User Information Here</h1>
                    <form action="post" class="flex flex-col gap-4  rounded-xl p-4 h-full">
                        <div class="flex gap-4 w-full mb-3">
                            <input type="text" placeholder="First Name"
                                class="border-2 h-10 p-3 rounded-lg w-full" />
                            <input type="text" placeholder="Last Name" class="border-2 h-10 p-3 rounded-lg w-full" />
                        </div>
                        <div class="flex gap-4 mb-3">
                            <input type="text" placeholder="Email" class="border-2 h-10 p-3 rounded-lg w-full" />
                            <input type="text" placeholder="Phone" class="border-2 h-10 p-3 rounded-lg w-full" />
                        </div>
                        <input type="password" placeholder="Password" class="border-2 h-10 p-3 rounded-lg w-full" />
                        <input type="password" placeholder="Confirm Password"
                            class="border-2 h-10 p-3 rounded-lg w-full" />
                        <button class="w-full border-2 text-lg text-gray-400 font-bold">Update Information</button>
                    </form>
                </div>
                <div class="w-[20%] h-full flex">
                    <div class="border-2 w-full h-full py-4 rounded-xl flex flex-col gap-3 justify-center items-center">
                        <img class="h-32" src={{ asset('/img/profilepicture.png') }} alt="">
                        <button
                            class="border-2 px-6 py-2 rounded-xl font-bold text-xl text-gray-400 bg-transparent">Change</button>
                        <p class="text-xs text-gray-400 mx-6">Picture size: max. 1 MB
                            Picture format: .JPEG, .PNG</p>
                    </div>
                </div>
            </div>
            {{-- CONTENT --}}
        </div>
    </div>
    {{-- FOOTER --}}
    @include('layout.footer');
    {{-- FOOTER --}}
</body>

</html>