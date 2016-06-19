<div id="carousel" class="carousel slide" data-ride="carousel" style="background-size:cover;  z-index:0;">
    <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

    <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <?php echo "<img src='assets/img/code/code1.jpg' class='imgCarousel'/>" ?>
          <div class="carousel-caption well">
            <h1><small>Actuellement en formation</small></h1>
            <p><img src="assets/icon/3wa.png" alt="" /></p>
          </div>
        </div>
        <div class="item">
          <?php echo "<img src='assets/img/code/code2.jpg' class='imgCarousel'/>" ?>
          <div class="carousel-caption well">
            <h1><small>Je suis novice en Intégration</small></h1>
            <blockquote class="slideBlockquote">
              <p>Je me débrouille bien mais j'ai toujours besoin d'apprendre...</p>
            </blockquote>
          </div>
        </div>
        <div class="item">
          <?php echo "<img src='assets/img/code/code3.jpg' class='imgCarousel'/>" ?>
          <div class="carousel-caption well">
            <h1><small>Je suis également novice en Développement</small></h1>
            <blockquote class="slideBlockquote">
              <p>Je vais tout faire pour renforcer mes connaissances</p>
            </blockquote>
          </div>
        </div>
      </div>

    <!-- Controls -->
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
  </div><!-- Fin Carrousel -->
