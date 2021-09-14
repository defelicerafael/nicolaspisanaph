
<!--- FORMULARIO POR LA DERECHA --->
<div class="offcanvas offcanvas-end" tabindex="-1" id="formularioSelfMakeUp" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Curso - Self Make Up</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <h5 id="resultado" class="bauhaus text-center"></h5>
        <div id="formulario">
            <form onsubmit="contacto.enviarEmail(); return false;" class="row g-3">
                <div class="col-6 mb-3">
                  <label for="name">Nombre: *</label>
                  <input type="text" class="form-control form-control-sm" id="name_" required>
                </div>
                <div class="col-6 mb-3">
                  <label for="name">Apellido: *</label>
                  <input type="text" class="form-control form-control-sm" id="apellido_" required>
                </div>
                <div class="col-6 mb-3">
                  <label for="email">mail: *</label>
                  <input type="email" class="form-control form-control-sm" id="email_" required>
                </div>
                <div class="col-6 mb-3">
                  <label for="telefono">Teléfono: *</label>
                  <input type="text" class="form-control form-control-sm" id="telefono_" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="textarea">MENSAJE</label>
                    <textarea class="form-control" id="textarea" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary btn-sm one-edge-shadow" id="btn_enviar">Enviar</button>
                
                <button class="bbtn btn-outline-secondary btn-sm one-edge-shadow" style="display:none;" type="button" disabled id="btnEnviando">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Enviando...
                </button>
                <!--<div style="width:200px;height:200px;margin:0 auto;" id="animation_lottie"></div>-->    
            </form>    
        </div>
    </div>
</div>  
