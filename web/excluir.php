<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM pessoa WHERE id = $id";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
        alert('Cliente deletado da base de dados!');
        window.location.href='index.php'</script>";
      }else{
        echo "<script language='javascript' type='text/javascript'> window.location.href='index.php'</script>";
      }
?>