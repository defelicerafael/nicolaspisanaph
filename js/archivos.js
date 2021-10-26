 // ARCHIVOS //

    var archivos = document.getElementById('archivos');
    var masarchivos = document.getElementById('masarchivos');
    var mas_fotos = document.getElementById('mas_fotos');
    localStorage.setItem("limite",0);
    

    //console.log(mas_fotos);
    
    archivos.innerHTML ='<div class="spinner-border text-dark mx-auto d-block" role="status">'
                            +'<span class="visually-hidden">Loading...</span>'
                        +'</div>'; 
    
    var traerFotos = function(categoria,limite1,limite2,masonry) {
        //console.log(categoria,limite1,limite2,masonry);
        localStorage.setItem("limite",limite2);
        //console.log(localStorage.getItem("limite"));
        
        
        // RESETO TEMPLATES FOTOS //
        var templateFotos = '';
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            var json = JSON.parse(this.responseText);
            console.log(json);
            for(x in json){
                //console.log(x,json[x]);
                templateFotos += '<div class="mansonry_column" id="columna-'+x+'">'
                for(x2 in json[x]){
                    //console.log(x2,json[x][x2]);
                templateFotos += '<div class="'+json[x][x2].categoria+'">'
                                            +'<a href="#a" type="button" class="btn text-white rafuModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-rafu-index="'+json[x][x2].id+'" onclick="abrirElModal('+json[x][x2].id+')">'
                                                +'<img src="'+json[x][x2].img_home+'" class="fadeIn" style="width:100%" alt="Nat Córdoba make up artist - '+json[x][x2].categoria+'" title="Nat Córdoba make up artist - '+json[x].categoria+'">'
                                            +'</a>'
                                        +'</div>'    
                }
                templateFotos +='</div>';
                            
            }
            //console.log(templateFotos);
            archivos.innerHTML = templateFotos;
           
            
        }
        xmlhttp.open("GET", "server/ver_mas_archivos.php?categoria="+categoria+"&limite1="+limite1+"&columnas="+masonry+"&limite2="+limite2);
        xmlhttp.send();
        mas_fotos.onclick = function(){
            traerMasFotos(categoria,9,localStorage.getItem("limite"),3);
        };
    }

    

    // TRAER MAS FOTOS //
    var traerMasFotos = function(categoria,limite1,limite2,masonry) {
        console.log(categoria,limite1,limite2,masonry);
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            var json = JSON.parse(this.responseText);
            if(json.length>0){
                var suma = Number(limite2) + Number(localStorage.getItem("limite"));
                localStorage.setItem("limite",suma);
                for(x in json){
                    for(x2 in json[x]){
                    document.getElementById('columna-'+x).innerHTML +=' <div class="'+json[x][x2].categoria+'">'
                                                                            +'<a href="#a" type="button" class="btn text-white rafuModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-rafu-index="'+x2+'">'
                                                                                +'<img src="'+json[x][x2].img_home+'" class="fadeIn" style="width:100%" alt="Nat Córdoba make up artist - '+json[x][x2].categoria+'" title="Nat Córdoba make up artist - '+json[x].categoria+'">'
                                                                            +'</a>'
                                                                        +'</div>'    
                    }
                }
            }else{
                return;
            }
        }
        
        xmlhttp.open("GET", "server/ver_mas_archivos.php?categoria="+categoria+"&limite1="+limite1+"&columnas="+masonry+"&limite2="+limite2);
        xmlhttp.send();
    }

    traerFotos('portfolio',0,9,3);