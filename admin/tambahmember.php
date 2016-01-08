<form method="post" action="" enctype="multipart/form-data">
 <div class="row">
 <div class="col-md-2">
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<input type="text" class="form-control"  placeholder="Nama" id="nama">
		 </div>
		 <div class="form-group">
			<input type="text" class="form-control" id="alamat" placeholder ="Alamat">
		  </div>
		  <div class="form-group">
			
			<input type="email" class="form-control" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
			
			<input type="password" class="form-control" id="sandi" placeholder="Sandi">
		  </div>
		   <div class="form-group">
			<input type="text" class="form-control" id="telp" placeholder ="No Telp">
		  </div>
				            
	</div>
	<div class="col-md-4">
		<div class="modal-body">
            <label>Tanggal Lahir</label>
            <input type="date" id="tanggal">
        </div>
		<label>Pendidikan Terakhir</label>
		<select class="form-control" id ="pendidikan">
		  <option>SMA/K</option>
		  <option>D1</option>
		  <option>D2</option>
		  <option>D3</option>
		  <option>S1</option>
		  <option>S2</option>
		</select>
		<div class="form-group">
		<input type="text" class="form-control" id="jurusan" placeholder="jurusan">
	  	</div>
	  	<label>Jenis Kelamin</label>
	  	<div class="radio">
		  	<label class="radio-inline" id="jk">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Laki-Laki
			</label>
			<label class="radio-inline">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Perempuan
			</label>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-2">
	</div>
  </div>
    <div class="row" align="center">
	  <button  type="button" class="btn btn-primary" id="buttonsimpanmember">SUBMIT</button>
	</div>	

</form> 