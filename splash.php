<?php
  include 'inc/head.php';

 ?>

<body>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide-1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>
                      The future of gardening <br>
                      <small>Coming Soon</small>
                    </h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide-2.jpg');"></div>
                <div class="carousel-caption">
                  <h2>
                    A new idea in growth &amp; health <br>
                    <small>Coming Soon</small>
                  </h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide-3.jpg');"></div>
                <div class="carousel-caption">
                  <h2>
                    The intersection of technology and nature <br>
                    <small>Coming Soon</small>
                  </h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>



<?php
include 'inc/footer.php';
?>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 500000 //changes the speed
        })
    </script>

</body>

</html>
