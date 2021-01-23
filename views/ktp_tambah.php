<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Kartu Tanda Penduduk (KTP)</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">No Urut</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_urut" class="form-control" id="inputEmail3" placeholder="no urut" required>
                            </div>
                        </div> 
                         <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Tgl Permohonan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_permohonan" class="form-control" id="inputEmail3" placeholder="tgl permohonan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Jenis Permohonan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_permohonan" class="form-control" id="inputEmail3" placeholder="jenis permohonan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nik Ktp</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik_ktp" class="form-control" id="inputEmail3" placeholder="nik ktp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama"class="form-control" id="inputEmail3" placeholder="nama" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat"class="form-control" id="inputEmail3" placeholder="alamat" required>
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
                    <a href="?page=ktp_tambah&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kartu Tanda Penduduk
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
    $sql="INSERT INTO tbl_ktp VALUES ('$no_urut','$tgl_permohonan','$jenis_permohonan','$nik_ktp','$nama','$alamat')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=ktp&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
