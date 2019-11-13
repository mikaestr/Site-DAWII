<?php
include_once 'classes/autoload.php';

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $curriculo = new Curriculo();
    $curriculo->setId($_GET['id']);

    $curriculoDao = new CurriculoDao();
    $curriculoData = $curriculoDao->selectById($curriculo);  
}
?>

<html>
    <head><title> MARKAELA </title>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="sortcut icon" href="assets/img/icon.ico" type="image/x-icon"/>
        <meta charset="utf-8">
    </head>
    <body>
    <header>
        <nav id="horizontal">
            <ul>
                <li><a href="index.html"><img src="assets/img/logo.png" width="150x"> </a></li>
                <li style="float:right"><a class="active" href="login.html">Sair</a></li>
                <li style="float:right"><a class="active" href="minhaconta.html">Minha conta</a></li>
            </ul>
        </nav>

        <nav id="vertical"> 
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfólio</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="curriculo.html">Currículo</a></li>
                <li><a href="mensagens.html">Mensagens</a></li>
            </ul>
        </nav>
    </header> 
        
    <section id="content">
        
        <h2> Currículo </h2>
         <div id="form">
                    <h3> Inserir novo item: </h3>
                    <div class="areaform">
                        <form action="curriculo-edita-ok.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $curriculoData->getId(); ?>">

                            <label for="empresa">Empresa:</label>
                            <input placeholder="Empresa" name="empresa" required="true" value="<?php echo $curriculoData->getId(); ?>">

                            <label for="local">Local:</label>
                            <input type="text" placeholder="Local" name="local" required="true" value="<?php echo $curriculoData->getLocal(); ?>">

                            <label for="funcao">Função:</label>
                            <input placeholder="Função" name="funcao" required="true" value="<?php echo $curriculoData->getFuncao(); ?>">

                            <label for="Período">Periodo:</label>
                            <input type="text" placeholder="Período" name="periodo" required="true" value="<?php echo $curriculoData->getPeriodo(); ?>">

                         <button class="button" type="submit">Confirmar</button>
                        </form>
                    </div>
                 </section>
            </div>

    </section>

    <footer>
        
    </footer>
    </body>
</html>