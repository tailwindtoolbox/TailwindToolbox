<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Nordic Shop: Windy Toolbox</title>
    <meta name="description" content="(Formerly Tailwind Toolbox) Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">
    <?php include '../includes/head-templates.php'; ?>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">

    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <style>
        .worksans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="text-base leading-normal tracking-normal text-gray-600 bg-white work-sans">

    <!--Nav-->
    <nav id="header" class="top-0 z-30 w-full py-1">
        <div class="container flex flex-wrap items-center justify-between w-full px-6 py-3 mx-auto mt-0">

            <label for="menu-toggle" class="block cursor-pointer md:hidden">
                <svg class="text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="order-3 hidden w-full md:flex md:items-center md:w-auto md:order-1" id="menu">
                <nav>
                    <ul class="items-center justify-between pt-4 text-base text-gray-700 md:flex md:pt-0">
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="#">Shop</a></li>
                        <li><a class="inline-block px-4 py-2 no-underline hover:text-black hover:underline"
                                href="#">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center text-xl font-bold tracking-wide text-gray-800 no-underline hover:no-underline "
                    href="#">
                    <svg class="mr-2 text-gray-800 fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg>
                    NORDICS
                </a>
            </div>

            <div class="flex items-center order-2 md:order-3" id="nav-content">

                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path
                            d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>

                <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                        <circle cx="10.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>

    <div class="container relative mx-auto carousel" style="max-width:1600px;">
        <div class="relative w-full overflow-hidden carousel-inner">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="absolute opacity-0 carousel-item" style="height:50vh;">
                <div class="flex block w-full h-full pt-6 mx-auto bg-right bg-cover md:pt-0 md:items-center"
                    style="background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div
                            class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                            <p class="my-4 text-2xl text-black">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                            <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                href="#">view product</a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-3"
                class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-1 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
            <label for="carousel-2"
                class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-1 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="absolute bg-right bg-cover opacity-0 carousel-item" style="height:50vh;">
                <div class="flex block w-full h-full pt-6 mx-auto bg-right bg-cover md:pt-0 md:items-center"
                    style="background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div
                            class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                            <p class="my-4 text-2xl text-black">Real Bamboo Wall Clock</p>
                            <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                href="#">view product</a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1"
                class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-2 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
            <label for="carousel-3"
                class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-2 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="absolute opacity-0 carousel-item" style="height:50vh;">
                <div class="flex block w-full h-full pt-6 mx-auto bg-bottom bg-cover md:pt-0 md:items-center"
                    style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div
                            class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                            <p class="my-4 text-2xl text-black">Brown and blue hardbound book</p>
                            <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                href="#">view product</a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-2"
                class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-3 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
            <label for="carousel-1"
                class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-3 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>

    <!--	 
Alternatively if you want to just have a single hero
<section class="flex w-full pt-12 mx-auto bg-right bg-cover bg-nordic-gray-light md:pt-0 md:items-center" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">
    <div class="container mx-auto">
        <div class="flex flex-col items-start justify-center w-full px-6 tracking-wide lg:w-1/2">
            <h1 class="my-4 text-2xl text-black">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
            <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black" href="#">products</a>
        </div>
      </div>
</section>
-->

    <section class="py-8 bg-white">

        <div class="container flex flex-wrap items-center pt-4 pb-12 mx-auto">

            <nav id="store" class="top-0 z-30 w-full px-6 py-1">
                <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">

                    <a class="text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline "
                        href="#">
                        Store
                    </a>

                    <div class="flex items-center" id="store-nav-content">

                        <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </a>

                        <a class="inline-block pl-3 no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                            </svg>
                        </a>

                    </div>
                </div>
            </nav>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg"
                        src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Product Name</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg"
                        src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Product Name</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg"
                        src="https://images.unsplash.com/photo-1449247709967-d4461a6a6103?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Product Name</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg"
                        src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Product Name</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg"
                        src="https://images.unsplash.com/photo-1467949576168-6ce8e2df4e13?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Product Name</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg"
                        src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Product Name</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg"
                        src="https://images.unsplash.com/photo-1550837368-6594235de85c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Product Name</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg"
                        src="https://images.unsplash.com/photo-1551431009-a802eeec77b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Product Name</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">£9.99</p>
                </a>
            </div>

        </div>

    </section>

    <section class="py-8 bg-white">

        <div class="container px-6 py-8 mx-auto">

            <a class="mb-8 text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline"
                href="#">
                About
            </a>

            <p class="mt-8 mb-8">This template is inspired by the stunning nordic minamalist design - in particular:
                <br>
                <a class="text-gray-800 underline hover:text-gray-900" href="http://savoy.nordicmade.com/"
                    target="_blank">Savoy Theme</a> created by <a class="text-gray-800 underline hover:text-gray-900"
                    href="https://nordicmade.com/">https://nordicmade.com/</a> and <a
                    class="text-gray-800 underline hover:text-gray-900" href="https://www.metricdesign.no/"
                    target="_blank">https://www.metricdesign.no/</a>
            </p>

            <p class="mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan
                lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis
                mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam
                vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed
                faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum
                quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas
                dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu
                consequat ac.</p>

        </div>

    </section>

    <footer class="container py-8 mx-auto bg-white border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="flex flex-wrap w-full mx-auto">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus
                            commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Social</h3>
                        <ul class="items-center pt-3 list-reset">
                            <li>
                                <a class="inline-block py-1 no-underline hover:text-black hover:underline" href="#">Add
                                    social links</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>