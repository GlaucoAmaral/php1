<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
//a transacao esta amarrada a conexao e nao ao statement

 $conn->beginTransaction();

 $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

 $id = 5;

//$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

//$conn->rollback();//cancelamento da delecao
$conn->commit();

echo "delecao OK";


/*outra maneira de passar os parametros sem utilizar o bind é passar os parametros sequencias de acordo com os pontos de interrogacao passado na consulta/delecao...*/

 ?>