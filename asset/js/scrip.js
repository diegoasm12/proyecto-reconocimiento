function validaSeleccion(){
    var tramite= document.getElementById("s_tramite");
    var sostenedor= document.getElementById("s_sostenedor");
    var tenencia= document.getElementById("s_tenencia");
    var plan= document.getElementById("s_planprograma");
    var res=false;
       if ((tramite.value == "0") || (sostenedor.value == "0") || (tenencia.value == "0" && tenencia.style.display!="none") || (plan.value == "0" && plan.style.display!="none"))
           {
                  alert("Debe Seleccionar todos los campos marcados con asterico (*)");
       } else{
           res=true;
           }
    
    return res;
    }
    
    function escondeSeleccion(){
        var selec=document.getElementById("s_tramite");
        var hselec=document.getElementById("s_tenencia");
        var hselec2=document.getElementById("s_planprograma");
        var valor=selec.value;
        if (valor!="20" || valor!="21"){
            hselec.style.display="none";
            hselec2.style.display="none";
            } else{
                 hselec.style.display="block";
            hselec2.style.display="block";
                }
        }
    
    function seleccion(){
        var sel=document.getElementById("s_tramite");
        var hsel=document.getElementById("s_sostenedor");
        var hselec=document.getElementById("s_tenencia");
        var hselec2=document.getElementById("s_planprograma");
        var htr=document.getElementById("tr_tenencia");
        var htr2=document.getElementById("tr_planprograma");
        var opcion=document.createElement("option");
        opcion.text="Alcalde o Jefe de DAEM";
        var tam=hsel.childElementCount;
        var valor=sel.value;
        
                if((valor!="20" || valor!="21") && tam<5){
                   try{
                   hsel.add(opcion,hsel.options[null]);
                   
                   }catch(e){
                    hsel.add(opcion,null);  	
                   }
                    htr.style.display="block";
                    htr2.style.display="block";
                    hselec.style.display="block";
                    hselec2.style.display="block";
                   }
               if((valor=="20" || valor=="21") && tam==5){
                   try{
                   hsel.removeChild(hsel.childNodes[4]);
                   }catch(e){
                     document.getElementById("s_sostenedor").lastChild.parentNode.removeChild(document.getElementById("s_sostenedor").lastChild); 	
                   }
                   hselec.style.display="none";
                     hselec2.style.display="none";
                    htr.style.display="none";
                     htr2.style.display="none";
                   
                   }
           
        }
