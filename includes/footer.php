<!--  footer -->
<footer id="footer" class="footer-main-block" style="background-image: url('images/bg/footer-bg.jpg')">
    <div class="footer-block">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-about footer-widget">
              <h5 class="footer-heading">About Industry</h5>
              <p>For more than 38 years, We offer the most complete industrial solutions in the worldwide. our solutions are used in over 150 countries supporting millions of customers in domain of electricity, construction. metal pro files, gasoline, etc...</p>     
              <a href="about-us.html" class="plain-btn">About More</a>     
            </div>            
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-solutions footer-widget">
              <h5 class="footer-heading">Our Solutions</h5>
              <ul>
                <li><a href="#">Agricultural Processing</a></li>
                <li><a href="#">Material Engineering</a></li>
                <li><a href="#">Chemicals</a></li>
                <li><a href="#">Power &amp; Energy</a></li>
                <li><a href="#">Gas &amp; Oil</a></li>
                <li><a href="#">Mechanical Engineering</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-news footer-widget">
              <h5 class="footer-heading">Latest News</h5>
              <ul>
                <li><a href="#">Here’s How Advanced Manufacture Is Transforming The Factory</a> - July 15, 2017</li>
                <li><a href="#">Here’s How Advanced Manufacture Is Transforming The Factory</a> - July 15, 2017</li>
              </ul>           
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-contact footer-widget">
              <h5 class="footer-heading">Quick Contact</h5>
              <p>If you want to contact us about any issue, our support available to help you 8am-7pm Monday to Saturday.</p>
              <ul class="footer-address">
                <li><span>Address:</span> 9015 Sunset Boulevard United Kingdom</li>
                <li><span>Call:</span> <a href="tel:#">+ 215 623 7532</a></li>
                <li><span>Email:</span> <a href="mailto:#">info@industrial.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <div class="copyright" style="background-image: url('images/bg/copy-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="copyright-text">
              <p>Industrial template | &copy; 2017 <a href="index.html">Udayraj,</a>. | All Rights Reserved.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="footer-nav">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!--  end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script> <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menumaker js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
<script type="text/javascript" src="js/jquery.elevatezoom.js"></script> <!-- product zoom js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
<!-- end jquery -->
<script>
  // Get the current URL path and split it into an array
var path = window.location.pathname.split("/").pop();

// Loop through each navigation link
$('nav a').each(function() {
 // If the navigation link's href attribute matches the current URL path
 if ($(this).attr('href') === path) {
   // Add the active class to the navigation link
   $(this).addClass('active');
	// If the link is in a dropdown, also add the active class to the parent <li> of the dropdown
	$(this).parents(".dropdown").addClass("active");
 }
});
</script>
</body>
<!--body end -->
</html>