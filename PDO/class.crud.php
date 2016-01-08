<?php

class crud
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
	public function create($nama,$alamat,$email,$sandi,$telp, $tanggal, $jenis_kelamin, $pendidikan, $jurusan)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO member(nama,alamat,email,sandi,telp,tanggal,jenis_kelamin,pendidikan,jurusan) VALUES(:nama, :alamat, :email, :sandi, :telp, :tanggal, :jenis_kelamin, :pendidikan,:jurusan )");
			$stmt->bindparam(":nama",$nama);
			$stmt->bindparam(":alamat",$alamat);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":sandi",$sandi);
			$stmt->bindparam(":telp",$telp);
			$stmt->bindparam(":tanggal",$tanggal);
			$stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
			$stmt->bindparam(":pendidikan",$pendidikan);
			$stmt->bindparam(":jurusan",$jurusan);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
		
	}
	
	public function getID($id_member)
	{
		$stmt = $this->db->prepare("SELECT * FROM member WHERE id_member=:id_member");
		$stmt->execute(array(":id_member"=>$id_member));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($nama,$alamat,$email,$sandi,$telp, $tanggal, $jenis_kelamin, $pendidikan, $jurusan)
	{
		try
		{
			$stmt=$this->db->prepare("UPDATE member SET nama=:nama, 
		                                               alamat=:alamat, 
													   email=:email,
													   sandi=:sandi,
													   telp=:telp,
													   tanggal=:tanggal,
													   jenis_kelamin=:jenis_kelamin,
													   pendidikan=:pendidikan,
													   jurusan=:jurusan
													WHERE id_member=:id_member ");
			$stmt->bindparam(":nama",$nama);
			$stmt->bindparam(":alamat",$alamat);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":sandi",$sandi);
			$stmt->bindparam(":telp",$telp);
			$stmt->bindparam(":tanggal",$tanggal);
			$stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
			$stmt->bindparam(":pendidikan",$pendidikan);
			$stmt->bindparam(":jurusan",$jurusan);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($id_member)
	{
		$stmt = $this->db->prepare("DELETE FROM member WHERE id_member=:id_member");
		$stmt->bindparam(":id_member",$id_member);
		$stmt->execute();
		return true;
	}
	
	/* paging */
	
	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
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
                <td align="center">
                <a href="edit-data.php?edit_id=<?php print($row['id_member']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['id_member']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */
	
}
