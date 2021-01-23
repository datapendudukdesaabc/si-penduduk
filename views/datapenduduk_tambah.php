<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="nama penduduk" required>
                            </div>
                        </div> 
                         <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nama Penduduk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="nama penduduk" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tmpt_lahir" class="form-control" id="inputEmail3" placeholder="tempat lahir" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="tanggal lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jns_kel"class="form-control" id="inputEmail3" placeholder="jenis kelamin" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat"class="form-control" id="inputEmail3" placeholder="alamat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama"class="form-control" id="inputEmail3" placeholder="agama" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pendidikan"class="form-control" id="inputEmail3" placeholder="pendidikan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan"class="form-control" id="inputEmail3" placeholder="pekerjaan" required>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datapenduduk_tambah&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penduduk
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$tmpt_lahir=$_POST['tmpt_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
    $jns_kel=$_POST['jns_kel'];
    $alamat=$_POST['alamat'];
    $agama=$_POST['agama'];
    $pendidikan=$_POST['pendidikan'];
    $pekerjaan=$_POST['pekerjaan'];
    //buat sql
    $sql="INSERT INTO tbl_datapenduduk VALUES ('$nik','$nama','$tmpt_lahir','$tgl_lahir','$jns_kel','$alamat','$agama','$pendidikan','$pekerjaan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=datapenduduk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
