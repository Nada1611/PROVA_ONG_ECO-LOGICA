<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="Tabela.css">
</head>
<body>
<nav class="menu_aluno">
                  
                  <ul>

                  <li>
                    <a href="index.html">Home</a>
                    </li>
                  <li class="dropdown">
                    <a>Cadastros</a>
                  <div class="dropdown-menu">
                  <a href="Cadastro Aluno.php">Alunos</a><br>
                  <a href="Cadastro Livro.php">Livros</a><br>
                  <a href="Cadastro Area.php">Área</a><br>
                    </div>
                </li>
                    <li class="dropdown">
                    <a>Livros</a>
                    <div class="dropdown-menu">
                <a href="ListarLivros.php">Lista de Livros</a><br>
                  <a href="Empréstimo.php">Empréstimo</a><br>
                  <a href="Devolução.php">Devolução</a><br>
                    </div>
                    </li>
                      
                      </ul>
          
               </nav>

    <div class="tabela">
    <?php
// Conectar ao banco de dados
include_once 'conecta.php';

// Consulta SQL para obter os livros com suas áreas
$sql = "SELECT livro.id, livro.titulo, livro.autor, livro.status, area.nome, livro.id_area
FROM livro INNER JOIN area ON livro.id_area = area.id";
$res = mysqli_query($con, $sql);


    echo "<table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Status</th>
                <th>Area</th>
                <th>Ações</th>
                
            </tr>";
            
    // Loop através dos resultados
    while ($user_data = mysqli_fetch_array($res)) 
    {
        echo "<tr>

                <td>".$user_data["id"]."</td>
                <td>".$user_data["titulo"]."</td>
                <td>".$user_data["autor"]."</td>
                <td>".$user_data["status"]."</td>



                <a class='btn1' href='EditarLivro.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
<path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
</svg>
</a>


<a>
<a class='btn2' href='ExcluirLivros.php?id=$user_data[id]'>
<svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
<path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
</svg>

</a>


                </td>";
          echo  "</tr>";
          echo "</table>";
    }

  
  
// Fechar conexão com o banco de dados
mysqli_close($con);

?>

</div>
</body>
</html>


