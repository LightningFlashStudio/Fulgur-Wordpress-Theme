<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Fulgur Theme</title>
        <?php wp_head(); ?>

    </head>

<?php
   if( is_front_page() ):
        $fulgur_classes = array('fulgur-class', 'my-class');
   else:
        $fulgur_classes = array('no-fulgur-class');
   endif;

 ?>

<body <?php body_class( $fulgur_classes ); ?>>
    <div class="container">

     		<div class="row">

     				<div class="col-xs-12">

     					<nav class="nav navbar navbar-default navbar-right navbar-fixed-top ">
     					  <div class="container-fluid">
     					    <!-- Brand and toggle get grouped for better mobile display -->
     					    <div class="navbar-header">
     					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
     					        <span class="sr-only">Toggle navigation</span>
     					        <span class="icon-bar"></span>
     					        <span class="icon-bar"></span>
     					        <span class="icon-bar"></span>
     					      </button>
     					      <a class="navbar-brand pull-left" href="/"><span class="glyphicon glyphicon-flash"></span></a>
     					    </div>
     						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     							<?php
     								wp_nav_menu(array(
     									'theme_location' => 'primary',
     									'container' => false,
     									'menu_class' => 'nav navbar-nav navbar-default'
     									)
     								);
     							?>
     						</div>
     					  </div><!-- /.container-fluid -->
     					</nav>

     				</div>

     			</div>
                
    <?php if ( get_header_image() ) : ?> //Conditional for Header Image/Text.
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>"  alt= "<?php echo esc_attr ( get_bloginfo( 'name', 'display') );?> "/>
    <?php else: ?>



    <?php endif; ?>
