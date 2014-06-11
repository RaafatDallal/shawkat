<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation_service extends CI_Controller {
	
	
	
	function Reservation_service()
    {
          parent::__construct();
          $ns = 'http://'.$_SERVER['HTTP_HOST'].'/index.php/soapserver/';
          $this->load->library("Nusoap_library"); // load nusoap toolkit library in controller
          $this->nusoap_server = new soap_server(); // create soap server object
          $this->nusoap_server->configureWSDL("SOAP Server Using NuSOAP in CodeIgniter", $ns); // wsdl cinfiguration
          $this->nusoap_server->wsdl->schemaTargetNamespace = $ns; // server namespace
    }
	
	
	
	
	function index()
	{
	
		/**
		 * function name : getAllReservations
		 * 
		 * Description : 
		 * Get all the reservations in the database.
		 * 
		 * Created date : 09-06-2014
		 * Modification date : ---
		 * Modfication reason : ---
		 * Author :Mohamad Raafat Dallal
		 * contact : raafat.dallal@gmail.com
		  * 
		  */
		function getAllReservations()
		{
			$this->load->model('reservation_model');
			$data=$this->reservation_model->getAllReservation();
			var_dump( $data);
			echo json_encode($data);
		}
		
		$input_array = array (); //no input in this function
		$return_array = array ("return" => "xsd:string");
		$this->nusoap_server->register('getAllReservations', $input_array, $return_array, "urn:SOAPServerWSDL", "urn:".$ns."/getAllReservations", "rpc", "encoded", "Get all reservations");
			
		
		
		/**
		 * function name : getAllPendingReservations
		 * 
		 * Description : 
		 * Get all the pending reservatiopns in the database.
		 * 
		 * Created date : 09-06-2014
		 * Modification date : ---
		 * Modfication reason : ---
		 * Author :Mohamad Raafat Dallal
		 * contact : raafat.dallal@gmail.com
		  * 
		  */
		function getAllPendingReservations()
		{
			$this->load->model('reservation_model');
			$data=$this->reservation_model->getPendingReservation();
			echo json_encode($data);
		}
		
		$input_array = array (); //no input in this function
		$return_array = array ("return" => "xsd:string");
		$this->nusoap_server->register('getAllPendingReservations', $input_array, $return_array, "urn:SOAPServerWSDL", "urn:".$ns."/getAllPendingReservations", "rpc", "encoded", "Get all pending reservations");
			
		
		/**
		 * function name : confirmReservation
		 * 
		 * Description : 
		 * update the reservation status of the given reservation id in the database to be confirmed.
		 * 
		 * Created date : 09-06-2014
		 * Modification date : ---
		 * Modfication reason : ---
		 * Author :Mohamad Raafat Dallal
		 * contact : raafat.dallal@gmail.com
		  * 
		  */
		function confirmReservation($id)
		{
			$this->load->model('reservation_model');  
			$this->reservation_model->id=$id;
			$this->reservation_model->status='CONFIRMED';
			$this->reservation_model->modifyReservationStatus();
			$this->getAllReservations();
		}
		
		$input_array = array ('id' => "xsd:int"); //no input in this function
		$return_array = array ();
		$this->nusoap_server->register('confirmReservation', $input_array, $return_array, "urn:SOAPServerWSDL", "urn:".$ns."/confirmReservation", "rpc", "encoded", "Confirm reservation");
		
		
		/**
		 * function name : cancelReservation
		 * 
		 * Description : 
		 * update the reservation status of the given reservation id in the database to be canceled.
		 * 
		 * Created date : 09-06-2014
		 * Modification date : ---
		 * Modfication reason : ---
		 * Author :Mohamad Raafat Dallal
		 * contact : raafat.dallal@gmail.com
		  * 
		  */
		function cancelReservation($id)
		{
			$this->load->model('reservation_model');  
			$this->reservation_model->id=$id;
			$this->reservation_model->status='CANCELED';
			$this->reservation_model->modifyReservationStatus();
			$this->getAllReservations();
		}
		
		
		$input_array = array ('id' => "xsd:int"); //no input in this function
		$return_array = array ();
		$this->nusoap_server->register('cancelReservation', $input_array, $return_array, "urn:SOAPServerWSDL", "urn:".$ns."/cancelReservation", "rpc", "encoded", "cancel reservation");
		
		
		$this->nusoap_server->service(file_get_contents("php://input")); // read raw data from request body
	
	}
}
?>
