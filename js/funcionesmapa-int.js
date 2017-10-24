		
		function departamento($departamento){
			alert($departamento);			
			$('.map').hide();
			$('#'+$departamento).show();			
			masalla($departamento);
		}
	/* FUNCION ROLL OVER DEPARTAMENTOS*/
	
	/*function overfunc($depart){
    	$('.map').attr('src','img/mapa'+$depart+'.jpg');	
		$("#"+$depart).mouseout(function() { 			  
		  $('.map').attr('src','img/mapa.jpg');
		});   	
    }*/
	$( document ).ready(function() {
    	/* MOUSE OVERS A BORRAR ----------------------*/ 
   		$("#gaiman").mouseover(function() {	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapagaiman.jpg');
		  $('#gaimandescrip').show();
		});
		$("#gaiman").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#gaimandescrip').hide();
		});
		/* ESCALANTE */		
		$("#escalante").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapaescalante.jpg');
		  $('#escalantedescrip').show();
		});
		$("#escalante").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#escalantedescrip').hide();
		});		
		/* TELSEN */		
		$("#telsen").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapatelsen.jpg');
		  $('#telsendescrip').show();
		});
		$("#telsen").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#telsendescrip').hide();
		});	
		/* BIEDMA */		
		$("#biedma").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapabiedma.jpg');
		  $('#biedmadescrip').show();
		});
		$("#biedma").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#biedmadescrip').hide();
		});
		/* RAWSON */		
		$("#rawson").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/maparawson.jpg');
		  $('#rawsondescrip').show();
		});
		$("#rawson").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#rawsondescrip').hide();
		});			
		/* GAIMAN */		
		$("#gaiman").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapagaiman.jpg');
		  $('#gaimandescrip').show();
		});
		$("#gaiman").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#gaimandescrip').hide();
		});	
		/* MARTIRES */		
		$("#martires").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapamartires.jpg');
		  $('#martiresdescrip').show();
		});
		$("#martires").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#martiresdescrip').hide();
		});	
		/* FLORENTINO */		
		$("#florentino").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapaflorentino.jpg');
		  $('#florentinodescrip').show();
		});
		$("#florentino").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#florentinodescrip').hide();
		});	
		/* SARMIENTO */		
		$("#sarmiento").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapasarmiento.jpg');
		  $('#sarmientodescrip').show();
		});
		$("#sarmiento").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#sarmientodescrip').hide();
		});	
		/* RIO SENGUER */		
		$("#riosenguer").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapariosenguer.jpg');
		  $('#riosenguerdescrip').show();
		});
		$("#riosenguer").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#riosenguerdescrip').hide();
		});	
		/* TEHUELCHES */		
		$("#tehuelches").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapatehuelches.jpg');
		  $('#tehuelchesdescrip').show();
		});
		$("#tehuelches").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#tehuelchesdescrip').hide();
		});	
		/* PASO DE INDIOS */		
		$("#pasodeindios").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapapasodeindios.jpg');
		  $('#pasodeindiosdescrip').show();
		});
		$("#pasodeindios").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#pasodeindiosdescrip').hide();
		});	
		/* GASTRE */		
		$("#gastre").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapagastre.jpg');
		  $('#gastredescrip').show();
		});
		$("#gastre").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#gastredescrip').hide();
		});	
		/* LANGUINEO */		
		$("#languineo").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapalanguineo.jpg');
		  $('#languineodescrip').show();
		});
		$("#languineo").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#languineodescrip').hide();
		});	
		/* FUTALEUFU */		
		$("#futaleufu").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapafutaleufu.jpg');
		  $('#futaleufudescrip').show();
		});
		$("#futaleufu").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#futaleufudescrip').hide();
		});	
		/* CUSHAMEN */		
		$("#cushamen").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapacushamen.jpg');
		  $('#cushamendescrip').show();
		});
		$("#cushamen").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  $('.map').attr('src','img/mapa.jpg');
		  $('#cushamendescrip').hide();
		});
		/* Chubut Mapita */		
		$("#chubutmapita").mouseover(function() {
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  //$('.map').attr('src','img/mapacushamen.jpg');
		  $('#chubutdescrip').show();
		});
		$("#chubutmapita").mouseout(function() {	 	
		  /*$( "#prueba" ).append( "<div>Handler for .mouseover() called.</div>" );*/
		  //$('.map').attr('src','img/mapa.jpg');
		  $('#chubutdescrip').hide();
		});	
	});
		/* END MOUSEOVERS A BORRA --------------------*/
	
	/* END FUNCION ROLL OVER DEPARTAMENTOS*/
	

	/* END FUNCIONES MAPEO INTERACTIVO */