<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$id_pemesanan	= $_POST['id_pemesanan'];
			$nama			= $_POST['nama'];
			$alamat			= $_POST['alamat'];
			$handphone		= $_POST['handphone'];
			$pesanan		= $_POST['pesanan'];
			$jml_pemesanan	= $_POST['jml_pemesanan'];
			$ukuran			= $_POST['ukuran'];
			$cek = mysqli_query($koneksi, "SELECT * FROM t_penjualan WHERE id_pemesanan='$id_pemesanan'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO t_penjualan(id_pemesanan, nama, alamat, handphone, pesanan, jml_pemesanan, ukuran) VALUES('$id_pemesanan', '$nama', '$alamat', '$handphone', '$pesanan', '$jml_pemesanan', '$ukuran')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, ID sudah terdaftar.</div>';
			}
		}
		?>

		<form action="index.php?page=tambah" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nama" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Hand Phone</label>
				<div class="col-md-6 col-sm-6">
					<input type="number" name="handphone" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ukuran</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ukuran" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Pemesanan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="jml_pemesanan" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pesanan</label>
				<div class="col-md-6 col-sm-6">
					<select name="pesanan" class="form-control" required>
					<option value="">Pilih baju yang anda pesan</option>
						<option value="Chrisye">Percik Pesona ( Chrisye )</option>
						<option value="Fariz RM">Fariz RM</option>
						<option value="TSSD">Those Shocking Shacking Days</option>
						<option value="Sharkmove">SharkMove</option>
						<option value="Panbers">Panbers</option>
						<option value="Benyamin S">Benyamin S</option
					</select>
				</div>
			</div>
			
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_mhs" class="btn btn-warning">Kembali</a>
			</div>
		
		</form>
	</div>
