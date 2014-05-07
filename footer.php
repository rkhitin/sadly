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

    <?php wp_footer(); ?>
</body>
</html>
