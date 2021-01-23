<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_ktp WHERE no_urut ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Kartu Tanda Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">No Urut</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_urut" value="<?=$data['no_urut']?>"class="form-control" id="inputEmail3" placeholder="No Urut">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Tgl Permohonan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_permohonan" value="<?=$data['tgl_permohonan']?>"class="form-control" id="inputEmail3" placeholder="Tgl Permohonan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Jenis Permohonan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_permohonan" value="<?=$data['jenis_permohonan']?>"class="form-control" id="inputEmail3" placeholder="Jenis Permohonan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nik Ktp</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik_ktp" value="<?=$data['nik_ktp']?>"class="form-control" id="inputEmail3" placeholder="Nik Ktp">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="noPerkara" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama" >
                            </div>
                        </div>
                             

                        <div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputPassword3" placeholder="alamat">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Kartu Tanda Penduduk </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=ktp&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Ktp
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_urut=$_POST['no_urut'];
    $tgl_permohonan=$_POST['tgl_permohonan'];
    $jenis_permohonan=$_POST['jenis_permohonan'];
    $nik_ktp=$_POST['nik_ktp'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    //buat sql
    $sql="UPDATE tbl_ktp SET no_urut='$no_urut',tgl_permohonan='$tgl_permohonan',jenis_permohonan='$jenis_permohonan',nik_ktp='$nik_ktp',nama='$nama',
    alamat='$alamat' WHERE no_urut ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=ktp&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



