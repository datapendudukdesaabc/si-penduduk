<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Ktp</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Penduduk Desa ABC Capil Kisaran </h2>
                        <h4>Jalan M.Yamin, No.33, Kisaran, 
                        Kisaran Barat Kabupaten Asahan, Sumatera Utara, Kode Pos : 21211 <br></h4>
                        <hr>
                        <h3>DATA KARTU TANDA PENDUDUK (KTP)  <?php echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
                                <table class="table" border="4" width="600px">
                                    <tr bgcolor="fanta">
                                    <th>No.</th>
                                    <th><center>No Urut</center></th>
                                    <th><center>Tanggal Permohonan</center></th>
                                    <th><center>Jenis Permohonan</center></th>
                                    <th width="15%"><center>Nik Ktp</center></th>
                                    <th width="10%">Nama</th>
                                    <th><center>Alamat</center></th>
                                    
                                </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_ktp WHERE substr(tgl_permohonan,1,4)='$ambilthn'";
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
                                <tr bgcolor="fanta">
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_urut'] ?></td>
                                    <td><?= $data['tgl_permohonan'] ?></td>
                                    <td><?= $data['jenis_permohonan'] ?></td>
                                    <td><?= $data['nik_ktp'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        <td>
                                        <td>
                                        <br><br>
                                        Kota Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br>
                                        <u>Desa ABC.<strong>
                                        
                                        
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
