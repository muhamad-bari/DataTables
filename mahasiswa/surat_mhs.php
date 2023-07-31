<?php include_once "header.php"; ?>
       
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Input Berkas Penelitian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Upload Penelitian</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p>
                                    Jika terjadi kesalahan input berkas silahkan hubungi admin atau kemana ya...
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                         <?php
                    include "../koneksi.php";
                    $gg=$_SESSION['username'];
                                              
  $cekdata="select nim from surat_mhs where nim='$gg'";
  
  $ada=mysqli_query($koneksi, $cekdata) or die(mysqli_error());
  if(mysqli_num_rows($ada)>0)
  { 
     echo '<center><h3><span class="badge badge-warning"> Maaf, anda sudah melakukan pengajuan berkas</span></h3></center>'; 
  }
  else {
    ?>
    
      <div class="card-header"><i class="fas fa-table mr-1"></i>Penelitian</div>
                            <div class="card-body">
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Judul Penelitian" name="nama" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="nama">Kode Dosen</label>
                                    <input type="text" class="form-control" id="nim" value="<?= $_SESSION['nama']; ?>" name="nim" readonly required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1">Upload Berkas Penelitian</label>
                                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
                                  </div>
                                  <hr>
                                  <input type="submit" class="btn btn-primary" name="upload" value="Kirim">
                                </form>
                            </div>
                        </div>
    <?php
  }                                           
   ?>
                            
                        
                    </div>
                </main>
<?php include_once "footer.php"; ?>