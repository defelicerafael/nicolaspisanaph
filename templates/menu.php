<style>
.menu-item{
  color: var(--gris-oscuro);
  text-transform: uppercase;
  text-decoration: none;
  
  display: inline-block;
  padding-right: 15px;
  position: relative;
  font-size:1rem;
}
.menu-item:hover{
  color: var(--gris-oscuro);
}
.menu-item:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: -5;
  content: "";
  display: block;
  height: 2px;
  left: 25%;*/
  position: absolute;
  background: var(--gris-oscuro);
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
.menu-item:hover:after { 
  width: 100%; 
  left: 0; 
}
</style>
<div class="container py-4 gris-oscuro" id="portfolio">
  <div class="rafu-navbar text-md-start text-center" id="menues">
    <!--<a href="#a" class="menu-item" onclick="traerFotos('novias',0,9,3)">novias</a>
    <a href="#a" class="menu-item" onclick="traerFotos('moda',0,9,3)">moda</a>
    <a href="#a" class="menu-item" onclick="traerFotos('trabajo',0,9,3)">trabajo</a>
    <a href="#a" class="menu-item" onclick="traerFotos('extras',0,9,3)">extras</a>-->
  </div>
</div>
    
    
 