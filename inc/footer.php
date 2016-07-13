<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-8 left-footer">
        <p class="pull-left">Copyright &copy; Smart Garden 2016</p>
      </div>
      <div class="col-xs-4 right-footer">
        <ul class="list-inline social-icons">
          <li><i class="fa fa-linkedin"></i></li>
          <!-- <li><i class="fa fa-linkedin"></i></li>
          <li><i class="fa fa-linkedin"></i></li>
          <li><i class="fa fa-linkedin"></i></li> -->
        </ul>
        <p><a href="#">Legal</a></p>
        <p><a href="/contact.php">Contact</a></p>
      </div>
    </div>
  </div>
</footer>


<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Parallax.js -->
<script src="bower_components/enllax.js/jquery.enllax.min.js"></script>

<!-- Boostrap form validation  -->
<script src="bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js">

</script>

<!-- Nav UI effect  -->
<script type="text/javascript">
$(function() {
  //caches a jQuery object containing the header element
  var nav = $("nav.navbar-fixed-top");
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= $(window).height())) {
          nav.addClass("navbar-inverse");
      } else {
          nav.removeClass("navbar-inverse");
      }
  });
});
</script>
