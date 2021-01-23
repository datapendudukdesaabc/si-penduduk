<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Kartu Keluarga</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">No KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kk" class="form-control" id="inputEmail3" placeholder="no kk" required>
                            </div>
                        </div> 
                         <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nama KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_kpla_keluarga" class="form-control" id="inputEmail3" placeholder="nama kk" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="alamat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Kelurahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelurahan" class="form-control" id="inputEmail3" placeholder="kelurahan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kecamatan"class="form-control" id="inputEmail3" placeholder="kecamatan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Kode Pos</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_pos"class="form-control" id="inputEmail3" placeholder="kode pos" required>
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
                    <a href="?page=kartukeluarga_tambah&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kartu Keluarga
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_kk=$_POST['no_kk'];
	$nm_kpla_keluarga=$_POST['nm_kpla_keluarga'];
	$alamat=$_POST['alamat'];
	$kelurahan=$_POST['kelurahan'];
    $kecamatan=$_POST['kecamatan'];
    $kode_pos=$_POST['kode_pos'];

    //buat sql
    $sql="INSERT INTO tbl_kartukeluarga VALUES ('$no_kk','$nm_kpla_keluarga','$alamat','$kelurahan','$kecamatan','$kode_pos')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=kartukeluarga&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
