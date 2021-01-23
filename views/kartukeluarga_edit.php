<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kartukeluarga WHERE no_kk ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Kartu Keluarga</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">No KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kk" value="<?=$data['no_kk']?>"class="form-control" id="inputEmail3" placeholder="No KK">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Nama KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_kpla_keluarga" value="<?=$data['nm_kpla_keluarga']?>"class="form-control" id="inputEmail3" placeholder="Nama KK">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Kelurahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelurahan" value="<?=$data['kelurahan']?>"class="form-control" id="inputEmail3" placeholder="Kelurahan">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="noPerkara" class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kecamatan" value="<?=$data['kecamatan']?>"class="form-control" id="inputEmail3" placeholder="Kecamatan" >
                            </div>
                        </div>
                             

                        <div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Kode Pos</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_pos" value="<?=$data['kode_pos']?>" class="form-control" id="inputPassword3" placeholder="Kode Pos">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Kartu Keluarga </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kartukeluarga&actions=tampil" class="btn btn-danger btn-sm">
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
    $sql="UPDATE tbl_kartukeluarga SET no_kk='$no_kk',nm_kpla_keluarga='$nm_kpla_keluarga',alamat='$alamat',kelurahan='$kelurahan',kecamatan='$kecamatan',
    kode_pos='$kode_pos' WHERE no_kk ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=kartukeluarga&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



