<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tangail-sharee</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>adm/css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url(); ?>adm/css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="<?php echo base_url(); ?>adm/js/jquery/ui.core.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>adm/js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.bind.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  

<!-- [if !IE 7] -->

<!--  styled select box script version 1 -->
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<!--  [endif]-->

<!--  styled select box script version 2 --> 
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "<?php echo base_url(); ?>adm/images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="<?php echo base_url(); ?>adm/js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 


<!--  date picker script -->
<link rel="stylesheet" href="<?php echo base_url(); ?>adm/css/datePicker.css" type="text/css" />
<script src="<?php echo base_url(); ?>adm/js/jquery/date.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}selected
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="<?php echo base_url(); ?>adm/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 

<?php $this->load->view("admin/header"); ?>

<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">

<?php $this->load->view('admin/message'); ?>
<div id="page-heading"><h1>
	Sales
	<span style="float:right;">
	<a href="#" onClick="return printPDF();">Print Invoice</a>
</span>
</div>

 <!--Member taber Start-->
    <div id="vtab">
      <ul>
        <li class="home "><a href="<?php echo base_url();?>admin/sales_manager/orderDetail/<?php echo $order->id;?>">Order Detail</a></li>
        <li class="home selected"><a href="<?php echo base_url();?>admin/sales_manager/paymentDetail/<?php echo $order->id;?>">Payment Detail</a></li>
        <li class="home "><a href="<?php echo base_url();?>admin/sales_manager/shippingDetail/<?php echo $order->id;?>">Shipping Detail</a></li>
        <li class="home" ><a href="<?php echo base_url();?>admin/sales_manager/products/<?php echo $order->id;?>">Products</a></li>
        <li class="home"><a href="<?php echo base_url();?>admin/sales_manager/orderHistory/<?php echo $order->id;?>">Order History</a></li>
       </ul>
      <div style="display: block;">
      
        
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="<?php echo base_url();?>adm/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="<?php echo base_url();?>adm/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	<?php if(isset($billadd) && !empty($billadd)){?>
		<!--  start step-holder -->
		
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form" style="float:left">
			<tr>
				<th>First Name</th>
				<td>:</td>
				<td>&nbsp;&nbsp;</td>
				<td><?php echo $billadd->first_name;?></td>
			</tr>
			<tr>
				<th>Last Name</th>
				<td>:</td>
				<td></td>
				<td><?php echo $billadd->last_name;?></td>
			</tr>
			<tr>
				<th>Address Line 1</th>
				<td>:</td>
				<td></td>
				<td><?php echo $billadd->address_line1;?></td>
			</tr>
			<tr>
				<th>Address Line 2</th>
				<td>:</td>
				<td></td>
				<td><?php echo $billadd->address_line2;?></td>
			</tr>
            
            <tr>
				<th>Address Line 3</th>
				<td>:</td>
				<td></td>
				<td><?php echo $billadd->address_line3;?></td>
			</tr>
            
            
			<tr>
				<th>City</th>
				<td>:</td>
				<td></td>
				<td><?php echo $billadd->city;?></td>
			</tr>
			<tr>
				<th>Postcode</th>
				<td>:</td>
				<td></td>
				<td><?php echo $billadd->postcode;?></td>
			</tr>
			<tr>
				<th>Region/State</th>
				<td>:</td>
				<td></td>
				<td><?php echo $billadd->state;?></td>
			</tr>
			<tr>
				<th>Country</th>
				<td>:</td>
				<td></td>
				<td><?php echo $billadd->country;?></td>
			</tr>
			<tr>
				<th>Payment Method</th>
				<td>:</td>
				<td></td>
				<td><?php echo $order->pmtmethod;?></td>
			</tr>
		</table>
        
     <?php } ?>   
        
	</td>
	<td>
</td>
</tr>
<tr>
<td><img src="<?php echo base_url(); ?>adm/images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>
        
        
        
      </div>
    </div>
    <!--Member taber Start-->
<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>


