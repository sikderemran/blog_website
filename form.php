
<!DOCTYPE html>
<html>
<head>
	<title>perl language</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#logIn").hide();
			$(".login").click(function(){
				$("#signUp").hide();
				$(".login").css({"background":"#03a9f4",
					 			  "border-radius":"10px",
					 			  "padding":"5px"
				});
				$(".signup").css("background","#0499B6");
				$("#logIn").show();
			});
			$(".signup").click(function(){
				$("#logIn").hide();
				$(".signup").css({"background":"#03a9f4",
					 			  "border-radius":"10px",
					 			  "padding":"5px"
				});
				$(".login").css("background","#0499B6");
				$("#signUp").show();
			});
		});
	</script>
</head>
<body>
	<div class="box">
		<h2 class="login">login</h2>
		<h2 class="signup">signup</h2>
		<form id="logIn">
			<div class="inputBox">
				<input type="text" name="" required="1">
				<label>name1</label>
			</div>
			<div class="inputBox">
				<input type="password" name="" required="1">
				<label>Password</label>
			</div>
			<div class="inputBox">
				<input type="password" name="" required="1">
				<label>Password</label>
			</div>
			<div class="inputBox">
				<input type="password" name="" required="1">
				<label>Password</label>
			</div>
			<button>submit</button>
		</form>
		<form id="signUp">
			<div class="inputBox">
				<input type="text" name="" required="1">
				<label>name2</label>
			</div>
			<div class="inputBox">
				<input type="password" name="" required="1">
				<label>Password</label>
			</div>
			<div class="inputBox">
				<input type="password" name="" required="1">
				<label>Password</label>
			</div>
			<div class="inputBox">
				<input type="password" name="" required="1">
				<label>Password</label>
			</div>
			<button>submit</button>
		</form>
	</div>
</body>
</html>

















