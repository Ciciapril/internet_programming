<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $sandi = $_POST['sandi'];
    $telp = $_POST['sandi'];
    $tanggal = $_POST['tanggal'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pendidikan = $_POST['pendidikan'];
    $jurusan = $_POST['jurusan'];
	
	
	if($crud->create($nama,$alamat,$email,$sandi,$telp, $tanggal, $jenis_kelamin, $pendidikan, $jurusan))
	{
		header("Location: add-data.php?inserted");
	}
	else
	{
		header("Location: add-data.php?failure");
	}
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong> Data Berhasil di simpan!</strong> <a href="index.php">HOME</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
	</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

 	
	 <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Aklamat</td>
            <td><input type='text' name='alamat' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>E-mail</td>
            <td><input type='email' name='email' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>sandi</td>
            <td><input type='password' name='contact_no' class='form-control' required></td>
        </tr>
         <tr>
            <td>No Telepon</td>
            <td><input type='text' name='contact_no' class='form-control' required></td>
        </tr>
         <tr>
            <td>Tanggal</td>
            <td><input type='date' required></td>
        </tr>
         <tr>
            <td>Jenis Kelamin</td>
            <td><div class="radio">
            <label class="radio-inline" id="jk">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="laki-laki"> Laki-Laki
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Perempuan"> Perempuan
            </label>
        </div></td>
        </tr>
         <tr>
            <td>Pendidikan</td>
            <td><select class="form-control" id ="pendidikan">
          <option value="SMA/K">SMA/K</option>
          <option value="D1">D1</option>
          <option value="D2">D2</option>
          <option value="D3">D3</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
        </select></td>
        </tr>
         <tr>
            <td>Jurusan</td>
            <td><input type='text' name='contact_no' class='form-control' required></td>
        </tr>

 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Create New Record
			</button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

