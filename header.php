
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#FFFFFF">

        
        <?php wp_head(); ?>

    </head>

    <body>

        <!-- HEADER -->

        <header>

                <div class="header_logo">                    
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo ( 'template_url' ); ?>/img/basis-visuals-logo.svg" alt="<?php bloginfo ( 'name' ); ?>">
                    </a>                
                </div>                
                

                <nav>
                    
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                        fill="#231E1A" class="bi bi-list" viewBox="0 0 16 16"> 
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/> 
                        </svg>  
                    
                    
                        <?php
                            
                            wp_nav_menu ( array
                            (
                                'theme_location' => 'header-menu',
                                'container' => false
                            ));
                            
                        ?>
                    
                
                            
                </nav>

      


        </header>

        <div class="divider"></div>
        