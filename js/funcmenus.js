/**
 * @author Diego Rivas
 */
/* Se consulta mediante ajax y PHP la DB y se devuleve la info deseada */

function menumasalla($enviar){
				$('#menlocalidades').hide();
				$('#fpvs').hide();				
				$('#general').show();
				
			    //$(".menulocam1").css({"backgroundColor": "#ffff", "text-decoration": "none","color": "#536074" });
			    //$(".menulocam2").css({"backgroundColor": "#ffff", "text-decoration": "none","color": "#536074" });
			   
			   $.ajax({
			   type: "POST",
			   url: "menus.php",
			   data:{'menu':$enviar},
			   dataType:"json",
			   cache: false,
			   async: true,
			   beforeSend: function() {
	             $("#loaderGeneral").show();	        
	           },			   			   
			   success: function(resultado){
			     //console.log(resultado);
			     $("#loaderGeneral").hide();
			     var resulg = resultado.split(';');
			     var gene = new Array();
			     var generales = new Array();
			     var g = 0;
			     var cantidad = 0;
			     for(i=0; i< resulg.length; i++){
			     	if(isNaN(resulg[i]) == false && resulg[i].length < 2 && resulg[i] != ""){ //FILTRO LOS ID DEL RESTO DE LA INFO
			     		//alert("IDs: "+JSON.stringify(resulg[i])); // ======CONTADOR DE ID !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!     		
			     		var id = JSON.stringify(resulg[i]);     		
			     		var info = JSON.stringify(resulg[i]);		
			     		generales[id]= info;
			     	    cantidad ++;   	    	
			     	}else{
			     		var info = JSON.stringify(resulg[i]);
			     		generales[id]= info;								
			     		gene[id] = gene.push(generales[id]); // SUMO ELEMENTOS AL ARRAY			 
			     	}						       
			     }
			     /* MUESTRO DE FORMA SEPARADA LOS VALORES DE CADA PARTIDO */
			     var arreglo2 = new Array(3);
			     var arreglo = new Array(3);		     
			     var posici = new Array();
			     var c = 0;
			     var contador = 0;
			     var myNewArray3 = [];
			     var h = 0;
			     var contav = 0;
			     var contavue = 0;
			     var partido = new Array(3);
			     for(h= 1; h< cantidad; h++){   
			     	partido[h] = new Array(3);  	
			     }	
			     for(h= 1; h< cantidad; h++){   
				     var gen = new Array();
				     for(g = c; g< (gene.length - 1); g++){	
						partido[[contador],[contador]] = contavue+","+gene[g];				     	
						gen = gene[g];
						arreglo['partido'+contavue] += gen; 
				     	myNewArray3.push(gene[g]);
				     	//posici[]	
				     	contador++;
				     	c= c+7;	
				     	contav++;
				     	if(contav == 7){
				     		contavue++;
				     		contav = 0;
				     	}    	
				     }	
			     }			     
			     /* ============================== */
			     var cadena2 = new Array(3);
			     for(var i=0; i<cantidad; i++){
			     	//alert(arreglo['partido'+i]);
			     	cadena = arreglo['partido'+i];
			        cadena = cadena.split(['"']);
			     	cadena2['partido'+i] += cadena;
			     	//alert(cadena[2]);
			     	//alert("CADENAS DENTRO FOR: "+cadena2['partido'+i]);
			     } 
			     imprimgeneral(cadena2,cantidad,contav);
			    			     
			     /* RECORRO EL ARRAY ================================= */
			     //for(var j in gene) {
				    
				    //console.log(gene[j]); // elemento actual
					//alert(gene[j])
				//}
			       
			   },	
			    error: function (er, err, error)
			    {
					alert("Revise su conección a Internet; el sistema no pudo terminar de consultar las bases de datos por un error de conección. ");
			    }
		      }); 
}

