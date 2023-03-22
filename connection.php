<?php      
    // $host = "localhost";  
    // $user = "root";  
    // $password = '';  
    // $db_name = "idk";  

    $host = "sql205.epizy.com";  
    $user = "epiz_33854390";  
    $password = 'UbsMstZh1H';  
    $db_name = "epiz_33854390_idk";  
    
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  