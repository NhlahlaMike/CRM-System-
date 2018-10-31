	function get_case($prodid,$status) {
		$this->db->select( 'Name,Surname,Email,Phone,Company,Designation,I_Status,Prod_Name,Prod_Duration,Prod_Price' );
		$this->db->from( 'dbo.Invoice i,dbo.Lead l, dbo.Product p, dbo.Customer c' );
		$this->db->where("i.Lead_ID=l.LeadID and p.Prod_ID=l.Prod_ID and 
        l.CustID=c.CustID and I_Status='$status' and p.Prod_ID LIKE '%$prodid%'");
		$query = $this->db->get();
		return $query->result();
	}	function get_case($prodid,$status) {
		$this->db->select( 'Name,Surname,Email,Phone,Company,Designation,I_Status,Prod_Name,Prod_Duration,Prod_Price' );
		$this->db->from( 'dbo.Invoice i,dbo.Lead l, dbo.Product p, dbo.Customer c' );
		$this->db->where("i.Lead_ID=l.LeadID and p.Prod_ID=l.Prod_ID and 
        l.CustID=c.CustID and I_Status='$status' and p.Prod_ID LIKE '%$prodid%'");
		$query = $this->db->get();
		return $query->result();
	}	function get_case($prodid,$status) {
		$this->db->select( 'Name,Surname,Email,Phone,Company,Designation,I_Status,Prod_Name,Prod_Duration,Prod_Price' );
		$this->db->from( 'dbo.Invoice i,dbo.Lead l, dbo.Product p, dbo.Customer c' );
		$this->db->where("i.Lead_ID=l.LeadID and p.Prod_ID=l.Prod_ID and 
        l.CustID=c.CustID and I_Status='$status' and p.Prod_ID LIKE '%$prodid%'");
		$query = $this->db->get();
		return $query->result();
	}	function get_case($prodid,$status) {
		$this->db->select( 'Name,Surname,Email,Phone,Company,Designation,I_Status,Prod_Name,Prod_Duration,Prod_Price' );
		$this->db->from( 'dbo.Invoice i,dbo.Lead l, dbo.Product p, dbo.Customer c' );
		$this->db->where("i.Lead_ID=l.LeadID and p.Prod_ID=l.Prod_ID and 
        l.CustID=c.CustID and I_Status='$status' and p.Prod_ID LIKE '%$prodid%'");
		$query = $this->db->get();
		return $query->result();
	}	function get_case($prodid,$status) {
		$this->db->select( 'Name,Surname,Email,Phone,Company,Designation,I_Status,Prod_Name,Prod_Duration,Prod_Price' );
		$this->db->from( 'dbo.Invoice i,dbo.Lead l, dbo.Product p, dbo.Customer c' );
		$this->db->where("i.Lead_ID=l.LeadID and p.Prod_ID=l.Prod_ID and 
        l.CustID=c.CustID and I_Status='$status' and p.Prod_ID LIKE '%$prodid%'");
		$query = $this->db->get();
		return $query->result();
	}	function get_case($prodid,$status) {
		$this->db->select( 'Name,Surname,Email,Phone,Company,Designation,I_Status,Prod_Name,Prod_Duration,Prod_Price' );
		$this->db->from( 'dbo.Invoice i,dbo.Lead l, dbo.Product p, dbo.Customer c' );
		$this->db->where("i.Lead_ID=l.LeadID and p.Prod_ID=l.Prod_ID and 
        l.CustID=c.CustID and I_Status='$status' and p.Prod_ID LIKE '%$prodid%'");
		$query = $this->db->get();
		return $query->result();
	}



<fieldset>
<body bgcolor="silver">


<fieldset>
<legend><h5 align="center"><font  color="navy" face="Segoe" size="+6">Customer Case Management </font></h5></legend>

             <br><br><br>

            Select Case:&nbsp;&nbsp;&nbsp;


            <select id="cases" name="CaseStatement" >
            <option value="1">Open Case</option>
				<option value="2">Resolved Case</option>
            </select>
            <br><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;
            Select Course:

            <select id="allcourse" name="AllCourses">
            <?php
               foreach ( $products as $product ) {



              echo "<option value='".$product->Prod_ID."'>".$product->Prod_Name."</option>";
			   }
            ?>
            </select>
            <br><br><br>


<!--			 <a href="<?php/* echo base_url().'/customer/CaseProgress/'.$prodid.'/'.$SalesMember*/ ?>" class="btn btn-info" role="button">Enquire</a>-->

			 <a id="redirect" style="width:20%" class="btn btn-primary btn-lg" role="button">View Case</a
        </div>
        </form>
</fieldset>
    </body>
	<script>
$(document).ready(function(){

	$('select').on('change', function() {
		var cases =$('#cases').val();
	var course=$('#allcourse').val();

	$("#redirect").attr("href", "<?php echo base_url().'customer/CaseProgress/'?>"+course+"/"+cases);

});

	var cases =$('#cases').val();
	var course=$('#allcourse').val();

	$("#redirect").attr("href", "<?php echo base_url().'customer/CaseProgress/'?>"+course+"/"+cases);


});
</script>
