<?php
/*
Template Name: Contact
*/
get_header();
?>
<section class="body-container pa_body">
    <div class="component cn_hero hero-base-structure cv_image_left cc_paragraph cp_3" id="pageholder_0_body_0_ComponentContainer">
    	<section>
      		<div class="center-container">
        			<div class="img-block">
        				  <img width="570" height="570" alt="Contact Us" src="<?php echo get_template_directory_uri(); ?>/img/hero_contact_us.png?h=570&amp;la=en&amp;w=570" class="loaded">
        			</div>
        			<div class="copy-btn-block">
          				<div class="vertical-center-parent" style="height: 584px;">
                      <div class="vertical-center-container">
                          <h1>Here's Who <em>To</em> Call</h1>
                          <div class="paragraph-button-block">
                              <p>Have a question? Need to set up your system? Give us a call. We know our stuff and are pretty friendly, too.</p>		
                          </div>
                      </div>
          				</div>
        			</div>
      		</div>
    		<!-- Video Modal should be included in each component that contains a button with the class of .video -->
    		<div class="modal-container video-modal" id="cn_hero_video">
    			<a data-uv_override="x" class="close-btn trackable ao_close_button" href="#"><span class="icon icon-close-btn-x"></span></a>
    			<div class="center-container">
    				<div class="vertical-center-parent" style="height: 440px;">
    					<div class="vertical-center-container">
    						<div class="video-block">
    							<div class="video-container">
    								<!-- Start of Brightcove Player -->
    								<div style="display: none"></div>
    								<div class="mf-player-container" id="pageholder_0_body_0_ctl00_PlayerContainer"><div class="mf-default-view"><p>Media item are not selected.</p></div></div>
    							</div>
    						</div>
    						<div class="copy-block">
    							<h5>
    								Insert heading here...
    							</h5>
    							<h3>
    								Insert subhead here...
    							</h3>
    							<span class="or">or</span>
    							<a class="btn primary ao_click_button trackable">
    								<span class="arrow right"></span>
    								Insert link text here...
    							</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    </div>

