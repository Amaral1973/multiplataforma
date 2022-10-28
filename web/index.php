<?php
  include 'conecta.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Multiplataforma</title>
    <link href="scripts/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
          background-color: #08546c;
         }
    .header {
      float: right;
    }
</style>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap5/js/bootstrap.min.js"></script>
    <div class="container-fluid">
      <img src="imagens/senainegativo.png" width="20%" height="20%">
      <hr>
    </div>
      <nav>
        
      </nav>
      <center>
      <h1><p class="text-white">Projeto Multiplataforma</p></h1>
      <p style='color: white; font-weight: bold;'>Sistema desenvolvido acessando um banco de dados MySQL na nuvem.</p>
      </center>
      <br>
      <main>
        <div class="container">
      <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-2 text-center">
      <div class="col-md-6">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#08546c" class="bi bi-server" viewBox="0 0 16 16">
                <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
                <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
                <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
            </svg>&nbsp;&nbsp;<b>Cadastro de Clientes</b></h4>
          </div>
          <div class="card-body">
          <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Celular</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $pesquisa = mysqli_query($conn,"SELECT * FROM pessoa");
                $row = mysqli_num_rows($pesquisa);
                if($row > 0)
                    {
                        while($cliente = $pesquisa->fetch_array())
                        {
                            $id = $cliente['id'];
                            echo "<tr>";
                            echo "<td>".$cliente['id']."</td>";
                            echo "<td>".$cliente['nome']."</td>";
                            echo "<td>".$cliente['idade']."</td>";
                            echo "<td>".$cliente['celular']."</td>";
                            echo "<td><a href='#?id=$id' data-bs-toggle='modal' data-bs-target='#editaPessoa$id'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                            </svg></a> | <a href='excluir.php?id=$id'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='red' class='bi bi-trash' viewBox='0 0 16 16'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                            </svg></a></td>";
            ?>
                            <div class="modal fade" id="editaPessoa<?php echo $id; ?>" tabindex="0" aria-labelledby="editaPessoa" aria-hidden="true" data-bs-backdrop="false">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="editaPessoa">Edição de Pessoa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                  <?php
                                    $query2 = mysqli_query($conn, "SELECT * FROM pessoa WHERE id=$id");
                                    if ($query2->num_rows > 0) {
                                      while ($cliente2 = $query2->fetch_array()) {
                                        $id = $cliente2['id'];
                                        $nome = $cliente2['nome'];
                                        $idade = $cliente2['idade'];
                                        $celular = $cliente2['celular'];
                                      }
                                    }
                                  ?>
                                    <form action="atualiza.php?id=<?php echo $id; ?>" method="post">
                                      <div class="form-group" style="text-align: left;">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>"/>
                                        <label class="form-label">Idade</label>
                                        <input type="text" class="form-control" name="idade" value="<?php echo $idade; ?>"/>
                                        <label class="form-label">Celular</label>
                                        <input type="text" class="form-control" name="celular" value="<?php echo $celular; ?>"/>
                                        <br/>
                                        <button type="submit" class="btn btn-outline-success mb-3">Atualizar</button>
                                      </div> 
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
            <?php
                            echo "</tr>";
                        }
                        mysqli_close($conn);
                    }
                else 
                    {
                        echo "Não há clientes para listar!!!";
                        echo "</tr>";
                        mysqli_close($conn);
                    }
            ?>
            </tbody>
          </table>
            <button type="button" class="w-100 btn btn-lg btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#08546c" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                            </svg>&nbsp;&nbsp;Cadastrar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="cadastro.php" method="POST">
                                <div class="form-group" style="text-align: left;">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome"/>
                                    <label class="form-label">Idade</label>
                                    <input type="text" class="form-control" name="idade"/>
                                    <label class="form-label">Celular</label>
                                    <input type="text" class="form-control" name="celular"/>
                                    <br/>
                                    <button type="submit" class="btn btn-outline-success mb-3">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar / Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>
  </body>
</html>