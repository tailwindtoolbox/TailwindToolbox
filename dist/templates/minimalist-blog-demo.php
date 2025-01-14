<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Minimalist Blog: Windy Toolbox</title>
    <meta name="description"
        content="(Formerly Tailwind Toolbox) Free open source Tailwind CSS Minimalistic monochrome blog template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,blog template, blog layout, minimal, monochrome, minimalistic, theme">
    <?php include '../includes/head-templates.php'; ?>

    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <style>
        .nunito {
            font-family: 'Nunito', sans-serif;
        }

        ::selection {
            background: #E9D8FD;
            /* WebKit/Blink Browsers */
        }

        ::-moz-selection {
            background: #E9D8FD;
            /* Gecko Browsers */
        }

        a:not(.nav) {
            font-weight: bold;
            text-decoration: none;
            padding: 2px;
            background: linear-gradient(to right, #5A67D8, #5A67D8);
            background-repeat: repeat-x;
            background-size: 100% 2px;
            background-position: 0 95%;
            -webkit-transition: all 150ms ease-in-out;
            -moz-transition: all 150ms ease-in-out;
            -ms-transition: all 150ms ease-in-out;
            -o-transition: all 150ms ease-in-out;
            transition: all 150ms ease-in-out;
        }

        a:hover {
            color: #B794F4;
            font-weight: bold;
            text-decoration: none;
            padding-bottom: 2px;
            background: linear-gradient(to right, #9F7AEA, #E9D8FD);
            background-repeat: repeat-x;
            background-size: 100% 2px;
            background-position: 50% 95%;
            -webkit-transition: color 150ms ease-in-out;
            -moz-transition: color 150ms ease-in-out;
            -ms-transition: color 150ms ease-in-out;
            -o-transition: color 150ms ease-in-out;
            transition: color 150ms ease-in-out;
        }

        a:focus {
            outline: none;
            background: #E9D8FD;
        }
    </style>

</head>

<body class="font-sans text-gray-700 bg-gray-100 nunito">

    <div class="flex flex-wrap p-6 sm:p-10 md:p-16">

        <div class="order-3 w-full md:w-1/2 md:pr-32 md:order-1">
            <div class="max-w-md leading-loose tracking-tight md:float-right md:text-right md:sticky md:top-0 ">
                <p class="my-4 font-bold md:my-12">Previous Posts</p>

                <ul class="flex flex-col flex-wrap justify-between">
                    <li><a href="#" class="nav">Previous blog posts links</a></li>
                    <li><a href="#" class="nav">A diam sollicitudin tempor id eue</a></li>
                    <li><a href="#" class="nav">Lectus vestibulum mattis ullamcorper velit sed ullamcorper</a></li>
                    <li><a href="#" class="nav">Pulvinar etiam non quam lacus suspendisse faucibus</a></li>
                </ul>
                <a href="#" class="font-bold normal hover:font-bold">more...</a>
            </div>
        </div>
        <div class="order-1 w-full md:w-1/2 md:order-2">
            <div class="max-w-md leading-loose tracking-tight">
                <h1 class="my-12 font-bold">Post Title</h1>

                <p class="mb-8">This template is inspired by the amazing <a
                        href="https://minimalissimo.shop/product/minimalist-writer-ii"
                        target="_blank">https://minimalissimo.shop/product/minimalist-writer-ii</a> created by <a
                        href="https://manuelmoreale.com/">Manuel Moreale</a>.</p>

                <p class="mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas
                    accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget
                    nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in.
                    Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed
                    libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla
                    ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis
                    volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas
                    egestas fringilla. Vitae congue eu consequat ac.</p>

                <p class="mb-8">Netus et malesuada fames ac turpis egestas sed. Sociis natoque penatibus et magnis dis.
                    Pulvinar etiam non quam lacus suspendisse faucibus. Vulputate mi sit amet mauris commodo quis
                    imperdiet massa tincidunt. Eget nullam non nisi est sit amet facilisis. Fusce ut placerat orci nulla
                    pellentesque dignissim enim sit amet. Vulputate mi sit amet mauris commodo quis. Vestibulum mattis
                    ullamcorper velit sed ullamcorper morbi tincidunt. Feugiat pretium nibh ipsum consequat nisl vel
                    pretium lectus quam. Enim blandit volutpat maecenas volutpat blandit. Scelerisque fermentum dui
                    faucibus in ornare. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc. Id interdum
                    velit laoreet id. Ut lectus arcu bibendum at varius vel pharetra vel turpis.</p>

                <p class="mb-8">A diam sollicitudin tempor id eu. Lectus vestibulum mattis ullamcorper velit sed
                    ullamcorper. Sit amet facilisis magna etiam tempor. Non diam phasellus vestibulum lorem sed risus.
                    Leo vel fringilla est ullamcorper eget nulla facilisi etiam. Quam quisque id diam vel quam elementum
                    pulvinar etiam. Eu volutpat odio facilisis mauris. Molestie ac feugiat sed lectus vestibulum mattis.
                    In vitae turpis massa sed elementum tempus egestas sed sed. Sed id semper risus in hendrerit gravida
                    rutrum quisque non. Quis lectus nulla at volutpat diam ut venenatis. Ultrices eros in cursus turpis
                    massa tincidunt dui. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor
                    aliquam. Lobortis mattis aliquam faucibus purus. Egestas sed tempus urna et pharetra pharetra.
                    Tellus pellentesque eu tincidunt tortor aliquam nulla.</p>

                <p class="mb-8">Cras fermentum odio eu feugiat pretium nibh ipsum. Integer vitae justo eget magna
                    fermentum iaculis eu non diam. Tellus molestie nunc non blandit massa enim nec dui. Ullamcorper
                    morbi tincidunt ornare massa eget egestas. Orci a scelerisque purus semper eget duis at tellus at.
                    Consequat id porta nibh venenatis cras sed. Enim eu turpis egestas pretium. Mi in nulla posuere
                    sollicitudin aliquam ultrices sagittis orci. Dui vivamus arcu felis bibendum. Eu consequat ac felis
                    donec et odio. Ultrices gravida dictum fusce ut placerat orci nulla. Leo urna molestie at elementum
                    eu facilisis. Vulputate mi sit amet mauris commodo. Eu consequat ac felis donec et odio
                    pellentesque.</p>

            </div>
        </div>

        <div class="order-4 w-full pt-12 md:w-1/2 md:pr-32 md:pt-0 md:sticky md:bottom-0 md:order-3">
            <div class="max-w-md leading-loose tracking-tight md:float-right md:text-right md:mb-16">
                <p class="my-4 font-bold md:my-12">Contact Me</p>

                <ul class="flex flex-row flex-wrap justify-between md:flex-col">
                    <li><a href="#" class="mx-2 nav md:mx-0">Twitter</a></li>
                    <li><a href="#" class="mx-2 nav md:mx-0">Instagram</a></li>
                    <li><a href="#" class="mx-2 nav md:mx-0">Dribbble</a></li>
                    <li><a href="#" class="mx-2 nav md:mx-0">etc</a></li>
                </ul>
            </div>
        </div>
        <div class="order-2 w-full md:w-1/2 md:order-4">
            <div class="max-w-md leading-loose tracking-tight">
                <p class="my-4 font-bold md:my-12">About Me</p>

                <p class="mb-8">Arcu risus quis varius quam quisque id diam vel. Consectetur adipiscing elit ut aliquam
                    purus sit amet. Nibh tortor id aliquet lectus proin nibh. </p>
            </div>
        </div>

    </div>

    <!-- Pin to top right corner -->
    <div class="absolute top-0 right-0 h-12 p-4 w-18">
        <button class="js-change-theme focus:outline-none">🌙</button>
    </div>

    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->

    <script>
        //Toggle mode
        const toggle = document.querySelector('.js-change-theme');
        const body = document.querySelector('body');
        //const profile = document.getElementById('profile');

        toggle.addEventListener('click', () => {
            if (body.classList.contains('text-gray-700')) {
                toggle.innerHTML = "☀️";
                body.classList.remove('text-gray-700');
                body.classList.add('text-gray-300');
                body.classList.remove('bg-gray-100');
                body.classList.add('bg-gray-900');
            } else {
                toggle.innerHTML = "🌙";
                body.classList.remove('text-gray-300');
                body.classList.add('text-gray-700');
                body.classList.remove('bg-gray-900');
                body.classList.add('bg-gray-100');

            }
        });
    </script>

</body>

</html>