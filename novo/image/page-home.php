<?php 
    //Template Name: Home
?>
<?php get_header(); ?>
<a href="https://wa.me/559931997798?text=Olá, quero agendar uma consulta com o Dr Luis Guilherme [0001]." id="icone-whatsapp" target="_blank"><img src="<?php echo get_theme_root_uri();?>/landingpage/image/whatsapp2.png"></a>
    <section class="imagens-slider">
        <div class="imagens-container">
            <div class="imagem-single">
                <img src="<?php the_field('slider_topo_image_1');?>">
                <h2>Saúde e Bem-Estar</h2>
                <p>O quanto sua<br> saúde importa para você?</p>
                <a href="/#servico">Saiba Mais</a>   
            </div><!--imagens-single-->
            <div class="imagem-single">
                <img src="<?php the_field('slider_topo_image_2');?>">
                <h2 class="teste">Depoimentos</h2>
                <p>Conheça a perspectiva de<br> alguns pacientes atendidos</p>
                <a href="/#depoimentos">Saiba Mais</a>   
            </div> <!--imagens-single-->
            <div class="imagem-single">
                <img src="<?php the_field('slider_topo_image_3');?>">
                <h2>Nossa Clínica</h2>
                <p>conheça nosso espaço<br> pronto para atender você</p>
                <a href="/#clinica">Saiba Mais</a>   
            </div><!--imagens-single-->
        </div><!--imagens-container-->
    </section><!--imagens-slider-->
    <section class="servicos">
        <div class="center">
            <h2 id="servico">Atendimento Individualizado</h2>
            <div class="icons-diferenciais">
                <div class="box-single-diferenciais">
                    <div class="rectangle">
                        <img src="<?php echo get_theme_root_uri();?>/landingpage/image/servico1.png">
                        <h3>Emagrecimento</h3>
                        <p>Descomplique sua perda<br> de peso de forma<br> saudável.</p>
                    </div>
                </div><!--box-single-diferenciais-->
                <div class="box-single-diferenciais">
                    <div class="rectangle">
                        <img src="<?php echo get_theme_root_uri();?>/landingpage/image/servico2.png">
                        <h3>Qualidade de Vida</h3>
                        <p>Corpo e mente andam juntos,<br> cuide do seu bem-estar.</p>
                    </div>
                </div><!--box-single-diferenciais-->
                <div class="box-single-diferenciais">
                    <div class="rectangle">
                        <img src="<?php echo get_theme_root_uri();?>/landingpage/image/servico3.png">
                        <h3>Hipertrofia</h3>
                        <p>Sinta-se bem com o seu<br> corpo mais forte.</p>
                    </div>
                </div><!--box-single-diferenciais-->
                <div class="box-single-diferenciais">
                    <div class="rectangle">
                        <img src="<?php echo get_theme_root_uri();?>/landingpage/image/servico4.png">
                        <h3>Bioimpedância</h3>
                        <p>Avalie sua composição<br> corporal.</p>
                    </div>
                </div><!--box-single-diferenciais-->
            </div><!--icons-diferenciais-->
            <a href="/#agend">Agende sua consulta</a>
        </div><!--center-->
    </section><!--servicos-->
    <section class="apresentacao" id="eu">
        <div class="center">
            <div class="w50 imagem">
                <img src="<?php the_field('foto_medico'); ?>">
            </div><!--w50-img-->
            <div class="w50 texto">
                <h2 id="nome-medico">Olá,<br> Sou o Dr. Luis Guilherme</h2>
                <p><?php the_field('apresentacao_do_medico'); ?></p>
            </div><!--w50-texto-->    
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section>
    <section id="depoimentos"class="depoimentos">
        <div class="center">
            <h2>Depoimentos</h2>
            <div class="box-depoimentos">
                <div class="depoimentos-single">
                    <div class="rectangle2">
                        <h6><?php the_field('depoimento_1'); ?></h6>
                        <p class="paciente">- <?php the_field('autor_1'); ?></p>
                        <img src="<?php echo get_theme_root_uri();?>/landingpage/image/aspas.png">
                    </div>
                </div><!--depoimentos-single-->
                <div class="depoimentos-single">
                    <div class="rectangle2">
                        <h6><?php the_field('depoimento_2'); ?></h6>
                        <p class="paciente">- <?php the_field('autor_2'); ?></p>
                        <img src="<?php echo get_theme_root_uri();?>/landingpage/image/aspas.png">
                    </div>
                </div><!--depoimentos-single-->
                <div class="depoimentos-single">
                    <div class="rectangle2">
                        <h6><?php the_field('depoimento_3'); ?></h6>
                        <p class="paciente">- <?php the_field('autor_3'); ?></p>
                        <img src="<?php echo get_theme_root_uri();?>/landingpage/image/aspas.png">
                    </div>
                </div><!--depoimentos-single-->
            </div><!--box-depoimentos-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--depoimentos-->
    <section id="clinica" class="imagens-consultorio">
        <img src="<?php the_field('slider_consultorio_image_1'); ?>">
        <img src="<?php the_field('slider_consultorio_image_2'); ?>">
        <img src="<?php the_field('slider_consultorio_image_3'); ?>">
        <img src="<?php the_field('slider_consultorio_image_4'); ?>">
    </section><!--imagens-consultorio-->
    <section class="localizacao">
        <div class="center">
            <h2>Localização</h2>
            <div class="mapa-container">
				<div id="mapa"></div>
			</div><!--mapa-->
            <p>Medical Center, Sala 211 - Av. Bernardo Sayão, 3650 - Maranhão Novo, Imperatriz/MA</p>
            <div class="clear"></div>
        </div><!--center-->
    </section><!--localizacao-->
    <section class="agendamento" id="agend">
        <div class="center">
            <h2>Agende sua consulta</h2>
            <div class="rectangle3">
                <form>
                    <input placeholder="Nome" type="text">
                    <input placeholder="Telefone" type="tel">
                    <input placeholder="E-mail" type="email">
                    <textarea placeholder="Mensagem" cols="50" rows="10"></textarea>
                    <br>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </section><!--agendamento-->
<?php get_footer(); ?>