<?php $this->load->view('user/forgot_password'); ?>

<!--Footer Start PROVA-->
  <div class="footer">
    <div class="discounts-news-box">
      <div class="discounts-news-box_left">
        <label>Get exclusive discounts & news!</label>
        <?php
        echo form_close();
        $attributes = array( 'id' => 'subscribe');
        echo form_open('user/register/subscribeNews',$attributes); ?>
        <input type="text" onblur="if(this.value==''){this.value='Name'}" onclick="if(this.value=='Name'){this.value=''}" value="Name" name="NAME" class="" />
        <input type="text" onblur="if(this.value==''){this.value='Email'}" onclick="if(this.value=='Email'){this.value=''}"value="Email" name="email" id="email"/>
        <!-- <input class="discounts-button man_news" value="" type="submit" name="sub_button" /> -->
        <input class="discounts-button woman_news" value="" type="submit" name="sub_button"/>
        <?php  echo form_close(); ?>
        <div class="clear"></div>
	   <?php echo form_error('email', '<div class="update_error">', '</div>'); ?>
      </div>
      <div class="social-media_box">
        <h3>Socialize</h3>
        <ul>
          <li><a class="footer_facebook" target="_blank" href="https://www.facebook.com/Tangail-sharee.com"></a></li>
          <li><a class="footer_twitter" target="_blank" href="https://twitter.com/Tangail-sharee"></a></li>
          <li><a class="footer_pinterest" target="_blank" href="https://pinterest.com/Tangailsharee/"></a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <!--Footer menu Start -->
   <?php // echo $footer_menu; ?>
    <!--Footer Start -->
  <div class="footer_back">
   
    <!--Footer menu Start -->
    <div class="footer_menu_box">
    <div class="copy_right">
    	
    <p>&copy; 2013 Tangail-sharee.com</p>
    <ul class="footer_links">    	
    	<li><a href="#">Home</a></li>
    	<li>/</li>
    	<li><a href="mailto:info@tangail-sharee.com.com">Contact</a></li>
    	<li>/</li>
    	<li><a href="https://tangail-sharee.tenderapp.com">Support</a></li>
    	<li>/</li>
    	<li><a href="<?php echo base_url();?>pages/terms">Terms &amp; Conditions</a></li>
    	<li>/</li>
    	<li><a href="<?php echo base_url();?>pages/delivery_returns_terms_conditions">Deliveries &amp; Returns</a></li>
    	<li>/</li>
    	<li><a href="<?php echo base_url();?>pages/faq">FAQ</a></li>    	
    </ul> 
    </div> 
    </div> 
    </div>    
    
    <div class="clear"></div>
     
    <div class="pay_pal_box">
      <ul>
      	      	
        <li><img src="<?php echo base_url(); ?>images/pay_pal_1.png" alt="Pay_pal1" /></li>
        <li><img src="<?php echo base_url(); ?>images/amercan_card.png" alt="Pay_pal1" /></li>
        <li><img src="<?php echo base_url(); ?>images/pay_pal_2.png" alt="Pay_pal1" /></li>
        <li><img src="<?php echo base_url(); ?>images/visa_card.png" alt="Pay_pal1" /></li>
        <li><img src="<?php echo base_url(); ?>images/pay_pal.png" alt="Pay_pal1" /></li>
      </ul>
    </div>
  </div>
  
  <div xmlns="http://www.w3.org/1999/xhtml"
  xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#"
  xmlns:gr="http://purl.org/goodrelations/v1#"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:vcard="http://www.w3.org/2006/vcard/ns#">
 
  <div typeof="gr:BusinessEntity" about="#company">
    <div property="gr:legalName" content="Tangail-sharee.com"></div>
    <div property="vcard:tel" content="0044 20 3620 9250"></div>
    <div rel="vcard:adr">
      <div typeof="vcard:Address">
        <div property="vcard:country-name" content="GB"></div>
        <div property="vcard:street-address" content="1-9 Downham Road"></div>
        <div property="vcard:locality" content="London"></div>
        <div property="vcard:postal-code" content="N1 5AA "></div>
      </div>
    </div>
    <div rel="foaf:depiction" resource="<?php echo base_url(); ?>images/logo.png"></div>
  </div>
</div>
  
  <!--Footer End -->
<script>
  $(document).ready(function(){
      function validateEmail(elementValue){
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
         return emailPattern.test(elementValue);
      }
      $('#subscribe').submit(function() {
        var email = $('#email').val();
        if(!validateEmail(email)){
            alert("Please enter a valid email address!!");
            return false;
        }
        else {
           $("#subscribe").submit();
        }
    });
});
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/ui_functions.js"></script>
<script type="text/javascript">

 ��var _gaq = _gaq || [];
 ��_gaq.push(['_setAccount', 'UA-27406219-1']);
 ��_gaq.push(['_trackPageview']);

 ��(function() {
 �� ��var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 �� ��ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 �� ��var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 ��})();

</script>
