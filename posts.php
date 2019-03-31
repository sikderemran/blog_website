<?php include "header.php" ?>
<?php
	if (!isset($_GET['category']) || $_GET['category']==NULL) {
		header("Location:404.php");
	}else{
		$category=$_GET['category'];
	}
 ?>
<div class="row two-colum-row navbar-light " style="background-color: #e3f2fd;">
  <div class="col-sm-8 two-colum-first ">
	<div class="card w-90 card-margin">
		<?php 
			$total_page=1;
			if(isset($_GET["page"])){
				$page=$_GET["page"];
			}else{ $page=1; }
			$start_form=($page-1)*$total_page;
		?>

		<?php
			$query="select * from tbl_post where cat=$category";
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
	<?php } ?>
	<nav aria-label="Page navigation example">
		<?php 
				$query="select * from tbl_post where cat=$category";
				$result=$db->select($query);
				$total_rows=mysqli_num_rows($result);
				$total_pages=ceil($total_rows/$total_page);
				
		echo "<ul class='pagination justify-content-center'><li class='page-item'><a class='page-link' href='index.php?page=1' tabindex='-1'>".'First page'."</a></li>";
			for ($i=1; $i <=$total_pages; $i++) { 
				echo "<li class='page-item'><a class='page-link' href='index.php?page=$i'>".$i."</a></li>";
			}
		echo "<li class='page-item'><a class='page-link' href='index.php?page=$total_pages'>".'Last page'."</a></li>
		</ul>" ?>
	</nav>
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