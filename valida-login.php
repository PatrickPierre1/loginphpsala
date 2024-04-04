<?php 
    require("config.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM usuarios WHERE email = :email AND password = :password";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(":email", $email);
        $consulta->bindParam(":password", $password);
        $consulta->execute();
        $dados = $consulta->fetch(PDO::FETCH_OBJ);

        session_start();

        if(!isset($dados->id)) {
            echo "<script>alert('Usuário não encontrado')</script>";
        }else {
            $_SESSION["usuario"] = [
                "id" => $dados->id,
                "nome" => $dados->nome,
                "email" => $dados->email,
                "password" => $dados->password,
                "descricao" => $dados->descricao,
                "idade" => $dados->idade
            ];
            echo "<script>window.location.href='home.php'</script>";
        }
    }
?>