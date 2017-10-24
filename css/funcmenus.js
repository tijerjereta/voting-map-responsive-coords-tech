/**
 * @author Diego Rivas
 */
/* Se consulta mediante ajax y PHP la DB y se devuleve la info deseada */

function menumasalla($enviar){
			   alert("Menu locoooo: "+$enviar);
			   $.ajax({
			   type: "POST",
			   url: "menus.php",
			   data:{'menu':$enviar},
			   dataType:"json",
			   cache: false,
			   async: false,			   			   
			   success: function(resultado){
			     alert("RESULT CORREC: "+JSON.stringify(resultado));
			     console.log(resultado);
			     var resulg = resultado.split(';');
			     var gene = new Array();
			     var generales = new Array();
			     var g = 0;
			     var cantidad = 0;
			     for(i=0; i< resulg.length; i++){
			     	//alert("ARRAY: "+JSON.stringify(resulg[i]));
			     	if(isNaN(resulg[i]) == false && resulg[i].length < 2 && resulg[i] != ""){ //FILTRO LOS ID DEL RESTO DE LA INFO
			     		alert("IDs: "+JSON.stringify(resulg[i]));     		
			     		var id = JSON.stringify(resulg[i]);     		
			     		var info = JSON.stringify(resulg[i]);		
			     		generales[id]= info;
			     	    cantidad ++;   	    	
			     	}else{
			     		var info = JSON.stringify(resulg[i]);
			     		//alert(info);
			     		//generales[id]= [id, [info]];
			     		generales[id]= info;									
						//gene[1] = gene.push(generales[id]); // SUMO ELEMENTOS AL ARRAY 
						//gene = gene.push(generales[id]); // SUMO ELEMENTOS AL ARRAY
			     		gene[id] = gene.push(generales[id]); // SUMO ELEMENTOS AL ARRAY			 
			     	}						       
			     }
			     //alert("GENE ES: "+gene[1]);
			     /* MUESTRO DE FORMA SEPARADA LOS VALORES DE CADA PARTIDO */
			     var c = 0;
			     menugener($c,$h,$g,$cantidad,$gene);
			     /* RECORRO EL ARRAY ================================= */
			     //for(var j in gene) {
				    
				    //console.log(gene[j]); // elemento actual
					//alert(gene[j])
				//}
			     
			     
			       
			   },	
			    error: function (er, err, error)
			    {
					alert(error);
			    }
			   
		      }); 
}



			