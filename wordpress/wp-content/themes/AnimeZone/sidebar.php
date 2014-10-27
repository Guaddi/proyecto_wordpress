<div class="span-8 last">
	
	<div class="sidebar">
    
    <?php if(get_theme_option('socialnetworks') != '') {
    		?>
    			<div class="addthis_toolbox">   
    			    <div class="custom_images">
    			            <a class="addthis_button_twitter"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/twitter.png" width="32" height="32" alt="Twitter" /></a>
    			            <a class="addthis_button_delicious"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/delicious.png" width="32" height="32" alt="Delicious" /></a>
    			            <a class="addthis_button_facebook"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/facebook.png" width="32" height="32" alt="Facebook" /></a>
    			            <a class="addthis_button_digg"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/digg.png" width="32" height="32" alt="Digg" /></a>
    			            <a class="addthis_button_stumbleupon"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/stumbleupon.png" width="32" height="32" alt="Stumbleupon" /></a>
    			            <a class="addthis_button_favorites"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/favorites.png" width="32" height="32" alt="Favorites" /></a>
    			            <a class="addthis_button_more"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/more.png" width="32" height="32" alt="More" /></a>
    			    </div>
    			    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4a65e1d93cd75e94"></script>
    			</div>
    			<?php
    		}
    	?>
        
    
    <?php if(get_theme_option('ads_125') != '') {
		?>
		<div class="sidebaradbox">
			<?php sidebar_ads_125(); ?>
		</div>
	<?php } ?>
        
	<?php if(get_theme_option('video') != '') {
    		?>
    		<div class="sidebarvideo">
    			<ul> <li><h2 style="margin-bottom: 10px;">Featured Video</h2>
    			<object width="290" height="220"><param name="movie" value="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1"></param>
    				<param name="allowFullScreen" value="true"></param>
    				<param name="allowscriptaccess" value="always"></param>
    				    				<embed src="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>watch?v=ppUE0JKLhEc" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="290" height="220"></embed>

    		</div>
    	<?php
    	}
    	?>
        
		<ul>
			<?php 
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				
				<li><h2><?php _e('Recent Posts'); ?></h2>
			               <ul>
					<?php wp_get_archives('type=postbypost&limit=5'); ?>  
			               </ul>
				</li>
				
				<li><h2>Archives</h2>
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				
				<li> 
					<h2>Calendar</h2>
					<?php get_calendar(); ?> 
				</li>
				
				<?php wp_list_categories('hide_empty=0&show_count=1&depth=1&title_li=<h2>Categories</h2>'); ?>
				<li> 
			        <li id="linkcat-2" class="linkcat"><h2>Parceiros</h2>
<ul class="xoxo blogroll">
<li><a target="_blank" rel="nofollow" title="Como Ganhar Dinheiro Online" href="http://dinheirocominternet.com">Ganhar Dinheiro</a></li>
<li><a target="_blank" rel="nofollow" title="Anúncie Gratuitamente" href="http://blogficados.com">Classificados Grátis</a></li>
<li><a target="_blank" rel="nofollow" title="Oportunidades e Promoções na Internet" href="http://oportunidadeweb.com">Promoções</a></li>
<li><a target="_blank" rel="nofollow" title="Idéias para Ganhar Dinheiro" href="http://ganhardinheirocomo.com.br">Ganhar Dinheiro</a></li>
<li><a target="_blank" rel="nofollow" title="Divulgue seu Blog" href="http://divulgarblogs.com">Divulgar Blogs</a></li>
<li><a target="_blank" rel="nofollow" title="Dinheiro na Internet" href="http://blogdodinheiro.info">Dinheiro na Internet</a></li>
<li><a target="_blank" rel="nofollow" title="Como Ganhar Dinheiro com Blogs" href="http://dinheirocomblogs.com">Dinheiro com Blogs</a></li>
<li><a target="_blank" rel="nofollow" title="Diretório de Artigos" href="http://artigos.blog.br">Diretório de Artigos</a></li>
<li><a target="_blank" rel="nofollow" title="Agregador de Notícias" href="http://divulgarlinks.com">Divulgar Links</a></li>
<li><a target="_blank" rel="nofollow title="SEO Stats" href="http://seostats.com.br">SEO Stats</a></li>
<li><a target="_blank" rel="nofollow" title="Pagerank Checker" href="http://pagerankchek.com">Pagerank</a></li>
<li><a target="_blank" rel="nofollow title="SEO Stats" href="http://hospedagensgratis.com">Hospedagens Gráris</a></li>
</ul>

				</li>
				<li id="tag_cloud"><h2>Tags</h2>
					<?php wp_tag_cloud('largest=16&format=flat&number=20'); ?>
				</li>
				
				<?php wp_list_bookmarks(); ?>
				
				<?php include (TEMPLATEPATH . '/recent-comments.php'); ?>
				<?php if (function_exists('get_recent_comments')) { get_recent_comments(); } ?>
				
				
				<li><h2>Meta</h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
						<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
						<?php wp_meta(); ?>
					</ul>
					</li>
					
			<?php endif; ?>
		</ul>
		<?php if(get_theme_option('ad_sidebar1_bottom') != '') {
		?>
		<div class="sidebaradbox">
			<?php echo get_theme_option('ad_sidebar1_bottom'); ?>
		</div>
		<?php
		}
		?>
	</div>
</div>
