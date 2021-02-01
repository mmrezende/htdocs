<?php
    require_once "functions.php";
    $mysqli = new mysqli("35.198.34.77","mateusmendoncadr","MMG@m3rXMMdr","loja");

    if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['category'])) {
        $values = "(default,".$_POST['title'].",".$_POST['description'].",".$_POST['category'].")";
    }
    if($mysqli->connect_errno) {
        echo "Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        echo $mysqli->host_info . "\n";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Camisetas</title>

    <!--Fontes-->
    <style>
        /*Open Sans*/

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>

    <!--Tags para SEO-->
	<meta name="description" content="descricao">
	<meta name="keywords" content="palavras-chave,separadas,por,virgula">
	<meta name="author" content="Mateus Mendonça Dias Rezende">

	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">

	<!--Estilos-->
	<link rel="stylesheet" type="text/css" href="./css/minireset.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">

	<!--Favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="./assets/images/logo.png">

    <!--Scripts-->
    <script src="js/jquery.js"></script>
    <script src="./js/functions.js"></script>
</head>
<body>
    <div>
        <h1>Cadastro de produto</h1>
        <form method="POST" action=".">
            <div>
                <label for="title">Título:</label>
                <input type="text" name="title" id="title">
            </div>

            <div>
                <label for="description">Descrição:</label>
                <input type="text" name="description" id="description">
            </div>

            <div>
                <label for="category">Categoria:</label>
                <select name="category" id="category">
                    <option selected value="camiseta">Camiseta</option>
                    <option value="caneca">Caneca</option>
                    <option value="copo">Copo</option>
                </select>
            </div>

            <div>
                <input type="submit" value="cadastrar">
            </div>
        </form>
    </div>
</body>
</html>
<?php }?>