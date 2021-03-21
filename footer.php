<footer>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4 text-center mt-4 mb-4">
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