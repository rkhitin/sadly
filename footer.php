    <div id="footer">
      <div class="container">
        <p class="text-center footer-text">&copy; <?= date('Y');?> <strong class='footer-title'><?php bloginfo('name');?></strong> - <?php bloginfo('description'); ?></p>
        <p class="text-center">Работает на <a href='http://wordpress.org/'>WordPress</a>, тема основана на <a href='http://bootswatch.com/flatly/'>Flatly</a>.</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src='<?=get_template_directory_uri()?>/js/main.js'></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-50761523-1', 'ronhit.ru');
        ga('send', 'pageview');

    </script>

    <?php wp_footer(); ?>
</body>
</html>
