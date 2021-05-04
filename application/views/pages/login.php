<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="<?=base_url('assets/css/register.css')?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?=base_url('assets/js/register.js')?>" ></script>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a style="margin-left: 30px;" href="#" class="brand-logo">Mural de Oportunidades de Estágio</a>
        </div>
    </nav>
    <div class="container">
        <?php echo isset($msgs) ? $msgs : ''; ?>
        <form class="form-user" method="post" action="/users/login">
            <div class="input-field col s6">
                <input placeholder="Email" name="email" id="email" type="email" class="validate">
            </div>
            <div class="input-field col s6">
                <input placeholder="Senha" name="password" id="password" type="password" class="validate">
            </div>
            <button class="btn waves-effect waves-light removable" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</body>
