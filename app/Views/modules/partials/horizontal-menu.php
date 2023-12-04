
<?php $uri = Url::route() ?>
<nav class="nav bg-p-orange">
  <div class="container text-white">
    <div class="row">
      <ul id="menuHorizontal" class="nav__menu col-10 d-flex justify-content-evenly list-unstyled mt-3">
      </ul>
      <div class="nav__menu-icons col-2 d-flex justify-content-evenly align-items-center">
        <div class="nav__menu-icons-div" style="position: relative;"> 
          <i class="nav__menu-icons-i icon-cart"></i>
          <span class="nav__menu-icons-span">4</span>
        </div>
        <div> <i class="nav__menu-icons-i icon-heart"></i></div>
        <button 
          class="nav__menu-button"
          type="button"
          data-bs-toggle="popover" 
          data-bs-placement="bottom" title="Usuario" 
          data-bs-content="<a class = 'pop__account' href='<?= $uri ?>/account/login'>Iniciar Sesión</a>
                          <a class = 'pop__account' href='<?= $uri ?>/account/register'>Registrarse</a>" 
          data-bs-html="true">
          <i class="nav__menu-icons-i icon-user-o text-white"></i>
        </button>
      </div>
    </div>
  </div>
</nav>

<div>

</div>