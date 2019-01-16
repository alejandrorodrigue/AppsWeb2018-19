window.onload = darLaHora;
    
            function darLaHora(){
            var fecha = new Date();
            var hora = fecha.getHours();
            var minutos = fecha.getMinutes();
            var segundos = fecha.getSeconds();
    
            document.write("<span class='hora'>" + hora + " :</span>  <span class='minutos'>" + minutos + "</span><span class='segundos'>" + segundos + "</span>");
            }
           
            setInterval(darLaHora,1000);
    
           
            