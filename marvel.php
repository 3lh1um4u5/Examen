
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3lh1um4u5</title>
	<?php require_once "dependencias.php"; ?>
			<?php 
			require_once "contenido2.php";
			$datos=contenido2();
			?>

</head>
<body style="background-color: #000000;color: blue">	
	<nav>
        <button class="nav-boton" onclick="accion()">MENU</button>
        <a href="marvel.php" class="nav-enlace desaparece">MARVEL</a>
        <a href="index.php" class="nav-enlace desaparece">Detective Comics(DC)</a>
        


    </nav>
<div class="container">

		<h1>Comics</h1>

		<h2>MARVEL</h2>
		

	<ul class="gridder">
		<?php 
		for ($i=0; $i < count($datos) ; $i++):
			$d=explode("||", $datos[$i]);

			?>
			<li class="gridder-list" 
			data-griddercontent="<?php echo '#gridder-content-'.$i ?>">
				<img src="<?php echo $d[0] ?>">
			</li>

			<?php
		endfor;  
		?>
	</ul>

	<?php
		for ($i=0; $i < count($datos); $i++):
		  	$d=explode("||", $datos[$i]);  
	?>
		<div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content" >
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo $d[0] ?>" class="img-responsive" />
				</div>
				<div class="col-sm-6">
					<h2><?php echo $d[1]; ?></h2>
					<p><?php echo $d[2]; ?></p>
				</div>
			</div>
		</div>
	<?php  
		endfor;
	?>
</div>
</body>
</html>

<script>
        function accion(){
            console.log('esta funcionando mi boton');
            var ancla = document.getElementsByClassName('nav-enlace');
            for(var i=0; i < ancla.length;i++){
                ancla[i].classList.toggle('desaparece');
            }
        
    </script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".gridder").gridderExpander({
			scroll: true,
			scrollOffset: 60,
                    scrollTo: "listitem", // panel or listitem
                    animationSpeed: 100,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "<i class=\"fa fa-arrow-right\"></i>",
                    prevText: "<i class=\"fa fa-arrow-left\"></i>",
                    closeText: "<i class=\"fa fa-times\"></i>",
                    onStart: function () {
                    	console.log("Gridder Inititialized");
                    },
                    onContent: function () {
                    	console.log("Gridder Content Loaded");
                    	$(".carousel").carousel();
                    },
                    onClosed: function () {
                    	console.log("Gridder Closed");
                    }
                });
	});
	
</script> 
