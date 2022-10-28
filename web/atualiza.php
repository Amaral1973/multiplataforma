<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $celular = $_POST['celular'];
    $sql= "UPDATE pessoa SET nome = '$nome',idade = '$idade',celular = '$celular' WHERE id = '$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
        alert('Pessoa atualizado com sucesso!');
        window.location.href='index.php'
        </script>";
    }else{
        echo "<script language='javascript' type='text/javascript'> 
        alert('Não foi possível atualizar a pessoa!');
        window.location.href='index.php'
        </script>";
    }
    mysqli_close($con);
