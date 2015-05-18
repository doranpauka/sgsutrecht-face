<meta http-equiv="X-UA-Compatible" content="IE=9" />
<script src="<?php echo path_to_theme(); ?>/js/jquery.googleslides.js"></script>
<script>
    var menuoffset = 0;
    $(document).ready(function(){

    menuoffset = $(".buttonbar").offset();
    $(".googleslides").googleslides({
    userid: 'sgsutrecht',
    albumid: '6077777652722809425',
    imgmax:375,
    random:true
    });


    
    });

    $(window).scroll(function(){
        var w = $(window);
        if (w.scrollTop() >= menuoffset.top) {
            $('.buttonbar').addClass('top');
        } else {
            $('.buttonbar').removeClass('top');
        }
    });
</script>

<?php if($_SERVER['REMOTE_ADDR'] != "145.97.250.165"):?>
    <div id="maintenance">
	    <h1>Sorry</h1>
	    <h2>Momenteel vindt er onderhoud aan deze site plaats</h2>
        <h2>We zijn zo terug</h2>
    </div>
<?php endif; ?>
    
    <div id="facebook"></div>
    <div id="linkedin"></div>


    
    <div class="row fullWidth">
    	<div class="large-12 columns">
		    <div class="sitetitle">
                <?php if ($logo): ?>
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                <?php endif; ?>
        		<h1>Studentengroep Sociale Wetenschappen</h1>
        		<span>Bankhangen-Inspraak-Muziek-Stamkroeg-Kunst-Reizen-Internationaal-Cultuur-Leren-Bestuursjaar-Vrienden-Ed</span>
    		</div>		
    	</div>
    </div>

    <div class="row fullWidth">
        <div class="buttonbar"><?php print render($page['main_menu']); ?></div>
    </div>

    <div class="row fullWidth fixHeight hotitem">
    	<div class="large-4 columns">
    		<div class="activity">
        		<?php print render($page['hotitem']); ?>
    		</div>
    	</div>
    	<div class="large-4 columns introtext">
    		Welkom bij StudentenGroep Sociale wetenschappen. SGS is er voor iedereen die aan de faculteit Sociale Wetenschappen in Utrecht studeert. Of je nu komt voor gezelligheid, reisjes, internationalisering of culturele uitstapjes, bij SGS kan het allemaal. Meer weten? Klik dan maar eens rond, of kom langs voor gratis koffie en thee in het Langeveldgebouw, kamer E1.46. Tot snel!
    		<div class="wordlidrow"><button id="wordlid" class="wordlid">Word gratis lid!</button></div>
    	</div>
    	<div class="large-4 columns firstright">
    		
    		<div id="laatstefotos" class="googleslides">
    		</div>
    	</div>

    </div>
    
    
    <div class="row fullWidth">
    	<div class="large-4 small-12 sponsoreninspraak columns">
    		    <div class="sponsor"></div>
    			<div class="inspraak"></div>
    	</div>
    	
    </div>

    

    





        

<!--message bar-->
<?php if ($messages): ?>
    <div class="row">
        <div class="large-12 columns panel">
            <div id="messages"><?php print $messages; ?></div>
        </div>
    </div>
<?php endif; ?>
<!--end message bar-->
</div>


    <div class="secondlogo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></div>
    
    
    <div class="row front-columns">
        <div class="large-12 columns">
            <div class="large-4 small-12 columns">
                <?php print render($page['front-links']); ?>
            </div>
            <div class="large-4 small-12 columns">
                <?php print render($page['front-midden']); ?>
            </div>
            <div class="large-4 small-12 columns">
                <?php print render($page['front-rechts']); ?>
            </div>
        </div>    
    </div>



