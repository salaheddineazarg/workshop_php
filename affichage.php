
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
	<title>Document</title>
</head>
<body>
	<nav>
		
		<h1><i><b> PHP TEST</b></i></h1>
		<ul>
			<li><a href="">	Home</a></li>
			<li><a href="">	Form</a></li>
			<li><a href="">Affichage</a></li>
		</ul>
      
	</nav>
   
        
    <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){

    
   echo $_name= $_POST ["flname"] ."<br>";
    echo $_phone=$_POST ["phone"]."<br>";
    echo $_email=$_POST ["email"]."<br>";
    echo $_pass=$_POST ["password"]."<br>";


     



}
?>

    
</body>
</html>







