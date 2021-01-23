<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Informasi Detail Kartu Tanda Penduduk </h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_ktp WHERE no_urut='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">No Urut</td> <td><?= $data['no_urut'] ?></td>
                        </tr>
                        <tr>
                            <td>Tgl Permohonan</td> <td><?= $data['tgl_permohonan'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Permohonan</td> <td><?= $data['jenis_permohonan'] ?></td>
                        </tr>
						<tr>
                            <td>Nik Ktp</td> <td><?= $data['nik_ktp'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=ktp&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Ktp </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

