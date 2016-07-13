<?php
  include 'inc/head.php';
?>

<body>

<?php
include 'inc/nav.php';
 ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

          <div class="col-md-8">
              <h3>Send us a Message</h3>
              <form name="sentMessage" id="contactForm" novalidate>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Full Name:</label>
                          <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                          <p class="help-block"></p>
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Phone Number:</label>
                          <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Email Address:</label>
                          <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Reason for reaching out:</label>
                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Reasons
                            <span class="caret"></span></button>

                            <ul class="dropdown-menu other-box" role="menu" aria-labelledby="reason-menu">
                              <li class="dropdown-header">Infomative</li>
                              <li role="presentation"><a class="other-click" role="menuitem" >Request Press Packet</a></li>
                              <li role="presentation"><a class="other-click" role="menuitem" >Request Investor Packer</a></li>
                              <li role="presentation" class="divider"></li>
                              <li class="dropdown-header">Work for Us</li>
                              <li role="presentation"><a class="other-click" role="menuitem" >Interested Engineer</a></li>
                              <li role="presentation"><a class="other-click" role="menuitem" >Interested Computer Programmer</a></li>
                              <li role="presentation"><a class="other-click" role="menuitem" >Interested Professional of another type</a></li>
                              <li role="presentation" class="divider"></li>
                              <li role="presentation"><a class="other-click" role="menuitem" >Other</a></li>
                            </ul>
                            <input type="text" class="form-control hidden" id="reason">
                          </div>
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Message:</label>
                          <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                      </div>
                  </div>
                  <div id="success"></div>
                  <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-default btn-block">Send Message</button>
              </form>
          </div>


            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    3481 Melrose Place<br>Beverly Hills, CA 90210<br>
                </p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (123) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->


        <hr>

</div>
<!-- End Container -->
<?php
  include 'inc/footer.php';
 ?>
 <!-- contact form script -->
 <script src="js/contact_me.js"></script>

 <!-- apply the validation to the form -->
 <script>
   $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
 </script>

 <script type="text/javascript">
     function dropdownClick(name) {
       alert("fired click");
       if (!$(name).html() == 'Other') {
         $('#reason').val($(name).html())
         .addClass('hidden');
       }  else {
         $('reason').removeClass('hidden');
       }
     }
     $(document).ready(function() {
        $('a.other-click').each(function() {
           $(this).bind("click", dropdownClick(this));
        });
     });
 </script>

</body>

</html>
