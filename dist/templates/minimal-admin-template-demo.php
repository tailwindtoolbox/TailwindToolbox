<!--This template is based on: https://dribbble.com/shots/6531694-Marketing-Dashboard by Gregoire Vella -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Minimal Admin Starter Template : Windy Toolbox</title>
    <meta name="description"
        content="(Formerly Tailwind Toolbox) Tailwind CSS Starter template - Minimal Admin theme, dashboard, or web application UI!">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,fixed header, admin starter template, admin template, admin console, example, minimal, minimalistic">
    <?php include '../includes/head-templates.php'; ?>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

    <style>
        .nunito {
            font-family: 'nunito', font-sans;
        }

        .border-b-1 {
            border-bottom-width: 1px;
        }

        .border-l-1 {
            border-left-width: 1px;
        }

        hover\:border-none:hover {
            border-style: none;
        }

        #sidebar {
            transition: ease-in-out all .3s;
            z-index: 9999;
        }

        #sidebar span {
            opacity: 0;
            position: absolute;
            transition: ease-in-out all .1s;
        }

        #sidebar:hover {
            width: 150px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            /*shadow-2xl*/
        }

        #sidebar:hover span {
            opacity: 1;
        }
    </style>

</head>

<body class="flex h-screen font-sans bg-gray-100">

    <!-- Side bar-->
    <div id="sidebar" class="static fixed flex items-center w-16 h-screen px-4 text-white bg-white shadow menu nunito">

        <ul class="list-reset ">
            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 pl-1 text-gray-600 no-underline align-middle md:py-3 hover:text-indigo-400">
                    <i class="mr-3 fas fa-home fa-fw"></i><span
                        class="inline-block w-full pb-1 text-sm md:pb-0">Home</span>
                </a>
            </li>
            <li class="my-2 md:my-0 ">
                <a href="#"
                    class="block py-1 pl-1 text-gray-600 no-underline align-middle md:py-3 hover:text-indigo-400">
                    <i class="mr-3 fas fa-tasks fa-fw"></i><span
                        class="inline-block w-full pb-1 text-sm md:pb-0">Tasks</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 pl-1 text-gray-600 no-underline align-middle md:py-3 hover:text-indigo-400">
                    <i class="mr-3 fa fa-envelope fa-fw"></i><span
                        class="inline-block w-full pb-1 text-sm md:pb-0">Messages</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 pl-1 text-gray-600 no-underline align-middle md:py-3 hover:text-indigo-400">
                    <i class="mr-3 text-indigo-400 fas fa-chart-area fa-fw"></i><span
                        class="inline-block w-full pb-1 text-sm md:pb-0">Analytics</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 pl-1 text-gray-600 no-underline align-middle md:py-3 hover:text-indigo-400">
                    <i class="mr-3 fa fa-wallet fa-fw"></i><span
                        class="inline-block w-full pb-1 text-sm md:pb-0">Payments</span>
                </a>
            </li>
        </ul>

    </div>

    <div class="flex flex-row flex-wrap content-start flex-1 flex-grow pl-16">

        <div class="flex flex-wrap w-full h-40 lg:h-20">
            <nav id="header"
                class="flex items-center order-2 w-full bg-gray-200 border-gray-300 lg:max-w-sm border-b-1 lg:order-1">

                <div class="w-full px-2">
                    <select name=""
                        class="w-full px-4 py-3 font-bold leading-tight text-gray-500 bg-gray-300 border-2 border-gray-200 rounded-full focus:outline-none focus:bg-white focus:shadow-md"
                        id="form-field2">
                        <option value="Default">default</option>
                        <option value="A">report a</option>
                        <option value="B">report b</option>
                        <option value="C">report c</option>
                    </select>
                </div>

            </nav>
            <nav id="header1" class="flex-1 order-1 w-auto bg-gray-100 border-gray-300 border-b-1 lg:order-2">

                <div class="flex items-center justify-between h-full">

                    <!--Search-->
                    <div class="relative w-full max-w-3xl px-6">
                        <div class="absolute top-0 left-0 flex items-center h-10 pl-10 mt-1">
                            <svg class="w-4 h-4 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>

                        <input id="search-toggle" type="search" placeholder="search"
                            class="block w-full py-3 pl-12 pr-4 font-bold text-gray-700 bg-gray-200 rounded-full focus:outline-none focus:bg-white focus:shadow-md"
                            onkeyup="updateSearchResults(this.value);">

                    </div>
                    <!-- / Search-->

                    <!--Menu-->

                    <div class="relative flex inline-block pr-6">

                        <div class="relative text-sm">
                            <button id="userButton" class="flex items-center mr-3 focus:outline-none">
                                <img class="w-8 h-8 mr-4 rounded-full" src="http://i.pravatar.cc/300"
                                    alt="Avatar of User"> <span class="hidden md:inline-block">Hi, User </span>
                                <svg class="h-2 pl-2" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    enable-background="new 0 0 129 129">
                                    <g>
                                        <path
                                            d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z">
                                        </path>
                                    </g>
                                </svg>
                            </button>
                            <div id="userMenu"
                                class="absolute top-0 right-0 z-30 invisible min-w-full mt-2 mt-12 overflow-auto bg-white rounded shadow-md nunito">
                                <ul class="list-reset">
                                    <li><a href="#"
                                            class="block px-4 py-2 text-gray-900 no-underline hover:bg-indigo-400 hover:text-white hover:no-underline">My
                                            account</a></li>
                                    <li><a href="#"
                                            class="block px-4 py-2 text-gray-900 no-underline hover:bg-indigo-400 hover:text-white hover:no-underline">Notifications</a>
                                    </li>
                                    <li>
                                        <hr class="mx-2 border-t border-gray-400">
                                    </li>
                                    <li><a href="#"
                                            class="block px-4 py-2 text-gray-900 no-underline hover:bg-indigo-400 hover:text-white hover:no-underline">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- / Menu -->

                </div>

            </nav>
        </div>

        <!--Dash Content -->
        <div id="dash-content" class="flex flex-wrap content-start w-full py-6 bg-gray-200 lg:py-0 lg:max-w-sm">

            <div class="w-1/2 lg:w-full">
                <div
                    class="p-6 m-2 border-2 border-gray-400 border-dashed rounded hover:border-transparent hover:bg-white hover:shadow-xl md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-3 bg-gray-300 rounded-full"><i
                                    class="text-indigo-500 fa fa-wallet fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-bold">$3249 <span class="text-green-500"><i
                                        class="fas fa-caret-up"></i></span></h3>
                            <h5 class="font-bold text-gray-500">Total Revenue</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 lg:w-full">
                <div
                    class="p-6 m-2 border-2 border-gray-400 border-dashed rounded hover:border-transparent hover:bg-white hover:shadow-xl md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-3 bg-gray-300 rounded-full"><i
                                    class="text-indigo-500 fas fa-users fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-bold">249 <span class="text-orange-500"><i
                                        class="fas fa-exchange-alt"></i></span></h3>
                            <h5 class="font-bold text-gray-500">Total Users</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 lg:w-full">
                <div
                    class="p-6 m-2 border-2 border-gray-400 border-dashed rounded hover:border-transparent hover:bg-white hover:shadow-xl md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-3 bg-gray-300 rounded-full"><i
                                    class="text-indigo-500 fas fa-user-plus fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-bold">2 <span class="text-yellow-600"><i
                                        class="fas fa-caret-up"></i></span></h3>
                            <h5 class="font-bold text-gray-500">New Users</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 lg:w-full">
                <div
                    class="p-6 m-2 border-2 border-gray-400 border-dashed rounded hover:border-transparent hover:bg-white hover:shadow-xl md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-3 bg-gray-300 rounded-full"><i
                                    class="text-indigo-500 fas fa-server fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-bold">152 days</h3>
                            <h5 class="font-bold text-gray-500">Server Uptime</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Graph Content -->
        <div id="main-content" class="flex-1 w-full">

            <div class="flex flex-wrap flex-1">

                <div class="w-full p-6 xl:w-2/3 xl:max-w-6xl">

                    <!--"Container" for the graphs"-->
                    <div class="max-w-full lg:max-w-3xl xl:max-w-5xl">

                        <!--Graph Card-->
                        <div class="p-3 border-b">
                            <h5 class="font-bold text-black">Graph</h5>
                        </div>
                        <div class="p-5">
                            <div class="ct-chart ct-golden-section" id="chart1"></div>
                        </div>
                        <!--/Graph Card-->

                        <!--Table Card-->
                        <div class="p-3">
                            <div class="p-3 border-b">
                                <h5 class="font-bold text-black">Table</h5>
                            </div>
                            <div class="p-5">
                                <table class="w-full p-5 text-gray-700">
                                    <thead>
                                        <tr>
                                            <th class="text-left text-blue-900">Name</th>
                                            <th class="text-left text-blue-900">Side</th>
                                            <th class="text-left text-blue-900">Role</th>
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

                                <p class="py-2"><a href="#">See More issues...</a></p>

                            </div>
                        </div>
                        <!--/table Card-->

                    </div>

                </div>

                <div class="w-full p-6 border-gray-300 xl:w-1/3 xl:max-w-4xl border-l-1">

                    <!--"Container" for the graphs"-->
                    <div class="max-w-sm lg:max-w-3xl xl:max-w-5xl">

                        <!--Graph Card-->

                        <div class="p-3 border-b">
                            <h5 class="font-bold text-black">Graph</h5>
                        </div>
                        <div class="p-5">
                            <div class="ct-chart ct-golden-section" id="chart2"></div>
                        </div>

                        <!--/Graph Card-->

                        <!--Graph Card-->
                        <div class="p-3 border-b">
                            <h5 class="font-bold text-black">Graph</h5>
                        </div>
                        <div class="p-5">
                            <div class="ct-chart ct-golden-section" id="chart3"></div>
                        </div>

                        <!--/Graph Card-->

                        <!--Graph Card-->

                        <div class="p-3 border-b">
                            <h5 class="font-bold text-black">Graph</h5>
                        </div>
                        <div class="p-5">
                            <div class="ct-chart ct-golden-section" id="chart4"></div>
                        </div>

                        <!--/Graph Card-->

                        <!--Template Card-->
                        <div class="p-3">
                            <div class="p-3 border-b">
                                <h5 class="font-bold text-black">Template</h5>
                            </div>
                            <div class="p-5">

                            </div>
                        </div>
                        <!--/Template Card-->

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script>
        /* Refer to https://gionkunz.github.io/chartist-js/examples.html for setting up the graphs */

        var mainChart = new Chartist.Line('#chart1', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            series: [
                [1, 5, 2, 5, 4, 3],
                [2, 3, 4, 8, 1, 2],
                [5, 4, 3, 2, 1, 0.5]
            ]
        }, {
            low: 0,
            showArea: true,
            showPoint: false,
            fullWidth: true
        });

        mainChart.on('draw', function (data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 1000 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartScatter = new Chartist.Line('#chart2', {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            series: [
                [12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
                [4, 5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
                [5, 3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
                [3, 4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
            ]
        }, {
            low: 0
        });

        chartScatter.on('draw', function (data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 500 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartBar = new Chartist.Bar('#chart3', {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            series: [
                [800000, 1200000, 1400000, 1300000],
                [200000, 400000, 500000, 300000],
                [100000, 200000, 400000, 600000]
            ]
        }, {
            stackBars: true,
            axisY: {
                labelInterpolationFnc: function (value) {
                    return (value / 1000) + 'k';
                }
            }
        })

        chartBar.on('draw', function (data) {
            if (data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 30px'
                }),
                    data.element.animate({
                        y2: {
                            dur: '0.5s',
                            from: data.y1,
                            to: data.y2
                        }
                    });
            }
        });

        var chartPie = new Chartist.Pie('#chart4', {
            series: [10, 20, 50, 20, 5, 50, 15],
            labels: [1, 2, 3, 4, 5, 6, 7]
        }, {
            donut: true,
            showLabel: true
        });

        chartPie.on('draw', function (data) {
            if (data.type === 'slice') {
                var pathLength = data.element._node.getTotalLength();
                data.element.attr({
                    'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                });

                var animationDefinition = {
                    'stroke-dashoffset': {
                        id: 'anim' + data.index,
                        dur: 200,
                        from: -pathLength + 'px',
                        to: '0px',
                        easing: Chartist.Svg.Easing.easeOutQuint,
                        fill: 'freeze'
                    }
                };

                if (data.index !== 0) {
                    animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                }

                data.element.attr({
                    'stroke-dashoffset': -pathLength + 'px'
                });

                data.element.animate(animationDefinition, false);
            }
        });
    </script>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

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