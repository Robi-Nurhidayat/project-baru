<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Icon Box Icons -->
    <script src="https://unpkg.com/boxicons@2.0.8/dist/boxicons.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <title>Pembayaran - Paket Pelajar</title>
</head>

<body class="bg-light">

    <div class="jumbotron mx-5 bg-light">
        <div class="container">
            <h2 class="poppins-36-bold mb-4">Pembayaran</h2>
            <div class="row">
                <div class="col card ml-3 mr-4 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title poppins-medium-24"> Profile User </h4>
                        <form>
                            <div class="form-group">
                                <label class="roboto-18-medium" for="nama">
                                    Nama Lengkap
                                </label>
                                <input type="text" class="form-control roboto-14-reguler" id="nama" placeholder="Masukkan Nama Lengkap Anda" required>
                            </div>
                            <div class="form-group">
                                <label class="roboto-18-medium" for="email">
                                    Email Address
                                </label>
                                <input type="email" class="form-control roboto-14-reguler" id="email" placeholder="Masukkan Alamat Email Anda" required>
                            </div>
                            <div class="form-group">
                                <label class="roboto-18-medium" for="notelepon">
                                    No Telepon
                                </label>
                                <input type="text" class="form-control roboto-14-reguler" id="notelepon" placeholder="Masukkan No Telepon Anda" required>
                            </div>
                            <div class="form-group">
                                <label class="roboto-18-medium" for="alamat">Alamat</label>
                                <textarea class="form-control roboto-14-reguler" id="alamat" rows="5" placeholder="Tulis Alamat Anda..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block p-2 poppins-18-semibold">Simpan Data</button>
                        </form>
                    </div>
                </div>

                <div class="col card ml-3 mr-4 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title poppins-medium-24"> Detail Pembelian </h4>
                        <table class="table table-borderless bg-light">
                            <thead>
                                <tr>
                                    <th class="roboto-14-medium" scope="col" colspan="2">
                                        Nama Produk
                                    </th>
                                    <th class="roboto-14-medium text-right" scope="col">Harga</th>
                                    <th class="roboto-14-medium text-right" scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="roboto-14-reguler" scope="row" colspan="2">Paket Pelajar</td>
                                    <td class="roboto-14-reguler text-right">600000</td>
                                    <td class="roboto-14-reguler text-right">600000</td>
                                </tr>
                                <tr>
                                    <td scope="row" colspan="2"></td>
                                    <td class="roboto-14-medium text-right">Total</td>
                                    <td class="roboto-14-medium text-right">600000</td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 class="card-title poppins-medium-24"> Metode Pembayaran</h4>
                        <p class="card-title poppins-14-medium my-3">Transfer Pembayaran</p>
                        <img src="https://www.bni.co.id/Portals/1/bni-logo-id.svg?ver=2017-04-27-170938-000" alt="BNI Logo">
                        <p class="mt-3 roboto-14-reguler">Robi Nurhidayat</p>
                        <p class="mt-n2 roboto-14-bold">193849901239</p>
                        <button type="submit" class="btn btn-primary btn-block p-2 poppins-18-semibold">Selesaikan Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>