<?php $this->load->view('admin/footer'); ?>
<!-- Invoice printing Part -->
<div id="print_div"  style="display: none;">
<div id="p1">
	
	
<div style="width: 464px; margin: 20px auto;"><img src="http://tangail-sharee.com/images/logo_invoice.jpg" /></div>
	
	<div style="padding-left:35px;font-size:16px;">
 	<div style="float: left;width:46%;border: 1px solid #999999;margin: 10px 2px;padding: 10px;"> 
		 <h2>Bill To</h2><br>
			<?php if (isset($billadd) && !empty($billadd)){?>
			 <label style="font-weight:bold;">Name: </label><label><?php if(isset($billadd->first_name)){echo $billadd->first_name;}?>&nbsp;<?php if(isset($billadd->last_name)){echo $billadd->last_name;}?></label>
			 <br><label style="font-weight:bold;">Email: </label><label><?php echo $order->User->email;?></label><br>
			 <label style="font-weight:bold;">Address: </label><label><?php if(isset($billadd->address_line1)){echo $billadd->address_line1;}?>&nbsp;<?php if(isset($billadd->address_line2)){echo $billadd->address_line2;}?></label><br>
			 <label style="font-weight:bold;">City: </label><label><?php if(isset($billadd->city)){echo $billadd->city;}?></label><br>
			 <label style="font-weight:bold;">Region/State: </label><label><?php if(isset($billadd->state)){echo $billadd->state;}?></label><br>
			 <label style="font-weight:bold;">Country: </label><label><?php if(isset($billadd->country)){echo $billadd->country;}?></label><br>
			 <?php }?>
	</div> 
	
	
	<div style="float: right;width: 42%;border: 1px solid #999999;margin: 10px 2px;padding: 10px;"> 
	<h2>ship To</h2><br>
	<?php if (isset($shipadd) && !empty($shipadd)){?>
			 <label style="font-weight:bold;">Name: </label><label><?php if(isset($shipadd->first_name)){echo $shipadd->first_name;}?>&nbsp;<?php if(isset($shipadd->last_name)){echo $shipadd->last_name;}?></label>
			 <br>
			 <label style="font-weight:bold;">Address: </label><label><?php if(isset($shipadd->address_line1)){echo $shipadd->address_line1;}?>&nbsp;<?php if(isset($shipadd->address_line2)){echo $shipadd->address_line2;}?></label><br>
			 <label style="font-weight:bold;">City: </label><label><?php if(isset($shipadd->city)){echo $shipadd->city;}?></label><br>
			 <label style="font-weight:bold;">Region/State: </label><label><?php if(isset($shipadd->state)){echo $shipadd->state;}?></label><br>
			 <label style="font-weight:bold;">Country: </label><label><?php if(isset($shipadd->country)){echo $shipadd->country;}?></label><br>
			 <?php }?>
	 </div> 
	 </div>
	 <div style="clear:both"> </div>
	 <br><br><br><br>
	 <div style="font-size:20px;float: right;width: 90%;border: 1px solid #999999;margin: 10px 2px;padding: 10px;"> 
		<h2>Products</h2><br/>	
		<div id='shoping_div' class=''>
			<table style="text-align: center;width: 98%;">
			<tr>
				<th>#</th>
				<th>Product Name</th>
				<th>Size</th>
				<th>Genre</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Amount</th>
			</tr>			
        	<?php  
        		$sub_total = 0; $i = 0;      		
        		foreach($order->product as $prod):
        		?>
        			<tr>
	        			<td><?php echo $i+1; ?></td>
	        			<td><?php echo $prod->name; ?></td>
	        			<td><?php echo $prod->size_name; ?></td>
	        			<td><?php echo $prod->size_catagory; ?></td>
	        			<td><?php echo $prod->join_prize; ?></td>
	        			<td><?php echo $prod->join_quantity; ?></td>
	        			<td><?php echo $prod->join_quantity * $prod->join_prize; ?>&nbsp;&pound;</td>
						<?php $quantity = $prod->join_quantity - $prod->join_rdm_quantity;?>
						<?php $sub_total += $quantity * $prod->join_prize; ?>
	        		</tr>
        					      					     				
	        				
        		<?php 	
        		endforeach; 
        		 ?>
        		 <tr>
					<td>&nbsp;</td>
	        		<td>&nbsp;</td>
	        		<td>&nbsp;</td>
	        		<td>&nbsp;</td>
					<td>&nbsp;</td>
	        		<td>&nbsp;</td>
	        	</tr>
        		<tr>
					<td>&nbsp;</td>
	        		<td>&nbsp;</td>
	        		<td>&nbsp;</td>
	        		<td>&nbsp;</td>
					<td>&nbsp;</td>
	        		<td>&nbsp;</td>
	        	</tr>
        		
        		<tr>
        			<td></td>
	        		<td></td>
	        		<td></td>
	        		<td></td>
	        		<td></td>
					<td><b>Sub Total: </b></td>
	        		<td><b><?php echo $sub_total.'&nbsp;&pound';?></b></td>
	        	</tr>
	        	<?php if(isset($discount)){?>
	        	<tr>
	        	<td></td>
	        	<td></td>
	        	<td></td>
	        	<td></td>
	        	<td></td>
	        	<td><b>Discount: </b></td>
	        	<td><b>
	        		<?php
	        		if($discount->type == 'Percentage' ){
	        			echo $aptax = $sub_total*$discount->discount/100;
	        			echo '&nbsp;&pound';
	        			$sub_total -= $aptax;
	        		}
	        		if($discount->type == 'Fixed' ){
	        			echo $aptax = $discount->discount;
	        			echo '&nbsp;&pound';
	        			$sub_total -= $aptax;
	        		}
	        		if($discount->type == 'Free shipping' )
	        			echo 'Free shipping';
	        		?>
	        	</b></td>
	        		        	</tr>
	        	<?php }?>
	        	<?php if($order->shipping_amount != null){?>
	        	<tr>
					<td></td>
	        		<td></td>
	        		<td></td>
	        		<td></td>
	        		<td></td>
					<td><b>Shipping: </b></td>
	        		<td><b><?php echo $order->shipping_amount.'&nbsp;&pound';?></b></td>
	        		<?php $sub_total += $order->shipping_amount; ?>
	        	</tr>
	        	<?php } ?>
	        	<?php if($order->tax!=null){?>
	        	<tr>
					<td></td>
					<td></td>
	        		<td></td>
	        		<td></td>
	        		<td></td>
					<td><b>Tax: </b></td>
	        		<td><b><?php echo $order->tax.'&nbsp;&pound';?></b></td>
	        		<?php $sub_total += $order->tax;?>
	        	</tr>
	        	<?php } ?>
	        	<tr>
					<td></td>
					<td></td>
	        		<td></td>
	        		<td></td>
	        		<td></td>
					<td><b>Total: </b></td>
	        		<td><b><?php echo $sub_total.'&nbsp;&pound';?></b></td>
	        	</tr>  
        		 	 
        	</table>
		</div>
		
	</div>
	
	 <div style="clear:both"> </div>
	
	
