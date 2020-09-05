</div><!-- container -->
<footer class="page-footer pt-4 site-footer">
    <div class="container text-center text-md-left cont-footer">
      <div class="row">
        <div class="col-md-4 mt-md-0 mt-3">
        	<h5>O nas</h5>
          	<?php
				      wp_nav_menu( array(
    				    'theme_location' => 'footer'
				      ));
			      ?>
        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-4 mb-md-0 mb-3">
            <h5 class="text-uppercase">Social media:</h5>
            <?php
				      wp_nav_menu( array(
    				    'theme_location' => 'footer2'
				      ));
			      ?>
        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-4 mb-md-0 mb-3">
            
            <?php
				      wp_nav_menu( array(
    				    'theme_location' => 'partnerzy'
				      ));
			      ?>
        </div>
      </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://strategicznegry.pl/"> strategicznegry.pl</a>
      All rights reserved.
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>