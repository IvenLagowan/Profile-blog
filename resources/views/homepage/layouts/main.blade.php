<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- logo -->
    <link href="/assets/home/img/logo/logo-title.png" rel="icon">
    <title>ANDRO MIND - {{ $title }}</title>

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Akhir Bootstrap -->

    <!-- Animation Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Akhir Animation Aos -->

    <!-- My Style CSS -->
    <link rel="stylesheet" href="/assets/home/css/style.css">
    <link rel="stylesheet" href="/assets/home/css/hero.css">
    <link rel="stylesheet" href="/assets/home/css/footer.css">

    <!-- Akhir Style CSS -->
    <style>
        /* #header {
            box-shadow: 0px 20px 8px rgba(0, 0, 0, 0.1);
        } */

        .icon-text {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .bg-circle {
            background-color: #00000088;
            border-radius: 50%;
            padding: 0.5rem;
            font-size: 24px;
            width: 45px;
            height: 45px;
            color: white;
            margin-right: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .item-info {
            display: flex;
            flex-direction: column;
        }

        .item-info p {
            margin: 0;
            font-family: 'Rajdhani', sans-serif;
            font-size: 16px;
            line-height: 25px;
            text-align: left;
            letter-spacing: normal;
            font-weight: bold;
        }

        .item-info p:last-child {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            line-height: 25px;
            text-align: left;
            letter-spacing: normal;
            font-weight: normal;
        }

        .title-style {
            font-family: 'Rajdhani', sans-serif;
            font-size: 30px;
            line-height: 36px;
            text-align: left;
            letter-spacing: normal;
        }

        .text-justify {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            line-height: 27px;
            text-align: justify;
            letter-spacing: normal;
        }

        /* Gaya untuk mode ponsel */
        @media (max-width: 767px) {
            .carousel-item img {
                max-height: 300px;
            }

            h1.text-hero {
                display: none;
            }

            p.text-hero {
                display: none;
            }

            /* Atur margin-top untuk elemen carousel */
            .carousel-item {
                margin-top: 70px;
            }
        }
    </style>
</head>

<body>
    @include('homepage.partials.header')

    @yield('container')

    @include('homepage.partials.footer')
    <!-- Back To Top -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-circle"></i>
    </a>
    <!-- Akhir Back To Top -->

    <!-- My Assets Js -->
    <script src="/assets/home/js/script.js"></script>
    <!-- Js Aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Js Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- Akhir Js -->

    <script>
        window.addEventListener("scroll", function() {
            var header = document.getElementById("header");
            if (window.scrollY > 0) {
                header.style.boxShadow = "0px 4px 12px rgba(0, 0, 0, 0.1)";
            } else {
                header.style.boxShadow = "none";
            }
        });
    </script>

</body>

</html>
