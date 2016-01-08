<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
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
	
	if($crud->update($nama,$alamat,$email,$sandi,$telp,$tanggal,$jenis_kelamin,$pendidikan,$jurusan))
	{
		$msg = "<div class='alert alert-info'>
				<strong>WOW!</strong> Record was updated successfully <a href='index.php'>HOME</a>!
				</div>";
	}
	else
	{
		$msg = "<div class= 'alert alert-warning'>
				<strong>SORRY!</strong> ERROR while updating record !
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id_member = $_GET['edit_id'];
	extract($crud->getID($id_member));	
}

?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 
     <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' class='form-control' value="<?php echo $nama; ?>" required></td>
        </tr>
 
        <tr>
            <td>Alamat</td>
            <td><input type='text' name='alamat' class='form-control' value="<?php echo $alamat; ?>" required></td>
        </tr>
 
        <tr>
            <td>Email</td>
            <td><input type='text' name='email' class='form-control' value="<?php echo $email; ?>" required></td>
        </tr>
 
        <tr>
            <td>Sandi</td>
            <td><input type='text' name='sandi' class='form-control' value="<?php echo $sandi; ?>" required></td>
        </tr>

         <tr>
            <td>Telp</td>
            <td><input type='text' name='telp' class='form-control' value="<?php echo $telp; ?>" required></td>
        </tr>
         <tr>
            <td>Tanggal Lahir</td>
            <td><input type='date' name='tanggal' class='form-control' value="<?php echo $tanggal; ?>" required></td>
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
        </select> </td>
        </tr>
         <tr>
            <td>Jurusan</td>
            <td><input type='text' name='jurusan' class='form-control' value="<?php echo $jurusan; ?>"</td>
        </tr>

 
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Update this Record
				</button>
                <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

