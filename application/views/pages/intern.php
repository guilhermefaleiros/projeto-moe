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
        <div class="nav-wrapper" style="display: flex;">
			<a href="/users/logout" style="margin-right: 20px;" class="brand-logo right">Sair</a>
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li>
					<a style="margin-left: 30px;" data-target="slide-out" href="#" class="brand-logo trigger">
						Home - Estagiário
					</a>
				</li>
			</ul>
            
        </div>
    </nav>
    <div class="container" style="margin-top: 30px;">
        <form method="post" action="/offer/new_interest">
            <?php echo isset($msgs) ? $msgs : ''; ?>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Descrição</th>
                        <th>Nome do contato</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($companies as $company) : ?>
                        
                        <tr>
                            <td>
                                <label>
                                    <input name="<?php echo $company->id ;?>" type="checkbox" />
                                    <span>Selecionar</span>
                                </label>
                            </td>
                            <td><?php echo $company->name ;?></td>
                            <td><?php echo $company->email ;?></td>
                            <td><?php echo $company->company_description ;?></td>
                            <td><?php echo $company->contact_name ;?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button style="margin-top: 30px;" class="btn waves-effect waves-light removable" type="submit" name="action">Cadastrar interesse
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</body>
