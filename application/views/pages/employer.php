<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script type="text/javascript" src="<?=base_url('assets/js/home.js')?>" ></script>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a style="margin-left: 30px;" data-target="slide-out" href="#" class="brand-logo trigger">
            <i class="material-icons">menu</i>Home - Contratante</a>
        </div>
    </nav>
    <ul id="slide-out" class="sidenav">
        <li><a href="/offer"><i class="material-icons">add_circle</i>Criar</a></li>
    </ul>
    <div class="container" style="margin-top: 30px;">
        <table>
            <thead>
            <tr>
                <th>Nome</th>
                <th>Atividades</th>
                <th>Ano requerido</th>
                <th>Habilidades requeridos</th>
                <th>Horas</th>
                <th>Salário</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($offers as $offer) : ?>
                    <tr>
                        <td><?php echo $offer->name ;?></td>
                        <td><?php echo $offer->activities ;?></td>
                        <td><?php echo $offer->required_year ;?></td>
                        <td><?php echo $offer->required_skills ;?></td>
                        <td><?php echo $offer->hours ;?></td>
                        <td><?php echo "R$ $offer->salary" ;?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
