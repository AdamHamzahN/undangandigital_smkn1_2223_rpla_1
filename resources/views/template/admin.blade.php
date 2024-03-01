<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite(['resources/css/admin.css', 'resources/js/app.js'])
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: rgba(218, 217, 217, 1);
        }

        .navbar {
            background-color: rgba(82, 88, 239, 1);
            min-height: 100px;
        }

        .navbar-header {
            color: white;
            font-family: calistoga;
            font-size: 40px;
        }

        .container-fluid,
        .row {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .nav-link {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .nav-item{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .nav-item:last-child {
            margin-right: 20px;
        }

        .sidebar {
            background-color: rgba(69, 67, 67, 1);
            padding-top: 20px;
            padding-bottom: 20px;
            height: calc(100% - 56px);
            /* Adjusted for navbar height */
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg mh-100px sticky-top">
        <h1 class="navbar-header px-4 "><b> ADMIN NIKAHYUK</b></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar position-fixed" >
                <div class="sidebar-sticky">
                    <ul class="nav flex-column ">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is   ('admin/dashboard*') ? 'active' : '' }}" href="/admin/dashboard">
                                DASHBOARD
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/tema*') ? 'active' : '' }}" href="/admin/tema">
                                TEMA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/paket*') ? 'active' : '' }}" href="/admin/paket">
                                PAKET
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/pesanan*') ? 'active' : '' }}" href="/admin/pesanan">
                                PESANAN
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin/daftarpembayaran*') ? 'active' : '' }}" href="/admin/daftarpembayaran">
                                DAFTAR PEMBAYARAN
                            </a>
                        </li> 
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                <div class="container">
                    @yield('content')
                </div>
                
            </main>
        </div>
    </div>


</body>
<footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @yield('footer')
</footer>

</html>
