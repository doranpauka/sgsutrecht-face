<div class="overlay"></div>
<!--navigation-->
<div class="fixed topbarcontainer">
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1>
                    <a href="#">
                        <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            <i>Bankhangen-Inspraak-Muziek-Stamkroeg-Kunst-Reizen-Internationaal-Cultuur-Leren-Bestuursjaar-Vrienden-Ed</i>
                        </a>  
                        <?php endif; ?>
                    </a>
                </h1>
            </li>
            
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
        <section class="top-bar-section hidden-for-large-up">
            <ul class="right">
                <li class="has-dropdown">
                    <a href="#">&#9776;</a>
                    <?php print render($page['main_menu']); ?>
                </li>
            </ul>
        </section>
    </nav>
</div><!--fixed-->
<!--end of nav-->


<!--sidenav-->
<div class="fixed show-for-large-up" id="sidenav">
  <?php print render($page['sidemenu']); ?>
</div>
<!--end sidenav-->



        

<!--message bar-->
<?php if ($messages): ?>
    <div class="row">
        <div class="large-12 columns panel">
            <div id="messages"><?php print $messages; ?></div>
        </div>
    </div>
    
<?php endif; ?>
<!--end message bar-->

        <div class="row">
            <div class="large-12 columns weekvanpage">
               <h1>De week van <?php print $title; ?></h1>
              <?php print render($page['content']); ?>
            </div>
        </div>
    </div>
 
 
        <footer class="row">
            <div class="large-12 columns"><hr>
                <p>&copy; Copyright StudentenGroep Sociale wetenschappen - Doran Pauka</p>
            </div>
        </footer>
 
    </div>
</div>

<!--<div class="container">
    <div class="row">
        <div class="small-12 medium-12 large-12 columns panel">Kop</div>
    </div>  
    <div class="row">
        <div class="small-6 medium-6 large-6 columns panel">Links</div>
        <div class="small-6 medium-6 large-6 columns panel">Rechts</div>
    </div>
</div>
<?php
//die();
?>

    

   

    
    
<div id="region-main-menu"><?php print render($page['main_menu']); ?></div>
<?php print render($page['content']); ?>
<?php if ($logged_in): ?>
<hr />
<a href="../user/logout" class="button small">Logged in</a>
<?php print render($page['user_menu']); ?>
<?php else: ?>
<a href="<?php base_path(); ?>user/login" class="button small">Log In</a>
<?php endif; ?>-->


  <script>
    $(document).foundation();
  </script>