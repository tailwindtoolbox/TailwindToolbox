<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Night Admin Template: Windy Toolbox</title>
    <meta name="description"
        content="(Formerly Tailwind Toolbox) Tailwind CSS Starter template - Night Mode Admin theme, dashboard, or web application UI!">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,fixed header, admin starter template, admin template, admin console, example, night mode, dark mode">
    <?php include '../includes/head-templates.php'; ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
        integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

    <style>
        .bg-black-alt {
            background: #191919;
        }

        .text-black-alt {
            color: #191919;
        }

        .border-black-alt {
            border-color: #191919;
        }
    </style>

</head>

<body class="font-sans leading-normal tracking-normal bg-black-alt">

    <nav id="header" class="fixed top-0 z-10 w-full bg-gray-900 shadow">


        <div class="container flex flex-wrap items-center w-full pt-3 pb-3 mx-auto mt-0 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-base font-bold text-gray-100 no-underline xl:text-xl hover:no-underline" href="#">
                    <i class="pr-3 text-blue-400 fas fa-moon"></i> Admin Dark Mode
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="relative flex inline-block float-right">

                    <div class="relative text-sm text-gray-100">
                        <button id="userButton" class="flex items-center mr-3 focus:outline-none">
                            <img class="w-8 h-8 mr-4 rounded-full" src="http://i.pravatar.cc/300" alt="Avatar of User">
                            <span class="hidden text-gray-100 md:inline-block">Hi, User</span>
                            <svg class="h-2 pl-2 text-gray-100 fill-current" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"
                                xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path
                                        d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu"
                            class="absolute top-0 right-0 z-30 invisible min-w-full mt-2 mt-12 overflow-auto bg-gray-900 rounded shadow-md">
                            <ul class="list-reset">
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-100 no-underline hover:bg-gray-800 hover:no-underline">My
                                        account</a></li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-100 no-underline hover:bg-gray-800 hover:no-underline">Notifications</a>
                                </li>
                                <li>
                                    <hr class="mx-2 border-t border-gray-400">
                                </li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-100 no-underline hover:bg-gray-800 hover:no-underline">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="block pr-4 lg:hidden">
                        <button id="nav-toggle"
                            class="flex items-center px-3 py-2 text-gray-500 border border-gray-600 rounded appearance-none hover:text-gray-100 hover:border-teal-500 focus:outline-none">
                            <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


            <div class="z-20 flex-grow hidden w-full mt-2 bg-gray-900 lg:flex lg:items-center lg:w-auto lg:block lg:mt-0"
                id="nav-content">
                <ul class="items-center flex-1 px-4 list-reset lg:flex md:px-0">
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block py-1 pl-1 text-blue-400 no-underline align-middle border-b-2 border-blue-400 md:py-3 hover:text-gray-100 hover:border-blue-400">
                            <i class="mr-3 text-blue-400 fas fa-home fa-fw"></i><span
                                class="pb-1 text-sm md:pb-0">Home</span>
                        </a>
                    </li>
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block py-1 pl-1 text-gray-500 no-underline align-middle border-b-2 border-gray-900 md:py-3 hover:text-gray-100 hover:border-pink-400">
                            <i class="mr-3 fas fa-tasks fa-fw"></i><span class="pb-1 text-sm md:pb-0">Tasks</span>
                        </a>
                    </li>
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block py-1 pl-1 text-gray-500 no-underline align-middle border-b-2 border-gray-900 md:py-3 hover:text-gray-100 hover:border-purple-400">
                            <i class="mr-3 fa fa-envelope fa-fw"></i><span class="pb-1 text-sm md:pb-0">Messages</span>
                        </a>
                    </li>
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block py-1 pl-1 text-gray-500 no-underline align-middle border-b-2 border-gray-900 md:py-3 hover:text-gray-100 hover:border-green-400">
                            <i class="mr-3 fas fa-chart-area fa-fw"></i><span
                                class="pb-1 text-sm md:pb-0">Analytics</span>
                        </a>
                    </li>
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block py-1 pl-1 text-gray-500 no-underline align-middle border-b-2 border-gray-900 md:py-3 hover:text-gray-100 hover:border-red-400">
                            <i class="mr-3 fa fa-wallet fa-fw"></i><span class="pb-1 text-sm md:pb-0">Payments</span>
                        </a>
                    </li>
                </ul>

                <div class="relative pl-4 pr-4 pull-right md:pr-0">
                    <input type="search" placeholder="Search"
                        class="w-full px-2 py-1 pl-10 text-sm leading-normal text-gray-400 transition bg-gray-900 border border-gray-800 rounded appearance-none focus:outline-none focus:border-gray-600">
                    <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                        <svg class="w-4 h-4 text-gray-500 pointer-events-none fill-current"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full pt-20 mx-auto">

        <div class="w-full px-4 mb-16 leading-normal text-gray-800 md:px-0 md:mt-8">

            <!--Console Content-->

            <div class="flex flex-wrap">
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-green-600 rounded"><i
                                        class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-400 uppercase">Total Revenue</h5>
                                <h3 class="text-3xl font-bold text-gray-600">$3249 <span class="text-green-500"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-pink-600 rounded"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-400 uppercase">Total Users</h5>
                                <h3 class="text-3xl font-bold text-gray-600">249 <span class="text-pink-500"><i
                                            class="fas fa-exchange-alt"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-yellow-600 rounded"><i
                                        class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-400 uppercase">New Users</h5>
                                <h3 class="text-3xl font-bold text-gray-600">2 <span class="text-yellow-600"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-blue-600 rounded"><i
                                        class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-400 uppercase">Server Uptime</h5>
                                <h3 class="text-3xl font-bold text-gray-600">152 days</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-indigo-600 rounded"><i
                                        class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-400 uppercase">To Do List</h5>
                                <h3 class="text-3xl font-bold text-gray-600">7 tasks</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="p-2 bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-3 bg-red-600 rounded"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold text-gray-400 uppercase">Issues</h5>
                                <h3 class="text-3xl font-bold text-gray-600">3 <span class="text-red-500"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>

            <!--Divider-->
            <hr class="mx-4 my-8 border-b-2 border-gray-600">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full p-3 md:w-1/2">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold text-gray-600 uppercase">Graph</h5>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-7"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["January", "February", "March", "April"],
                                        "datasets": [{
                                            "label": "Page Impressions",
                                            "data": [10, 20, 30, 40],
                                            "borderColor": "rgb(255, 99, 132)",
                                            "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                        }, {
                                            "label": "Adsense Clicks",
                                            "data": [5, 15, 10, 30],
                                            "type": "line",
                                            "fill": false,
                                            "borderColor": "rgb(54, 162, 235)"
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold text-gray-600 uppercase">Graph</h5>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-0"), {
                                    "type": "line",
                                    "data": {
                                        "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                        "datasets": [{
                                            "label": "Views",
                                            "data": [65, 59, 80, 81, 56, 55, 40],
                                            "fill": false,
                                            "borderColor": "rgb(75, 192, 192)",
                                            "lineTension": 0.1
                                        }]
                                    },
                                    "options": {}
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold text-gray-600 uppercase">Graph</h5>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-1"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                        "datasets": [{
                                            "label": "Likes",
                                            "data": [65, 59, 80, 81, 56, 55, 40],
                                            "fill": false,
                                            "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                            "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                            "borderWidth": 1
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold text-gray-600 uppercase">Graph</h5>
                        </div>
                        <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined"
                                height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["P1", "P2", "P3"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": [300, 50, 100],
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                        }]
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Template Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold text-gray-600 uppercase">Template</h5>
                        </div>
                        <div class="p-5">

                        </div>
                    </div>
                    <!--/Template Card-->
                </div>

                <div class="w-full p-3">
                    <!--Table Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="p-3 border-b border-gray-800">
                            <h5 class="font-bold text-gray-600 uppercase">Table</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-gray-600">Name</th>
                                        <th class="text-left text-gray-600">Side</th>
                                        <th class="text-left text-gray-600">Role</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Obi Wan Kenobi</td>
                                        <td>Light</td>
                                        <td>Jedi</td>
                                    </tr>
                                    <tr>
                                        <td>Greedo</td>
                                        <td>South</td>
                                        <td>Scumbag</td>
                                    </tr>
                                    <tr>
                                        <td>Darth Vader</td>
                                        <td>Dark</td>
                                        <td>Sith</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="py-2"><a href="#" class="text-white">See More issues...</a></p>

                        </div>
                    </div>
                    <!--/table Card-->
                </div>


            </div>

            <!--/ Console Content-->

        </div>


    </div>
    <!--/container-->

    <footer class="bg-gray-900 border-t border-gray-400 shadow">
        <div class="container flex max-w-md py-8 mx-auto">

            <div class="flex flex-wrap w-full mx-auto">
                <div class="flex w-full md:w-1/2 ">
                    <div class="px-8">
                        <h3 class="font-bold text-gray-100">About</h3>
                        <p class="py-4 text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus
                            commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                        </p>
                    </div>
                </div>

                <div class="flex w-full md:w-1/2">
                    <div class="px-8">
                        <h3 class="font-bold text-gray-100">Social</h3>
                        <ul class="items-center pt-3 text-sm list-reset">
                            <li>
                                <a class="inline-block py-1 text-gray-600 no-underline hover:text-gray-100 hover:text-underline"
                                    href="#">Add social link</a>
                            </li>
                            <li>
                                <a class="inline-block py-1 text-gray-600 no-underline hover:text-gray-100 hover:text-underline"
                                    href="#">Add social link</a>
                            </li>
                            <li>
                                <a class="inline-block py-1 text-gray-600 no-underline hover:text-gray-100 hover:text-underline"
                                    href="#">Add social link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </footer>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>

</body>

</html>