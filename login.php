<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center m-5 flex-column">
    <h1 class="text-success">Faça seu login</h1><br>
    <form class="form-control w-25 p-2" action="valida-login.php" method="post">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" id="email">

        <label for="password">Senha:</label>
        <input class="form-control" type="password" name="password" id="password"><br>

        <input class="form-control btn-success" type="submit" value="Enviar">
    </form>
</body>
</html>