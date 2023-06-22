
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Livro:</title>
</head>
<body>
<?php

include_once 'conecta.php';

if(!empty($_GET['id_area']))

{
    $id = $_GET['id_area'];

    $sqlSelect = "SELECT * FROM livro WHERE id_area=$id_area";

$res = $con->query($sqlSelect);

if($res->num_rows > 0)

{
$sqlDelete = "DELETE FROM livro WHERE id_area=$id_area";
$resDelete = $con->query($sqlDelete);
}

}

header('Location: ListarLivros.php');

?>
</body>
</html>