<div id="cookieMessage" style="z-index: 3654478; position: fixed; left: 0%; bottom: 0px; width: 100%; margin-left: 0px; height: 30px; line-height: 30px; border: medium none; background-color: rgba(0, 0, 0, 0.8); color: rgb(255, 255, 255); overflow: hidden; text-align: center; font-size: 12px; font-family: arial; padding: 0px;">
We use cookies on this website. By using this site, you agree that we may store and access cookies on your device. Find out more
<a style="color: #eee; font-weight: bold; text-decoration: none; border-bottom: 1px solid #000;" target="_blank" href="http://twinne.com/cookies_policy/">here</a>
.
<a id="cookieCloseButton" href="#null" style="display: block; width: 30px; height: 30px; background-color: rgb(200, 200, 200); border: medium none; color: rgb(255, 255, 255); font-size: 20px; line-height: 30px; text-decoration: none; position: absolute; right: 0px; top: 0px;">×</a>
</div>
<script>
$(document).ready(function() { 
	
	$('#cookieCloseButton').click(function(){
		$('#cookieMessage').hide();
	});
	
});

</script>
<!--Header Start-->
  <div class="header">

  	
  	<div id="login_part">
      <div class="login_top">
          
<?php $this->load->view("currencyconverter.php"); ?>
        <?php if($this->session->userdata("login")){ ?>
        	 <div class="rigister">
                <p><a href="<?php echo base_url(); ?>user/member_profile">My account <span class="sep_sp">&middot;</span></a></p>
              </div>
              <div class="login">
				<?php
				if(isset($_COOKIE['fbsr_'.FACEBOOK_API_KEY])){ ?>
			  <script>
				function fbLogout()
				{
				  FB.logout(function(response) {
					window.location="<?php echo base_url();?>logout";
				  });
				}
			   </script>
				
			    <p><a href="javascript:fbLogout();">Logout</a></p>
				<?php }else{?>
				&nbsp;
				<p><a href="<?php echo base_url(); ?>user/logout/">Logout</a></p>
				<?php } ?>
             </div>
             
            
        <?php }else{ ?>
            	<!--Login colorBox start-->
                	<?php $this->load->view("user/login"); ?>
            	<!--Login colorBox End-->

            	<!--Rigister colorBox Start-->
                	<?php $this->load->view("user/register"); ?>
            	<!--Rigister colorBox End-->
        <?php } ?>
      </div>
      
      
    </div>
  	<div class="header_cont">
    <div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>images/logo.png" alt="logo" /></a></div>
    <!--Nav Start-->
     <?php
	$atr = array( 'id' => 'srch');
	echo form_open('home/searchProducts',$atr); ?>
      <div class="search_box">
		<input type="text" value="" name="search_string" id="search_string" class="search_input" />
		<input type="submit" class="search_btn" value="" />
	    <div class="clear"></div>
      </div>
      <?php echo form_close(); ?>
      
    <div class="nav_box">
      <ul>	
      	<li><a href="<?php echo base_url();?>">HOME</a></li>         
        <li><a href="<?php echo base_url();?>show_product?type=woman">WOMEN</a></li>
        <li><a href="<?php echo base_url();?>show_product?type=man">MEN</a></li>
        <li><a href="http://help.twinne.com/">SUPPORT</a></li>
      </ul>
    </div>
    <!--Nav End-->
    <!--Login Panel start-->
    
   
    </div>
    <div class="clear"></div>
    <div class="load"></div>
    <div class="wish_list">
      <a href="<?php echo base_url();?>user/member_wishlist"><h3>Wish-list</h3></a>
    
		<div  id='cart_container'>
          <?php $this->load->view('cart');?>        
      	</div>
      <div class="clear"></div>
    </div>
    <!--Login Panel End-->
  </div>
  
    <div class="clear"></div>
    <div class="bottem_border"></div>
    <?php if (current_url() !== base_url() ) { ?>
    <img src="<?php echo base_url(); ?>images/free_ship.jpg" alt="free shipping" />
    <?php } ?>
    
  <!--Header End-->