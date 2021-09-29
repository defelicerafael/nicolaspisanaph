<?php
include 'server/blog_info.php';
?>
<div id="blog"></div>
<div class="container py-md-5 py-3">
    <h3 class="mb-4 mb-md-2">El Blog de Natt</h3>
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item secondary"><button class="page-link secondary" role="button" tabindex="-1" id="mas_blog"><span aria-hidden="true">&laquo;</span></button></li>
            <li class="page-item secondary"><button class="page-link secondary" role="button" id="menos_blog"><span aria-hidden="true">&raquo;</span></button></li>
        </ul>
    </nav>
    <div class="row g-0">
        <div id="buscandoblog" class="fadeInNew"></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Blog-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EL BLOG DE NAT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
        <img id="blog-img" src="" atl="" title=""  class="mx-auto d-block w-100">
        
                        
        <div class="card card-body border-0">
            <div class="row g-0">
                <div class="col-2">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=" title="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gray" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </a>
                </div>
                    <div class="col-2">
                    <a target="_blank" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fnatcordoba.com.ar" title="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gray" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                </div>
                <div class="col-2">
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fnatcordoba.com.ar" title="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gray" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                </div>
            </div>  
        </div>        
        <div class="text-left mt-3 container">
            <div class="py-1">
                <h4 id="blog-titulo" class="fw-lighter py-1">Titulo</h4>
                <h5 id="blog-subitulo"  class="fw-lighter py-1">Sub Titulo</h5>
            </div>
            <div class="py-1 fw-lighter" id="blog-texto">
                <h6><small>Texto</small></h6>
            </div>    
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div> 