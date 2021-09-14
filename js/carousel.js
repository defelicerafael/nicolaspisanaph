 // ARCHIVOS //

    var dentro_carousel = document.getElementById('dentro_carousel');
        dentro_carousel.innerHTML = '<div class="spinner-border text-dark mx-auto d-block" style="height:100vh;" role="status">'
                                    +'<span class="visually-hidden">Loading...</span>'
                                +'</div>'; 
    
    var traerCarousel = function() {
        // RESETO TEMPLATES FOTOS //
        dentro_carousel.innerHTML = '';
        var active = '';
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            var json = JSON.parse(this.responseText);
           // console.log(json);
            for(x in json){
                // SI ES EL PRIMERO LE PONGO ACTIVE
                if(json[x]['orden']==="1"){
                    active = "active";
                }else{
                    active = "";
                }
                dentro_carousel.innerHTML +=  '<div class="carousel-item '+active+'">'
                                        +'<img src="'+json[x]['img_home']+'" class="mx-auto d-block w-100" alt="'+json[x]['img_home']+'">'
                                        +'<div class="carousel-caption d-block">'
                                            +'<h1 class="">MAKE UP ARTIST</h1>'
                                             +'<button type="button" class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"> CONTACT ME </button>'
                                        +'</div>'    
                                    +'</div>';    
                }
              //  console.log(dentro_carousel.innerHTML);
            }
        xmlhttp.open("GET", "admin/server/traerCarousel.php?id=si");
        xmlhttp.send();
    };
   
    traerCarousel();