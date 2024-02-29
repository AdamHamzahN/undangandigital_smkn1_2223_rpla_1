<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FromUndangan NikahYuk</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Form Undangan</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pemesan</label>
                            <input type="text" class="form-control" name="Nama Pemesan" placeholder="Nama" />
                        </div>
                        <div class="form-group">
                            <label>Kontak Pemesan (WhatsApp) </label>
                            <input type="text" class="form-control" name="Kontak Pemesan (WhatsApp)" placeholder="Masukan Kontak Anda" />
                        </div>
                        <div class="card-footer">
                            <btn class="btn btn-success">Next</btn>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>