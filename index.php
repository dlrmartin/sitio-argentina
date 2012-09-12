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
			after:   onAfter,
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
	<div id="cabecera">
		<div id="menu-ppal">
			<div id="navBar">
				<ul class="sf-menu">
					<li>
						<a href="javascript:;">M&Eacute;TODO DeROSE</a>
						<ul>
							<li><a href="javascript:;">&iquest;Qu&eacute; es el M&eacute;todo?</a></li>
							<li><a href="javascript:;">Calidad de Vida</a></li>
							<li><a href="javascript:;">Propuesta Cultural</a></li>
							<li><a href="javascript:;">DeRose</a></li>
							<li><a href="javascript:;">Prensa</a></li>
							<li><a href="javascript:;">Ombudsman</a></li>
						</ul>
					</li>
					<li><a href="javascript:;">&iquest;D&Oacute;NDE PRACTICAR?</a></li>
					<li><a href="javascript:;">CONTACTO</a></li>
				</ul>
			</div>
		</div>
		<div id="logo"><a href="/"><img src="_imagenes/logo_derose.png" width="177" height="155" alt="DeRose" /></a></div>
		
		<div id="links">
			<ul>
				<li><a href="javascript:;"><img src="_imagenes/icono_twitter.png" width="32" height="32" alt="Twitter" /></a></li>
				<li><a href="javascript:;"><img src="_imagenes/icono_facebook.png" width="31" height="32" alt="Facebook" /></a></li>
				<li><a href="javascript:;"><img src="_imagenes/icono_googleplus.png" width="32" height="32" alt="Google+" /></a></li>
				<li><a href="javascript:;"><img src="_imagenes/icono_1.png" width="32" height="32" alt="" /></a></li>
				<li><a href="javascript:;"><img src="_imagenes/icono_2.png" width="32" height="32" alt="" /></a></li>
				
			</ul>
			<p>Par&iacute;s &ndash; Londres &ndash; New York &ndash; Roma &ndash; Barcelona &ndash; Buenos Aires &ndash; Lisboa &ndash; Porto &ndash; R&iacute;o de Janeiro &ndash; S&atilde;o Paulo</p>
		</div>
		
		<div id="comunicate">
			<p>Comunicate con nosotros al<br />
			<span>0810-345-9642</span></p>			
		</div>
		
		<div id="buscador">
			<form id="form_buscar" name="form_buscar" action="" >
				<input type="text" id="caja_buscar" name="buscar"  value="Buscar" />
				<input type="image" src="_imagenes/btn_buscar.jpg" value="Buscar" alt="Buscar"  />
			
			</form>
		</div>
	</div>

	
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
	
	<div id="pie">
	
		<ul>
			<li>
				<h4>Entrevista con DeRose</h4>
				<a href="javascript:;"><img src="_imagenes/img_entrevista.jpg" width="184" height="108" alt="" /></a>
			</li>
			<li>
				<h4>Free downloads</h4>
				<a href="javascript:;"><img src="_imagenes/img_downloads.jpg" width="185" height="108" alt="" /></a>
			</li>
			<li>
				<h4>Multimedia</h4>
				<a href="javascript:;"><img src="_imagenes/img_multimedia.jpg" width="184" height="108" alt="" /></a>
			</li>
			<li class="ultimo">
				<h4>Clases abiertas</h4>
				<a href="javascript:;"><img src="_imagenes/img_clases.jpg" width="184" height="108" alt="" /></a>
			</li>
		</ul>
		
		<div class="clearfix"></div>
		<p id="copyright">
			<!-- si esto no va se puede borrar -->
			&copy; Todos los derechos reservados.
		</p>
		
	</div>
</div>
<?php # Javascripts al final para mejorar performance.3 ?>
<?php include '_partial/shared/javascripts.php' ?>
</body>
</html>
