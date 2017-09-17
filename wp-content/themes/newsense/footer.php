			<!-- footer -->
            <footer class="flex-parent master padding-5pc">
                <div class="about">
                    <h1>About</h1>
                    <p>Newsense is a Bangalore based independent design firm that creates dentities, commercials, websites, films, books and objects for clients, audiences and ourselves.</p>
                    <p>We work out of a farm.</p>
                </div>
                <div class="contact">
                    <h1>Contact</h1>
                    <p>No.38/2, Handenahalli<br />
                    Sollepura, Bangalore</p>
                    <p>+91 90359 93375<br />
                    <a href="mailto:hello@newsense.com">hello@newsense.com</a></p>
                    <p>All copyright <?php echo date('Y'); ?></p>
                </div>
                <div class="follow">
                    <h1>Follow</h1>
                    <p><a href="#">Facebook</a><br />
                    <a href="#">Twitter</a><br />
                    <a href="#">Behance</a><br /></p>
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" />
                </div>
            </footer>
			<!-- /footer -->
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
