 <div class="col-md-10" style="min-height:600px">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?content=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?content=coa">COA</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah COA</li>
  </ol>
</nav>
<script>
  function validateForm() {
      var a = document.forms["myForm"]["nama_transaksi"].value;
      var b = document.forms["myForm"]["nominal"].value;
      if (a == "0") {
          alert("Silahkan isi nama_transaksi");
          return false;
      }
      if (b == "") {
          alert("Deskripsi Product tidak boleh kosong");
          return false;
      }
      
  }
</script>
		<h2>Tambah COA</h2>
		<hr>
		
		<form name="myForm" onsubmit="return validateForm()" 
      action="?content=coa_tambahaksi" method="POST" 
      enctype="multipart/form-data">
	  
		<form action="?content=product_tambahaksi" method="post">
			<div class="form-group">
				<label>Kode Akun</label>
					<input type="text" name="kode_akun" class="form-control" >
			</div>
			<div class="form-group">
				<label>Nama Akun</label>
					<input type="text" name="nama" class="form-control" > </textarea>
			</div>
			<div class="form-group">
			<label>Golongan Akun</label>
					<select name="gol" class="form-control" required>
					<option selected value="">Pilih Golongan Akun</option>
                                                    <option value="Aktiva">Aktiva</option>
                                                    <option value="Pasiva">Pasiva</option>
                                                    <option value="Ekuitas">Ekuitas</option>
                                                    <option value="Pendapatan">Pendapatan</option>
                                                    <option value="Beban">Beban</option>
					</select>
			</div>
			<div class="form-group">
			<label>Jenis Klasifikasi Akun</label>
					<select name="klas" class="form-control" required>
					<option selected value="">Pilih Jenis Klasifikasi Akun</option>
                                                    <option value="Debet">Debet</option>
                                                    <option value="Kredit">Kredit</option>
					</select>
			</div>
				<div class="form-group">
				<label>Saldo</label>
					<input type="text" name="saldo" class="form-control" > </textarea>
			</div>

			<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>	
</body>
</html>