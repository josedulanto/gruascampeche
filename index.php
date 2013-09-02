<?php
/**
 * @copyright	Copyright (C) 2010 - presente Ing. José Dulanto. Todos los derechos reservados.
 * @license		Private
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
  <head>
    <meta charset='utf-8'>
    <meta content='IE=Edge,chrome=1' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>

	  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	  <!--[if lt IE 9]>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js" type="text/javascript"></script>
	  <![endif]-->

	  <jdoc:include type="head" />

	  <link href="templates/<?php echo $this->template ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	  <link href="templates/<?php echo $this->template ?>/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://fonts.googleapis.com/css?family=Ubuntu&subset=latin" rel="stylesheet" type="text/css">

	  <link rel="shortcut icon" href="templates/<?php echo $this->template ?>/favicon.ico" />
</head>

<body>
	
	<div class="container">

    <!-- HEADER -->
    <div class="row" id="header">
      <div class="span6">
      	<?php if($this->countModules('arribaLogo')) : ?>
        	<jdoc:include type="modules" name="arribaLogo" style="xhtml" />
        <?php endif; ?>
        <div id="logo">
          <a href="<?php echo $this->baseurl ?>"></a>
        </div>
        <div id="module-debajoLogo">
        	<?php if($this->countModules('debajoLogo')) : ?>
          	<jdoc:include type="modules" name="debajoLogo" style="xhtml" />
          <?php endif; ?>
        </div>
      </div>
      <div class="span10" id="module-derechaLogo">
        <?php if($this->countModules('derechaLogo')) : ?>
          <jdoc:include type="modules" name="derechaLogo" style="xhtml" />
        <?php endif; ?>
      </div>
    </div>
    <!-- END HEADER -->

    <!-- MODULES TOP -->
    <div id="modules-content-top" class="row">
    	<?php if($this->countModules('serviciosTop') || $this->countModules('serviciosTopLeft') || $this->countModules('serviciosTopRight')) : ?>
        <div id="module-serviciosTopLeft" class="span8">
          <?php if($this->countModules('serviciosTopLeft')) : ?>
          	<jdoc:include type="modules" name="serviciosTopLeft" style="xhtml" />
          <?php endif; ?>
        </div>
        <div id="module-serviciosTopRight" class="span8">
        	<?php if($this->countModules('serviciosTopRight')) : ?>
          	<jdoc:include type="modules" name="serviciosTopRight" style="xhtml" />
          <?php endif; ?>
        </div>
        <div id="module-serviciosTop" class="span16">
          <?php if($this->countModules('serviciosTop')) : ?>
          	<jdoc:include type="modules" name="serviciosTop" style="xhtml" />
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
    <!-- END MODULES TOP -->

    <!-- CONTENT -->
    <?php if($this->countModules('minimalista')==0) : ?>
      <div class="row" id="content">
      	<div class="span16" id="componentWrapper">
        	<div id="componentHolder">
          	<!--jdoc:include type="message" /-->
						<jdoc:include type="component" />
          </div>
        </div>
      </div>
    <?php endif; ?>
    <!-- END CONTENT -->

    <!-- MODULES BOTTOM -->
    <div id="modules-content-bottom" class="row">
  		<?php if($this->countModules('serviciosBottom') || $this->countModules('serviciosBottomLeft') || $this->countModules('serviciosBottomRight')) : ?>
        <div id="module-serviciosBottomLeft" class="span8">
          <?php if($this->countModules('serviciosBottomLeft')) : ?>
          	<jdoc:include type="modules" name="serviciosBottomLeft" style="xhtml" />
          <?php endif; ?>
        </div>
        <div id="module-serviciosBottomRight" class="span8">
        	<?php if($this->countModules('serviciosBottomRight')) : ?>
          	<jdoc:include type="modules" name="serviciosBottomRight" style="xhtml" />
          <?php endif; ?>
        </div>
        <div id="module-serviciosBottom" class="span16">
          <?php if($this->countModules('serviciosBottom')) : ?>
          	<jdoc:include type="modules" name="serviciosBottom" style="xhtml" />
          <?php endif; ?>
        </div>
      <?php endif; ?>
		</div>
    <!-- END MODULES BOTTOM -->

    <!-- FOOTER -->
    <div class="row" id="footer">
    	<div id="module-pieIzquierda" class="span5">
      	<?php if($this->countModules('pieIzquierda')) : ?>
        	<jdoc:include type="modules" name="pieIzquierda" style="xhtml" />
        <?php endif; ?>
      </div>
      <div id="module-pieCentro" class="span6">
      	<?php if($this->countModules('pieCentro')) : ?>
        	<jdoc:include type="modules" name="pieCentro" style="xhtml" />
        <?php endif; ?>
      </div>
      <div id="module-pieDerecha" class="span5">
      	<?php if($this->countModules('pieDerecha')) : ?>
        	<jdoc:include type="modules" name="pieDerecha" style="xhtml" />
        <?php endif; ?>
      </div>
    </div>
    <!-- END FOOTER -->

    <script src="templates/<?php echo $this->template ?>/js/default.js"></script>
  </body>
</html>