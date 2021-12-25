<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id_pemesanan'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id_pemesanan = $_GET['id_pemesanan'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM t_penjualan WHERE id_pemesanan='$id_pemesanan'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$alamat			= $_POST['alamat'];
			$handphone		= $_POST['handphone'];
			$pesanan 		= $_POST['pesanan'];
			$jml_pemesanan 	= $_POST['jml_pemesanan'];
			$ukuran			= $_POST['ukuran'];

			$sql = mysqli_query($koneksi, "UPDATE t_penjualan SET nama='$nama', alamat='$alamat', handphone='$handphone', pesanan ='$pesanan', jml_pemesanan='$jml_pemesanan', ukuran='$ukuran' WHERE id_pemesanan='$id_pemesanan'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_mhs";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit&id_pemesanan=<?php echo $id_pemesanan; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Id Pemesanan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="id_pemesanan" class="form-control" size="4" value="<?php echo $data['id_pemesanan']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Customer</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Handphone</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="handphone" class="form-control" value="<?php echo $data['handphone']; ?>" required>
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
					<input type="text" name="jml_pemesanan" class="form-control" value="<?php echo $data['jml_pemesanan']; ?>" required>
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
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_mhs" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