<div class="component cn_contact_us cp_4">
    <section id="schema-contact">
        <div class="center-container">
            <div class="full-width-container">
                <div class="contact-us-col">
                 <h5 class="green">Cancel False alarm</h5>
                 <h4>1-800-932-3822</h4>
                 <h5 class="green"></h5>
                 <h4></h4>
                </div>
                <div itemtype="http://schema.org/ContactPoint" itemscope="" itemprop="contactPoint" class="contact-us-col border-right">
                  <h5 class="green">
                   <span itemprop="contactType">
                     Customer Support
                   </span>
                  </h5>
                  <h5>
                   <span content="+1-877-602-5276" itemprop="telephone" id="pageholder_0_body_1_scCustomerSupportPhoneNumberSchema">
                    1-877-602-5276
                   </span>
                  </h5>
                   <p>Monday - Friday<br>8 a.m. - 11 p.m. Eastern<br><br>Saturday - Sunday<br>10 a.m. - 7 p.m. Eastern</p>
                   <p><a href="/support-overview" class="ao_text_link trackable">Many answers can be found on our website under Support</a></p>
                </div>         
                <div itemtype="http://schema.org/ContactPoint" itemscope="" itemprop="contactPoint" class="contact-us-col">
                 <h5 class="green">
                  <span itemprop="contactType">Sales</span>
                 </h5> 
                 <h5>
                  <span content="+1-855-808-1480" itemprop="telephone" id="pageholder_0_body_1_scSalesPhoneNumberSchema">1-855-808-1480</span>
                 </h5> <p>Monday - Friday<br>8 a.m. - 11 p.m. Eastern<br><br>Saturday - Sunday<br>10 a.m. - 7 p.m. Eastern</p>
                </div>
                <div class="contact-us-col">
                 <h5 class="green">Mailing Address</h5>
                 <p> 1595 Spring Hill Road<br>Suite 110<br>Vienna, VA 22182<br></p>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="component cn_contact_form cp_5">
  <section>
    <div class="center-container">
      <div class="full-width-container">
        <h4>Send us a message, and we will call you back</h4>
        <div class="form-block" id="contact_form_form">
          <div class="input-row">
            <div class="input-container">
              <input type="text" data-required="required" placeholder="First Name" class="trackable ao_form_field touched invalid" id="pageholder_0_body_2_contact_form_first_name" name="pageholder_0$body_2$contact_form_first_name">
              <p data-target-input="contact_form_first_name" class="error-message">Please enter your first name.</p>
            </div>
            <div class="input-container">
              <input type="text" data-required="required" placeholder="Last Name" class="trackable ao_form_field touched invalid" id="pageholder_0_body_2_contact_form_last_name" name="pageholder_0$body_2$contact_form_last_name">
              <p data-target-input="contact_form_last_name" class="error-message">Please enter your last name.</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container">
              <input type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" data-required="required" placeholder="Email Address" class="trackable ao_form_field touched invalid" id="pageholder_0_body_2_contact_form_email_address" name="pageholder_0$body_2$contact_form_email_address">
              <p data-target-input="contact_form_email_address" class="error-message">Please enter a valid email address (example: john@doe.com).</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container">
              <input type="tel" pattern="(\+?[- . ()]*\d){10}" data-required="required" placeholder="Phone Number" class="trackable ao_form_field touched invalid" id="pageholder_0_body_2_contact_form_phone" name="pageholder_0$body_2$contact_form_phone">
              <p data-target-input="contact_form_phone" class="error-message">Please enter a valid telephone number (example: 123-456-7890).</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container">
              <div class="styled-select">
                <select data-required="required" class="trackable ao_drop_down touched" id="pageholder_0_body_2_contact_form_subject" name="pageholder_0$body_2$contact_form_subject">
	               <option disabled="" value="" selected="selected">Subject (Choose One)</option>
	               <option value="Quote">Quote</option>
	               <option value="Activation">Activation</option>
              	 <option value="Business Development">Business Development</option>
              	 <option value="Other">Other</option>
                </select>
                <span class="arrow down"></span>
              </div>
              <p data-target-input="contact_form_subject" class="error-message">Please select a subject.</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container">
              <textarea data-required="required" placeholder="Question or Request" data-uv_override="Question or Request" class="trackable ao_form_field" id="pageholder_0_body_2_contact_form_question" name="pageholder_0$body_2$contact_form_question"></textarea>
              <p data-target-input="contact_form_question" class="error-message">Please enter a question or request.</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container radio-container">
                <input type="radio" data-required="required" checked="checked" class="trackable  ao_form_field" id="contact_form_customer_yes" name="pageholder_0$body_2$contact_form_customer" value="is_customer"><label for="contact_form_customer_yes"><span class="radio-icon-container"><span class="icon-radio-on"></span></span>I am a customer</label><br>
                <input type="radio" data-required="required" class="trackable  ao_form_field" id="contact_form_customer_no" name="pageholder_0$body_2$contact_form_customer" value="is_not_customer"><label for="contact_form_customer_no"><span class="radio-icon-container"><span class="icon-radio-on"></span></span>I am not yet a customer</label>
                <p data-target-input="contact_form_customer_yes" class="error-message">Please indicate if you are a customer.</p>
            </div>
          </div>
		      <input type="button" data-uv_override="Contact Me" class="btn primary form-submit-btn trackable ao_form_click" id="btnContactMe" onclick="if(!validateContactForm()){return false;};__doPostBack('pageholder_0$body_2$btnContactMe','')" value="Contact Me" name="pageholder_0$body_2$btnContactMe">
      <p class="disclaimer">By clicking this button, you consent for Frontpoint Security to use automated technology to contact you at the number provided. This consent is not required to make a purchase from us.</p>
        </div>
      </div>
    </div>
  </section>
</div>


<script>
  function validateContactForm() {
  return fp_base.validateFormForSubmit($('#btnContactMe'));}
</script><span id="pageholder_1"><script>(function(){var e=null;e=setInterval(function(){if(typeof ga!='function'){return}ga(function(){ga('send', 'event', 'contact_us-main_fps', 'phone_number_changed', '1-855-808-1480');});clearInterval(e)},1e3)})()</script></span>
</section>
<?php get_footer();?>