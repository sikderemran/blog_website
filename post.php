<?php include "header.php" ?>
<?php
	if (!isset($_GET['id']) || $_GET['id']==NULL) {
		header("Location:404.php");
	}else{
		$id=$_GET['id'];
	}
 ?>
<div class="row two-colum-row navbar-light " style="background-color: #e3f2fd;">
  <div class="col-sm-8 two-colum-first ">
	<div class="card w-90 card-margin">
		<?php
		 $query="select * from tbl_post where id=$id";
		 $post=$db->select($query);
			if($post){
				while($result=$post->fetch_assoc()){
		 ?>
	<div class="card-body">
	<div class="alert alert-info" role="alert">
		<h5 class="card-title card-text"><?php echo $result['title']; ?></h5>
	</div>
	<h5 class="card-title"><?php echo $result['title']; ?></h5>
	<p><?php echo $fm->formatDate($result['date']);?>&nbsp;By<?php echo  $result['author']; ?></p>
	<p class="card-text"><?php echo $result['body']; ?></p>
	</div>
	<?php } ?>
	<?php }else {header("Location:404.php");} ?>
	<!-----------------------Pagination---------------->
	</div>
	<!----------------------Notice board-------------------->
	<?php include "notice.php" ?>
  </div>
<!------------------side bar------------------>
  <?php include "siderbar.php" ?>
</div>
<?php include "footer.php" ?>