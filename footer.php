<img src="img/icon.png" class="myIcon">
<div class="fotter">
	<div class="fotter-center">Contract us | About us | Privacy poclicy</div>
</div>
<script type="text/javascript">
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
			$(".myIcon").fadeIn();
		}else{
			$(".myIcon").fadeOut();
		}
	});
	$(".myIcon").click(function(){
		$("html,body").animate({
			scrollTop:0
		},500)
	});
</script>