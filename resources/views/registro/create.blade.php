<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Criar Usuário</title>

    <style>

        .body {
            background-color: #DCDCDC;
        }
        .container{
            background-color: #C0C0C0;
            padding: 20px;
            border-radius: 8px;
            margin-top: 10px;
            box-shadow: 5px 5px 5px 5px #333333;
            align-items: center;

        }
        .jumbotron{
            background-color: #ffffff;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 5px 5px 5px 5px #333333;
            border-color: #343a40;
            padding: 10px;
        }
        .form{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 5px 5px 5px 5px #333333;
            border-color: #343a40;
            padding: 10px;
        }
        .legend{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 5px 5px 5px 5px #333333;
            border-color: #343a40;
            padding: 10px;
            margin-bottom: 20px;
            margin-top: 20px;
            text-align: center;
        }


    </style>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="body">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Sistema de Anamnese</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    </div>
</nav>

<form method="post">
    @csrf
    <div class="container">
        <div class="jumbotron">
            <h2 class="display-4"> Cadastrar Novo Usuário </h2>
        </div>

        <div class="legend">
            <legend>Dados Pessoais</legend>
        </div>
        <div class="form">
            <div class="form-group">
                <label for = "name">Nome:</label>
                <input type = "text" class="form-control" name = "name" id = "name">
            </div>

            <div class="form-group">
                <label for = "email">E-Mail</label>
                <input type = "text" class="form-control" name = "email" id = "email">
            </div>

            <div class="form-group">
                <label for = "password">Senha:</label>
                <input type = "password" class="form-control" name = "password" id = "password">
            </div>
        </div>
        <input type = "submit" value = "Gravar" class="btn btn-primary btn-lg btn-block mt-5">

    </div>
</form>

</body>
</html>
