<?php
/*
Template Name: Request
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
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
        <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
        <script>
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
    </head>
    <body <?php body_class(); ?>>
        <div class="wrapper">
            <section class="body-container pa_body">
                <div class="modal-container component cn_global_call_to_action request-quote-modal standalone cp_1" id="divModalContainer">
                    <div class="center-container">
                        <div class="hidden-med-and-above">
                        </div>
                        <h2>Get your free quote today</h2>
                        <div class="form-details-block">
                            <div id="step1" class="quote_form-wrap js-quote_form-step is-active">
                                <div class="global_quote_form">
                                    <h3 class="quote_form_step_title">
                                        <span class="quote_form_step_title_inner"><h5>What is your property type?</h5></span>
                                    </h3>
                                    <div class="quote_form_inner">
                                        <a href="javascript:setValue(2,'Homeowner')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button1_0">Homeowner
                                            <span class="arrow right"></span>
                                        </a>
                                        <a href="javascript:setValue(2,'Rental')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button2_0">Rental
                                            <span class="arrow right"></span>
                                        </a>
                                        <a href="javascript:setValue(2,'Business')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button3_0">Business
                                            <span class="arrow right"></span>
                                        </a>
                                        <div class="quote_form_step">Step 1 of 4</div>
                                    </div>
                                    <div class="striped-border"></div>
                                </div>
                            </div>  
                            <div id="step2" class="quote_form-wrap js-quote_form-step">
                                <div class="global_quote_form">
                                    <h3 class="quote_form_step_title">
                                        <span class="quote_form_step_title_inner"><h5>What size is your property?</h5></span>
                                    </h3>
                                    <div class="quote_form_inner">
                                        <a href="javascript:setValue(3, 'Under 1,000 Sq. Ft')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button1_1">Under 1,000 Sq. Ft
                                            <span class="arrow right"></span>
                                        </a>
                                        <a href="javascript:setValue(3, '1,000 to 2,000 Sq. Ft')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button2_1">1,000 to 2,000 Sq. Ft
                                            <span class="arrow right"></span>
                                        </a>
                                        <a href="javascript:setValue(3, 'Over 2,000 Sq. Ft')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button3_1">Over 2,000 Sq. Ft
                                            <span class="arrow right"></span>
                                        </a>
                                        <div class="quote_form_step">Step 2 of 4</div>
                                    </div>
                                    <div class="striped-border"></div>
                                    
                                </div>
                            </div>  
                            <div id="step3" class="quote_form-wrap js-quote_form-step">
                                <div class="global_quote_form">
                                    <h3 class="quote_form_step_title">
                                        <span class="quote_form_step_title_inner"><h5>How many doors do you want to monitor?</h5></span>
                                    </h3>
                                    <div class="quote_form_inner">
                                        <a href="javascript:setValue(4, '1 Door')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button1_2">1 Door
                                            <span class="arrow right"></span>
                                        </a>
                                        <a href="javascript:setValue(4, '2 Doors')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button2_2">2 Doors
                                            <span class="arrow right"></span>
                                        </a>
                                        <a href="javascript:setValue(4, '3+ Doors')" class="btn btn-green ao_form_buttonclick trackable" id="pageholder_0_body_0_rptQuote_btnStep1Button3_2">3+ Doors
                                            <span class="arrow right"></span>
                                        </a>
                                        <div class="quote_form_step">Step 3 of 4</div>
                                    </div>
                                    <div class="striped-border"></div>
                                </div>
                            </div>
                            <div id="step4" class="quote_form-wrap js-quote_form-step">
                                <?php echo do_shortcode('[sitepoint_contact_form]'); ?>
                                <div class="details-block">
                                    <div class="call-block">
                                        <div class="title-block">
                                            <h5>Here's what you'll get with your quote:</h5>
                                        </div>
                                        <div class="copy-block">
                                            <div class="row">
                                                <div class="check-block">
                                                    <span class="icon icon-checkmark"></span>
                                                </div>
                                                <h6>Personalized Equipment recommendations</h6>
                                            </div>
                                            <div class="row">
                                                <div class="check-block">
                                                    <span class="icon icon-checkmark"></span>
                                                </div>
                                                <h6>Monitoring features and costs</h6>
                                            </div>
                                            <div class="row">
                                                <div class="check-block">
                                                    <span class="icon icon-checkmark"></span>
                                                </div>
                                                <h6>Exclusive special offer</h6>
                                            </div>
                                        </div>
                                        <div class="striped-border"></div>
                                    </div>
                                    <div class="logos-block">
                                        <div class="img-block">
                                            <a target="_blank" href="http://www.bbb.org/washington-dc-eastern-pa/business-reviews/burglar-alarm-systems-dealers-monitoring-and-service/frontpoint-security-solutions-llc-in-mclean-va-213917567/" class="ao_external_links trackable">
                                                <img width="105" height="40" alt="Better Business Bureau Logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo_bbb.png?h=40&amp;la=en&amp;w=105" class="loaded">
                                            </a>
                                        </div>
                                        <div class="img-block">
                                            <a target="_blank" href="http://www.interlogix.com/" class="ao_external_links trackable">
                                                <img width="163" height="39" alt="GE Security Logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo_ge_sercurity.png?h=39&amp;la=en&amp;w=163" class="loaded">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3><div>Or get started now, give us a call at 1-844-816-1978</div></h3>
                    </div>
                </div>
                <script>
                    function setValue(id, val){
                        switch(id){
                            case 2:
                                $("#property_type").val(val);
                            break;
                            case 3:
                                $("#property_size").val(val);
                            break;
                            case 4:
                                $("#property_door").val(val);
                            break;
                        }
                        for(var i=0;i<4;i++)
                            $("#step"+i).removeClass("is-active");
                        $("#step"+id).addClass("is-active");
                    }

                    $(document).ready(function () {
                        $("#first_name").bind('focus', function () {
                            $("#p_first_name").css({"display":"none"});
                        });
                        $("#last_name").bind('focus', function () {
                            $("#p_last_name").css({"display":"none"});
                        });
                        $("#email_address").bind('focus', function () {
                            $("#p_email_address").css({"display":"none"});
                        });
                        $("#phone").bind('focus', function () {
                            $("#p_phone").css({"display":"none"});
                        });

                        $('#btnGetAQuote').click(function (e) {
                            var count = 0;
                            if ($("#first_name").val().trim() == ''){
                                $("#p_first_name").css({"display":"block"});
                                count++;
                            }
                            if ($("#last_name").val().trim() == ''){
                                $("#p_last_name").css({"display":"block"});
                                count++;
                            }
                            if ($("#email_address").val().trim() == ''){
                                $("#p_email_address").css({"display":"block"});
                                count++;
                            }
                            if ($("#phone").val().trim() == ''){
                                $("#p_phone").css({"display":"block"});
                                count++;
                            }
                            if (count > 0)
                                e.preventDefault();
                            else
                                return true;
                        }); 
                    });
                </script>
            </section>
        </div>
    </body>
</html>