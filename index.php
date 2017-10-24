<!DOCTYPE html>
<html lang="en">

  <head>
	
	<!-- PRE LOAD IMAGES FOR FAST VIEW -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resultados PASO 2017</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- END Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <!-- LEVANTO TIPO ROMANTICBOLD -->
    <link href="fonts/stylesheet.css" rel="stylesheet">
	<!-- END Custom styles for this template -->
	<!-- Bootstrap core JavaScript -->
    <script language="JavaScript" src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="vendor/popper/popper.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- END Bootstrap core JavaScript -->
	<!-- PRE LOAD SITE FOR FAST VIEW -->
	 <!--<script type="text/javascript">
		$(window).on('load', function() {	
			$(".loader").fadeOut("slow");
			$("#mapainteract").show();
		});
	 </script>-->
	<!-- RESPONSIVE COORD MAP 0000000000000000000000000000000000-->
	<script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
	<script src="js/jquery.rwdImageMaps.js" type="text/javascript"></script>
	<script src="js/jquery.rwdImageMaps.min.js" type="text/javascript"></script>
	<script type="text/javascript">
			$(document).ready(function(e) {
			    $('.map').rwdImageMaps();
			});
	</script>
	<!-- END RESPONSIVE CORD MAP 00000000000000000000000000000000-->
	<!-- FUNCIONES MAPEO INTERACTIVO -->
	
	
	<!-- GOOGLE API KEY LOAD -->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvRNh2qQr1ElZaTadDrWbq94DMJOhrzPc"></script>-->
	<!-- END GOOGLE API KEY LOAD -->
	<!--<script type="text/javascript" src="js/gmaps.js"></script>-->
	
      
  	 <script type="text/javascript" src="js/funcionesmapa-int.js"></script>	  
  	 <script type="text/javascript" src="js/funcmenus.js"></script>
 

	 <script type="text/javascript"> 
	  	 $("#accordion").click(function(){
	
			if(false == $(this).next().is(':visible')) {
				$('#accordion ul').slideUp(300);
			}
			$(this).next().slideToggle(300);
		});
		
		$('#accordion).show();
  	</script>
  
  	<!-- SOCIAL ICONS -->
  	<script type="text/javascript" src="js/jquery.csbuttons.min.js"></script>
  	<script type="text/javascript">
	  	$(document).ready(function(){
			$('.csbuttons').cSButtons();
		});
    </script>

    
    <script src="js/rrssb.js"></script>
    <link rel="stylesheet" href="css/rrssb.css" />
    
    
  </head>

  <body>
  	
  	
  	<div id="floating-bar"></div>
  	<!-- CARGO IMAGENES SIN MOSTRARLAS -->
	<div style="display: none;">
	  	<img src="img/mapabiedma.jpg" >
	  	<img src="img/mapacushamen.jpg">
	  	<img src="img/mapaescalante.jpg" >
	  	<img src="img/mapaflorentino.jpg">
	  	<img src="img/mapafutaleufu.jpg" >
	  	<img src="img/mapagaiman.jpg" >
	  	<img src="img/mapagastre.jpg" >
	  	<img src="img/mapalanguineo.jpg" >
	  	<img src="img/mapamartires.jpg" >
	  	<img src="img/mapapasodeindios.jpg">
	  	<img src="img/maparawson.jpg" >
	  	<img src="img/mapariosenguer.jpg">
	  	<img src="img/mapasarmiento.jpg" >
	  	<img src="img/mapatehuelches.jpg" >
	  	<img src="img/mapatelsen.jpg">
	  	<!-- MAPAS ROLL OVER MENU INTERNO-->
	  	<img src="img/mapacomodoroover.jpg">
	  	<img src="img/mapamadrynover.jpg">
	  	<img src="img/mapatrelewover.jpg">
	  	<img src="img/maparawsonover.jpg">
	  	<img src="img/mapaesquelover.jpg">
	</div>  	
  	  	<!-- CARGO IMAGENES SIN MOSTRARLAS -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">  
        <div class="navbar-brand"><img id="logochubu" src="img/logo-chubut.png" alt="Logo Provincia del Chubut" /><span class="spanloco"> PROVINCIA DEL CHUBUT</span></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarResponsive"> <!-- CLASE PARA BOTON RESPONSIVE!!!!!!!:::::class="collapse navbar-collapse"  -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="spanloco2">Resultados Paso 2017</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<div class="menuprin"> 
		<ul style="width: 100%; padding-top: 0px; list-style: none;">
			<a class="mengen" href="javascript:menumasalla('generales');" ><li >GENERALES</li></a>
			<a class="menloc" href="javascript:menulocali();" ><li>CANDIDATOS POR LOCALIDAD Y DEPARTAMENTO</li></a>
			<a class="menfpv"  href="javascript:menufpv();" ><li>CANDIDATOS FPV POR LOCALIDAD Y DEPARTAMENTO</li></a>
		</ul>
	</div>
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <!--<h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>-->

      <!-- Portfolio Item Row -->
      <div class="row">
        <!-- LOADER -->
        	<div id="interaccmapp">
        		<p id="gaimandescrip" class="interaccionmap" style="display: none;">Capital: Gaiman • Población: 4292 • Superficie Total: 11 076 km²1 • Total: 12.947 hab.1​ • Densidad: 12 hab/km²1​</p>
        		<p id="escalantedescrip" class="interaccionmap" style="display: none;">Capital: Comodoro Rivadavia • Superficie Total: 14015 km²1. • Total 	186.583 hab.1​ • Densidad: 13 31 hab/km²1</p>
        		<p id="telsendescrip" class="interaccionmap" style="display: none;">Capital: Telsen • Ciudad más poblada: Gan Gan • Total Superficie: 19893 km²1 • Total: 1644 hab.1​  • Densidad: 0 1 hab/km²1​</p>
        		<p id="biedmadescrip" class="interaccionmap" style="display: none;">Capital: Puerto Madryn • Población: 57614 • Superifcie Total: 12940 km²2​ • Total Habitantes: 82.883 habitantes​ • Densidad: 63 hab/km²2​</p>
        		<p id="rawsondescrip" class="interaccionmap" style="display: none;">Capital: Rawson • Ciudad más poblada: Trelew • Superficie Total: 3922 km²1 • Total: 131 148 hab.1 • Densidad: 33 5 hab/km²1​</p>
        		<p id="martiresdescrip" class="interaccionmap" style="display: none;">Capital: Las Plumas • Superficie Total: 15 445 km²1 • Total: 778 hab.1​ • Densidad: 0 1 hab/km²1​</p>
        		<p id="florentinodescrip" class="interaccionmap" style="display: none;">Capital: Camarones • Total: 16 088 km²1 • Total: 1 627 hab.1​ • Densidad: 0 1 hab/km²1​</p>
        		<p id="sarmientodescrip" class="interaccionmap" style="display: none;">Capital: Sarmiento • Superficie Total: 14 563 km²1 • Total: 11 396 hab.1​ • Densidad: 0 8 hab/km²1​</p>
        		<p id="riosenguerdescrip" class="interaccionmap" style="display: none;">Capital: Alto Río Senguer • Ciudad más poblada: Río Mayo • Superficie Total: 22 335 km²1​ • Total: 5 979 hab.1​ • Densidad: 0 3 hab/km²1​</p>
        		<p id="tehuelchesdescrip" class="interaccionmap" style="display: none;">Capital: José de San Martín • Ciudad más poblada: Gobernador Costa • Superficie Total: 14 750 km²1 • Total: 5 390 hab.1​ • Densidad: 0 4 hab/km²1​</p>
        		<p id="pasodeindiosdescrip" class="interaccionmap" style="display: none;">Capital: Paso de Indios • Superficie Total: 22300 km²1 • Total: 1 867 hab.1​ • Densidad: 0 1 hab/km²1​</p>
        		<p id="gastredescrip" class="interaccionmap" style="display: none;">Capital: Gastre • Superficie Total: 16 335 km²1​ • Total: 1 427 hab.1​ • Densidad: 0 1 hab/km²1​</p>	    
	    	    <p id="languineodescrip" class="interaccionmap" style="display: none;">Capital: Tecka • Superficie Total: 15 339 km²1​  • Total: 3 085 hab.1​ • Densidad: 0 2 hab/km²1​</p>
        		<p id="futaleufudescrip" class="interaccionmap" style="display: none;">Capital: Esquel • Superficie Total: 9 435 km²1 • Total: 43 076 hab.1​ • Densidad: 4 6 hab/km²1​</p>
	    	    <p id="cushamendescrip" class="interaccionmap" style="display: none;">Capital: Leleque • Ciudad más poblada: Lago Puelo • Superficie Total: 16250 km²1 • Total: 20 919 hab.1​ • Densidad: 1 3 hab/km²1​</p>
        		<p id="chubutdescrip" class="interaccionmap" style="display: none;">Capital: Rawson • Subdivisiones: 15 departamentos, 47 municipios y comunas • Superficie Total: 224 686 km²  • Total: 577 466 hab. • Densidad: 2 61 hab/km²</p>
	    	</div>
	    	<div id="mapainteract" style="width: 72%;">
					
					<img class="map" src="img/mapa.jpg" usemap="#chubut"><!-- MAPA CHUBUT -->
					<map name="chubut">
						<!-- COORD BIEDMA CIRCULOS -->
						<area alt="piramides" title="Puerto Piramides" href="#" shape="poly" coords="780,188,778,193,780,197,786,199,788,198,789,196,794,193,793,188,788,185,783,187,779,183" style="border: none !important;" />
						<area alt="" title="Puerto Madryn" href="#" shape="poly" coords="710,195,710,198,704,204,708,210,715,212,719,207,727,205,722,198,715,193,706,199,706,194" style="border: none !important;"/>
						<!-- COORD RAWSON CIRCULOS -->
					    <area alt="" title="Trelew" href="#" shape="poly" coords="695,261,691,264,691,270,692,277,700,279,702,273,709,271,701,262" style="border: none !important;" />
						<area alt="" title="Rawson" href="#" shape="poly" coords="700,283,693,283,689,286,692,291,698,296,701,298,709,288,703,280" style="border: none !important;" />						
						<!-- COORD GAIMAN CIRCULOS -->			
						<area alt="" title="Gaiman" href="#" shape="poly" coords="673,262,669,267,673,276,678,279,687,278,686,271,686,265,678,261"  style="border: none !important;" />						
						<area alt="" title="Dolavon" href="#" shape="poly" coords="660,269,653,269,651,276,657,281,662,285,667,284,668,278,669,274,663,268,668,270" style="border: none !important;" />						
						<area alt="" title="28 de Julio" href="#" shape="poly" coords="633,258,624,262,624,271,631,276,639,271,646,269,642,261" style="border: none !important;" />						
						<area alt="" title="Dique Florentino Ameghino" href="#" shape="poly" coords="623,288,616,284,608,290,608,297,612,302,622,304,628,296" style="border: none !important;" />						
						<!-- COORD TELSEN CIRCULOS -->						
						<area alt="" title="Telsen" href="#" shape="poly" coords="561,179,554,190,560,192,568,200,574,191,575,184" style="border: none !important;" />						
						<area alt="" title="Gan Gan" href="#" shape="poly" coords="482,170,469,174,472,182,484,190,495,185,489,172" style="border: none !important;" />				
						<!-- COORD Martires CIRCULOS -->
						<area alt="" title="El Marisol" href="#" shape="poly" coords="522,231,519,237,518,248,530,252,536,244,535,238,536,235" style="border: none !important;" />
     					<area alt="" title="Las Plumas" href="#" shape="poly" coords="550,287,548,297,552,304,564,302,564,292,569,290" style="border: none !important;" />				
						<!-- COORD FLORENTINO CIRCULOS -->
						<area alt="" title="Florentino Ameghino" href="#" shape="poly" coords="656,392,650,398,648,406,649,413,658,409,666,409,665,400,668,395" style="border: none !important;" />
						<!-- COORD ESCALANTE CIRCULOS -->
						<area alt="" title="Comodoro Rivadavía" href="#" shape="poly" coords="525,502,521,507,521,512,529,517,537,519,540,509,542,505" style="border: none !important;" />
						<area alt="" title="Rada Tilly" href="#" shape="poly" coords="519,514,532,521,529,530,520,530,513,526,513,520" style="border: none !important;" />				
						<!-- COORD SARMIENTO CIRCULOS -->
						<area alt="" title="Buen Pasto" href="#" shape="poly" coords="422,488,416,492,413,496,413,501,420,502,427,508,431,502,436,494,430,487" style="border: none !important;" />
						<area alt="" title="Sarmiento" href="#" shape="poly" coords="387,426,384,437,397,448,402,440,407,432"  style="border: none !important;" />
						<!-- COORD PASO DE INDIOS CIRCULOS -->				
    					<area alt="" title="Paso de Indios" href="#" shape="poly" coords="424,296,417,304,413,313,416,320,432,320,442,301" style="border: none !important;" />						
						<!-- COORD GASTRE CIRCULOS -->						
						<area alt="" title="Gastre" href="#" shape="poly" coords="453,235,445,240,445,245,453,252,461,252,473,242,463,234" style="border: none !important;" />
						<area alt="" title="Laguna Salada" href="#" shape="poly" coords="438,210,444,204,444,197,441,190,428,197,428,190,425,199,425,206,429,209"  style="border: none !important;" />
						<area alt="" title="El Escorial" href="#" shape="poly" coords="406,154,415,152,415,142,413,139,405,138,400,135,397,141,399,153" style="border: none !important;" />
						<!-- COORD CUSHAMEN CIRCULOS -->	
						<area alt="" title="" href="#" shape="poly" coords="314,153,304,157,299,151,298,144,298,136,312,138,318,144" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="305,168,298,176,298,186,308,186,320,183,319,176" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="268,180,262,185,264,199,275,195,283,187,282,179" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="245,133,244,141,247,144,253,148,259,144,262,137,262,131" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="241,153,232,161,237,165,243,170,255,167,255,158" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="234,140,225,144,225,153,229,156,238,153,250,153,242,141" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="221,136,211,133,210,139,209,146,215,152,220,151,226,146,228,141" style="border: none !important;" />
						<!-- COORD FUTALEUFU CIRCULOS -->
						<area alt="" title="" href="#" shape="poly" coords="211,227,207,239,207,244,214,246,222,244,225,239,227,235" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="221,242,209,249,212,254,215,257,221,258,228,252,230,247" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="225,255,213,255,217,259,217,268,226,268,232,262"  style="border: none !important;"/>
						<area alt="" title="" href="#" shape="poly" coords="228,271,221,269,215,278,220,285,231,286" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="230,268,230,276,233,279,240,279,240,274,242,268,245,266,229,265" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="246,268,243,276,243,280,246,284,252,283,260,280,257,271" style="border: none !important;" />
	                    <area alt="" title="" href="#" shape="poly" coords="232,251,232,257,231,262,237,266,245,266,247,257,252,250,236,248" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="241,230,238,238,242,244,249,243,252,235,258,239,249,228,242,227,239,227" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="256,221,253,230,256,235,276,238,264,240,269,225,275,228,271,232" style="border: none !important;" />
						<!-- COORD LANGUINEO CIRCULOS -->
	      				<area alt="" title="" href="#" shape="poly" coords="339,216,333,226,333,233,336,236,349,236,354,228" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="327,242,316,239,311,246,311,255,323,262,326,253,333,247" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="319,273,311,279,313,283,320,289,327,289,329,278"  style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="288,276,281,285,290,294,299,293,304,287,305,283" style="border: none !important;" />
						<!-- COORD TEHUELCHES CIRCULOS -->
						<area alt="" title="" href="#" shape="poly" coords="235,334,220,334,222,344,225,353,234,357,242,353,242,344,245,340" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="261,334,255,341,262,347,264,350,273,350,279,340,272,333"  style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="316,326,313,327,309,332,309,343,317,342,326,345,329,335,329,326" style="border: none !important;"  />
    					<area alt="" title="" href="#" shape="poly" coords="340,321,338,332,344,336,357,337,361,328,359,321" style="border: none !important;" />
						<!-- COORD RIO SENGUER CIRCULOS -->
						<area alt="" title="" href="#" shape="poly" coords="247,515,238,522,242,528,247,532,256,530,264,523" style="border: none !important;" /> 
						<area alt="" title="" href="#" shape="poly" coords="249,481,243,492,251,495,264,486,263,496,257,499,259,481"  style="border: none !important;"/>
						<area alt="" title="" href="#" shape="poly" coords="270,402,263,410,264,417,274,422,282,416,288,411" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="290,431,284,437,288,446,293,451,303,442,302,431" style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="296,487,289,490,284,497,285,506,297,506,309,492"  style="border: none !important;" />
						<area alt="" title="" href="#" shape="poly" coords="344,475,338,487,346,491,353,496,362,489,355,478" style="border: none !important;"  />
						<area alt="" title="" href="#" shape="poly" coords="345,499,336,505,336,517,346,522,357,520,359,508"  style="border: none !important;" />
						
						<!-- EN MARCADORES  -->		
						
				
						<!-- ESCALANTE -->
						<area id="escalante" href="javascript:overfunc('escalante');" title="TX" shape="poly" coords="561,400,560,434,615,438,607,445,609,448,602,446,608,454,602,456,594,455,586,454,574,455,573,459,564,466,557,475,556,491,551,486,547,502,543,510,529,531,471,532,472,400" style="border: none !important;">
						<!-- TELSEN -->
						<area id="telsen" alt="" title="" href="javascript:overfunc('telsen');" shape="poly" coords="468,130,472,215,651,213,651,131" style="border: none !important;" />			
						<!-- BIEDMA -->
						<area id="biedma" alt="" title="" href="javascript:overfunc('biedma');" shape="poly" coords="652,130,650,216,735,216,729,210,725,210,725,208,718,208,722,203,725,197,728,193,735,192,740,184,746,184,750,183,756,182,765,185,769,187,773,190,774,196,776,199,775,209,778,214,783,219,790,222,814,220,817,214,821,211,824,206,824,200,828,196,828,190,826,181,827,168,824,161,820,151,815,142,814,140,810,138,807,142,803,142,798,145,791,146,786,151,769,152,769,156,773,156,784,156,786,158,790,160,790,166,790,169,785,169,778,170,772,171,769,173,760,173,752,174,751,169,755,163,762,153,741,148,729,142,721,138,717,133,720,130" style="border: none !important;" />
						<!-- RAWSON -->
						<area id="rawson" alt="" title="" class="raw" href="javascript:overfunc('rawson');" shape="poly" coords="735,215,691,215,689,306,693,297,696,294,704,298,704,280,708,274,716,272,714,263,726,251,739,248,752,244,758,239,766,234,771,228,765,225,761,227,757,223,749,225,737,219,733,214" style="border: none !important;" />
						<!-- GAIMAN -->
						<area id="gaiman" alt="" title="" href="javascript:overfunc('gaiman');" shape="poly"  coords="563,213,563,260,605,260,606,306,687,308,689,216" style="border: none !important;" style="border: none !important;" />
						<!-- MARTIRES -->
						<area id="martires" alt="" title="" href="javascript:overfunc('martires');" shape="poly" coords="517,213,518,401,562,399,562,394,574,384,582,368,586,357,586,351,596,349,595,338,596,333,604,330,608,324,609,317,609,312,612,311,610,306,602,305,605,262,563,259,561,215,559,212" style="border: none !important;" />
						<!-- FLORENTINO AMEGHINO --> 
						<area id="florentino" alt="" title="" href="javascript:overfunc('florentino');" shape="poly" coords="610,305,610,314,608,325,598,333,591,340,591,348,587,357,576,376,571,383,566,393,563,398,562,437,614,439,617,437,618,441,625,437,625,433,626,428,634,433,638,435,642,438,650,438,656,437,662,439,666,439,672,438,673,430,677,426,663,422,663,417,663,412,669,403,676,398,696,379,701,368,696,356,698,350,703,348,705,337,696,311,688,309" style="border: none !important;" />
						<!-- SARMIENTO -->
						<area id="sarmiento" alt="" title="" href="javascript:overfunc('sarmiento');" shape="poly" coords="379,399,379,533,472,531,471,400" style="border: none !important;" />
						<!-- RIO SENGUER -->
						<area id="riosenguer" alt="" title="" href="javascript:overfunc('riosenguer');" shape="poly" coords="263,399,263,403,260,408,258,412,252,412,251,407,245,409,240,409,234,412,230,407,225,411,220,411,216,415,212,413,205,409,200,410,200,416,200,423,211,430,213,429,217,427,222,431,232,432,238,433,239,435,239,446,246,451,253,462,250,468,244,472,244,478,248,488,243,486,236,486,228,491,227,500,226,504,226,518,232,521,236,529,238,531,379,531,376,400" style="border: none !important;" />
						<!-- TEHUELCHES -->
						<area id="tehuelches" alt="" title="" href="javascript:overfunc('tehuelches');" shape="poly" coords="281,308,281,313,270,314,270,322,247,325,236,331,229,329,224,333,223,342,217,345,216,353,220,362,218,367,218,372,226,373,231,375,249,371,257,374,264,376,264,382,267,382,268,388,262,392,262,394,262,399,354,400,387,347,382,307" style="border: none !important;" />
						<!-- PASO DE INDIOS -->
	      				<area id="pasodeindios" alt="" title="" href="javascript:overfunc('pasodeindios');" shape="poly" coords="384,261,389,342,358,402,517,399,515,262" style="border: none !important;" />
						<!-- GASTRE -->
						<area id="gastre" alt="" title="" href="javascript:overfunc('gastre');" shape="poly" coords="391,131,384,259,517,259,515,215,471,213,471,129" style="border: none !important;" />
						<!-- LANGUINEO -->
						<area id="languineo" alt="" title="" href="javascript:overfunc('languineo');" shape="poly" coords="386,208,375,193,368,193,367,196,362,193,358,189,346,190,343,196,335,194,334,187,327,193,325,191,321,187,317,187,311,193,309,194,305,195,302,207,305,213,305,219,291,232,289,248,283,259,289,276,282,283,279,290,273,295,267,292,264,288,261,290,258,289,253,285,247,285,241,283,234,284,229,284,225,290,232,299,221,311,224,323,227,328,235,329,244,324,266,326,268,316,277,317,276,305,383,306,380,259,385,211" style="border: none !important;" />
						<!-- FUTALEUFU -->
						 <area id="futaleufu" alt="" title="" href="javascript:overfunc('futaleufu');" shape="poly" coords="197,174,197,180,188,184,187,190,181,199,190,203,186,213,203,243,213,250,215,254,213,260,205,267,201,275,205,279,209,277,212,277,211,282,211,288,218,288,220,286,231,282,240,285,247,285,254,284,257,287,259,289,263,289,268,293,274,292,274,286,283,284,286,278,282,265,288,245,288,235,289,227,301,222,302,216,274,211,266,218,255,210,244,210,238,200,232,192,232,186,227,186,223,177,223,173" style="border: none !important;" />
						<!-- CUSHAMEN -->
						<area id="cushamen" alt="" title="" href="javascript:overfunc('cushamen');" shape="poly" coords="212,129,212,134,206,139,202,142,197,138,191,138,183,142,177,144,177,159,182,164,187,175,224,174,224,181,224,183,232,183,232,194,242,201,243,205,247,206,256,209,265,218,274,208,301,212,301,204,304,197,305,191,314,188,317,184,322,184,324,190,330,187,335,191,344,192,346,189,355,189,360,189,367,195,372,193,376,197,385,203,388,130" style="border: none !important;" />
						<!-- CHUBUT MAPITA -->
						<area id="chubutmapita" alt="" title="" href="javascript:overfunc('chubutmapita');" shape="poly" coords="49,504,56,531,90,527,85,501" style="border: none !important;" />
						
						<!-- END MAPEO -->
					</map>
			</div>
	    	
	    	
	    	<div id="prueba">
	    		
	    	</div>
	    	
			<!-- MAPA GAIMAN PRUEBA -->
            <div style="display: none; width: 700px; height: 400px;">
            	
            </div>
            <div id="ESCALANTE" style="display: none; width: 700px; height: 400px;">
            	
            
          

          
          <!--<img class="img-fluid" src="http://placehold.it/750x500" alt="">-->
        </div>
		<script type="text/javascript">	
          	function imprimgeneral(resultg, veces, largo){			
				for(var i=0; i<veces; i++){
					cadena = resultg['partido'+i];
			        cadena2 = cadena.split([',']);
				    /* LIMPIAR ARRAY */
				    vece = cadena2.length;
				    /* LIMPIAR ARRAY */
				    for(var h=0; h<vece; h++){
				        if(cadena2[h] == '' || cadena2[h] === ' ' || cadena2[h] == ', ,' || cadena2[h] == ',,' 
				        || cadena2[h] == 'undefined' || cadena2[h] === 'undefinedundefined' || cadena2[h].length < 2 || cadena2[h] == ',' 
				        || cadena2[h] === undefined){
				        	delete cadena2[h];
				        } 
			        }
			        cadena2 = $.grep(cadena2,function(n){ /* JQUERY ELIMINA ELEMENTOS VACIOS DEL ARRAY */
						  return(n);
					});
			        /* END LIMPIAR ARRAY */
			       
			       //CREO CLASE CSS PARA BARRA DINAMICA
     	
			     	//LIMPIOS ESPACIOS EN BLANCO EN PORCENTAJES DE LA DB ! :(
			     	var porche = 0;
			     	var porchee = 0;
			     	porchee = cadena2[4];
			     	porche = porchee.trim();
			     	porche = porche.replace(" ", "")//LIMPIO ESPACIOS BLANCOS DE LA PLANILLA
			     	
			     	//GENERO CSS DINAMICO
			     	
			     	var style = document.createElement('style');
					style.type = 'text/css';
					style.innerHTML = '.anidino'+i+'{ width:'+porche+' !important; -moz-animation:ani1-gen 4s ease-out; -webkit-animation:ani1-gen 4s ease-out; height: 20px;}@-moz-keyframes ani1-gen{ 0%  { width:0px;} 100%{ width:'+porche+' !important;}  }@-webkit-keyframes ani1-gen{ 0%  { width:0px;} 100%{ width:'+porche+' !important;}  }';
		    		document.getElementsByTagName('head')[0].appendChild(style);
			       /* END CLASES CSS */
					$('#general').show();
					document.getElementById("general").innerHTML += '<ul class="ul-uno"><li><img src="img/'+cadena2[5]+'"></li><ul class="ul-dos"><li class="li-uno"><strong>'+cadena2[4]+'</strong></li><li class="li-dos">'+cadena2[0]+'<br/><span style="font-size: 10px;">'+cadena2[1]+'</span></li></ul><ul class="ul-tres"><li class="li-tres">'+cadena2[3]+' VOTOS</li><li class="li-cuatro"><span class="expanda9 ani'+i+'-gen" style="background: '+cadena2[6]+' !important;"> </span></li></ul></ul><div style="width: 250px; height: 7px; background-color: #7f96a7;"></div>';	  				
				
					
				}

			}
			
		  	
		  </script>	
		  
        <div class="col-md-4">
        	<!-- MENU GENERAL /////////////////// -->
        	<div class="reeed">
		<div class="filtro-bus2">
			<!--<a href="#" data-type="facebook" data-count="true" class="csbuttons"><img src="img/logof.png" alt="logo facebook" style="width: 28px; text-decoration: none !important; float: left;"/></a>
	        <a href="#" data-type="twitter" data-count="true" data-txt="Resultados Paso 2017" data-via="Paso2017" class="csbuttons"><img src="img/logot.jpg" alt="logo twitter" style="width: 28px; text-decoration: none !important; float: left;" /></a>
			-->
		<div><a href="/~smetrico/nuevo/xls/FPV-PASO-2017.xlsx" target="_blank"> 
			<img class="logoexcel" src="img/excel.png" alt="logo excel"   /><!-- DESCARGAR EXCEL (.XLS) --></a>
		</div>
		</div>
	
	  <ul class="rrssb-buttons" style="float: right !important; width: 25%; margin: 0 auto !important;">
    	<li class="rrssb-email">
        <!-- Replace subject with your message using URL Endocding: http://meyerweb.com/eric/tools/dencoder/ -->
        <a href="mailto:?Subject=Resultados Paso 2017">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21.386 2.614H2.614A2.345 2.345 0 0 0 .279 4.961l-.01 14.078a2.353 2.353 0 0 0 2.346 2.347h18.771a2.354 2.354 0 0 0 2.347-2.347V4.961a2.356 2.356 0 0 0-2.347-2.347zm0 4.694L12 13.174 2.614 7.308V4.961L12 10.827l9.386-5.866v2.347z"/></svg>
          </span>
          <span class="rrssb-text">email</span>
        </a>
      </li>

      <li class="rrssb-facebook">
        <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
              https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://108.160.150.200/~smetrico/nuevo/index.php" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg>
          </span>
          <span class="rrssb-text">facebook</span>
        </a>
      </li>

      <!--<li class="rrssb-instagram">
         Replace href with your URL 
        <a href="http://instagram.com/">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="864" height="864" viewBox="0 0 864 864"><path d="M860.079 254.436c-2.091-45.841-9.371-77.147-20.019-104.542-11.007-28.32-25.731-52.338-49.673-76.28-23.943-23.943-47.962-38.669-76.282-49.675C686.711 13.292 655.404 6.013 609.564 3.92 563.628 1.824 548.964 1.329 432 1.329s-131.63.495-177.564 2.591c-45.841 2.093-77.147 9.372-104.542 20.019-28.319 11.006-52.338 25.731-76.28 49.675-23.943 23.942-38.669 47.96-49.675 76.28C13.292 177.288 6.013 208.595 3.92 254.436 1.824 300.37 1.329 315.036 1.329 432s.495 131.628 2.591 177.564c2.093 45.84 9.372 77.146 20.019 104.541 11.006 28.319 25.731 52.339 49.675 76.282 23.942 23.941 47.961 38.666 76.28 49.673 27.395 10.647 58.701 17.927 104.542 20.019 45.935 2.096 60.601 2.592 177.564 2.592s131.628-.496 177.564-2.592c45.84-2.092 77.146-9.371 104.541-20.019 28.32-11.007 52.339-25.731 76.282-49.673 23.941-23.943 38.666-47.962 49.673-76.282 10.647-27.395 17.928-58.701 20.019-104.541 2.096-45.937 2.592-60.601 2.592-177.564s-.496-131.63-2.592-177.564zm-77.518 351.591c-1.915 41.99-8.932 64.793-14.828 79.969-7.812 20.102-17.146 34.449-32.216 49.521-15.071 15.07-29.419 24.403-49.521 32.216-15.176 5.896-37.979 12.913-79.969 14.828-45.406 2.072-59.024 2.511-174.027 2.511s-128.622-.438-174.028-2.511c-41.988-1.915-64.794-8.932-79.97-14.828-20.102-7.812-34.448-17.146-49.518-32.216-15.071-15.071-24.405-29.419-32.218-49.521-5.897-15.176-12.912-37.979-14.829-79.968-2.071-45.413-2.51-59.034-2.51-174.028s.438-128.615 2.51-174.028c1.917-41.988 8.932-64.794 14.829-79.97 7.812-20.102 17.146-34.448 32.216-49.518 15.071-15.071 29.418-24.405 49.52-32.218 15.176-5.897 37.981-12.912 79.97-14.829 45.413-2.071 59.034-2.51 174.028-2.51s128.615.438 174.027 2.51c41.99 1.917 64.793 8.932 79.969 14.829 20.102 7.812 34.449 17.146 49.521 32.216 15.07 15.071 24.403 29.418 32.216 49.52 5.896 15.176 12.913 37.981 14.828 79.97 2.071 45.413 2.511 59.034 2.511 174.028s-.44 128.615-2.511 174.027z"/><path d="M432 210.844c-122.142 0-221.156 99.015-221.156 221.156S309.859 653.153 432 653.153 653.153 554.14 653.153 432c0-122.142-99.012-221.156-221.153-221.156zm0 364.713c-79.285 0-143.558-64.273-143.558-143.557 0-79.285 64.272-143.558 143.558-143.558 79.283 0 143.557 64.272 143.557 143.558 0 79.283-64.274 143.557-143.557 143.557z"/><circle cx="661.893" cy="202.107" r="51.68"/></svg>
          </span>
          <span class="rrssb-text">instagram</span>
        </a>
      </li>-->

      <!--<li class="rrssb-tumblr">
        <a href="http://tumblr.com/share/link?url=http%3A%2F%2Fwww.kurtnoble.com%2Flabs%2Frrssb&name=Ridiculously%20Responsive%20Social%20Sharing%20Buttons%20by%20KNI%20Labs">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M18.02 21.842c-2.03.052-2.422-1.396-2.44-2.446v-7.294h4.73V7.874H15.6V1.592h-3.714s-.167.053-.182.186c-.218 1.935-1.144 5.33-4.988 6.688v3.637h2.927v7.677c0 2.8 1.7 6.7 7.3 6.6 1.863-.03 3.934-.795 4.392-1.453l-1.22-3.54c-.52.213-1.415.413-2.115.455z"/></svg>
          </span>
          <span class="rrssb-text">tumblr</span>
        </a>
      </li>-->
      <!--<li class="rrssb-linkedin">
        
        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://rrssb.ml&amp;title=Ridiculously%20Responsive%20Social%20Sharing%20Buttons&amp;summary=Responsive%20social%20icons%20by%20KNI%20Labs" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M25.424 15.887v8.447h-4.896v-7.882c0-1.98-.71-3.33-2.48-3.33-1.354 0-2.158.91-2.514 1.802-.13.315-.162.753-.162 1.194v8.216h-4.9s.067-13.35 0-14.73h4.9v2.087c-.01.017-.023.033-.033.05h.032v-.05c.65-1.002 1.812-2.435 4.414-2.435 3.222 0 5.638 2.106 5.638 6.632zM5.348 2.5c-1.676 0-2.772 1.093-2.772 2.54 0 1.42 1.066 2.538 2.717 2.546h.032c1.71 0 2.77-1.132 2.77-2.546C8.056 3.593 7.02 2.5 5.344 2.5h.005zm-2.48 21.834h4.896V9.604H2.867v14.73z"/></svg>
          </span>
          <span class="rrssb-text">linkedin</span>
        </a>
      </li>-->
      <!--<li class="rrssb-xing">
         Replace href with your meta and URL information 
        <a href="https://www.xing.com/spi/shares/new?url=http://rrssb.ml" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M18.89,30.708L12.023,18.67L22.681,0h7.173L19.197,18.669l6.867,12.038L18.89,30.708L18.89,30.708z M7.617,21.422l5.328-8.771L8.949,5.612H2.186l3.995,7.039l-5.327,8.771H7.617z"/></svg>
          </span>
          <span class="rrssb-text">xing</span>
        </a>
      </li>-->
      <li class="rrssb-twitter">
        <!-- Replace href with your Meta and URL information  -->
        <a href="https://twitter.com/intent/tweet?text=#ResultadosPaso2017! http://108.160.150.200/~smetrico/nuevo/index.php"
        class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg>
          </span>
          <span class="rrssb-text">twitter</span>
        </a>
      </li>
      <!--<li class="rrssb-reddit">
        <a href="http://www.reddit.com/submit?url=http://www.rrssb.ml&title=RRSSB&text=Check%20out%20how%20ridiculously%20responsive%20these%20social%20buttons%20are">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M11.794 15.316c0-1.03-.835-1.895-1.866-1.895-1.03 0-1.893.866-1.893 1.896s.863 1.9 1.9 1.9c1.023-.016 1.865-.916 1.865-1.9zM18.1 13.422c-1.03 0-1.895.864-1.895 1.895 0 1 .9 1.9 1.9 1.865 1.03 0 1.87-.836 1.87-1.865-.006-1.017-.875-1.917-1.875-1.895zM17.527 19.79c-.678.68-1.826 1.007-3.514 1.007h-.03c-1.686 0-2.834-.328-3.51-1.005a.677.677 0 0 0-.958 0c-.264.265-.264.7 0 1 .943.9 2.4 1.4 4.5 1.402.005 0 0 0 0 0 .005 0 0 0 0 0 2.066 0 3.527-.46 4.47-1.402a.678.678 0 0 0 .002-.958c-.267-.334-.688-.334-.988-.043z"/><path d="M27.707 13.267a3.24 3.24 0 0 0-3.236-3.237c-.792 0-1.517.287-2.08.76-2.04-1.294-4.647-2.068-7.44-2.218l1.484-4.69 4.062.955c.07 1.4 1.3 2.6 2.7 2.555a2.696 2.696 0 0 0 2.695-2.695C25.88 3.2 24.7 2 23.2 2c-1.06 0-1.98.616-2.42 1.508l-4.633-1.09a.683.683 0 0 0-.803.454l-1.793 5.7C10.55 8.6 7.7 9.4 5.6 10.75c-.594-.45-1.3-.75-2.1-.72-1.785 0-3.237 1.45-3.237 3.2 0 1.1.6 2.1 1.4 2.69-.04.27-.06.55-.06.83 0 2.3 1.3 4.4 3.7 5.9 2.298 1.5 5.3 2.3 8.6 2.325 3.227 0 6.27-.825 8.57-2.325 2.387-1.56 3.7-3.66 3.7-5.917 0-.26-.016-.514-.05-.768.965-.465 1.577-1.565 1.577-2.698zm-4.52-9.912c.74 0 1.3.6 1.3 1.3a1.34 1.34 0 0 1-2.683 0c.04-.655.596-1.255 1.396-1.3zM1.646 13.3c0-1.038.845-1.882 1.883-1.882.31 0 .6.1.9.21-1.05.867-1.813 1.86-2.26 2.9-.338-.328-.57-.728-.57-1.26zm20.126 8.27c-2.082 1.357-4.863 2.105-7.83 2.105-2.968 0-5.748-.748-7.83-2.105-1.99-1.3-3.087-3-3.087-4.782 0-1.784 1.097-3.484 3.088-4.784 2.08-1.358 4.86-2.106 7.828-2.106 2.967 0 5.7.7 7.8 2.106 1.99 1.3 3.1 3 3.1 4.784C24.86 18.6 23.8 20.3 21.8 21.57zm4.014-6.97c-.432-1.084-1.19-2.095-2.244-2.977.273-.156.59-.245.928-.245 1.036 0 1.9.8 1.9 1.9a2.073 2.073 0 0 1-.57 1.327z"/></svg>
          </span>
          <span class="rrssb-text">reddit</span>
        </a>
      </li>-->
      <!--<li class="rrssb-vk">
        <a href="http://vk.com/share.php?url=http://rrssb.ml" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="70 70 378.7 378.7"><path d="M254.998 363.106h21.217s6.408-.706 9.684-4.23c3.01-3.24 2.914-9.32 2.914-9.32s-.415-28.47 12.796-32.663c13.03-4.133 29.755 27.515 47.482 39.685 13.407 9.206 23.594 7.19 23.594 7.19l47.407-.662s24.797-1.53 13.038-21.027c-.96-1.594-6.85-14.424-35.247-40.784-29.728-27.59-25.743-23.126 10.063-70.85 21.807-29.063 30.523-46.806 27.8-54.405-2.596-7.24-18.636-5.326-18.636-5.326l-53.375.33s-3.96-.54-6.892 1.216c-2.87 1.716-4.71 5.726-4.71 5.726s-8.452 22.49-19.714 41.618c-23.77 40.357-33.274 42.494-37.16 39.984-9.037-5.842-6.78-23.462-6.78-35.983 0-39.112 5.934-55.42-11.55-59.64-5.802-1.4-10.076-2.327-24.915-2.48-19.046-.192-35.162.06-44.29 4.53-6.072 2.975-10.757 9.6-7.902 9.98 3.528.47 11.516 2.158 15.75 7.92 5.472 7.444 5.28 24.154 5.28 24.154s3.145 46.04-7.34 51.758c-7.193 3.922-17.063-4.085-38.253-40.7-10.855-18.755-19.054-39.49-19.054-39.49s-1.578-3.873-4.398-5.947c-3.42-2.51-8.2-3.307-8.2-3.307l-50.722.33s-7.612.213-10.41 3.525c-2.488 2.947-.198 9.036-.198 9.036s39.707 92.902 84.672 139.72c41.234 42.93 88.048 40.112 88.048 40.112"/></svg>
          </span>
          <span class="rrssb-text">vk.com</span>
        </a>
      </li>-->
      <!--<li class="rrssb-hackernews">
        <a href="https://news.ycombinator.com/submitlink?u=http://www.rrssb.ml/&t=Check%20out%20how%20ridiculously%20responsive%20these%20social%20buttons%20are&text=Check%20out%20how%20ridiculously%20responsive%20these%20social%20buttons%20are">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M14 13.626l-4.508-9.19H6.588l6.165 12.208v6.92h2.51v-6.92l6.15-12.21H18.69z"/></svg>
          </span>
          <span class="rrssb-text">hackernews</span>
        </a>
      </li>-->
      <li class="rrssb-googleplus">
        <!-- Replace href with your meta and URL information.  -->
        <a href="https://plus.google.com/share?url=http://108.160.150.200/~smetrico/nuevo/index.php" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
          <span class="rrssb-text">google+</span>
        </a>
      </li>
      <!--<li class="rrssb-pocket">
        <a href="https://getpocket.com/save?url=http://rrssb.ml">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28.782.002c2.03.002 3.193 1.12 3.182 3.106-.022 3.57.17 7.16-.158 10.7-1.09 11.773-14.588 18.092-24.6 11.573C2.72 22.458.197 18.313.057 12.937c-.09-3.36-.05-6.72-.026-10.08C.04 1.113 1.212.016 3.02.008 7.347-.006 11.678.004 16.006.002c4.258 0 8.518-.004 12.776 0zM8.65 7.856c-1.262.135-1.99.57-2.357 1.476-.392.965-.115 1.81.606 2.496a746.818 746.818 0 0 0 7.398 6.966c1.086 1.003 2.237.99 3.314-.013a700.448 700.448 0 0 0 7.17-6.747c1.203-1.148 1.32-2.468.365-3.426-1.01-1.014-2.302-.933-3.558.245-1.596 1.497-3.222 2.965-4.75 4.526-.706.715-1.12.627-1.783-.034a123.71 123.71 0 0 0-4.93-4.644c-.47-.42-1.123-.647-1.478-.844z"/></svg>
          </span>
          <span class="rrssb-text">pocket</span>
        </a>
      </li>-->
      <!--<li class="rrssb-youtube">
        <a href="#">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M27.688 8.512a4.086 4.086 0 0 0-4.106-4.093H4.39A4.084 4.084 0 0 0 .312 8.51v10.976A4.08 4.08 0 0 0 4.39 23.58h19.19a4.09 4.09 0 0 0 4.107-4.092V8.512zm-16.425 10.12V8.322l7.817 5.154-7.817 5.156z"/></svg>
          </span>
          <span class="rrssb-text">youtube</span>
        </a>
      </li>
      -->
      <li class="rrssb-print">
        <a href="javascript:window.print()">
          <span class="rrssb-icon">
            <svg viewbox="0 0 24 24"><path fill="#000000" d="M18,3H6V7H18M19,12A1,1 0 0,1 18,11A1,1 0 0,1 19,10A1,1 0 0,1 20,11A1,1 0 0,1 19,12M16,19H8V14H16M19,8H5A3,3 0 0,0 2,11V17H6V21H18V17H22V11A3,3 0 0,0 19,8Z"></path></svg>
          </span>
          <span class="rrssb-text">print</span>
        </a>
      </li>
      <li class="rrssb-whatsapp">
        <a href="whatsapp://send?text=http://108.160.150.200/~smetrico/nuevo/" data-action="share/whatsapp/share">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90"><path d="M90 43.84c0 24.214-19.78 43.842-44.182 43.842a44.256 44.256 0 0 1-21.357-5.455L0 90l7.975-23.522a43.38 43.38 0 0 1-6.34-22.637C1.635 19.63 21.415 0 45.818 0 70.223 0 90 19.628 90 43.84zM45.818 6.983c-20.484 0-37.146 16.535-37.146 36.86 0 8.064 2.63 15.533 7.076 21.61l-4.64 13.688 14.274-4.537A37.122 37.122 0 0 0 45.82 80.7c20.48 0 37.145-16.533 37.145-36.857S66.3 6.983 45.818 6.983zm22.31 46.956c-.272-.447-.993-.717-2.075-1.254-1.084-.537-6.41-3.138-7.4-3.495-.993-.36-1.717-.54-2.438.536-.72 1.076-2.797 3.495-3.43 4.212-.632.72-1.263.81-2.347.27-1.082-.536-4.57-1.672-8.708-5.332-3.22-2.848-5.393-6.364-6.025-7.44-.63-1.076-.066-1.657.475-2.192.488-.482 1.084-1.255 1.625-1.882.543-.628.723-1.075 1.082-1.793.363-.718.182-1.345-.09-1.884-.27-.537-2.438-5.825-3.34-7.977-.902-2.15-1.803-1.793-2.436-1.793-.63 0-1.353-.09-2.075-.09-.722 0-1.896.27-2.89 1.344-.99 1.077-3.788 3.677-3.788 8.964 0 5.288 3.88 10.397 4.422 11.113.54.716 7.49 11.92 18.5 16.223 11.01 4.3 11.01 2.866 12.996 2.686 1.984-.18 6.406-2.6 7.312-5.107.9-2.513.9-4.664.63-5.112z"/></svg>
          </span>
          <span class="rrssb-text">Whatsapp</span>
        </a>
      </li>
		 
	  </ul>
	 	
    </div>
        	
        	<div id="general">
        		<div id="loaderGeneral" style="display: none;">
            		<img src="img/loading_apple.gif" style="width: 25px; margin-right: 6px;"/>
          		</div>
          	
        	</div>
        	<!-- END GENERAL /////////////////// -->
        	<!-- MENU C POR LOCALIDADES /////////////////// -->
        	<div id="menlocalidades" style="display: none;">
	        	<div id="mlocalidadesm">
	        		<ul class="mloca">
	        			<a href="javascript:mostciudade('ciudad');" id="mostciudade"><li class="menulocam11">Ciudades + 20.000 inscriptos<span class="plus11" style="margin-right: 5px; float: right !Important;">+</span></li></a>
	        			<a href="javascript:mostciudade('departamentos');" id="mostdepartament"><li class="menulocam12">Departamentos<span class="plus12" style="margin-right: 5px; float: right !Important;">+</span></li></a>
	        		</ul>
	        	</div>	
    		
        		<!-- MENU DEPARTAMENTOS CANDIDATOS POR LOCALIDAD -->
        		<ul id="accordion" style="display: none;">
					<a href="javascript:departamentos('escalante');" id="escalante" ><li><div class="titulosmenuesdesple">ESCALANTE<span id="escalantegif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="escalanteloc" style="display: none;"></section>
					<a href="javascript:departamentos('biedma');" id="biedma" ><li><div class="titulosmenuesdesple">BIEDMA<span id="biedmagif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="biedmaloc" style="display: none;"></section>
					<a href="javascript:departamentos('rawsond');" id="rawsond" ><li><div class="titulosmenuesdesple">RAWSON<span id="rawsondgif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="rawsondloc" style="display: none; "></section>
					<a href="javascript:departamentos('gaiman');" id="gaiman" ><li><div class="titulosmenuesdesple">GAIMAN<span id="gaimangif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="gaimanloc" style="display: none;"></section>
					<a href="javascript:departamentos('martires');" id="martires" ><li><div class="titulosmenuesdesple">MARTIRES<span id="martiresgif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="martiresloc" style="display: none;"></section>
					<a href="javascript:departamentos('florentino ameghino');" id="florentino ameghino" ><li><div class="titulosmenuesdesple">FLORENTINO AMEGHINO<span id="florentino ameghinogif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="florentinoaloc" style="display: none;"></section>
					<a href="javascript:departamentos('telsen');" id="telsen" ><li><div class="titulosmenuesdesple">TELSEN<span id="telsengif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="telsenloc" style="display: none;"></section>
					<a href="javascript:departamentos('gastre');" id="gastre" ><li><div class="titulosmenuesdesple">GASTRE<span id="gastregif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="gastreloc" style="display: none;"></section>
					<a href="javascript:departamentos('paso de indios');" id="paso de indios" ><li><div class="titulosmenuesdesple">PASO DE INDIOS<span id="paso de indiosgif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="pasodiloc" style="display: none;"></section>
					<a href="javascript:departamentos('sarmiento');" id="sarmiento" ><li><div class="titulosmenuesdesple">SARMIENTO<span id="sarmientogif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="sarmientoloc" style="display: none;"></section>
					<a href="javascript:departamentos('rio senguer');" id="rio senguer" ><li><div class="titulosmenuesdesple">RIO SENGUER<span id="rio senguergif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="rioseloc" style="display: none;"></section>
					<a href="javascript:departamentos('tehuelches');" id="tehuelches" ><li><div class="titulosmenuesdesple">TEHUELCHES<span id="tehuelchesgif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="tehuelchesloc" style="display: none;"></section>
					<a href="javascript:departamentos('languineo');" id="languineo" ><li><div class="titulosmenuesdesple">LANGUINEO<span id="languineogif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="languineoloc" style="display: none;"></section>
					<a href="javascript:departamentos('cushamen');" id="cushamen" ><li><div class="titulosmenuesdesple">CUSHAMEN<span id="cushamengif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="cushamenloc" style="display: none;"></section>
					<a href="javascript:departamentos('futaleufu');" id="futaleufu" ><li><div class="titulosmenuesdesple">FUTALEUFU<span id="futaleufugif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="futaleufuloc" style="display: none;"></section>
				</ul>
				<!-- MENU 1 DE EJEMPLO -->
        		<ul id="ciudadess" style="display: none; padding-left: 0;">
        			<ul id="accordion" style="display: block !important;">
        			<a href="javascript:departamentos('comodoro');" id="comodoro" ><li><div class="titulosmenuesdesple">COMODORO RIVADAVIA<span id="comodorogif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="comodoroloc" style="display: none;"></section>
        			<a href="javascript:departamentos('trelew');" id="trelew" ><li><div class="titulosmenuesdesple">TRELEW<span id="trelewgif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="trelewloc" style="display: none;"></section>
        			<a href="javascript:departamentos('madryn');" id="madryn" ><li><div class="titulosmenuesdesple">PUERTO MADRYN<span id="madryngif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="madrynloc" style="display: none;"></section>
        			<a href="javascript:departamentos('rawson');" id="rawson" ><li><div class="titulosmenuesdesple">RAWSON<span id="rawsongif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="rawsonloc" style="display: none;"></section>
					<a href="javascript:departamentos('esquel');" id="esquel" ><li><div class="titulosmenuesdesple">ESQUEL<span id="esquelgif" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="esquelloc" style="display: none;"></section>	
        			</ul>
        		</ul>
        	</div>
          	<!-- END MENU C POR LOCALIDADES /////////////////// -->
			<!-- MENU FPVS /////////////////// -->
          	<div id="fpvs" style="display: none;">
	        		<ul class="mloca">
	        			<a href="javascript:mostciudadefpv('ciudad');" id="mostciudadefpv" ><li class="menulocam21">Ciudades + 20.000 inscriptos<span class="plus21" style="margin-right: 5px; float: right !Important;">+</span></li></a>
	        			<a href="javascript:mostciudadefpv('departamentos');" id="mostdepartamentfpv" ><li class="menulocam22">Departamentos<span class="plus22" style="margin-right: 5px; float: right !Important;">+</span></li></a>
	        		</ul>
          	
          	<!-- MENU DEPARTAMENTOS CANDIDATOS POR LOCALIDAD FPV -->
        	<ul id="acordfpvs" style="display: none; padding-left: 0;">	
        		<ul id="accordion" class="acordfpvs" style="display: block !important;">
					<a href="javascript:departamentosfpv('escalante','fpv');" id="escalante" ><li><div class="titulosmenuesdesple">ESCALANTE<span id="escalantegiffpv" style="display: none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="escalantefpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('biedma','fpv');" id="biedma" ><li><div class="titulosmenuesdesple">BIEDMA<span id="biedmagiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="biedmafpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('rawsond','fpv');" id="rawson" ><li><div class="titulosmenuesdesple">RAWSON<span id="rawsondgiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="rawsondfpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('gaiman','fpv');" id="gaiman" ><li><div class="titulosmenuesdesple">GAIMAN<span id="gaimangiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="gaimanfpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('martires','fpv');" id="martires" ><li><div class="titulosmenuesdesple">MARTIRES<span id="martiresgiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="martiresfpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('florentino ameghino','fpv');" id="florentino ameghino" ><li><div class="titulosmenuesdesple">FLORENTINO AMEGHINO<span id="florentino ameghinogiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="florentinoafpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('telsen','fpv');" id="telsen" ><li><div class="titulosmenuesdesple">TELSEN<span id="telsengiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="telsenfpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('gastre','fpv');" id="gastre" ><li><div class="titulosmenuesdesple">GASTRE<span id="gastregiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="gastrefpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('paso de indios','fpv');" id="paso de indios" ><li><div class="titulosmenuesdesple">PASO DE INDIOS<span id="paso de indiosgiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="pasodifpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('sarmiento','fpv');" id="sarmiento" ><li><div class="titulosmenuesdesple">SARMIENTO<span id="sarmientogiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="sarmientofpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('rio senguer','fpv');" id="rio senguer" ><li><div class="titulosmenuesdesple">RIO SENGUER<span id="rio senguergiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="riosefpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('tehuelches','fpv');" id="tehuelches" ><li><div class="titulosmenuesdesple">TEHUELCHES<span id="tehuelchesgiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="tehuelchesfpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('languineo','fpv');" id="languineo" ><li><div class="titulosmenuesdesple">LANGUINEO<span id="languineogiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="languineofpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('cushamen','fpv');" id="cushamen" ><li><div class="titulosmenuesdesple">CUSHAMEN<span id="cushamengiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="cushamenfpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('futaleufu','fpv');" id="futaleufu" ><li><div class="titulosmenuesdesple">FUTALEUFU<span id="futaleufugiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="futaleufufpv" style="display: none;"></section>
				</ul>
			</ul>	
				<!-- MENU 1 DE EJEMPLO -->
        		<ul id="ciudadessfpvs" style="display: none; padding-left: 0;">
        			<ul id="accordion" style="display: block !important;">
        			<a href="javascript:departamentosfpv('comodoro','fpv');" id="comodoro" ><li><div class="titulosmenuesdesple">COMODORO RIVADAVIA<span id="comodorogiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="comodorofpv" style="display: none;"></section>
        			<a href="javascript:departamentosfpv('trelew','fpv');" id="trelew" ><li><div class="titulosmenuesdesple">TRELEW<span id="trelewgiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="trelewfpv" style="display: none;"></section>
        			<a href="javascript:departamentosfpv('madryn','fpv');" id="madryn" ><li><div class="titulosmenuesdesple">PUERTO MADRYN<span id="madryngiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="madrynfpv" style="display: none;"></section>
        			<a href="javascript:departamentosfpv('rawson','fpv');" id="rawson" ><li><div class="titulosmenuesdesple">RAWSON<span id="rawsongiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="rawsonfpv" style="display: none;"></section>
					<a href="javascript:departamentosfpv('esquel','fpv');" id="esquel" ><li><div class="titulosmenuesdesple">ESQUEL<span id="esquelgiffpv" style="display:none; float: right;"><img src="img/loading_apple.gif" style="width: 22px; margin-right: 6px;"/></span></div></li></a><!-- MENU DESPLE -->
						<section id="esquelfpv" style="display: none;"></section>	
        			</ul>
        		</ul>
        	</div>
          	<!-- END MENU C POR LOCALIDADES /////////////////// -->
		</div>
        <!-- END MENU FPVS /////////////////// -->
      
      <!-- /.row -->

      <!-- Related Projects Row -->
      <!--<h3 class="my-4">Related Projects</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

      </div>

    </div>-->
    <!-- /.container -->
	
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      
        <p class="m-0 text-center text-white">Copyright &copy; South View Consultoría 2017</p>
      
      <!-- /.container -->
    </footer>
  
  </body>
  <!-- SCRIPT MENU ACORDEON LOCALIDADES //////////////////-->
  <SCRIPT>
	$("#accordionNNNNNNNNNNNN > li").click(function(){	
		if(true == $(this).next().is(':visible')) { // ESTABA EN FALSE PARA LA ANIMACION
			$('#accordion > ul').slideUp(300);
			$('.contenidomenud').show();
		}
		
		$(this).next().slideToggle(300);
	});
	
	//$('#accordion > ul:eq(0)').show();
	$('.contenidomenud').hide();


</SCRIPT>
  <!-- END SCRIPT MENU ACORDEON LOCALIDADES //////////////////-->


</html>
