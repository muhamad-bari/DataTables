<?php include_once "header.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Penelitian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Upload Penelitian</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p>
                                    Edit jadi apa aja
                                </p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Penelitian</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Judul Penelitian</th>
                                                <th>Nama Dosen</th>
                                                <th>Lampiran</th>
                                               <!--  <th>KRS</th> -->
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from surat_mhs");
		while($d = mysqli_fetch_array($data)){
			?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['Nama']; ?></td>
                                                <td><?php echo $d['nim']; ?></td>
                                                <td><?php echo $d['file']; ?></td>
                                                <!-- <td><?php echo $d['krs']; ?></td> -->
                                                <td><?php echo $d['tanggal']; ?></td>
                                                <td><?php echo $d['status']; ?></td>
                                                <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>"><span class="badge badge-warning">EDIT</span> </a>  
                <!-- <a href="print.php?id=<?php echo $d['id']; ?>"><span class="badge badge-info">PRINT</span> </a> -->
                 <a onclick="return confirm ('Yakin hapus <?php echo $d['Nama'];?> ?');" href="hapus.php?id=<?php echo $d['id']; ?>"><span class="badge badge-danger">HAPUS</span> </a>
                                           </td>
                                            </tr>
                                            
                                        </tbody>
                                        <?php 
		}
		?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once "footer.php"; ?>
