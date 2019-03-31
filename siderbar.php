<div class="col-sm-4 two-colum-second">
	<div class="card w-95 card-margin">
	<div class="card-body">
	<div class="alert alert-info" role="alert">
		<h5 class="card-title card-text">Category</h5>
	</div>
	<ul>
		<?php
		 $query="select * from tbl_cat";
		 $category=$db->select($query);
			if($category){
				while($result=$category->fetch_assoc()){
		 ?>
		<li><a href="posts.php?category=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>
		<?php } }else {?>
		<li>No Category created</li>
		<?php } ?>
	</ul>
	</div>
	</div>
	
	<div class="card w-95 card-margin">
	<div class="card-body">
	<div class="alert alert-info" role="alert">
		<h5 class="card-title card-text">Latest post</h5>
	</div>
	<ul>
		<?php
		 $query="select * from tbl_post limit 7";
		 $category=$db->select($query);
			if($category){
				while($result=$category->fetch_assoc()){
		 ?>
		<li><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></li>
		<?php echo $fm->textShorten($result['body'],100); ?>
		<?php } }?>
	</ul>
	</div>
  </div>
  <div class="card w-95 card-margin">
	<div class="card-body">
	<div class="alert alert-info" role="alert">
		<h5 class="card-title card-text">Category</h5>
	</div>
	<ul>
		<?php
		 $query="select * from tbl_cat";
		 $category=$db->select($query);
			if($category){
				while($result=$category->fetch_assoc()){
		 ?>
		<li><a href="posts.php?category=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>
		<?php } }else {?>
		<li>No Category created</li>
		<?php } ?>
	</ul>
	</div>
	</div>