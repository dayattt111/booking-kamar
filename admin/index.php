<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makassar Rooms - Enjoy Your Holiday</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>
<body>
<?php require_once '../item/header.php'; ?>
    <section class="hero">
                <div class="center">
                    <h1 class="">Enjoy Your Holiday</h1>
                    <p>Welcome to Makassar Rooms, where comfort meets luxury.</p>
                    <a href="#adminPanel" class="btn lembayung">Lihat Kamar</a>
                </div>
    </section>

    <section id="adminPanel" class="formModal">
        <div class="nav-admin">
            <!-- isiki -->
             <div class="nav-admin-section gaps">cari</div>
             <div class="nav-admin-section">tambah</div>
        </div>
        <table class="tabel-data" >
            <tr>
                <th>No:</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th colspan="2">Keterangan</th>
            </tr>

            <!-- Data Dummy -->
            <tr>
                <td class="id">1</td>
                <td class="nama">Kamar Biasa</td>
                <td class="harga">Rp. 800.000y</td>
                <td class="deskripsi">ini adalah kamar biasa saja</td>
                <td class="gambar"><img src="../asset/k1.jpg" height="100px" alt="gambar not found"></td>
                <td class="hapus">Hapus</td>
                <td class="edit" >Edit</td>
            </tr>
            <!-- Batas Data Dummy -->
            <!-- Data Dummy -->
            <tr>
                <td class="id">1</td>
                <td class="nama">Kamar Biasa</td>
                <td class="harga">Rp. 800.000y</td>
                <td class="deskripsi">ini adalah kamar biasa saja</td>
                <td class="gambar"><img src="../asset/k1.jpg" height="100px" alt="gambar not found"></td>
                <td class="hapus">Hapus</td>
                <td class="edit" >Edit</td>
            </tr>
            <!-- Batas Data Dummy -->
            <!-- Data Dummy -->
            <tr>
                <td class="id">1</td>
                <td class="nama">Kamar Biasa</td>
                <td class="harga">Rp. 800.000y</td>
                <td class="deskripsi">ini adalah kamar biasa saja</td>
                <td class="gambar"><img src="../asset/k1.jpg" height="100px" alt="gambar not found"></td>
                <td class="hapus">Hapus</td>
                <td class="edit" >Edit</td>
            </tr>
            <!-- Batas Data Dummy -->
            <!-- Data Dummy -->
            <tr>
                <td class="id">1</td>
                <td class="nama">Kamar Biasa</td>
                <td class="harga">Rp. 800.000y</td>
                <td class="deskripsi">ini adalah kamar biasa saja</td>
                <td class="gambar"><img src="../asset/k1.jpg" height="100px" alt="gambar not found"></td>
                <td class="hapus">Hapus</td>
                <td class="edit" >Edit</td>
            </tr>
            <!-- Batas Data Dummy -->
            <!-- Data Dummy -->
            <tr>
                <td class="id">1</td>
                <td class="nama">Kamar Biasa</td>
                <td class="harga">Rp. 800.000y</td>
                <td class="deskripsi">ini adalah kamar biasa saja</td>
                <td class="gambar"><img src="../asset/k1.jpg" height="100px" alt="gambar not found"></td>
                <td class="hapus">Hapus</td>
                <td class="edit" >Edit</td>
            </tr>
            <!-- Batas Data Dummy -->

        </table>
    </section>

    <section class="rooms">
        <h2 class="text-center text-gradient">Our Rooms</h2>
        <div class="container">
                    <div class="card">
                        <img src="../asset/k0.jpg" class="card-img-top" alt="Room 1">
                        <div class="card-body">
                            <h5 class="card-title">Deluxe Room</h5>
                            <p class="card-text">A spacious room with a beautiful view.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                <!-- <div class="col-md-4"> -->
                    <div class="card">
                        <img src="../asset/k1.jpg" class="card-img-top" alt="Room 2">
                        <div class="card-body">
                            <h5 class="card-title">Standard Room</h5>
                            <p class="card-text">Comfortable and affordable for everyone.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-4"> -->
                    <div class="card">
                        <img src="../asset/k3.jpg" class="card-img-top" alt="Room 3">
                        <div class="card-body">
                            <h5 class="card-title">Family Suite</h5>
                            <p class="card-text">Perfect for families with kids.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
    </section>

<?php require_once '../item/footer.php' ?>
</body>
</html>