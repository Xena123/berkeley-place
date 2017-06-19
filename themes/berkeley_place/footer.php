    		<footer class="c-footer ">
          <section class="u-background--dark-grey u-flex o-wrap--padding-100 u-padding-top--70 u-padding-bottom--50 u-text-white">
            <div class="u-border-right u-padding-right--20 u-margin-right--60 u-width--50 u-flex u-flex-column u-flex-space-between">
              <?php if ( is_active_sidebar( 'footer_widget' ) ) : ?>
                <?php dynamic_sidebar( 'footer_widget' ); ?>
              <?php endif; ?>
            </div>
            <div class="c-footer-half u-width--50 u-flex--init">
              <a href="https://www.houzz.co.uk/pro/nick9859/berkeley-place" target="_blank" class="img-wrap u-margin-right--10"><img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/houzz-featured.png"></a>
              <a href="https://www.houzz.co.uk/pro/nick9859/berkeley-place" target="_blank" class="img-wrap u-margin-right--10"><img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/boh_service_2016.png"></a>
              <a href="https://www.houzz.co.uk/pro/nick9859/berkeley-place" target="_blank" class="img-wrap"><img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/boh_service_2017.jpg"></a>
            </div>

          </section>
          <section class="u-flex--init u-text-white u-background--slate o-wrap--padding-100 u-padding-bottom--40 u-padding-top--40 u-flex-space-between">
            <div class="c-header__title-img u-margin-right--10"><img src="<?php echo home_url();?>/wp-content/themes/berkeley_place/img/bp_logo_white.png"></div>
            <p class="u-font-size--12">© Copyright Berkeley Place <?php date('Y')?>. All Rights Reserved</p>
          </section>
    		</footer>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-97321816-1', 'auto');
          ga('send', 'pageview');

        </script>

        <?php wp_footer(); ?>

    	</body>

    </html>
		<!-- End Site Footer -->
