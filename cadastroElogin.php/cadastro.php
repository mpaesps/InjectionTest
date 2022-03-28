<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tela Inicial</title>
</head>
<body>
 
  
        <div id="formCadastro" class="hide">
            <form action="processaCadastro.php" method="POST">
                <h2>Cadastre-se</h2>
                <p>
                    <input type="text" name="cadNome" id="cadNome" placeholder="Nome" required>
                </p>
                <p>
                    <input type="email" name="cadEmail" id="cadEmail" placeholder="E-mail" required>
                </p>
                <p>
                    <input type="password" name="cadSenha" id="cadSenha" placeholder="Senha" required>
                </p>
                <input class="btn"type="submit" value="Cadastrar">    
            </form>
        </div>
 
    <script src="script.js"></script>
</body>
</html>