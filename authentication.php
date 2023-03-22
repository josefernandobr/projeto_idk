<?php  

    session_start();

    include('connection.php');  

    $email = $_POST['email'];  
    $senha = $_POST['senha'];  

    $hashSenha = hash('sha512', $senha);

    $_SESSION['senha'] = $hashSenha;
          
    $sql = "select * from clientes where email = '$email' and senha = '$hashSenha'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
        
    if($count == 1){  
        header("Location: home.php");
    }  
    else{  
        header("Location: login.html"); 
        // echo"deu ruim!";
    }     
?>  