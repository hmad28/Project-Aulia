<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <!-- Diskon start -->
    <section id="diskon" class=" py-1 px-4 bg-red-500 text-sm font-bold text-slate-100">
        <div class="container">
            <div class="flex">
                <div class="w-1/2">081234567890</div>
                <div class="w-1/2">Diskon 50%</div>
            </div>
        </div>
    </section>
    <!-- Diskon end -->

    <!-- Header Start -->
    <?php include "../includes/header.php" ?>
    <!-- Header End -->

    <!-- Slider Start -->
    <section class="relative overflow-hidden h-screen">
        <div class="slider">
            <div class=" slide bg-cover bg-right lg:bg-center h-screen" style="background-image: url('../images/banner-1.png');">
                <div class="bg-black/20 lg:bg-transparent h-full flex items-center justify-center">
                    <div class="relative w-full text-center">
                        <h3 class="md:hidden block text-4xl font-bold text-slate-100">Shofi Frozen</h3>
                        <p class="md:hidden block text-base text-slate-200">Menjual Aneka Frozen Food</p>
                        <a href="#home" class="bg-violet-600 border-violet-500 border-1 transition duration-500 ease-in-out hover:border-0 hover:bg-violet-500 hover:shadow-lg text-white py-4 px-8 left-25 top-50 lg:py-7 lg:px-28 rounded-full text-xl absolute z-[999] lg:top-32 font-bold lg:left-17 ">Beli Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="slide bg-cover bg-right lg:bg-center h-screen" style="background-image: url('../images//banner-2.png');">
                <div class="bg-black/20 lg:bg-transparent h-full flex items-center justify-center">
                    <div class="relative w-full text-center">
                        <h3 class="md:hidden block text-4xl font-bold text-slate-100">Shofi Frozen</h3>
                        <p class="md:hidden block text-base text-slate-200">Menjual Aneka Frozen Food</p>
                        <a href="#home" class="bg-amber-400 border-amber-300 border-1 transition duration-500 ease-in-out hover:border-0 hover:bg-amber-300 hover:shadow-lg text-white py-4 px-8 left-25 top-50 lg:py-7 lg:px-28 rounded-full text-xl absolute z-[999] lg:top-32 font-bold lg:left-17 ">Beli Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="slide bg-cover bg-right lg:bg-center h-screen" style="background-image: url('../images/banner-3.png');">
                <div class="bg-black/20 lg:bg-transparent h-full flex items-center justify-center">
                    <div class="relative w-full text-center">
                        <h3 class="md:hidden block text-4xl font-bold text-slate-100">Shofi Frozen</h3>
                        <p class="md:hidden block text-base text-slate-200">Menjual Aneka Frozen Food</p>
                        <a href="#home" class="bg-red-600 border-red-500 border-1 transition duration-500 ease-in-out hover:border-0 hover:bg-red-500 hover:shadow-lg text-white py-4 px-8 left-25 top-50 lg:py-7 lg:px-28 rounded-full text-xl absolute z-[999] lg:top-32 font-bold lg:left-17 ">Beli Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="slide bg-cover bg-right lg:bg-center h-screen" style="background-image: url('../images/banner-4.png');">
                <div class="bg-black/20 lg:bg-transparent h-full flex items-center justify-center">
                    <div class="relative w-full text-center">
                        <h3 class="md:hidden block text-4xl font-bold text-slate-100">Shofi Frozen</h3>
                        <p class="md:hidden block text-base text-slate-200">Menjual Aneka Frozen Food</p>
                        <a href="#home" class="bg-emerald-500 border-emerald-400 border-1 transition duration-500 ease-in-out hover:border-0 hover:bg-emerald-400 hover:shadow-lg text-white py-4 px-8 left-25 top-50 lg:py-7 lg:px-28 rounded-full text-xl absolute z-[999] lg:top-32 font-bold lg:left-17">Beli Sekarang!</a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="absolute inset-0 flex justify-between items-center px-6">
            <button id="prev" class="text-slate-100 text-2xl p-2 rounded shadow-md hover:bg-gray-200 hover:text-black">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button id="next" class="text-slate-100 text-2xl p-2 rounded shadow-md hover:bg-gray-200 hover:text-black">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <button class="indicator w-3 h-3 bg-white rounded-full"></button>
            <button class="indicator w-3 h-3 bg-gray-300 rounded-full"></button>
            <button class="indicator w-3 h-3 bg-gray-300 rounded-full"></button>
            <button class="indicator w-3 h-3 bg-gray-300 rounded-full"></button>
        </div>
    </section>
    <!-- Slider End -->

    <!-- Best Seller Page Start -->
    <section id="home" class="pt-20 pb-16 px-4 sm:px-40">
        <div class="container">
            <div class="w-full px-4 text-center pb-10 relative">
                <span class="bg-yellow-800/70 h-[1px] px-[230px] absolute left-0 top-6"></span>
                <h1 class="text-4xl text-yellow-800/70 font-bold lg:text-5xl">Best Seller</h1>
            </div>
            <div class="flex flex-wrap mb-5">
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex justify-center">
                <button class="py-2 px-5 rounded-4xl bg-amber-100 hover:bg-yellow-800/70 hover:text-amber-100 duration-200">
                    <a href="best-seller.php" class="flex gap-3 items-center">
                        See More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </button>
            </div>
        </div>
    </section>
    <!-- Best Seller Page End -->

    <!-- Our Products Start -->
    <section id="products" class="pt-20 pb-16 px-4 sm:px-40">
        <div class="container">
            <div class="w-full px-4 text-center pb-5 relative">
                <span class="bg-yellow-800/70 h-[1px] px-[200px] absolute left-0 top-6"></span>
                <h1 class="text-4xl text-yellow-800/70 font-bold lg:text-5xl">Our Products</h1>
            </div>
            <div class="w-full flex gap-5 items-center border-y p-2 border-yellow-800/70 mb-5">
                <div class="relative" id="dropdownWrapper">
                    <button id="dropdownButton" class="flex items-center justify-between bg-amber-100 text-yellow-800/70 px-4 py-2 rounded-md hover:bg-amber-100/90 w-48">
                        <span>Pilih Kategori</span>
                        <svg id="iconRight" class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                        <svg id="iconDown" class="w-4 h-4 ml-2 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul id="dropdownMenu" class="absolute hidden bg-amber-100 border mt-4 rounded-md border-yellow-800/70 shadow-md w-48 z-10">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 border-b border-yellow-800/70">Teknologi</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 border-b border-yellow-800/70">Pendidikan</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 border-b border-yellow-800/70">Kesehatan</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 border-b border-yellow-800/70">Olahraga</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 border-b border-yellow-800/70">Keuangan</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Keuangan</a></li>
                    </ul>
                </div>
                <div class="w-full flex items-center space-x-4 border-l border-yellow-800/70 px-4 py-2">
                    <div id="carousel" class="flex space-x-3 overflow-hidden w-[900px]"></div>
                    <button id="nextBtn" class="text-yellow-800/70 hover:text-yellow-800/60 bg-amber-100 shadow-md rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex flex-wrap mb-5">
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
                <div class=" w-1/2 lg:w-1/5 px-2">
                    <div class="overflow-hidden p-4  shadow-lg rounded-lg mb-4 bg-amber-100">
                        <img src="../images/insertpichere.jpg" alt="" class="mb-4 rounded-lg">
                        <h3 class="text-lg font-sm lg:text-2xl mb-1 truncate">Nama Produk</h3>
                        <p class="font-bold text-sm lg:text-base mb-5">Rp 00.000</p>
                        <div class="w-full flex">
                            <a href="https://wa.me/+6289680719665?text=Shofi Frozen, saya mau beli Nugget Kanzler 450gr!" class="py-2 text-center text-white w-full bg-yellow-800/70 text-sm lg:text-base rounded-lg hover:shadow-lg hover:opacity-90 font-bold ">Beli!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex justify-center">
                <button class="py-2 px-5 rounded-4xl bg-amber-100 hover:bg-yellow-800/70 hover:text-amber-100 duration-200">
                    <a href="best-seller.php" class="flex gap-3 items-center">
                        See More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </button>
            </div>
        </div>
    </section>
    <!-- Our Products End -->

    <!-- About Us Page Start -->
    <section id="about" class="pt-20 pb-16 px-4 sm:px-40 bg-yellow-800/70">
        <div class="container">
            <div class="w-full px-4 text-center pb-10 relative">
                <span class="bg-amber-100 h-[1px] px-[230px] absolute left-0 top-6"></span>
                <h1 class="text-4xl text-amber-100 font-bold lg:text-5xl">About Us</h1>
            </div>
            <div class="w-full flex flex-warp gap-5 px-20 mb-10">
                <div class="w-[60%]">
                    <img src="../images/blog-1.jpg" alt="" class="w-full">
                </div>
                <div class="w-[40.8%]">
                    <img src="../images/hammad-bgRagunan-new.jpeg.jpg" alt="" class="w-full">
                </div>
            </div>
            <div class="w-full mb-10">
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia pariatur unde omnis distinctio. Quisquam temporibus eligendi qui vitae. Odio, enim vel! Consequuntur nam praesentium id, voluptas harum error hic laborum laboriosam? Suscipit, voluptatem? Sed delectus, corporis atque quidem unde perferendis laborum necessitatibus nisi reiciendis qui consequuntur, iusto placeat quod enim.</p>
            </div>
            <div class="w-full flex justify-center">
                <button class="py-2 px-5 rounded-4xl bg-amber-100 hover:bg-yellow-800/70 hover:text-amber-100 duration-200">
                    <a href="best-seller.php" class="flex gap-3 items-center">
                        See More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </button>
            </div>
        </div>
    </section>
    <!-- About Us Page End -->

    <!-- Testimonials Page Start -->
    <section id="testimonials" class="pt-20 pb-16 px-4 sm:px-40">
        <div class="container">
            <div class="w-full px-4 text-center pb-25 relative">
                <span class="bg-yellow-800/70 h-[1px] px-[200px] absolute left-0 top-6"></span>
                <h1 class="text-4xl text-yellow-800/70 font-bold lg:text-5xl">Testimonials</h1>
            </div>
            <div class="w-full flex px-5 gap-5">
                <div class="w-1/5 bg-amber-100 relative rounded-2xl pt-18 shadow-lg hover:transform hover:transition hover:-translate-y-2 hover:duration-200 hover:ease-in-out pb-5 px-4">
                    <div class="w-30 absolute -top-15 left-1/2 -translate-x-1/2 rounded-full border-10 border-amber-100">
                        <img src="../images/Hammad-min.png" alt="" class="w-full rounded-full">
                    </div>
                    <div class="w-full flex justify-center text-yellow-400 text-2xl mb-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="w-full font-bold text-2xl text-center mb-3">Hammad</div>
                    <p class="w-full text-sm px-3 text-center">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, modi dolor vel animi cumque facilis.
                    </p>
                </div>
                <div class="w-1/5 bg-amber-100 relative rounded-2xl pt-18 shadow-lg hover:transform hover:transition hover:-translate-y-2 hover:duration-200 hover:ease-in-out pb-5 px-4">
                    <div class="w-30 absolute -top-15 left-1/2 -translate-x-1/2 rounded-full border-10 border-amber-100">
                        <img src="../images/Hammad-min.png" alt="" class="w-full rounded-full">
                    </div>
                    <div class="w-full flex justify-center text-yellow-400 text-2xl mb-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="w-full font-bold text-2xl text-center mb-3">Hammad</div>
                    <p class="w-full text-sm px-3 text-center">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, modi dolor vel animi cumque facilis.
                    </p>
                </div>
                <div class="w-1/5 bg-amber-100 relative rounded-2xl pt-18 shadow-lg hover:transform hover:transition hover:-translate-y-2 hover:duration-200 hover:ease-in-out pb-5 px-4">
                    <div class="w-30 absolute -top-15 left-1/2 -translate-x-1/2 rounded-full border-10 border-amber-100">
                        <img src="../images/Hammad-min.png" alt="" class="w-full rounded-full">
                    </div>
                    <div class="w-full flex justify-center text-yellow-400 text-2xl mb-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="w-full font-bold text-2xl text-center mb-3">Hammad</div>
                    <p class="w-full text-sm px-3 text-center">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, modi dolor vel animi cumque facilis.
                    </p>
                </div>
                <div class="w-1/5 bg-amber-100 relative rounded-2xl pt-18 shadow-lg hover:transform hover:transition hover:-translate-y-2 hover:duration-200 hover:ease-in-out pb-5 px-4">
                    <div class="w-30 absolute -top-15 left-1/2 -translate-x-1/2 rounded-full border-10 border-amber-100">
                        <img src="../images/Hammad-min.png" alt="" class="w-full rounded-full">
                    </div>
                    <div class="w-full flex justify-center text-yellow-400 text-2xl mb-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="w-full font-bold text-2xl text-center mb-3">Hammad</div>
                    <p class="w-full text-sm px-3 text-center">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, modi dolor vel animi cumque facilis.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Page End -->

    <!-- FAQ Page Start -->
    <section id="faq" class="pt-20 pb-16 px-4 sm:px-40">
        <div class="container">
            <div class="w-full px-4 text-center pb-10 relative">
                <span class="bg-yellow-800/70 h-[1px] px-[130px] absolute left-0 top-6"></span>
                <h1 class="text-4xl text-yellow-800/70 font-bold lg:text-5xl">Frequently Asked Question</h1>
            </div>
            <div class="w-full">
                <div class="w-full">
                    <details class="flex flex-col items-end pt-5 pb-15 relative">
                        <summary class="py-3 px-5 bg-amber-100 rounded-4xl">Apakah roti di toko ini dibuat setiap hari?</summary>
                        <p class="absolute left-0 py-3 px-5 bg-yellow-800/70 rounded-4xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, officia?</p>
                    </details>
                </div>
                <div class="w-full">
                    <details class="flex flex-col items-end pt-5 pb-15 relative">
                        <summary class="py-3 px-5 bg-amber-100 rounded-4xl">Apakah bisa pre-order atau pesan duluan?</summary>
                        <p class="absolute left-0 py-3 px-5 bg-yellow-800/70 rounded-4xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, officia?</p>
                    </details>
                </div>
                <div class="w-full">
                    <details class="flex flex-col items-end pt-5 pb-15 relative">
                        <summary class="py-3 px-5 bg-amber-100 rounded-4xl">Apakah melayani pesanan untuk acara (sekolah, arisan, kantor)?</summary>
                        <p class="absolute left-0 py-3 px-5 bg-yellow-800/70 rounded-4xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, officia?</p>
                    </details>
                </div>
                <div class="w-full">
                    <details class="flex flex-col items-end pt-5 pb-15 relative">
                        <summary class="py-3 px-5 bg-amber-100 rounded-4xl">Bagaimana cara pembayaran?</summary>
                        <p class="absolute left-0 py-3 px-5 bg-yellow-800/70 rounded-4xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, officia?</p>
                    </details>
                </div>
                <div class="w-full">
                    <details class="flex flex-col items-end pt-5 pb-15 relative">
                        <summary class="py-3 px-5 bg-amber-100 rounded-4xl">Jam berapa toko buka?</summary>
                        <p class="absolute left-0 py-3 px-5 bg-yellow-800/70 rounded-4xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, officia?</p>
                    </details>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Page End -->

    <!-- Contact & Location Page Start -->
    <section id="testimonials" class="pt-20 pb-16 px-4 sm:px-40">
        <div class="container">
            <div class="w-full px-4 text-center pb-5 relative">
                <span class="bg-yellow-800/70 h-[1px] px-[170px] absolute left-0 top-6"></span>
                <h1 class="text-4xl text-yellow-800/70 font-bold lg:text-5xl">Contact & Location</h1>
            </div>

        </div>
    </section>
    <!-- Contact & Location Page End -->

    <!-- Footer Start -->
    <?php include "../includes/footer.php" ?>
    <!-- Footer End -->

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $(function(){
            $('[data-fancybox="gallery"]').fancybox();
        });

        const slides = document.querySelectorAll('.slide');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const indicators = document.querySelectorAll('.indicator');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('hidden', i !== index);
            });
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('bg-white', i === index);
                indicator.classList.toggle('bg-gray-300', i !== index);
            });
        }

        prevButton.addEventListener('click', () => {
            currentSlide = (currentSlide === 0) ? slides.length - 1 : currentSlide - 1;
            showSlide(currentSlide);
        });

        nextButton.addEventListener('click', () => {
            currentSlide = (currentSlide === slides.length - 1) ? 0 : currentSlide + 1;
            showSlide(currentSlide);
        });

        indicators.forEach((indicator, i) => {
            indicator.addEventListener('click', () => {
                currentSlide = i;
                showSlide(currentSlide);
            });
        });

        showSlide(currentSlide);

        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        
    </script>
</body>
</html>