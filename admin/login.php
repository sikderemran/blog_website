<?php include '../session.php'; 
 session::init();
?>
<?php include '../config/config.php'; ?>
<?php include '../database.php'; ?>
<?php include '../format.php'; ?>
<?php 
	$db= new Database();
	$fm=new format();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/myStyle.css">

</head>
<body>
<div class="container">
	<section id="content">
		<?php 
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$username=$fm->validation($_POST['username']);
				$password=$fm->validation(md5($_POST['password']));

				$username=mysqli_real_escape_string($db->link,$username);
				$password=mysqli_real_escape_string($db->link,$password);

				$query="select *from tbl_user where username='$username' and password='$password'";
				$result=$db->select($query);
				if($result!=false){
					$value=mysqli_fetch_array($result);
					$row=mysqli_num_rows($result);
					if($row>0){
						session::set("login",true);
						session::set("username",$value['username']);
						session::set("userId",$value['id']);
						header("Location:index.php");

					}else{
						echo "no result found";
					}
				}else{
					echo "wrong password";
				}
			}
		?>
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>