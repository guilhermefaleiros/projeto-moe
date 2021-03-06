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
    <script type="text/javascript" src="<?=base_url('assets/css/login.css')?>" ></script>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a style="margin-left: 30px;" href="#" class="brand-logo trigger">Mural de Oportunidades de Estágio - Login</a>
        </div>
    </nav>
    <div id="login-page" class="row">
        <?php echo isset($msgs) ? $msgs : ''; ?>
        <div class="col s12 z-depth-6 card-panel">
            <form class="login-form" method="post" action="/users/login">
                <div class="row">
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input class="validate" name="email" id="email" type="email">
                        <label for="email" data-error="wrong" data-success="right">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input name="password" id="password" type="password">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button style="width: 100%;" class="btn waves-effect waves-light removable" type="submit" name="action">Entrar
                    </button>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small"><a href="register">Crie sua conta agora!</a></p>
                    </div>         
                </div>
            </form>
        </div>
    </div>
</body>
