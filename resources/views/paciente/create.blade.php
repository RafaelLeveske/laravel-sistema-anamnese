<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Criar Paciente</title>

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
        .anamnese-group{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 5px 5px 5px 5px #333333;
            border-color: #343a40;
            padding: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
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

<form method="post">
    @csrf
    <div class="container">
        <div class="jumbotron">
            <h2 class="display-4"> Cadastrar Novo Paciente </h2>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="legend">
            <legend>Dados Pessoais</legend>
        </div>
        <div class="form">
        <div class="form-group">
            <label for = "namePaciente">Nome:</label>
            <input type = "text" class="form-control" name = "namePaciente" id = "idPaciente">
        </div>

        <div class="form-group">
            <label for = "nameCpfPaciente">CPF:</label>
            <input type = "text" class="form-control" name = "nameCpfPaciente" id = "idCpfPaciente">
        </div>

        <div class="form-group">
            <label for = "nameNomePaiPaciente">Nome do Pai:</label>
            <input type = "text" class="form-control" name = "nameNomePaiPaciente" id = "idNomePaiPaciente">
        </div>
        <div class="form-group">
            <label for = "nameNomeMaePaciente">Nome do Mãe:</label>
            <input type = "text" class="form-control" name = "nameNomeMaePaciente" id = "idNomeMaePaciente">
        </div>
        <div class="form-group">
            <label for = "nameDataNascimentoPaciente">Data de Nascimento:</label>
            <input type = "date" class="form-control" name = "nameDataNascimentoPaciente" id = "idDataNascimentoPaciente">
        </div>
        <div class="form-group">
            <label for = "nameCepPaciente">CEP:</label>
            <input type = "text" class="form-control" name = "nameCepPaciente" id = "idCepPaciente">
        </div>
        <div class="form-group">
            <label for = "nameEnderecoPaciente">Endereço:</label>
            <input type = "text" class="form-control" name = "nameEnderecoPaciente" id = "idEnderecoPaciente">
        </div>
        <div class="form-group">
            <label for = "nameTelefonePaciente">Telefone:</label>
            <input type = "text" class="form-control" name = "nameTelefonePaciente" id = "idTelefonePaciente">
        </div>
        <div class="form-group" id="select">
            <label for = "nameUfPaciente">UF:</label>

            <select name="nameUfPaciente" class="form-control">
                <option value="">Selecione</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
            </select>
        </div>
        <div class="form-group" id="select">
            <label for = "nameEstadoCivilPaciente">Estado Civil</label>
            <select name = "nameEstadoCivilPaciente" class="form-control" >
                <option value = "solteiro">Solteiro</option>
                <option value = "casado">Casado</option>
                <option value = "divorciado">Divorciado</option>
            </select>
        </div>
        <div class="form-group">
            <label for = "namePsicologoIdPaciente">ID Psicologo:</label>
            <input type = "text" class="form-control" name = "namePsicologoIdPaciente" id = "idPsicologoIdPaciente">
        </div>
        </div>
        <div class="anamnese-group">
            <div class="legend">
            <legend>Anamnese</legend>
            </div>
            <label for = "nameQueixaAnamnese">Queixa Principal:</label>
        <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <textarea name="nameQueixaAnamnese" class="form-control"></textarea>
        </div>
            <label for = "nameInfanciaAnamnese">Características da Infância:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <textarea name="nameInfanciaAnamnese" class="form-control"></textarea>
            </div>
            <label for = "nameAdolescenciaAnamnese">Características da Adolescência:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <textarea name="nameAdolescenciaAnamnese" class="form-control"></textarea>
            </div>
            <label for = "nameAdultaAnamnese">Características da Vida Adulta:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <textarea name="nameAdultaAnamnese" class="form-control"></textarea>
            </div>
            <label for = "nameRelacoesAnamnese">Relações Sociais:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <textarea name="nameRelacoesAnamnese" class="form-control"></textarea>
            </div>
        </div>
        <input type = "submit" value = "Gravar" class="btn btn-primary btn-lg btn-block mt-5">

    </div>
</form>

</body>
</html>
