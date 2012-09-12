$(document).ready(function() {
	
		
	//funciones de caja de texto busqueda global
	var buscar_val_default_value = $("#caja_buscar").val();
	$("#caja_buscar").focus(function(){
		if($(this).val()==buscar_val_default_value){$(this).val("") ;}
	});
	$("#caja_buscar").blur(function(){
		if($(this).val()==""){$(this).val(buscar_val_default_value) ;}
	});
	$("#buscar_form").submit(function(e){
		if($("#caja_buscar").val()=="" || $("#caja_buscar").val()==buscar_val_default_value){
			e.preventDefault();
			alert("Ingresar una palabra para buscar");			
		}
	});
	
	
	
	//menu de navegación
	/**/$(".sf-menu").superfish({
		autoArrows:  false,
		dropShadows: false,
		delay: 0,
		speed: 'normal'
	});
	
	$(".sf-menu  li  li").hover(
		function(){
			console.log($(this).parent().parent().find("a").html())
			$(this).parent().parent().find("a").addClass("activo");
		},
		function(){
			$(this).parent().parent().find("a").removeClass("activo");
		}
	)
	
});
