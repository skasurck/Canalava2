

 $(document).ready(function(){
    
    var index =0;
    var titulos = ["Planchadurías y despachos de ropa","Tintorerías                       .","Lavanderías de autoservicio y por encargo","Lavanderías de blancos e industriales","Cámara Nacional de la Industria de Lavanderías"];
  setInterval(function(){
      $("#titulo").text(titulos[index]);
      
      if(index==4){
          index=0;
      }else{
          index++;
      };
  },5000);
    
});

