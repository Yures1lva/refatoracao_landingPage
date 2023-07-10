<footer>
        <section class="contato">
            <div class="center">
                <div class="w50 info">
                    <h2 id="contato">Contato</h2>
                    <a href="tel:+559931997800">(99) 3199-7800</a><br><br>
                    <p>Av. Bernardo Sayão,<br>3650 - Maranhão Novo, Imperatriz - MA <br>Medical Center, Sala 211</p>
                </div>
                <div class="w50 redes">
                    <img src="<?php echo get_theme_root_uri();?>/landingpage/image/logo2.png">
                    <ul class="redes-contato">
                        <li><a href="https://www.instagram.com/luisgmello/" target="_blank"><img src="<?php echo get_theme_root_uri();?>/landingpage/image/instagram.png"></a></li>
                        <li><a href="https://wa.me/559931997798?text=Olá, quero agendar uma consulta com o Dr Luis Guilherme [0001]." target="_blank"><img src="<?php echo get_theme_root_uri();?>/landingpage/image/whatsapp.png"></a></li>
                    </ul>
                </div>
            </div><!--center-->
            <div class="clear"></div>
        </section><!--contato-->
        <section class="direitos">
            <div class="center">
                <p>2023 &copy Dr. Luis Guilherme. Desenvolvido por: KoDev</p>
            </div>
        </section><!--direitos-->
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php echo get_theme_root_uri();?>/landingpage/js/jquery.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxcqVRYw_LrXZjpj0ITSWVsgEs_ggdvrc&callback=initMap&v=weekly"
      defer
    ></script>
    <script src="<?php echo get_theme_root_uri();?>/landingpage/js/mapa.js"></script>
    <script src="<?php echo get_theme_root_uri();?>/landingpage/js/slick.min.js"></script>	
	<script type="text/javascript">
	$('.imagens-container').slick({
		dots: true,
		arrows: false,	
		infinite: false,
		speed: 3000,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		centerMode: false,
		pauseOnHouver: false,
		responsive:
		[
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1
			}
		}
		]
	});
    $('.box-depoimentos').slick({
		dots: true,
		arrows: false,	
		infinite: false,
		speed: 3000,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		centerMode: false,
		pauseOnHouver: false,
		responsive:
		[
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1
			}
		}
		]
	});
    $('.imagens-consultorio').slick({
		dots: true,
		arrows: false,	
		infinite: false,
		speed: 3000,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		centerMode: false,
		pauseOnHouver: false,
		responsive:
		[
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1
			}
		}
		]
	});
	</script>
</body>
</html>