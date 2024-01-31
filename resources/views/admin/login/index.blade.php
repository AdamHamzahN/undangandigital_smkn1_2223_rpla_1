<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    @vite(['resources/css/app.css'])
</head>

<body class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="col-lg-6 mx-auto ">
                    <div class="card mx-auto display-flex">
                        <div class="card-header card-header text-center bg-white">
                            <h1 class="text-black text-login">Login Admin</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/check') }}" method="post">
                                <div class="form-group">
                                    <label for="nama_admin " class="mb-3">Nama :</label>
                                    <input type="text" name="nama_admin" id="nama_admin" class="form-control"
                                        required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Password :</label><br>
                                    <input type="text" name="password" id="password" class="form-control"
                                        required><br>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
