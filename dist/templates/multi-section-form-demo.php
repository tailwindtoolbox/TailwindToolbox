<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Multi Section Form / Scrollspy: Windy Toolbox</title>
    <meta name="description"
        content="(Formerly Tailwind Toolbox) Free open source Tailwind CSS multi section form with scrollspy (useful for settings)">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,settings,form,custom forms, multi-section, scrollspy">
    <?php include '../includes/head-templates.php'; ?>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <style>
        .max-h-64 {
            max-height: 16rem;
        }

        /*Quick overrides of the form input as using the CDN version*/
        .form-input,
        .form-textarea,
        .form-select,
        .form-multiselect {
            background-color: #edf2f7;
        }
    </style>

</head>

<body class="leading-normal tracking-wider text-gray-900 bg-gray-100">

    <nav id="header" class="fixed top-0 z-10 w-full bg-white shadow">

        <div class="container flex flex-wrap items-center justify-between w-full mx-auto my-4">

            <div class="pl-4 md:pl-0">
                <a class="flex items-center font-sans text-base font-extrabold text-yellow-600 no-underline xl:text-xl hover:no-underline"
                    href="#">
                    <svg class="inline-block h-6 mr-4 text-yellow-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M16 2h4v15a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V0h16v2zm0 2v13a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4h-2zM2 2v15a1 1 0 0 0 1 1h11.17a2.98 2.98 0 0 1-.17-1V2H2zm2 8h8v2H4v-2zm0 4h8v2H4v-2zM4 4h8v4H4V4z" />
                    </svg> Multi Section Form / Scrollspy
                </a>
            </div>

            <div class="flex justify-end pr-0">

                <div class="relative flex inline-block float-right">

                    <div class="relative text-sm">

                        <button id="userButton"
                            class="flex items-center px-4 py-2 mr-3 text-sm font-bold text-white bg-yellow-700 rounded shadow hover:bg-yellow-500 focus:shadow-outline focus:outline-none md:text-base">
                            Menu
                            <svg class="h-2 pl-2 text-white fill-current" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"
                                xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path
                                        d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>

                        <div id="userMenu"
                            class="absolute top-0 right-0 z-30 invisible min-w-full mt-2 mt-12 mr-2 overflow-auto bg-white rounded shadow-md">
                            <ul class="list-reset">
                                <li><a href="#"
                                        class="block px-4 py-2 no-underline hover:bg-gray-400 hover:no-underline">My
                                        account</a></li>
                                <li><a href="#"
                                        class="block px-4 py-2 no-underline hover:bg-gray-400 hover:no-underline">Notifications</a>
                                </li>
                                <li>
                                    <hr class="mx-2 border-t border-gray-400">
                                </li>
                                <li><a href="#"
                                        class="block px-4 py-2 font-bold text-yellow-600 no-underline hover:bg-yellow-600 hover:text-white hover:no-underline">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </nav>
    <!--Container-->
    <div class="container flex flex-wrap w-full px-2 pt-8 mx-auto mt-16 lg:pt-16">
        <div class="w-full px-6 text-xl leading-normal text-gray-800 lg:w-1/5">
            <p class="py-2 text-base font-bold text-gray-700 lg:pb-6">Menu</p>
            <div class="sticky inset-0 block lg:hidden">
                <button id="menu-toggle"
                    class="flex justify-end w-full px-3 py-3 bg-white border border-gray-600 rounded appearance-none lg:bg-transparent hover:border-yellow-600 focus:outline-none">
                    <svg class="float-right h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </button>
            </div>
            <div class="sticky inset-0 z-20 hidden w-full my-2 mt-0 overflow-x-hidden overflow-y-auto bg-white border border-gray-400 shadow max-h-64 lg:h-auto lg:overflow-y-hidden lg:block lg:my-0 lg:border-transparent lg:shadow-none lg:bg-transparent"
                style="top:6em;" id="menu-content">
                <ul class="py-2 list-reset md:py-0">
                    <li
                        class="py-1 font-bold border-l-4 border-transparent border-yellow-600 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent">
                        <a href='#section1'
                            class="block pl-4 text-gray-700 no-underline align-middle hover:text-yellow-600">
                            <span class="pb-1 text-sm md:pb-0">Section 1</span>
                        </a>
                    </li>
                    <li class="py-1 border-l-4 border-transparent md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent">
                        <a href='#section2'
                            class="block pl-4 text-gray-700 no-underline align-middle hover:text-yellow-600">
                            <span class="pb-1 text-sm md:pb-0">Section 2</span>
                        </a>
                    </li>
                    <li class="py-1 border-l-4 border-transparent md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent">
                        <a href='#section3'
                            class="block pl-4 text-gray-700 no-underline align-middle hover:text-yellow-600">
                            <span class="pb-1 text-sm md:pb-0">Section 3</span>
                        </a>
                    </li>
                    <li class="py-1 border-l-4 border-transparent md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent">
                        <a href='#section4'
                            class="block pl-4 text-gray-700 no-underline align-middle hover:text-yellow-600">
                            <span class="pb-1 text-sm md:pb-0">Section 4</span>
                        </a>
                    </li>

                    <li class="py-1 border-l-4 border-transparent md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent">
                        <a href='#section5'
                            class="block pl-4 text-gray-700 no-underline align-middle hover:text-yellow-600">
                            <span class="pb-1 text-sm md:pb-0">Section 5</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--Section container-->
        <section class="w-full lg:w-4/5">

            <!--Title-->
            <h1
                class="flex items-center px-2 mt-12 font-sans text-xl font-bold text-gray-700 break-normal lg:mt-0 md:text-2xl">
                Multi Section Form with Scrollspy
            </h1>

            <!--divider-->
            <hr class="my-12 bg-gray-300">

            <!--Title-->
            <h2 id='section1' class="px-2 pb-8 font-sans text-xl font-bold text-gray-700 break-normal">Section 1</h2>

            <!--Card-->
            <div class="p-8 mt-6 leading-normal bg-white rounded shadow lg:mt-0">
                <li>Using the CDN version of <a class="text-yellow-600 underline"
                        href="https://github.com/tailwindcss/custom-forms" target="_blank">Tailwind Custom Forms</a>
                </li>
                <li>This template uses jQuery for scrollspy</li>
            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="my-12 bg-gray-300">

            <!--Title-->
            <h2 class="px-2 pb-8 font-sans text-xl font-bold text-gray-700 break-normal">Section 2</h2>

            <!--Card-->
            <div id='section2' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">

                <form>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0"
                                for="my-textfield">
                                Text Field
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="block w-full form-input focus:bg-white" id="my-textfield" type="text"
                                value="">
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0" for="my-select">
                                Drop down field
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select name="" class="block w-full form-select focus:bg-white" id="my-select">
                                <option value="Default">Default</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>

                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0"
                                for="my-textarea">
                                Text Area
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <textarea class="block w-full form-textarea focus:bg-white" id="my-textarea" value=""
                                rows="8"></textarea>
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button
                                class="px-4 py-2 font-bold text-white bg-yellow-700 rounded shadow hover:bg-yellow-500 focus:shadow-outline focus:outline-none"
                                type="button">
                                Save
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="my-12 bg-gray-300">

            <!--Title-->
            <h2 class="px-2 pb-8 font-sans text-xl font-bold text-gray-700 break-normal">Section 3</h2>

            <!--Card-->
            <div id='section3' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">

                <form>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0"
                                for="my-multiselect">
                                Multi Select
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <select class="block w-full form-multiselect" multiple id="my-multiselect">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button
                                class="px-4 py-2 font-bold text-white bg-yellow-700 rounded shadow hover:bg-yellow-500 focus:shadow-outline focus:outline-none"
                                type="button">
                                Save
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="my-12 bg-gray-300">

            <!--Title-->
            <h2 class="px-2 pb-8 font-sans text-xl font-bold text-gray-700 break-normal">Section 4</h2>

            <!--Card-->
            <div id='section4' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">

                <form>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0" for="my-radio">
                                Radio Buttons
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="text-indigo-600 form-radio" name="radioOption" value="A">
                                    <span class="ml-2">Radio A</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="radioOption" value="B">
                                    <span class="ml-2">Radio B</span>
                                </label>
                            </div>
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>

                    <div class="mb-6 md:flex">
                        <div class="md:w-1/3">
                            <label class="block pr-4 mb-3 font-bold text-gray-600 md:text-left md:mb-0"
                                for="my-checkbox">
                                Checkboxes
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="text-indigo-600 form-checkbox" checked>
                                    <span class="ml-2">Option 1</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="text-green-500 form-checkbox" checked>
                                    <span class="ml-2">Option 2</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="text-pink-600 form-checkbox" checked>
                                    <span class="ml-2">Option 3</span>
                                </label>
                            </div>
                            <p class="py-2 text-sm text-gray-600">add notes about populating the field</p>
                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button
                                class="px-4 py-2 font-bold text-white bg-yellow-700 rounded shadow hover:bg-yellow-500 focus:shadow-outline focus:outline-none"
                                type="button">
                                Save
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="my-12 bg-gray-300">

            <!--Title-->
            <h2 class="px-2 pb-8 font-sans text-xl font-bold text-gray-700 break-normal">Section 5</h2>

            <!--Card-->
            <div id='section5' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">

                <blockquote class="pl-8 my-4 italic border-l-4 border-yellow-600 md:pl-12">Final confirmation disclaimer
                    message etc</blockquote>

                <div class="pt-8">

                    <button
                        class="px-4 py-2 mr-4 font-bold text-white bg-yellow-700 rounded shadow hover:bg-yellow-500 focus:shadow-outline focus:outline-none"
                        type="button">
                        Save
                    </button>

                    <button
                        class="px-4 py-2 mr-4 font-bold text-gray-700 bg-yellow-100 rounded shadow hover:bg-yellow-200 focus:shadow-outline focus:outline-none"
                        type="button">
                        Additional Action
                    </button>

                    <button
                        class="px-4 py-2 font-bold text-gray-700 bg-yellow-100 rounded shadow hover:bg-yellow-200 focus:shadow-outline focus:outline-none"
                        type="button">
                        Additional Action
                    </button>

                </div>

            </div>
            <!--/Card-->

        </section>
        <!--/Section container-->

        <!--Back link -->
        <div class="w-full px-4 py-24 mb-12 text-base text-gray-600 lg:w-4/5 lg:ml-auto md:text-sm">
            <span class="text-base font-bold text-yellow-600">&lt;</span> <a href="#"
                class="text-base font-bold text-yellow-600 no-underline md:text-sm hover:underline">Back link</a>
        </div>

    </div>
    <!--/container-->

    <!-- Toggle dropdown list -->
    <script>
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        var helpMenuDiv = document.getElementById("menu-content");
        var helpMenu = document.getElementById("menu-toggle");

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

            //Help Menu
            if (!checkParent(target, helpMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, helpMenu)) {
                    // click on the link
                    if (helpMenuDiv.classList.contains("hidden")) {
                        helpMenuDiv.classList.remove("hidden");
                    } else {
                        helpMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    helpMenuDiv.classList.add("hidden");
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

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Scroll Spy -->
    <script>
        /* http://jsfiddle.net/LwLBx/ */

        // Cache selectors
        var lastId,
            topMenu = $("#menu-content"),
            topMenuHeight = topMenu.outerHeight() + 175,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });

        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function (e) {
            var href = $(this).attr("href"),
                offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
            $('html, body').stop().animate({
                scrollTop: offsetTop
            }, 300);
            if (!helpMenuDiv.classList.contains("hidden")) {
                helpMenuDiv.classList.add("hidden");
            }
            e.preventDefault();
        });

        // Bind to scroll
        $(window).scroll(function () {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function () {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("font-bold border-yellow-600")
                    .end().filter("[href='#" + id + "']").parent().addClass("font-bold border-yellow-600");
            }
        });
    </script>

</body>

</html>