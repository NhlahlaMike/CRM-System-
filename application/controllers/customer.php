<?php
class Customer extends CI_Controller {

	     public function __construct()
        {
                parent::__construct();
			  if (!isset($_SESSION[ 'sidebar' ]))
        {
                redirect(base_url('users'));
        }
                // Your own constructor code
        }


	public

	function index() {

		$data[ 'salesname' ] = $this->customer_model->get_sales();
		$data[ 'customers' ] = $this->customer_model->get_customers();
		$data[ 'leadID' ] = add( $this->customer_model->get_Leads(), 'L' );
		$data[ 'inv' ] = add( $this->customer_model->get_invoice(), 'INV' );
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'dashboard';
		//$data[ 'main_content' ] = 'view_customer';
		$data[ 'header' ] = 'Dashboard';

		//$data[ 'sidebar' ] = 'Sales';
		$data[ 'active' ] = 'dashboard';
		$data[ 'main_content' ] = 'dashboard';

		$this->load->view( 'layout\main', $data );
	}

	public

	function cust() {
		$data[ 'customers' ] = $this->customer_model->get_customers();
		$this->load->view( 'all_customer', $data );

	}


	public

	function
	import () {
		$data[ 'header' ] = 'import';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'import';
		$data[ 'main_content' ] = 'import_view';
		$this->load->view( 'layout\main', $data );

	}
	public

	function confirm() {
		$data[ 'header' ] = 'Confirm';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'confirm';
		$data[ 'main_content' ] = 'confirm_invoice';
		$this->load->view( 'layout\main', $data );

	}
	public

	function add() {



		$data[ 'salesReps' ] = $this->customer_model->get_salesRep();

		$data[ 'salesname' ] = $this->customer_model->get_sales();

		$data[ 'salesReps' ] = $this->customer_model->get_salesRep();

		$data[ 'header' ] = 'Add Sales Member';
		$data[ 'sidebar' ] = 'Team';
		$data[ 'header' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'add_sales';
		$data[ 'main_content' ] = 'add_sales';
		$this->load->view( 'layout\main', $data );

	}
	public

	function delete() {
		$data[ 'header' ] = 'Delete';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'delete_sales';
		$data[ 'main_content' ] = 'delete_sales';
		$this->load->view( 'layout\main', $data );

	}
	public

	function monitor() {
		$data[ 'header' ] = 'Monitor Calendar';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'monitor';
		$data[ 'main_content' ] = 'monitor_calender';
		$this->load->view( 'layout\main', $data );

	}

	public

	function manual()

	{

		$data[ 'header' ] = 'Manual Registration';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'manual';
		$data[ 'main_content' ] = 'manual_view';
		$this->load->view( 'layout\main', $data );
	}


	public

	function viewlead() {
		$data[ 'header' ] = 'View Lead';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'viewlead';
		$data[ 'main_content' ] = 'view_lead';
		$this->load->view( 'layout\main', $data );
	}

	public

	function customer_con() {
		//$side = $_SESSION[ 'sidebar' ];
		$data[ 'header' ] = 'CUSTOMERS';
		$data[ 'customers' ] = $this->customer_model->get_customers();
		$data[ 'products' ] = $this->customer_model->get_products();
		$data[ 'leadID' ] = add( $this->customer_model->get_Leads(), 'L' );
		$data[ 'inv' ] = add( $this->customer_model->get_invoice(), 'INV' );
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'customer';
		$data[ 'main_content' ] = 'view_customer';
		$this->load->view( 'layout\main', $data );
	}
	public

	function LeadsReport() {
		$data[ 'header' ] = 'Leads Report';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'Leadsreport';
		$data[ 'main_content' ] = 'view_LeadsReport';
		$this->load->view( 'layout\main', $data );
	}
	public

	function InvoicingReport() {
		$data[ 'header' ] = 'Invoice Report';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'View_invoicing_report';
		$data[ 'main_content' ] = 'view_ Invoice';
		$this->load->view( 'layout\main', $data );
	}

	public function ProductRange()
	{
		$data[ 'header' ] = 'Product Range';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'products' ] = $this->customer_model->get_products();
	 	$data['sidebar']='Manager';
		$data['active']='Add_Product_Range';
		$data[ 'main_content' ] = 'view_ProRange';
		//$this->load->model('customer_model');
		$this->load->view( 'layout\main', $data );
	}

	public

	function CaseReport() {
		$data[ 'products' ] = $this->customer_model->get_products();
		$data[ 'header' ] = 'Case Report';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'Case_reports';
$data[ 'salesname' ] = $this->customer_model->get_sales();
		$data[ 'main_content' ] = 'view_Case';
		$this->load->view( 'layout\main', $data );
	}



		public function CaseProgress($prodID,$case)
	{
			if($case==1)
			$status='Not Yet paid';
				else
			$status='Paid';

		$data[ 'salesname' ] = $this->customer_model->get_sales();
		$data[ 'header' ] = 'Case Report';
		$data[ 'cases' ] = $this->customer_model->get_case($prodID,$status);
		$data[ 'products' ] = $this->customer_model->get_products();
		$data['pod']=$prodID;
		$data['case']=$case;
	 	$data['sidebar']=$_SESSION[ 'sidebar' ];
		$data['active']='Case_reports';
		$data['active']='Case_reports';
		$data[ 'main_content' ] = 'view_case_progress';
		$this->load->view( 'layout\main', $data ); 

		}

	public

	function PerSales() {
		$data[ 'header' ] = 'Per Sales';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'Leads_Per_Sale';

		$data[ 'main_content' ] = 'view_LeadSales';
		$this->load->view( 'layout\main', $data );
	}
	public

	function TaskSales() {
		$data[ 'header' ] = 'Task Sales';
		$data[ 'sidebar' ] = $_SESSION[ 'sidebar' ];
		$data[ 'active' ] = 'Task_Per_Sale';
		$data[ 'main_content' ] = 'view_Task';
		$this->load->view( 'layout\main', $data );
	}



}

?>
