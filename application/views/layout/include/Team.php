
<div class="sidebar" data-color="red" data-image="<?php echo base_url(); ?>assets/img/sidebar-6.webp">
  <?php
	$dashboard='';
	$import='';
	$confirm='';
	$manual='';
	$edit='';
	$view_leads='';
	$add_sales='';
	$delete_sales='';
	$monitor='';
	if($active=='dashboard')
		$dashboard='class="active"';
	else if($active=='import')
	$import='class="active"';
	else if($active=='confirm')
	$confirm='class="active"';
	else if($active=='manual')
	$manual='class="active"';
	else if($active=='edit')
	$edit='class="active"';
	else if($active=='view_leads')
	$view_leads='class="active"';
	else if($active=='add_sales')
	$add_sales='class="active"';
	else if($active=='delete_sales')
	$delete_sales='class="active"';
	else if($active=='monitor')
	$monitor='class="active"';
	
	?>
  Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
  Tip 2: you can also add an image using data-image tag
  <div class="sidebar-wrapper">
    <div class="logo"> <a href="http://www.creative-tim.com" class="simple-text"> Team </a> </div>
    <ul class="nav">
      <li <?php echo $dashboard?>> <a href="<?php echo base_url(); ?>"> <i class="pe-7s-graph"></i>
        <p>Dashboard</p>
        </a> </li>
      <li <?php echo $import;?> > <a href="<?php echo base_url(); ?>customer/import"> <i class="pe-7s-next-2"></i>
        <p>Import</p>
        </a> </li>
      <li <?php echo $confirm;?>> <a href="<?php echo base_url(); ?>customer/confirm"> <i class="pe-7s-cash"></i>
        <p>Confirm Invoice</p>
        </a> </li>
      <li <?php echo $manual;?>> <a href="<?php echo base_url(); ?>"> <i class="pe-7s-note2"></i>
        <p>Manual Registration</p>
        </a> </li>
      <li <?php echo $edit;?>> <a href="<?php echo base_url(); ?>"> <i class="pe-7s-news-paper"></i>
        <p>View/Edit Customers</p>
        </a> </li>
      <li <?php echo $view_leads;?>> <a href="<?php echo base_url(); ?>"> <i class="pe-7s-id"></i>
        <p>View Leads</p>
        </a> </li>
      <li <?php echo $add_sales;?>> <a href="<?php echo base_url(); ?>customer/add"><i class="pe-7s-note2"></i>
        <p>Add Sales</p>
        </a> </li>
      <li <?php echo $delete_sales;?>> <a href="<?php echo base_url(); ?>customer/delete"> <i class="pe-7s-trash"></i>
        <p>Delete Sales</p>
        </a> </li>
      <li <?php echo $monitor;?>> <a href="<?php echo base_url(); ?>customer/monitor"> <i class="pe-7s-look"></i>
        <p>Monitor Calender</p>
        </a> </li>
    </ul>
  </div>
</div>
