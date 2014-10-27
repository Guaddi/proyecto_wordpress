<?php
if(get_theme_option('featured_posts') != '') {
?>
<script type="text/javascript">
	function startGallery() {
		var myGallery = new gallery($('myGallery'), {
			timed: true,
			delay: 6000,
			slideInfoZoneOpacity: 0.8,
			showCarousel: false 
		});
	}
	window.addEvent('domready', startGallery);
</script>
<div class="fullbox_excerpt">
	<div class="fullbox_content">
		<div class="smooth_gallery">
			<div id="myGallery">
				
				
				<?php
				$featured_posts_category = get_theme_option('featured_posts_category');
				
				if($featured_posts_category != '' && $featured_posts_category != '0') {
					global $post;

					 $featured_posts = get_posts("numberposts=5&&category=$featured_posts_category");
					 $i = 0;
					 foreach($featured_posts as $post) {
					 	setup_postdata($post);
                        if ( version_compare( $wp_version, '2.9', '>=' ) ) {
                            $slide_image_full = get_the_post_thumbnail($post->ID,'large', array('class' => 'full'));
                            $slide_image_thumbnail = get_the_post_thumbnail($post->ID,'large', array('class' => 'thumbnail'));
                        } else {
                            $get_slide_image = get_post_meta($post->ID, 'featured', true);
                            $slide_image_full = "<img src=\"$get_slide_image\" class=\"full\" alt=\"\" />";
                            $slide_image_thumbnail = "<img src=\"$get_slide_image\" class=\"thumbnail\" alt=\"\" />";
                        }
					 	
					  ?>
					  <div class="imageElement">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="open"></a> 
							<?php echo  $slide_image_full; ?>
							<?php echo  $slide_image_thumbnail; ?>
						</div>
					 <?php }
				} else {
					for($i = 1; $i <=5; $i++)
                    {
						?>
							<div class="imageElement">
								<h3><FONT FACE="mikachan" SIZE=4 COLOR=#0065ea>Bienvenido a MGanime :D</FONT> </h3>
								<p><FONT FACE="mikachan" SIZE=3> Está es una pagina donde te contaremos sobre algunos animes. Como veras nuestros 5 primeros posts, son de nuestros animes favoritos! Espero que disfrutes de la informacion de estos animes y otros mas! Contamos contigo:)</FONT></p>
								<a href="#" title="This is featured post <?php echo $i; ?>" class="open"></a> 
								<img src="<?php bloginfo('template_directory'); ?>/jdgallery/slides/<?php echo $i; ?>.jpg" class="full" alt="" /> 
								<img src="<?php bloginfo('template_directory'); ?>/jdgallery/slides/<?php echo $i; ?>.jpg" class="thumbnail" alt="" /> 
							</div>
						<?php
					}
				}
				
				?>
                <!-- SCM Music Player http://scmplayer.net -->
                <script type="text/javascript" src="http://scmplayer.net/script.js"
                        data-config="{'skin':'skins/cyber/skin.css','volume':60,'autoplay':true,'shuffle':false,'repeat':1,'placement':'top','showplaylist':false,'playlist':[{'title':'Idols - Kyoukai no Kanata','url':'http://www.youtube.com/watch?v=ppUE0JKLhEc'},{'title':'Daisy - Kyoukai no Kanata','url':'http://www.youtube.com/watch?v=FZ-HkqQMbr4'},{'title':'Warriors - Imagine Dragons','url':'http://www.youtube.com/watch?v=fmI_Ndrxy14'},{'title':'Yasashisa no Riyuu - Hyouka','url':'http://www.youtube.com/watch?v=XSRzJnzKkj0'},{'title':'Kimi Hana - Junjou Romantica','url':'http://www.youtube.com/watch?v=sJ1_xKjF8Zk'},{'title':'Out of Control - Psycho-Pass','url':'http://www.youtube.com/watch?v=9Svoi7qT71I'},{'title':'Snow Fairy - Fairy Tail','url':'http://www.youtube.com/watch?v=iCltrpJOJxU'},{'title':'Sword Art Online ','url':'http://www.youtube.com/watch?v=C-XOG68ruhk'},{'title':'Euterpe - Guilty Crown','url':'http://www.youtube.com/watch?v=d0OR3oZ9H80'},{'title':'Monochrome no Kiss - Kuroshitsuji','url':'http://www.youtube.com/watch?v=Yv5hYZF0q8o'},{'title':'Unravel - Tokyo Ghoul','url':'http://www.youtube.com/watch?v=3C-k_3dcfNY'}]}" ></script>
                <!-- SCM Music Player script end -->


            </div>

		</div>
	</div>
</div>

<?php } ?>