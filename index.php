<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Last-Modified" content="0" />
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate" />
<meta http-equiv="Pragma" content="no-cache" />

<?php include '_partial/shared/head.php' ?>

<!-- a partir de acá se incluye lo que es específico de cada página -->
<link href="_recursos/css/home.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	$(document).ready(function(){
		$(function(){
			$("#slideshow").cycle({
				prev: '#prev',
				next: '#next',
				after: onAfter,
			  timeout: 0
			});
		});
		function onAfter(curr, next, opts) {
		    var index = opts.currSlide;
		    $('#prev')[index == 0 ? 'hide' : 'show']();
		    $('#next')[index == opts.slideCount - 1 ? 'hide' : 'show']();
		}
	});
</script>
</head>

<body>
	<div id="marco">		
		<?php include '_partial/shared/cabecera.php' ?>
		
		<div id="cuerpo">
			
			<div id="sombra-cuerpo-sup"></div>
			<div id="sombra-cuerpo-inf"></div>
			<div id="contenido-seccion">
				<div id="marco-slideshow" class="izquierda">
					<ul id="slideshow">
						<li><img src="_imagenes/home/foto1.jpg" width="672" height="240" alt="" /></li>
						<li><img src="_imagenes/home/foto1.jpg" width="672" height="240" alt="" /></li>
						<li><img src="_imagenes/home/foto1.jpg" width="672" height="240" alt="" /></li>
					</ul>
					<div class="nav-slideshow"><a id="prev" href="#" title="<br />
	Imagen Anterior"><img src="_imagenes/btn_prev.jpg" width="26" height="26" alt="Flecha izquierda" /></a> <a id="next" href="#" title="Imagen Siguiente"><img src="_imagenes/btn_next.jpg" width="26" height="26" alt="Flecha derecha" /></a></div>
				</div>
				
				<div class="derecha" id="texto">
					<h3 class="titulo-grande">Alta Performance</h3>
					<p>El M&eacute;todo DeRose desenvuelve alta performance profesional y deportiva. Algunas de nuestras herramientas son la reeducaci&oacute;n respiratoria, la administraci&oacute;n del estr&eacute;s, las t&eacute;cnicas org&aacute;nicas que mejoran el tono muscular y la flexibilidad.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<?php include '_partial/shared/pie.php' ?>
	</div>
	<?php # Javascripts al final para mejorar performance. ?>
	<?php include '_partial/shared/javascripts.php' ?>
</body>
</html>
