<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: delete.php?deleted");	
}

?>

<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
        <div class="alert alert-success">
    	<strong>Success!</strong> record was deleted... 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
    	<strong>Sure !</strong> to remove the following record ? 
		</div>
        <?php
	}
	?>	
</div>

<div class="clearfix"></div>

<div class="container">
 	
	 <?php
	 if(isset($_GET['delete_id']))
	 {
		 ?>
         <table class='table table-bordered'>
         <tr>
         <th>Id</th>
         <th>Nama</th>
         <th>Alamat</th>
         <th>Email</th>
         <th>Sandi</th>
         <th>No Telepon</th>
         <th>Tanggal Lahir</th>
         <th>Jenis Kelamin</th>
         <th>Pendidikan</th>
         <th>Jurusan</th>
         </tr>
         <?php
         $stmt = $DB_con->prepare("SELECT * FROM member WHERE id_member=:id_member");
         $stmt->execute(array(":id_member"=>$_GET['delete_id']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php print($row['id_member']); ?></td>
             <td><?php print($row['nama']); ?></td>
             <td><?php print($row['alamat']); ?></td>
             <td><?php print($row['email']); ?></td>
         	<td><?php print($row['sandi']); ?></td>
            <td><?php print($row['telp']); ?></td>
            <td><?php print($row['tanggal']); ?></td>
            <td><?php print($row['jenis_kelamin']); ?></td>
            <td><?php print($row['pendidikan']); ?></td>
            <td><?php print($row['jurusan']); ?></td>
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
	?>
  	<form method="post">
    <input type="hidden" name="id_member" value="<?php echo $row['id_member']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; YES</button>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
    </form>  
	<?php
}
else
{
	?>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
    <?php
}
?>
</p>
</div>	
