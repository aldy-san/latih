<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>./assets/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script>
        src = "https://code.jquery.com/jquery-3.5.1.js"
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="icon" href="<?= base_url() ?>./assets/src/mini-logo.png">
    <title>Homepage | LatihID</title>
</head>
<header class="bg-white sticky top-0 flex justify-center shadow-md z-50">
    <nav class="flex w-full lg:w-8/12 text-gray-500 text-md">
        <a href="">
            <img src="<?= base_url() ?>./assets/src/logo.png" class="p-4 mr-3" alt="" width="160">
        </a>
        <button class="block lg:hidden ml-auto mr-4 focus:outline-none" onclick="toggleMenu('menu-nav')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" />
            </svg>
        </button>
        <div class="origin-top-right lg:origin-center absolute lg:relative right-0 top-16 lg:top-0 bg-white hidden lg:flex flex-col lg:flex-row w-full text-gray-500 text-md py-12 lg:py-0" id="menu-nav">
            <ul class="flex flex-col lg:flex-row items-center lg:mr-auto space-x-0 lg:space-x-6 space-y-4 lg:space-y-0">
                <li class="relative flex items-center group cursor-pointer" id="dropdpown-program">
                    <button class="hover:text-black focus:outline-none flex items-center space-x-2" onclick="toggleMenu('menu-program')">
                        <span>Program</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24">
                            <path d="M12 21l-12-18h24z" />
                        </svg>
                    </button>

                    <ul class="hidden bg-white px-4 py-2 origin-top-right absolute right-0 top-6 mt-2 w-36 text space-y-2 border-2 border-gray-200 rounded-md" id="menu-program">
                        <li><a href="" class="hover:underline hover:text-black">LatihID Modul</a></li>
                        <li><a href="" class="hover:underline hover:text-black">LatihID Talks</a></li>
                        <li><a href="" class="hover:underline hover:text-black">LatihID PETA</a></li>
                        <li><a href="" class="hover:underline hover:text-black">LatihID MAJU</a></li>
                    </ul>
                </li>
                <li>
                    <span class="hover:text-black cursor-pointer">Artikel</span>
                </li>
                <li>
                    <span class="hover:text-black cursor-pointer">Tentang Kami</span>
                </li>
                <li>
                    <span class="hover:text-black cursor-pointer">Ayo Kolaborasi</span>
                </li>
                <li class="relative flex items-center group cursor-pointer" id="dropdpown-bantuan">
                    <button class="hover:text-black focus:outline-none flex items-center space-x-2" onclick="toggleMenu('menu-bantuan')">
                        <span>Bantuan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24">
                            <path d="M12 21l-12-18h24z" />
                        </svg>
                    </button>
                    <ul class="hidden bg-white px-4 py-2 origin-top-right absolute right-0 top-6 mt-2 w-36 text space-y-2 border-2 border-gray-200 rounded-md" id="menu-bantuan">
                        <li><a href="" class="hover:underline hover:text-black">FAQ</a></li>
                        <li><a href="" class="hover:underline hover:text-black">Kontak Kami</a></li>
                    </ul>
                </li>
            </ul>
            <div class="flex flex-col lg:flex-row items-center mt-1 space-y-1 space-x-0 lg:space-x-3">
                <a href="" class=" hover:underline hover:text-black px-4 py-2">Masuk</a>
                <a href="" class="text-white bg-orange 0 px-5 py-1 rounded-full hover:underline w-1/4 lg:w-full text-center hover:bg-yellow-600">Daftar</a>
            </div>
        </div>
    </nav>
</header>