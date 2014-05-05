<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <?php if (! is_home()): ?>
                <a class="navbar-brand" href="/">Ronhit</a>
            <?php endif; ?>
        </div>

        <div class="collapse navbar-collapse">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav', 'walker' => new CSS_Menu_Maker_Walker() ) ); ?>
        </div><!--/.navbar-collapse -->
    </div>
</div>
