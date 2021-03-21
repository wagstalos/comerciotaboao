<?php get_header(); ?>

<body>
    <header class="container-fluid">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark default-header stroke">
                <a href="#" class="navbar-brand logo">
                    <?php 
                        $pc_custom_logo = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src(  $pc_custom_logo, 'full');

                        if(has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="logotipo">';
                        }else{
                            echo '<h5 class="m-0" >' . get_bloginfo('name') . '</h5>';
                        }   
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"
                    aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">
                    <div class="icon">
                        <div class="hamburguer">

                        </div>
                    </div>
                </button>

                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto text-md-center">
                        <li class="mr-2 ml-2">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="mr-2 ml-2">
                            <a href="#sobre" class="nav-link">Sobre</a>
                        </li>
                        <li class="mr-2 ml-2">
                            <a href="#patrocinadores" class="nav-link " href="#" tabindex="-1">Patrocinadores</a>
                        </li>
                        <li class="mr-2 ml-2 mb-4 mb-md-0">
                            <a href="https://apoia.se/comerciotaboao" class="nav-link" tabindex="-1">Apoiar</a>
                        </li>
                    </ul>
                    <div class="btn-invite text-center mr-2 ml-2 mb-4 mb-md-0">
                        <a href="https://api.whatsapp.com/send?l=pt_BR&amp;phone=5511999488027" target="blank"
                            class="nav-link">Anuncie aqui</a>
                    </div>
                    <div class="btn-login text-center mr-2 ml-2 mb-4 mb-md-0 nav-link">
                        <a href="<?php echo esc_url( home_url( '/wp-login.php' ) ); ?>">
                            <div class="d-flex align-items-center justify-content-center">

                                <lord-icon src="https://cdn.lordicon.com//dxjqoygy.json" trigger="hover"
                                    colors="primary:#31d35c,secondary:#31d35c" style="width:25px;height:25px">
                                </lord-icon>
                                Login

                            </div>
                        </a>
                    </div>
                    <div class="text-center mr-2 ml-2">
                        teste
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- banner principal -->
    <section class="banner">
        <div class="container">
            <div class="row align-items-center justify-content-center text-light">
                <div class="col-md-6 mt-4 center-mobile ">

                    <lord-icon src="https://cdn.lordicon.com//fyhanzjw.json" trigger="loop" delay="100"
                        colors="primary:#ffffff,secondary:#ffffff" style="width:65px;height:65px">
                    </lord-icon>

                    <lord-icon src="https://cdn.lordicon.com//coqbeapw.json" trigger="loop"
                        colors="primary:#ffffff,secondary:#ffffff" style="width:65px;height:65px">
                    </lord-icon>
                    <lord-icon src="https://cdn.lordicon.com//jpdtnwas.json" trigger="loop"
                        colors="primary:#ffffff,secondary:#ffffff" style="width:65px;height:65px">
                    </lord-icon>
                    <lord-icon src="https://cdn.lordicon.com//sbiheqdr.json" trigger="loop"
                        colors="primary:#ffffff,secondary:#ffffff" style="width:65px;height:65px">
                    </lord-icon>
                    <lord-icon src="https://cdn.lordicon.com//mlnkdrif.json" trigger="loop"
                        colors="primary:#ffffff,secondary:#ffffff" style="width:65px;height:65px">
                    </lord-icon>
                    <h1 class="mt-2">
                        Construindo um comércio melhor <b>para todos!</b>
                    </h1>
                    <p>#juntossomosmaisfortes</p>

                    <a href="#sobre">
                        <button type="button" class="btn btn-primary mt-2">Saiba mais</button>
                    </a>
                </div>
                <div class="col-md-6 mt-4 text-center" id='loja'>
                    <?php 
                        if(is_active_sidebar( 'banner-img' )){
                            dynamic_sidebar( 'banner-img' );
                            }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- nossos parceiros -->
    <section id="stores">
        <h1 class="wps text-center s-title">Nossos parceiros</h1>
        <div class="container-fluid">
            <div class="float-md-right text-center">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <input type="search" class="search-field"
                            placeholder="<?php echo esc_attr_x( 'Pesquisar &hellip;', 'placeholder', 'twentysixteen' ); ?>"
                            value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit" id="search-btn">
                        <span class="screen-reader-text">
                            <?php echo _x( '', 'submit button', 'twentysixteen' ); ?>
                        </span>
                        <?php $template_directory = get_template_directory_uri(); ?>
                        <img width="" src="<?php echo $template_directory;?>/img/icon-search.svg" />
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-5">
            <div>
                <?php echo do_shortcode ('[pgaf_post_filter grid="4"  content_words_limit="10" show_date="false" show_comments="false" show_author="false" extra_class=""]'); ?>
            </div>
        </div>
    </section>

    <section class="pattern center-mobile">
        <div class="container text-dark" id="sobre">
            <h1 class="wps text-center s-title">Sobre</h1>

            <div class="row text-dark">
                <div class="col-md-6 mt-4 text-center">
                    <?php $template_directory = get_template_directory_uri(); ?>
                    <img class="img-fluid" src="<?php echo $template_directory;?>/img/cel.png" />
                </div>
                <div class="col-md-6">
                    <h3 class="wps">O que é o comércio Taboão?</h3>
                    <p class="mt-4"> A ideia surgiu para ajudar o comercio local do Taboão da Serra nesse momento
                        difícil de
                        pandemia, reunindo informações de diversos estabelecimentos, como serviços prestado, local e
                        contato, num só
                        lugar.
                    <h3 class="wps mt-50">Qual o valor?</h3>
                    <p class="mt-4">
                        Neste momento delicado para os pequenos empreendedores, esta iniciativa é totalmente
                        gratuita.
                    </p>
                    <h3 class="wps mt-50" id="ajudar">Mas e se eu quiser ajudar o projeto?</h3>
                    <p class="mt-4">
                        Fique à vontade para fazer uma doação de qualquer valor para o programador. Isso ajuda o
                        projeto a se manter
                        no ar.
                    </p>
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-4 mt-4">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_donations" />
                                <input type="hidden" name="business" value="wagstalos@hotmail.com" />
                                <input type="hidden" name="item_name" value="Ajudar o comércio local" />
                                <input type="hidden" name="currency_code" value="BRL" />
                                <input type="image"
                                    src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0"
                                    name="submit" title="PayPal - The safer, easier way to pay online!"
                                    alt="Faça doações com o botão do PayPal" />
                                <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1"
                                    height="1" />
                            </form>
                        </div>
                        <div class="col-md-4 mt-4">
                            <a href="https://apoia.se/comerciotaboao">
                                <?php $template_directory = get_template_directory_uri(); ?>
                                <img width="100px" src="<?php echo $template_directory;?>/img/logoRed.svg" />
                            </a>
                        </div>
                        <div class="col-md-4 mt-4">
                            <?php $template_directory = get_template_directory_uri(); ?>
                            <img width="40px" src="<?php echo $template_directory;?>/img/ppay-icon.png" />
                            <p>wagner.paulo89</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>

    <!-- Patrocinadores -->
    <section>
        <div class="container-fluid s-title" id="patrocinadores">
            <div class="container text-center">
                <h2 class="wps">Patrocinadores</h2>
                <div class="row">
                    <div class="col-12 col-md-4">

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mt-4">
                            <?php 
                        if(is_active_sidebar( 'patrocinador1' )){
                            dynamic_sidebar( 'patrocinador1' );
                        }
                    ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="container text-center">
            <h1 class="wps s-title">Contato</h1>

            <lord-icon src="https://cdn.lordicon.com//rhvddzym.json" trigger="loop" delay="1"
                colors="primary:#2bb7da,secondary:#30e8bd" style="width:55px;height:55px">
            </lord-icon>
            <p> <b>E-mail:</b> wagstalos@hotmail.com</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler-device-mobile" width="35" height="35"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#00BCD4" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <rect x="7" y="4" width="10" height="16" rx="1" />
                <line x1="11" y1="5" x2="13" y2="5" />
                <line x1="12" y1="17" x2="12" y2="17.01" />
            </svg>
            <p> <b>Celular:</b> (11) 99948-8027</p>

        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4 center-mobile mt-4 mb-4">
                    <a href="#" class="navbar-brand logo">
                        <?php 
                        $pc_custom_logo = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src(  $pc_custom_logo, 'full');

                        if(has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="Imagem de uma cidade com um prédio grande no centro">';
                        }else{
                            echo '<h5 class="m-0" >' . get_bloginfo('name') . '</h5>';
                        }   
                    ?>
                    </a>
                    <ul class="navbar-nav">
                        <li class="mr-2 ml-2">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="mr-2 ml-2">
                            <a href="#sobre" class="nav-link">Sobre</a>
                        </li>
                        <li class="mr-2 ml-2">
                            <a href="#patrocinadores" class="nav-link " href="#" tabindex="-1">Patrocinadores</a>
                        </li>
                        <li class="mr-2 ml-2">
                            <a href="https://apoia.se/comerciotaboao" class="nav-link" tabindex="-1">Apoiar</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-center apoie">

                    <div class="row align-items-center justify-content-center">
                        <lord-icon src="https://cdn.lordicon.com//yeallgsa.json" trigger="loop"
                            colors="primary:#ffffff,secondary:#e8e230" style="width:65px;height:65px">
                        </lord-icon>
                    </div>
                    <p class="text-light mt-4">Ajude o projeto</p>
                    <hr>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-4 mt-4">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_donations" />
                                <input type="hidden" name="business" value="wagstalos@hotmail.com" />
                                <input type="hidden" name="item_name" value="Ajudar o comércio local" />
                                <input type="hidden" name="currency_code" value="BRL" />
                                <input type="image"
                                    src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0"
                                    name="submit" title="PayPal - The safer, easier way to pay online!"
                                    alt="Faça doações com o botão do PayPal" />
                                <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1"
                                    height="1" />
                            </form>
                        </div>
                        <div class="col-md-4 mt-4">
                            <a href="https://apoia.se/comerciotaboao">
                                <?php $template_directory = get_template_directory_uri(); ?>
                                <img width="100px" src="<?php echo $template_directory;?>/img/logoRed.svg" />
                            </a>
                        </div>
                        <div class="col-md-4 mt-4">
                            <?php $template_directory = get_template_directory_uri(); ?>
                            <img width="40px" src="<?php echo $template_directory;?>/img/ppay-icon.png" />
                            <p class="text-light">wagner.paulo89</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p class="text-light text-center mt-4">Desenvolvido por <a href="https://wpsgames.com.br/">WPS
                            Games</a> </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- bt msg -->
    <div class="btn-msg">
        <a href="https://api.whatsapp.com/send?l=pt_BR&amp;phone=5511999488027">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler-messages" width="35" height="35"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
            </svg>
        </a>
    </div>
    <?php wp_footer()?>

</body>

</html>