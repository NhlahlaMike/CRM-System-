<?php
class Customer_model extends CI_Model {
	private $inv = '';
	private $leadID = '';

	public

	function get_customers() {
				$this->db->from( 'Customer c,AssignTask a, Status' );
		$this->db->where( "c.CustID=a.custid and Status.CustID=c.CustID and a.SalesID='S001' and Status.Status_Name='Not Attempted'" );
		$query = $this->db->get();
		return $query->result();


	}
	function get_case($prodid,$status) {
	$this->db->select( 'Name,Surname,Email,Phone,Company,Designation,I_Status,Prod_Name,Prod_Duration,Prod_Price' );
	$this->db->from( 'dbo.Invoice i,dbo.Lead l, dbo.Product p, dbo.Customer c' );
	$this->db->where("i.Lead_ID=l.LeadID and p.Prod_ID=l.Prod_ID and
			l.CustID=c.CustID and I_Status='$status' and p.Prod_ID LIKE '%$prodid%'");
	$query = $this->db->get();
	return $query->result();
}
	public

	function get_products() {
		$this->db->select( '*' );
		$this->db->from( 'product' );
		$query = $this->db->get();
		return $query->result();
	}

	public

	function get_Leads() {
		$this->db->select( '*' );
		$this->db->from( 'lead' );
		$query = $this->db->get();
		$leads= $query->result();
		foreach ( $leads as $lead ) {
			$leadID = $lead->LeadID;
		}
		return $leadID;
	}
	public

	function get_invoice() {
		$this->db->select( '*' );
		$this->db->from( 'invoice' );
		$query = $this->db->get();
		$invoices = $query->result();
		foreach ( $invoices as $invoice ) {
			$inv = $invoice->Invoice_ID;
		}
		return $inv;

	}
	public

function get_sales() {
$this->db->select( '*' );
$this->db->from( 'Sales_Rep');
$this->db->where("salesid='".$_SESSION['saleid']."'" );
$query = $this->db->get();
return $query->result();
}
	public

	function get_salesRep() {
		$this->db->select( '*' );
		$this->db->from( 'Sales_Rep' );
		$query = $this->db->get();
		return $query->result();
	}
	function form_insert($table, $data){
	// Inserting in Table(students) of Database(college)
	$this->db->insert($table, $data);
	}
}
?>
