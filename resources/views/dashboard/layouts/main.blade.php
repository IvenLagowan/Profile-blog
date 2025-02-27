{{--
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Andro Mind | @yield('title')</title>

    <meta name="description" content="" />

    <link href="/img/logo/logo-title.png" rel="icon" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="/assets/vendor/js/helpers.js"></script>
    <script src="/assets/js/config.js"></script>
    <script src="/assets/js/datatables-simple-demo.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('dashboard.partials.sidebar')

            <div class="layout-page">

                @include('dashboard.partials.navbar')

                <div class="content-wrapper">

                    @yield('container')

                    @include('dashboard.partials.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/vendor/js/menu.js"></script>
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/dashboards-analytics.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="/assets/js/pages-account-settings-account.js"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Andromind - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/dashboard/img/favicon.png" rel="icon">
    <link href="/dashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/dashboard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/dashboard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/dashboard/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/dashboard/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/dashboard/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/dashboard/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/dashboard/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/dashboard/css/trix.css">
    <script type="text/javascript" src="/dashboard/js/trix.js"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

</head>

<body>

    @include('dashboard.partials.navbar')


    @include('dashboard.partials.sidebar')

    <main id="main" class="main">

        <div class="main-content container-fluid">
            <div class="pagetitle">
                <h1>@yield('title')</h1>
                <nav style="margin-left: -15px">
                    <ol class="breadcrumb" style="background: var(--bs-bg-body)">
                        <li class="breadcrumb-item">@yield('title1')</a></li>
                        <li class="breadcrumb-item active">@yield('title2')</li>
                    </ol>
                </nav>
            </div>
            <section class="section dashboard">
                @yield('content')
            </section>
        </div>

    </main>


    @include('dashboard.partials.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="/dashboard/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard/vendor/chart.js/chart.umd.js"></script>
    <script src="/dashboard/vendor/echarts/echarts.min.js"></script>
    <script src="/dashboard/vendor/quill/quill.min.js"></script>
    <script src="/dashboard/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/dashboard/vendor/tinymce/tinymce.min.js"></script>
    <script src="/dashboard/vendor/php-email-form/validate.js"></script>
    <script src="/dashboard/js/main.js"></script>
    <script src="/dashboard/js/datatables-simple-demo.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}

</body>

</html>
