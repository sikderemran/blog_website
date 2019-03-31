<?php include "header.php" ?>
<?php
	if (!isset($_GET['search']) || $_GET['search']==NULL) {
		header("Location:404.php");
	}else{
		$search=$_GET['search'];
	}
 ?>
<div class="row two-colum-row navbar-light " style="background-color: #e3f2fd;">
  <div class="col-sm-8 two-colum-first ">
	<div class="card w-90 card-margin">
		<?php
			$query="select * from tbl_post where title like '%$search%' or body like '%$search%' ";
			$post=$db->select($query);
			if($post){
				while($result=$post->fetch_assoc()){
		?>
	<div class="card-body">
		<h5 class="card-title"><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h5>
		<p><?php echo $fm->formatDate($result['date']);?>By <?php echo $result['author']; ?></p>
	    <p class="card-text"><?php echo $fm->textShorten($result['body']); ?></p>
		<a href="post.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">Red More</a>
	</div>
	<?php } } else{ ?>
	<div class="card-body">
			<div class="alert alert-info" role="alert">
				<h5 class="card-title card-text">Search query not found.</h5>
			</div>
		</div>
	<?php }?>
	<!-----------------------Pagination---------------->
	</div>
	<!----------------------Notice board-------------------->
	<?php include "notice.php" ?>
  </div>
<!------------------side bar------------------>
  <?php include "siderbar.php" ?>
</div>
<?php include "footer.php" ?>