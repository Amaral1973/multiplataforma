<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $celular = $_POST['celular'];
    $query = $conn->query("SELECT * FROM pessoa WHERE nome='$nome' AND idade='$idade' AND celular='$celular'");
    if(mysqli_num_rows($query) > 0){
      echo "<script language='javascript' type='text/javascript'> 
      alert('Este cliente já existe na base de dados!');
      window.location.href='index.php'
      </script>";
      exit();
    }
    else {
    $sql= "INSERT INTO pessoa(nome,idade,celular) VALUES ('$nome','$idade','$celular')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Cliente inserido com sucesso!');
          window.location.href='index.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este cliente!');
          window.location.href='index.php'
          </script>";
    }
  }
    mysqli_close($conn);
?>