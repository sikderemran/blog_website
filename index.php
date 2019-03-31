

	<!------------------------nav bar ------------------------>
<?php include "header.php" ?>
<!--------------------------carousel slide------------------>
<?php include "slider.php" ?>
<!-------------------------------Text body---------------------->
<div class="row two-colum-row navbar-light " style="background-color: #e3f2fd;">
  <div class="col-sm-8 two-colum-first ">
	<div class="card w-90 card-margin">
		<div class="card-body">
			<div class="alert alert-info" role="alert">
				<h5 class="card-title card-text">Latest Post</h5>
			</div>
		</div>
		<?php 
			$total_page=3;
			if(isset($_GET["page"])){
				$page=$_GET["page"];
			}else{ $page=1; }
			$start_form=($page-1)*$total_page;
		?>


		<?php
			$query="select * from tbl_post limit $start_form,$total_page";
			$post=$db->select($query);
			if($post){
				while($result=$post->fetch_assoc()){
		?>
	<div class="card-body">
		<h5 class="card-title"><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h5>
		<p><?php echo $fm->formatDate($result['date']);?>&nbsp;By <?php echo $result['author']; ?></p>
	    <p><?php echo $fm->textShorten($result['body']); ?></p>
	<a href="post.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">Red More</a>
	</div>
	<?php } ?>
	<nav aria-label="Page navigation example">
		<?php 
				$query="select * from tbl_post";
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
<!-----------Testimonial---------->
<div class="container mt-5">
	<div class="text-center mb-4"><h2 class="text-primary">TESTIMONIAL</h2></div>
	<div class="row">
		<div class="col-md-12">
			<div id="testimonial-slider" class="owl-carousel">
				<div class="testimonial">
                    <div class="pic">
                        <img src="img/testimonial-1.jpg">
                    </div>
                    <div class="testimonial-profile">
                        <h3 class="title">Annato kumar Sarker</h3>
                        <span class="post">Pharmacist</span>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.
                    </p>
                </div>
			
			 <div class="testimonial">
                    <div class="pic">
                        <img src="img/testimonial-2.jpg">
                    </div>
                    <div class="testimonial-profile">
                        <h3 class="title">Shakil Sikder</h3>
                        <span class="post">Pharmacist</span>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.
                    </p>
                </div>
                <div class="testimonial">
                    <div class="pic">
                        <img src="img/testimonial-1.jpg">
                    </div>
                    <div class="testimonial-profile">
                        <h3 class="title">Nur nobi</h3>
                        <span class="post">Phramacist</span>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.
                    </p>
                </div>
		</div>
	</div>
</div>
</div>

<!--------------fotter and icon-->
<?php include "footer.php" ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
   $(document).ready(function(){
	   $("#testimonial-slider").owlCarousel({
		   items:2,
		   itemsDesktop:[10000,2],
		   itemsDesktopSmall:[979,2],
		   itemsTablet:[768,1],
           pagination:false,
           navigation:true,
           navigationText:["",""],
           autoPlay:true
	   })
   })	
</script>

</body>
</html>