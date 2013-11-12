<?php
  include "header.php";
?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12 Panel_Central">
          <div id="carousel-inicio" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-inicio" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-inicio" data-slide-to="1"></li>
              <li data-target="#carousel-inicio" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/0.png" alt="Imagen 0">
                <div class="carousel-caption">Prueba 0</div>
              </div>
              <div class="item">
                <img src="img/1.png" alt="Imagen 1">
                <div class="carousel-caption">Prueba 1</div>
              </div>
              <div class="item">
                <img src="img/2.png" alt="Imagen 2">
                <div class="carousel-caption">Prueba 2</div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-inicio" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#carousel-inicio" data-slide="next">
              <span class="icon-next"></span>
            </a>
          </div>
        </div>
      </div> <!-- /container -->
<?php
  include "footer.php";
?>
