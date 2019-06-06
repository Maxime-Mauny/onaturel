<div class="nav-contact">
      <ul>
        <li>
  <?php
        $menu = wp_nav_menu([
          'theme_location' => 'bottom',
          'container' => 'div',
          'div_class' => 'nav-contact',
          'echo' => true
       ]);
       
        $menu = strip_tags ($menu, '<a></a>');

        echo $menu;
  ?>      

    <!--    <li><a href="#">Mentions légales</a></li>
        <li><a href="#">Livraison et retours</a></li>
        <li><a href="#">Paiement</a></li>
        <li><a href="#">Droit d'annulation</a></li> -->
        </li>
      </ul>
    </div>
    <div class="logo-copyright">
      <a href="#"><img src="/images/icon/icon.png"alt="..."><span>Naturel</span></a>
      <p>Copyright &copy; o'Naturel-2019</p>
    </div>
    <div class="social-nav">
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
    </div>