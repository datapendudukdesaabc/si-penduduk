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
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Kartu Tanda Penduduk </h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                        <p align="center"><img src="img/ktp.jpg" height="85" width="85"></img></p>
                            <h3><marquee>SELAMAT DATANG DI DATA KTP</marquee></h3>
                            
                             <table class="table" border="0" width="600px">
                             <tr bgcolor="gold">
                                <th>No</th>
                                <th>No Urut</th>
                                <th>Tgl Permohonan</th>
                                <th>Jenis Permohonan</th>
                                <th>Nik Ktp</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_ktp";
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
                                <tr bgcolor="gold">
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_urut'] ?></td>
                                    <td><?= $data['tgl_permohonan'] ?></td>
                                    <td><?= $data['jenis_permohonan'] ?></td>
                                    <td><?= $data['nik_ktp'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td>
                                        <a href="?page=ktp&actions=detail&id=<?= $data['no_urut'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=ktp&actions=edit&id=<?= $data['no_urut'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
										<a href="?page=ktp&actions=delete&id=<?= $data['no_urut'] ?>" class="btn btn-danger btn-xs">
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
                                    <a href="?page=ktp&actions=tambah" class="btn btn-info btn-sm"> Tambah Data

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

