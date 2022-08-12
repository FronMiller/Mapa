<?php

	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav id="menu">
			<figure class="logo"><img src="img/logo.png" alt="img/logo.png" width="100px" height="100px"></figure>
			<ul>
				<li><a href="#Home" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Saiba Mais" alt="Saiba Mais">Saiba Mais</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header class="text">
                        <h1>A melhor marmita caseira</h1>
                    </header>
                    <p>A melhor marmita caseira que você irá provar!</p>	
					<img class="imgPrinc" src="img/Principal.png" alt="img/Principal.png">
                </div>
            </article>
        </div>
		
		<section id="main_marmitas">
			<header class="main_marmitas_header">
				<!-- //alterei aqui -->
				<h1>Marmitas mais vendidas</h1>
				<p><br>Escolha uma abaixo:</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($marmitas) && !empty($marmitas)){
				foreach($marmitas as $key => $value){
			?>
			<br>
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="marmitas.php?id=<?=$value['id'];?>">
				<!-- //alterei aqui -->
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<h3><?=$value['valor'];?></h3>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Marmita não encontrada";
		}
			?>
			
		</section>

	</main>

	<footer>
		<p>Feito por: <?=$desenvolvedor?></p>
	</footer>
</body>
</html>