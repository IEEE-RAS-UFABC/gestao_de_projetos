<!DOCTYPE html>
<html>
	<head>
		<title>Gerenciamento de Projetos IEEE</title>
		<meta charset="utf-8">
		<hgroup>
		<!--	<h1> Gestão de Projetos IEEE - UFABC </h1>-->
		</hgroup>
		<img src="/figuras/IEEE_logo_branco.PNG" />
        <img src="/figuras/UFABC_logo.PNG" />
        <!-- Bootstrap CSS -->
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            Gestão de Projetos IEEE - UFABC
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="menuSair" class="nav-link" href="#">Seja bem vindo "fulano de tal"</a>
                    </li>
                    <li class="nav-item">
                        <a id="menuSair" class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
       
	<!-- Conteúdo, onde o sistema irá abrir -->
        <main class="container">
            <article id="conteudo">
            </article>
        </main>
    
        <!-- Rodapé -->
        <footer>
            <p class="text-center">IEEE - RAS </p>
            <p class="text-center">2018
                <?php// $ano = date('Y'); if ($ano == "2018"){ echo "- " . $ano; } ?>
            </p>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8= "crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script_jquery.js"></script>
</html>