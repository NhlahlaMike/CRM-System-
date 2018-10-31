    <div class="sidebar" data-color="red" data-image="<?php echo base_url()?>assets/img/sidebar-6.webp">
<?php
	$Leadsreport ='';
	$View_invoicing_report ='';
	$Add_Product_Range ='';
	$Case_reports ='';
	$Leads_Per_Sales ='';
	$Task_Per_Sales ='';
	if($active=='Leadsreport')
		$Leadsreport='class="active"';
	else if($active=='View_invoicing_report')
	$View_invoicing_report='class="active"';
	else if($active=='Add_Product_Range')
	$Add_Product_Range='class="active"';
	else if($active=='Case_reports')
	$Case_reports='class="active"';
	else if($active=='Leads_Per_Sale')
	$Leads_Per_Sale='class="active"';
	else if($active=='Task_Per_Sale')
	$Task_Per_Sale='class="active"';
	
	
	?>
    

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li <?php echo $Leadsreport ?>  >
                    <a href="<?php echo base_url()?>customer/LeadsReport">
                        <i class="pe-7s-graph"></i>
                        <p>Leads Report</p>
                    </a>
                </li>
                <li <?php echo $View_invoicing_report ?> >
                    <a href="<?php echo base_url()?>customer/InvoicingReport">
                        <i class="pe-7s-user"></i>
                        <p>View Invoicing Report</p>
                    </a>
                </li>
                <li <?php echo $Add_Product_Range ?> >
                    <a href="<?php echo base_url()?>customer/ProductRange">
                        <i class="pe-7s-note2"></i>
                        <p>Add Product Range</p>
                    </a>
                </li>
                <li <?php echo $Case_reports ?> > 
                    <a href="<?php echo base_url()?>customer/CaseReport">
                        <i class="pe-7s-news-paper"></i>
                        <p>Case Report</p>
                    </a>
                </li>
                <li <?php echo $Leads_Per_Sales ?> > 
                    <a href="<?php echo base_url()?>customer/PerSales">
                        <i class="pe-7s-science"></i>
                        <p>Leads Per-Sales</p>
                    </a>
                </li>
                <li <?php echo $Task_Per_Sales ?> >
                    <a href="<?php echo base_url()?>customer/TaskSales">
                        <i class="pe-7s-map-marker"></i>
                        <p>Task Per-Sales</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>