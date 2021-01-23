<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_datapenduduk WHERE nik ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="nik">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Nama Penduduk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Penduduk">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tmpt_lahir" value="<?=$data['tmpt_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_lahir" value="<?=$data['tgl_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tgl Lahir">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="noPerkara" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jns_kel" value="<?=$data['jns_kel']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" >
                            </div>
                        </div>
                             

                        <div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputPassword3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>" class="form-control" id="inputPassword3" placeholder="Agama">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pendidikan" value="<?=$data['pendidikan']?>" class="form-control" id="inputPassword3" placeholder="Pendidikan">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan" value="<?=$data['pekerjaan']?>" class="form-control" id="inputPassword3" placeholder="Pekerjaan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penduduk</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datapenduduk&actions=tampil" class="btn btn-danger btn-sm">
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
    $sql="UPDATE tbl_datapenduduk SET nik='$nik',nama='$nama',tmpt_lahir='$tmpt_lahir',tgl_lahir='$tgl_lahir',jns_kel='$jns_kel',
	alamat='$alamat',agama='$agama',pendidikan='$pendidikan',pekerjaan='$pekerjaan' WHERE nik ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datapenduduk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



