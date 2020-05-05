<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Consultas Cadastradas</title>

    <script src="https://kit.fontawesome.com/e2ce879bfb.js" crossorigin="anonymous"></script>

    <style>

        .body{
            background-color: #DCDCDC;
        }

        .container{
            background-color: #C0C0C0;
            padding: 20px;
            border-radius: 8px;
            margin-top: 10px;
            box-shadow: 5px 5px 8px #333333;
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
        .list-group-item{

        }

        .listdivpessoais{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 5px 5px 5px 5px #333333;
            border-color: #343a40;
            padding: 10px;
            width: 100%;

        }
        .paragrafo{
            font-weight: bold;
            margin-top: 7px;
        }

        .pagination-lg{
            padding: 10px;
            justify-content: center;
            margin-top: 10px;
        }
    </style>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/psicologo/index">Sistema de Anamnese</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/psicologo/index">Inicio <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/logout">Sair</a>
                </li>
            </ul>
        </form>
    </div>
</nav>
<form>
    @csrf
    <div class="container">
        <div class="jumbotron">
            <h2 class="display-4"> Consultas Cadastradas </h2>
        </div>
        @if(!empty($mensagem))

            <div class="alert alert-success">{{ $mensagem }}</div>
        @endif

        <ul class="list-group">
            @foreach($consultas as $consulta)
                <div>
                    <li class="list-group-item   justify-content-left">
                        <div class="listdivpessoais">
                            <p class="paragrafo">Consulta:</p>
                            ID: {{ $consulta->id }}<br>
                            Data e Hora de Entrada e Saída: {{ $consulta->data_hora}}<br>
                            Evolucao: {{ $consulta->evolucao}}<br>
                            ID Paciente: {{ $consulta->paciente_id}}<br>
                        </div>
                    </li>
            @endforeach
        </ul>
    </div>
    <ul class="pagination pagination-lg">
        <li class="page-item">

            <spam></spam>
        </li>

    </ul>
</form>
</body>
</html>
