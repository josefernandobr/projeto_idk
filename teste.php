<?php  

    session_start(); 

    include('connection.php');  
    $hashSenha = $_SESSION['senha'];

    $sql = "select * from clientes where senha = '$hashSenha'";  
    $result = mysqli_query($con, $sql);  

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

    echo $row['foto'];
    

?> 

<html><head></head>
<body>
<img src="<?php echo $row['foto']?>" width="200" height="200" class="center-block" ></body>

<!-- <html>
<head>
      <title></title>
 </head>

<body>

// form to display record from database
<form>
  Name: <input type="text" value="<?php echo $row['nome']?>"/> </br>
  age: <input type="text" value="<?php echo $row['nome']?>"/> </br>
  hobby: <input type="text" value="<?php echo $row['foto']?>"/>
</form> -->

<!-- </body> -->



