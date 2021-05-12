<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="<?=base_url('assets/css/register.css')?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?=base_url('assets/js/new_offer.js')?>" ></script>
</head>
<body>
<nav>
        <div class="nav-wrapper">
            <a style="margin-left: 30px;" data-target="slide-out" href="#" class="brand-logo trigger">
            <i class="material-icons">menu</i>Criar nova vaga</a>
        </div>
    </nav>
    <ul id="slide-out" class="sidenav">
        <li><a href="employer"><i class="material-icons">home</i>Página inicial</a></li>
    </ul>
    <div class="container" style="margin-top: 30px;">
        <form class="form-user" method="post" action="/offer/new_offer">
            <?php echo isset($msgs) ? $msgs : ''; ?>
            <div class="input-field col s6">
                <input placeholder="Descrição" name="description" id="description" type="text" class="validate">
            </div>
            <div class="input-field col s6">
                <input placeholder="Atividades" name="activities" id="activities" type="text" class="validate">
            </div>
            <div class="input-field col s6">
                <input placeholder="Ano requerido" name="required_year" id="required_year" type="text" class="validate">
            </div>
            <div class="input-field col s6">
                <input placeholder="Habilidades necessárias" name="required_skills" id="required_skills" type="text" class="validate">
            </div>
            <div class="input-field col s6">
                <input placeholder="Salário" name="salary" id="salary" type="text" class="validate">
            </div>
            <div class="input-field col s6">
                <select name="hours" class="select-type">
                    <option value="" disabled selected>Jornada de trabalho</option>
                    <option value="20">20 horas</option>
                    <option value="30">30 horas</option>
                </select>
            </div>
            <button class="btn waves-effect waves-light removable" type="submit" name="action">Cadastrar
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</body>