<div style="clear:both"> </div>
<br><br>
<div style="font-size: 16px; font-weight: normal;">
<table style="width: 85%; margin-left: 7%;">
<tr>
<td>Tangail-sharee Ltd</td></tr>
<tr><td>Adalat Para, Kalibari Road</td></tr>
<tr><td>Tangail</td></tr>
<tr><td>Bangladesh</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</tr></td>

<tr><td><strong style="font-weight: bold;">Order ID:</strong> <?php echo $order->SKU;?><br /><br /></td></tr>
<tr><td><strong style="font-weight: bold;">Contact details:</strong> info@tangail-sharee.com<br /><br /></td></tr>
<tr><td><strong style="font-weight: bold;">Miss no updates</strong></td></tr>
<tr><td>Tangail-sharee.com<br /></td></tr>
<tr><td>facebook.com/Tangail-sharee.com<br /><br /></td></tr>
<tr><td>Thanks for choosing to buy from Tangail-sharee!</td></tr>
</table>
</div>
</div>
</div>
<script src="<?php echo base_url(); ?>adm/js/print.js" type="text/javascript"></script>
	<script type="text/javascript">
 		function printPDF(){
 			var o = $("#p1");
			o.jqprint();
			
			//$("#divToPrint").jqprint();
			//$('#divOpera').jqprint({ operaSupport: true });				

			return( false) ;
 		}		


 
</script>
<!-- End of Invoice Printing Part -->
</body>
</html>


