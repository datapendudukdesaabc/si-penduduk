<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Kartu Keluarga </h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                        <p align="center"><img src="img/logogaruda.jpg" height="85" width="85"></img></p>
                            <h3><marquee>SELAMAT DATANG DI DATA KARTU KELUARGA</marquee></h3>
                            <table class="table" border="0" width="600px">
                            <tr bgcolor="copper">
                                <th>No</th>
                                <th>NO KK</th>
                                <th>Nama KK</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Kode Pos</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_kartukeluarga";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr bgcolor="copper">
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_kk'] ?></td>
                                    <td><?= $data['nm_kpla_keluarga'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['kelurahan'] ?></td>
                                    <td><?= $data['kecamatan'] ?></td>
                                    <td><?= $data['kode_pos'] ?></td>
                                    <td>
                                        <a href="?page=kartukeluarga&actions=detail&id=<?= $data['no_kk'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=kartukeluarga&actions=edit&id=<?= $data['no_kk'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=kartukeluarga&actions=delete&id=<?= $data['no_kk'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=kartukeluarga&actions=tambah" class="btn btn-info btn-sm"> Tambah Data

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