function menulocali(){
	$('#general').hide();
	$('#fpvs').hide();
	$('#menlocalidades').show();
	//$(".menulocam1").css({"backgroundColor": "#ffff", "text-decoration": "none","color": "#536074" });
	//$(".menulocam2").css({"backgroundColor": "#ffff", "text-decoration": "none","color": "#536074" });
	
}
function menufpv(){
	$('#general').hide();
	$('#menlocalidades').hide();
	$('#fpvs').show();
	//$(".menulocam1").css({"backgroundColor": "#ffff", "text-decoration": "none","color": "#536074" });
	//$(".menulocam2").css({"backgroundColor": "#ffff", "text-decoration": "none","color": "#536074" });
}
/* 00000000000 MENUES INTERNOS CANDIDATOS POR LOCALIDADES 00000000000000 */
function mostciudade(destino){
	if(destino == 'ciudad'){			
		$('#accordion').slideUp(1300);
		//$('#accordion').hide();			
		
		//$('#ciudadess > ul').slideDown(900);
		$('#ciudadess').slideDown(1300);
		//$('#ciudadess').show();
		$(".menulocam12").css({"backgroundColor": "#fff", "text-decoration": "none","color": "#536074" });
		$(".menulocam11").css({"color": "#fff", "backgroundColor": "#007bff", "text-decoration": "none" });
		$(".plus11").html("<span class='plus11' style='float: right;'>-</span>");
		$(".plus12").html("<span class='plus12' style='float: right;'>+</span>");
			
	}else{
		//$('#ciudadess > ul').slideUp(300);
		$('#ciudadess').slideUp(1300);
		//$('#ciudadess').hide();
		$('#accordion').slideDown(1300);
		$(".menulocam11").css({"backgroundColor": "#fff", "text-decoration": "none","color": "#536074" });
		$(".menulocam12").css({"color": "#fff", "backgroundColor": "#007bff", "text-decoration": "none" });
		$(".plus12").html("<span class='plus12' style='float: right;'>-</span>");
		$(".plus11").html("<span class='plus11' style='float: right;'>+</span>");
	}
}
/* 00000000000 END  MENUES INTERNOS CANDIDATOS POR LOCALIDADES 00000000000000 */
/* 00000000000 MENUES INTERNOS CANDIDATOS FPV POR LOCALIDADES 00000000000000 */
function mostciudadefpv(destino){
	if(destino == 'ciudad'){
		//$('#acordfpvs > ul').slideUp(300);
		$('#acordfpvs').slideUp(1300);
		//$('#acordfpvs').hide();
		$('#ciudadessfpvs').slideDown(1300);
		//$('#ciudadessfpvs').show();	
		$(".menulocam22").css({"backgroundColor": "#fff", "text-decoration": "none","color": "#536074" });
		$(".menulocam21").css({"color": "#fff", "backgroundColor": "#007bff", "text-decoration": "none" });
		$(".plus21").html("<span class='plus21' style='float: right;'>-</span>");
		$(".plus22").html("<span class='plus22' style='float: right;'>+</span>");
		
	}else{
		//$('#ciudadessfpvs > ul').slideUp(300);
		$('#ciudadessfpvs').slideUp(1300);
		//$('#ciudadessfpvs').hide();
		$('#acordfpvs').slideDown(1300);
		//$('#acordfpvs').show();
		$(".menulocam21").css({"backgroundColor": "#fff", "text-decoration": "none","color": "#536074" });
		$(".menulocam22").css({"color": "#fff", "backgroundColor": "#007bff", "text-decoration": "none" });
		$(".plus22").html("<span class='plus22' style='float: right;'>-</span>");
		$(".plus21").html("<span class='plus21' style='float: right;'>+</span>");
	}
}
/* 00000000000 MENUES INTERNOS CANDIDATOS FPV POR LOCALIDADES 00000000000000 */
/* CANDIDATOS POR DEPARTAMENTOOO */
function departamentos($departamento){
	/*FUNCION PARA MOSTRAR U OCULTAR MENUES */ 
		
	/* END FUNCION PARA MOSTRAR U OCULTAR MENUES*/
	
	/* CONSULTA PARA ROLL OVER EN EL MAPA, CADA VEZ QUE SE SELECCIONA UN DEPARTAMENTO */
	if($departamento == 'rawsond'){
		$('.map').attr('src','img/maparawson.jpg');	
	}else if($departamento == 'florentino ameghino'){
		$('.map').attr('src','img/mapaflorentino.jpg');	
	}else if($departamento == 'paso de indios'){
		$('.map').attr('src','img/mapapasodeindios.jpg');	
	}else if($departamento == 'rio senguer'){
		$('.map').attr('src','img/mapariosenguer.jpg');	
	}else if($departamento == 'rawson'){
		$('.map').attr('src','img/maparawsonover.jpg');	
	}else if($departamento == 'comodoro'){
		$('.map').attr('src','img/mapacomodoroover.jpg');	
	}else if($departamento == 'trelew'){
		$('.map').attr('src','img/mapatrelewover.jpg');	
	}else if($departamento == 'madryn'){
		$('.map').attr('src','img/mapamadrynover.jpg');	
	}else if($departamento == 'esquel'){
		$('.map').attr('src','img/mapaesquelover.jpg');	
	}else{
		$('.map').attr('src','img/mapa'+$departamento+'.jpg');
	}
	
	/* END CONSULTA PARA ROLL OVER EN EL MAPA, CADA VEZ QUE SE SELECCIONA UN DEPARTAMENTO */
	
	//alert("se ejecuta y envia: "+ $departamento);
	$.ajax({
			   type: "POST",
			   url: "departamentos.php",
			   data:{'departamento':$departamento},
			   dataType:"json",
			   cache: false,
			   async: true,			   			   
			   beforeSend: function() {
	              $("#"+$departamento+"gif").show();
	           },
			   success: function(resultado2){
			    
			   //alert("ALGO BIEN");    
			   //alert("Resul" +resultado2);
			   //alert(resultado2);
			   
			   procesodepartamentos(resultado2,$departamento); // LLAMO FUNCION DE PROCESAMIENTO DEL ARRAY !!!! 
			   },	
			    error: function (er, err, error)
			    {
					alert("Revise su conección a Internet; el sistema no pudo terminar de consultar las bases de datos por un error de conección. ");
					//alert(error);
			    }
	}); // END AJAX ! 
}
function departamentosfpv($departamento, $menuespe){
	//alert("se ejecuta y envia: "+ $departamento);
	/* CONSULTA PARA ROLL OVER EN EL MAPA, CADA VEZ QUE SE SELECCIONA UN DEPARTAMENTO */
	if($departamento == 'rawsond'){
		$('.map').attr('src','img/maparawson.jpg');	
	}else if($departamento == 'florentino ameghino'){
		$('.map').attr('src','img/mapaflorentino.jpg');	
	}else if($departamento == 'paso de indios'){
		$('.map').attr('src','img/mapapasodeindios.jpg');	
	}else if($departamento == 'rio senguer'){
		$('.map').attr('src','img/mapariosenguer.jpg');	
	}else if($departamento == 'rawson'){
		$('.map').attr('src','img/maparawsonover.jpg');	
	}else if($departamento == 'comodoro'){
		$('.map').attr('src','img/mapacomodoroover.jpg');	
	}else if($departamento == 'trelew'){
		$('.map').attr('src','img/mapatrelewover.jpg');	
	}else if($departamento == 'madryn'){
		$('.map').attr('src','img/mapamadrynover.jpg');	
	}else if($departamento == 'esquel'){
		$('.map').attr('src','img/mapaesquelover.jpg');	
	}else{
		$('.map').attr('src','img/mapa'+$departamento+'.jpg');
	}
	
	/* END CONSULTA PARA ROLL OVER EN EL MAPA, CADA VEZ QUE SE SELECCIONA UN DEPARTAMENTO */
	
	
	
	$.ajax({
			   type: "POST",
			   url: "departamentos.php",
			   data:{'departamento':$departamento,'menuespe':$menuespe},
			   dataType:"json",
			   cache: false,
			   async: true,			   			   
			   beforeSend: function() {
	             $("#"+$departamento+"giffpv").show();
	               //$("#"+$departamento+"giffpv").each(function(){$("#"+$departamento+"giffpv").show();});
	              //alert("ANDA");
	           },
			   success: function(resultado2){
			    
			   //alert("ALGO BIEN");    
			   //alert("Resul" +resultado2);
			   procesodepartamentos(resultado2,$departamento,$menuespe); // LLAMO FUNCION DE PROCESAMIENTO DEL ARRAY !!!! 
			   },	
			    error: function (er, err, error)
			    {
					alert("Revise su conección a Internet; el sistema no pudo terminar de consultar las bases de datos por un error de conección. ");
					//alert(error);
			    }
	}); // END AJAX ! 
}
function procesodepartamentos($deptos,$departamento,$menuespe){
      //alert($deptos);
      //alert($departamento);  
        var nuevoarr = 0;
        if($departamento == 'florentino ameghino'){
     		//alert("es florentino");
     		$departamento = 'florentinoa';
    	 	nuevoarr = $deptos; 
    	 	//alert($departamento);
    	 	//$deptos = nuevoarr.split(';');	
    	 }else if($departamento == 'paso de indios'){
     		//alert("es florentino");
     		$departamento = 'pasodi';
    	 	nuevoarr = $deptos; 
    	 	//alert($departamento);
    	 	//$deptos = nuevoarr.split(';');	
    	 }else if($departamento == 'rio senguer'){
     		//alert("es florentino");
     		$departamento = 'riose';
    	 	nuevoarr = $deptos; 
    	 	//alert($departamento);
    	 	//$deptos = nuevoarr.split(';');	
    	 } 
	 
	 
	 //alert($deptos);
        $("#"+$departamento+"giffpv").hide();
        $("#"+$departamento+"gif").hide();
        
        document.getElementById($departamento+"fpv").innerHTML = ''; // RESETEO Y BORRO LA IMPRESION DE INFO DE CADA DPT 
		document.getElementById($departamento+"loc").innerHTML = ''; // RESETEO Y BORRO LA IMPRESION DE INFO DE CADA DPT
	//DEPARTAMENTOS 
     	var deeeptos = new Array();
     	deeeptos[0] = 'escalante';
     	deeeptos[1] = 'biedma';
     	deeeptos[2] = 'gaiman';
     	deeeptos[3] = 'martires';
     	deeeptos[4] = 'florentinoa';
     	deeeptos[5] = 'telsen';
     	deeeptos[6] = 'gastre';
     	deeeptos[7] = 'pasodi';
     	deeeptos[8] = 'sarmiento';
     	deeeptos[9] = 'riose';
     	deeeptos[10] = 'tehuelches';
     	deeeptos[11] = 'languineo';
     	deeeptos[12] = 'cushamen';
     	deeeptos[13] = 'futaleufu';
     	deeeptos[14] = 'rawsond';
     	deeeptos[15] = 'comodoro';
     	deeeptos[16] = 'trelew';
     	deeeptos[17] = 'madryn';
     	deeeptos[18] = 'rawson';
     	deeeptos[19] = 'esquel';
     	
     	 	
     	var d=0;
     	var elnuevo = 0;
		
     	for(d=0; d< deeeptos.length; d++){ 		
     		var actuaal = deeeptos[d];
     		//alert(actuaal);
     		elnuevo = actuaal;	
     		if(actuaal != $departamento){
     			//alert("NO ES IGUAL");
     			//alert();
     			$('#'+actuaal+'loc').slideUp(500);
     			$('#'+actuaal+'fpv').slideUp(500);
     			}else if(($('#'+elnuevo+'loc').is(':visible')) || ($('#'+elnuevo+'fpv').is(':visible')) ){					
					   //alert(elnuevo);
					   $('#'+actuaal+'loc').slideUp(500);
					   $('#'+actuaal+'fpv').slideUp(500);
					   }else{
     					//alert(actuaal);
     					$('#'+actuaal+'loc').slideDown(200);
     					$('#'+actuaal+'fpv').slideDown(200);
     			  		}    		
     			}
     	
		

	//alert("DDAA".$deptos);
	//CONSULTO CANTIDAD DE POSICIONES (NUMEROS), PARA SABER LA CANTIDAD DEL RESULTADO;
	//CONVIERTO EL STRING EN ARRAY 
	var deptoss = new Array(); 
	var deptossorden = new Array(3); 
	deptoss = $deptos.split(';');
	//alert(deptoss);
	delete deptoss[0]; // ELIMINA LA PALABRA 'ARRAY'
	deptoss = $.grep(deptoss,function(n){ /* JQUERY ELIMINA ELEMENTOS VACIOS DEL ARRAY */
			  return(n);
	});
	//alert(deptoss);		  
	var cantidad = 0;
	var cantidad2 = 0;	
	var deptossdesorden = 0;
	for(var i=0; i< deptoss.length; i++){
		if(isNaN(deptoss[i]) == false && deptoss[i].length < 4 && deptoss[i] != ""){ //FILTRO LOS NUM DEL RESTO DE LA INFO // EL NUMERO 4 DETERMINA LA CANTIDAD DE CIFRAS DE RESLTADOS DISPONIBLES
		//DEFINO LA CANTIDAD DEL ARRAY
			cantidad ++;
		}else{				
				deptossorden[cantidad - 1] += deptoss[i]+";";			
		}						       	    
	 }
 	
 	var listapordeptos = new Array();
 	for(var i=0; i<cantidad; i++){
 		var cajj = deptossorden[i];	 		
 		listapordeptos[i] = cajj.split(';');
 	}
	
	//alert($departamento);
    //alert(listapordeptos);
    /* IMPRIMO EL ARRAY TAL COMO QUIERO */ 
     var nombre = 0;
     var candidato = 0;
     var imag = 0;
     var lista = 0;
     for(var i=0; i<cantidad; i++){
     	//IMPRIMO LA CANTIDAD DE PARTIDOS     	
     	//SEPARO LOS NOMBRES CANDIDATOS PARA MOSTRARLOS UNO DEBAJO DEL OTRO
     	 nombre = listapordeptos[i][3];
     	 candidatos = nombre.split('-');
     	 //FILTRO IMAGENES Y DIFERENCIA DEL FPV
     	 imag = listapordeptos[i][6];    	 
     	 lista = listapordeptos[i][2];
     	 var color = 0;
   		 color = listapordeptos[i][7];
     	 if(imag == 'fpv.jpg'){
     	 	if(lista == '501 Z "Federación Peronista"'){
     	 		imag = 'fpvfueyo.jpg';		
     	 	    color = "#2187e7";
     	 	}else if(lista == '501 Z "Federación Peronista" '){
     	 		imag = 'fpvfueyo.jpg';		
     	 		color = "#2187e7";
     	 	}else if(lista == '501 Z Federación Peronista'){
     	 		imag = 'fpvfueyo.jpg';
     	 		color = "#2187e7";		
     	 	}else if(lista == '501 T "Unidad Peronista por la Producción y el Trabajo"'){
     	 		imag = 'fpvmoyano.jpg';
     	 		color = "#000";
     	 	}else if(lista == '501 T "Unidad Peronista por la Producción y el Trabajo" '){
     	 		imag = 'fpvmoyano.jpg';  
     	 		color = "#000";
     	 	}else if(lista == '501 T Unidad Peronista por la Producción y el Trabajo'){
     	 		imag = 'fpvmoyano.jpg';
     	 		color = "#000"; 
     	 	}else if(lista == '501 T Unidad Peronista por la Producción y el Trabajo '){
     	 		imag = 'fpvmoyano.jpg';
     	 		color = "#000"; 
     	 	}else if(lista == '501 H "Primero Chubut"'){
     	 		imag = 'fpvgonzalez.jpg';
     	 		color = "#1d149c";
     	 	}else if(lista == '501 H "Primero Chubut" '){
     	 		imag = 'fpvgonzalez.jpg'; 
      	 		color = "#1d149c";
      	 	}else if(lista == '501 H Primero Chubut'){
     	 		imag = 'fpvgonzalez.jpg';
     	 		color = "#1d149c";
     	 	}else if(lista == '501 E "Movimiento Justicia Social"'){
     	 		imag = 'fpvelias.jpg';
     	 		color = "#000";
     	 	}else if(lista == '501 E "Movimiento Justicia Social" '){
     	 		imag = 'fpvelias.jpg';  
     	 		color = "#000";
     	 	}else if(lista == '501 E Movimiento Justicia Social'){
     	 		imag = 'fpvelias.jpg';
     	 		color = "#000";
     	 	}else if(lista == '501 E Movimiento Justicia Social '){
     	 		imag = 'fpvelias.jpg';
     	 		color = "#000";
     	 	}else if(lista == '501 P "Blanca y Celeste"'){
     	 		imag = 'fpvdiaz.jpg';
     	 		color = "#000";
     	 	}else if(lista == '501 P "Blanca y Celeste" '){
     	 		imag = 'fpvdiaz.jpg';
     	 		color = "#000"; 
     	 	}else if(lista == '501 P Blanca y Celeste'){
     	 		imag = 'fpvdiaz.jpg';
     	 		color = "#000";
     	 	}else if(lista == '501 A "Unidad Ciudadana"'){
     	 		imag = 'fpvhourcade.jpg';
     	 		color = "#cacacb";
     	 	}else if(lista == '501 A "Unidad Ciudadana" '){
     	 		imag = 'fpvhourcade.jpg';
     	 		color = "#cacacb";
     	 	}else if(lista == '501 A Unidad Ciudadana'){
     	 		imag = 'fpvhourcade.jpg';
     	 		color = "#cacacb";
     	 	}	
     	 }
     	 // END FILTRO IMAGENES FPV
     	//CREO CLASE CSS PARA BARRA DINAMICA
     	
     	//LIMPIOS ESPACIOS EN BLANCO EN PORCENTAJES DE LA DB ! :(
     	var porche = 0;
     	var porchee = 0;
     	porchee = listapordeptos[i][5];
     	porche = porchee.trim();
     	porche = porche.replace(" ", "")//LIMPIO ESPACIOS BLANCOS DE LA PLANILLA
     	//alert(porche);
     	//GENERO CSS DINAMICO
     	var style = document.createElement('style');
		style.type = 'text/css';
		style.innerHTML = '.anidin'+i+'{ width:'+porche+' !important; -moz-animation:ani1-gen 4s ease-out; -webkit-animation:ani1-gen 4s ease-out; height: 20px;}@-moz-keyframes ani1-gen{ 0%  { width:0px;} 100%{ width:'+porche+' !important;}  }@-webkit-keyframes ani1-gen{ 0%  { width:0px;} 100%{ width:'+porche+' !important;}  }';
				
		document.getElementsByTagName('head')[0].appendChild(style);
	
		//document.getElementById($departamento+"loc").className = 'anidin';
     	
     	
     	
     	if($menuespe != 'fpv'){//IF PARA DETERMINAR SI SE ESTÄ USANDO EL ULTIMO MENU (FPV) O NO !, Y SE CARGAN DIV CON CONTENIDO CORRESP.
     		document.getElementById($departamento+"loc").innerHTML += '<li class="contenidomenud" style="display: block !important;"><div class="contenidomenud2"><div class="contenidomenud2img"><img src="img/localidades/'+imag+'" alt="Partido" /></div><div class="contenidomenud2txt"><p class="datoscandloc"><strong>'+listapordeptos[i][2]+'<br>'+listapordeptos[i][1]+'<br><br>'+candidatos[0]+'<br/>'+candidatos[1]+'</strong></p></div><div class="contenidomenudbar"><div class="contenidomenudbar2"><span class="expanda9 anidin'+i+'" style="background-color: '+listapordeptos[i][7]+'!important;"></span></div><div class="contenidomenud22"><p class="datoscandloc"><span class="spanpor"><strong>'+listapordeptos[i][5]+'</strong></span><span style="text-align: right; margin-left: 11px; font-size: 13px;">'+listapordeptos[i][4]+'</span></p></div></div></div></li>';
     	 }else{
 
     	 	document.getElementById($departamento+"fpv").innerHTML += '<li class="contenidomenud" style="display: block !important;"><div class="contenidomenud2"><div class="contenidomenud2img"><img src="img/localidades/'+imag+'" alt="Partido" /></div><div class="contenidomenud2txt"><p class="datoscandloc"><strong>'+listapordeptos[i][2]+'<br>'+listapordeptos[i][1]+'<br><br>'+candidatos[0]+'<br/>'+candidatos[1]+'</strong></p></div><div class="contenidomenudbar"><div class="contenidomenudbar2"><span class="expanda9 anidin'+i+'" style="background-color: '+color+ '!important;"></span></div><div class="contenidomenud22"><p class="datoscandloc"><span class="spanpor"><strong>'+listapordeptos[i][5]+'</strong></span><span style="text-align: right; margin-left: 11px; font-size: 13px;">'+listapordeptos[i][4]+'</span></p></div></div></div></li>';
     	 }
    
    
     } //ENFO FOR IMPRIMIR INFO POR LOCALIDADES
    
    
    /* END IMPRIMO EL ARRAY TAL COMO QUIERO */
	
}//END FUNCION PROCESO DEPARTAMERNTOS



/* CANDIDATOS POR DEPARTAMENTOOO */

			