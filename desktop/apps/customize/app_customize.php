
<!DOCTYPE html>
<html>
<head>

<!--
 _____   _____        ___   _____   _   _        _____   _   __   _   _____   _   _  
|  _  \ |  _  \      /   | |  _  \ | | | |      /  ___/ | | |  \ | | /  ___| | | | | 
| |_| | | |_| |     / /| | | |_| | | |_| |      | |___  | | |   \| | | |     | |_| | 
|  ___/ |  _  /    / / | | |  _  { |  _  |      \___  \ | | | |\   | | |  _  |  _  | 
| |     | | \ \   / /  | | | |_| | | | | |       ___| | | | | | \  | | |_| | | | | | 
|_|     |_|  \_\ /_/   |_| |_____/ |_| |_|      /_____/ |_| |_|  \_| \_____/ |_| |_| 

Owner Of AiraSoftware (http://airasoftware.esy.es/)
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../../css/style.css">
<link rel="icon" type="image/x-icon" href="../../../assets/fav.ico" />
<meta name="viewport" content="width=device-width, initial-scale="1.0">
<meta name="description" content="Glass is a open source web OS created for simple devices that display web content.">
<meta name="author" content="Prabhjot Singh">
<title>GLASS PI</title>
</head>
<body>

<div align="center">
<div class="customize_title">
<br />
<h1>Make Glass Reflect You!</h1>
<p>Hint: You may use other computers to edit these settings!</p>
<br />
</div>
<h1>Home Wallpaper</h1>
<p>Edit the wallpaper on your home screen.</p> 


<form action="" method="POST" enctype="multipart/form-data">
<input class="customize_btn" type="file" name="image" />
<input class="customize_btn" type="submit" value="Set"/>
</form>
<br />
<?php
error_reporting(0);
	if(isset($_FILES['image'])){
		$errors= array();
		$file_name = "home.glass";
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];   
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		
		$expensions= array("jpeg","jpg","png"); 		
		if(in_array($file_ext,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
		if($file_size > 2097152){
		$errors[]='File size must be less than 2 MB';
		}				
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"files/".$file_name);
			echo "Success! Your wallpaper has been set!";
			echo "<br />";
			echo "Press Ctrl+F5 to reload the page and clear cache.";
		}else{
			print_r($errors);
		}
	}
?>

<br />
<p>Beta build, not all settings will show.</p>
</div>
</body>
</html>		