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
						<h1><span id="here">Here’s Who</span> <em id="to">To</em> <span id="call">Call</span></h1>
						<div class="paragraph-button-block">
							<p id="question">Have a question? Need to set up your system? Give us a call. We know our stuff and are pretty friendly, too.</p>		
						</div>
						<div class="sub-heading-link-block">
							<p>Already an affiliate?&nbsp;
								<a class="ao_text_link trackable">Access our Affiliate Portal.</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-container video-modal" id="cn_hero_video">
			<a data-uv_override="x" class="close-btn trackable ao_close_button" href="#"><span class="icon icon-close-btn-x"></span></a>
			<div class="center-container">
				<div class="vertical-center-parent" style="height: 440px;">
					<div class="vertical-center-container">
						<div class="video-block">
							<div class="video-container">
								<div style="display: none"></div>
								<div class="mf-player-container" id="pageholder_0_body_0_ctl00_PlayerContainer"><div class="mf-default-view"><p>Media item are not selected.</p></div></div>
							</div>
						</div>
						<div class="copy-block">
							<h5>Insert heading here...</h5>
							<h3>Insert subhead here...</h3>
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
         <h5 id="falarm" class="green">Cancel False alarm</h5>
         <h4>1-800-932-3822</h4>
        </div>
        <div itemtype="http://schema.org/ContactPoint" itemscope="" itemprop="contactPoint" class="contact-us-col border-right">
          <h5 class="green"><span id="customer" itemprop="contactType">Customer Support</span></h5>
          <h5>
            <span content="+1-877-602-5276" itemprop="telephone" id="pageholder_0_body_1_scCustomerSupportPhoneNumberSchema">1-877-602-5276</span>
          </h5>
          <p><span class="mon_fri">Monday - Friday</span><br>8 a.m. - 11 p.m. <span class="east">Eastern</span><br><br><span class="sat_sun">Saturday - Sunday</span><br>10 a.m. - 7 p.m. <span class="east">Eastern</span></p>
          <p><a href="index.php/support-overview" class="ao_text_link trackable" id="many">Many answers can be found on our website under Support</a></p>
        </div>
        <div itemtype="http://schema.org/ContactPoint" itemscope="" itemprop="contactPoint" class="contact-us-col">
          <h5 class="green"><span id="sales" itemprop="contactType">Sales</span></h5> 
          <h5>
            <span content="+1-855-808-1480" itemprop="telephone" id="pageholder_0_body_1_scSalesPhoneNumberSchema">1-855-808-1480</span>
          </h5> 
          <p><span class="mon_fri">Monday - Friday</span><br>8 a.m. - 11 p.m. <span class="east">Eastern</span><br><br><span class="sat_sun">Saturday - Sunday</span><br>10 a.m. - 7 p.m. <span class="east">Eastern</span></p>
        </div>
          <div class="contact-us-col">
            <h5 id="mailing" class="green">Mailing Address</h5>
            <p>1595 Spring Hill Road<br>Suite 110<br>Vienna, VA 22182<br></p>
          </div>
      </div>
    </div>
  </section>
</div>
<div class="component cn_contact_form cp_5">
  <section>
    <div class="center-container">
      <div class="full-width-container">
        <h4 id="send_us">Send us a message, and we will call you back</h4>
        <div class="form-block" id="contact_form_form">
          <div class="input-row">
            <div class="input-container">
              <input type="text" placeholder="First Name" class="trackable ao_form_field" id="first_name" name="first_name">
              <p id="p_first_name" class="error-message">Please enter your first name.</p>
            </div>
            <div class="input-container">
              <input type="text" placeholder="Last Name" class="trackable ao_form_field" id="last_name" name="last_name">
              <p id="p_last_name" class="error-message">Please enter your last name.</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container">
              <input type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Email Address" class="trackable ao_form_field" id="email_address" name="email_address">
              <p id="p_email_address" class="error-message">Please enter a valid email address (example: john@doe.com).</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container">
              <input type="tel" pattern="(\+?[- . ()]*\d){10}" placeholder="Phone Number" class="trackable ao_form_field" id="phone" name="phone">
              <p id="p_phone" class="error-message">Please enter a valid telephone number (example: 123-456-7890).</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container">
              <div class="styled-select">
                <select class="trackable ao_drop_down touched" id="subject" name="subject">
                  <option disabled="" value="" selected="selected">Subject (Choose One)</option>
                  <option value="Quote">Quote</option>
                  <option value="Activation">Activation</option>
                  <option value="Business Development">Business Development</option>
                  <option value="Other">Other</option>
                </select>
                <span class="arrow down"></span>
              </div>
              <p id="p_subject" class="error-message">Please select a subject.</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container">
              <textarea placeholder="Question or Request" class="trackable ao_form_field" id="question" name="question"></textarea>
              <p id="p_question" class="error-message">Please enter a question or request.</p>
            </div>
          </div>
          <div class="input-row">
            <div class="input-container radio-container">
                <input type="radio" class="trackable  ao_form_field" id="contact_form_customer_yes" name="customer" value="is_customer" checked="checked"><label for="contact_form_customer_yes"><span class="radio-icon-container"><span class="icon-radio-on"></span></span>I am a customer</label><br>
                <input type="radio" class="trackable  ao_form_field" id="contact_form_customer_no" name="customer" value="is_not_customer"><label for="contact_form_customer_no"><span class="radio-icon-container"><span class="icon-radio-on"></span></span>I am not yet a customer</label>
                <p data-target-input="contact_form_customer_yes" class="error-message">Please indicate if you are a customer.</p>
            </div>
          </div>
		      <input type="button" class="btn primary form-submit-btn trackable ao_form_click" id="btnContactMe" name="btnContactMe" value="Contact Me">
          <p class="disclaimer">By clicking this button, you consent for Frontpoint Security to use automated technology to contact you at the number provided. This consent is not required to make a purchase from us.</p>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
(function ($, root, undefined) {
  $(document).ready(function() {
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
      $('#btnContactMe').click(function (e) {
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
})(jQuery, this);
</script>
</section>
<?php get_footer();?>