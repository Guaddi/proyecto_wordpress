    <div class="span-24">
	<div id="footer">Copyright &copy; <a href="<?php bloginfo('home'); ?>"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?></div>
    <?php // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
        // All links in the footer should remain intact. 
        // These links are all family friendly and will not hurt your site in any way. 
        // Warning! Your site may stop working if these links are edited or deleted  ?>
    <div id="footer2"><a target="_blank" title="WordPress Themes - Temas para Wordpress" href="http://meutema.com.br">WordPress Themes</a> | Powered by <a href="http://wordpress.org/"><strong>WordPress</strong></a> | Designed by: <a href="http://mmohut.com/">Free MMORPG</a> | Thanks to <a href="http://mmohut.com/gamelist">MMORPG List</a>, <a href="http://rpgmusic.org">Game Soundtracks</a> and <a href="http://www.hostv.com">VPS Hosting</a></div>
    </div>
</div>
</div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>