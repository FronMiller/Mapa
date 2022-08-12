<?php
	include("dados.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
<style>


</style>
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
		<section class="main_marmitas1">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					//echo "ID = ". $_GET['id'];
					$id = $_GET['id'];//validar o recebimento do id
					foreach($marmitas as $key => $value){
						if($value['id'] == $id){
							//alterei aqui
							$data = new DateTime($value['data']);
					?>
						<header class="main_marmitas_header">
							<h1><?=$value['titulo'];?></h1>
							<!--alterei aqui-->
							<h2>Autor: <?=$value['autor'];?></h2>
							<h3>Publicado em: <?=$data->format('d/m/Y');?></h3>
						</header>
						<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">
						<p><?=$value['descricao'];?></p>
						<h3><?=$value['valor'];?></h3>	
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
        <section class="main_marmitas">
			<header class="main_marmitas_header">
				<h1>Ver outras marmitas:</h1>
			</header>
			<?php
			$id = 0;
				foreach($marmitas as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="marmitas.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
				}
			?>
		</section>

	</main>

	<footer>
	<!-- preparar o footer -->
	</footer>
</body>
</html>