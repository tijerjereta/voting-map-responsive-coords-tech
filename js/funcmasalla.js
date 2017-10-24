/**
 * @author Diego Rivas
 */
/* Se consulta mediante ajax y PHP la DB y se devuleve la info deseada */

function menumasalla($enviar){
			   alert("Menu locoooo: "+$enviar);
			   $.ajax({
			   type: "POST",
			   url: "googlem.php",
			   data:{'menu':$enviar},
			   dataType:"jsonp",
			   cache: false,
			   success: function(resultado){        
			   	   vergalind = JSON.parse(resultado);
			   	   alert(vergalind);
			   	   alert(resultado.join(' '));
			   	   alert(resultado);    
			       alert(JSON.stringify(resultado));			       
			       nuevo = JSON.stringify(resultado);
			       console.log(nuevo.length); 
			       alert("NUEVO ES:"+nuevo);
			       //var generales = nuevo.split(";");
			       
			       
			       /*console.log(resultado);
					/*$('#resultaa').html(resultado.ciudadlocalidad);*/
					/*alert("resultloco: "+resultado);
					/*console.log(resultado);	
			       /*alert(JSON.stringify(resultado));*/
			       if(resultado=='correct'){
						/*alert('ok');*/
			           /*window.location='index.php';*/
			       	alert("resultloco CORRE: "+resultado);
			       }else {
			       /*console.log(resultado);*/	
			       /*alert('arpon');*/
			       /*alert(resultado);*/
			       /* alert("resultloco: "+resultado);
			       /*window.location='coursesData.php';*/
			       }
			   }
			   
			}); 
}



			