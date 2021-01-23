<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Informasi Detail Kartu Keluarga </h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_kartukeluarga WHERE no_kk='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">No KK</td> <td><?= $data['no_kk'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama KK</td> <td><?= $data['nm_kpla_keluarga'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Kelurahan</td> <td><?= $data['kelurahan'] ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td> <td><?= $data['kecamatan'] ?></td>
                        </tr>
						<tr>
                            <td>Kode Pos</td> <td><?= $data['kode_pos'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=kartukeluarga&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Kartu Keluarga </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

