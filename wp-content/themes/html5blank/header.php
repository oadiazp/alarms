<!doctype html>
<html <?php echo language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
		<script>
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<header class="pa_header">
			<div class="scroll-fixed-container" style="height: 70px;">
				<div data-should-insert-height-spanner="true" class="component cn_global_header_navigation scroll-fixed scroll-fixed-lg cp_1 fixed" id="cn_global_header_navigation">
					<nav>
						<div class="center-container">
							<div itemref="schema-social schema-contact" itemtype="http://schema.org/Organization">
								<a class="ao_logo trackable" itemprop="url" data-uv_override="fps" href="/">
									<img width="200" height="60" itemprop="logo" alt="Frontpoint Logo" class="main-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png?h=60&amp;la=en&amp;w=200">
								</a>
							</div>
							<a data-uv_override="open" class="visible-collapsed menu-btn trackable ao_mobile_menu" id="btn_global_header_navigation_reveal" href="#"><span class="menu-bar"></span><span class="menu-bar"></span><span class="menu-bar"></span></a>
							<div class="content-cover visible-collapsed btn_global_header_navigation_dismiss"></div>
							<div class="collapsed-menu">
								<?php html5blank_nav(); ?>
								<?php html5blank_nav1(); ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
			<div data-should-insert-height-spanner="false" data-top-offset-target="#cn_global_header_navigation" class="component cn_global_call_to_action scroll-fixed scroll-fixed-lg  cp_2 fixed" id="ctl05_header_1_divComponentContainer">
			    <aside>
			        <div class="center-container">
			            <div class="scroll-fixed-container" style="height: auto;">
			                <div data-should-insert-height-spanner="true" class="cta-container scroll-fixed scroll-fixed-sm" id="ctl05_header_1_divCTA">
			                    <h5>CALL for a free quote</h5>
			                    <a data-uv_override="Click to Call" class="tel-btn trackable ao_phone_call" id="ctl05_header_1_anchorTeleLink" href="tel:18448161978">
			                        <span class="icon-telephone"></span>
			                        1-844-816-1978
			                    </a>
			                    <span class="or">or</span>
			                    <a class="btn secondary request-quote-btn ao_click_button trackable" data-target-modal-id="divModalContainer" href="index.php/request-a-quote">
			                        GET A FREE QUOTE
			                        <span class="arrow right"></span>
			                    </a>
			                </div>
			            </div>
			        </div>
			    </aside>
			</div>
			<script>
			    function validateGlobalCTA() {
			        return fp_base.validateFormForSubmit($('#btnGetAQuote'));
			    }
			</script>
			</header>