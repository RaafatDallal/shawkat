<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation_service extends CI_Controller {
	
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
	public function getAllReservations()
	{
		$this->load->model('reservation_model');
		$data=$this->reservation_model->getAllReservation();
		var_dump( $data);
		echo json_encode($data);
	}
	
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
	public function getAllPendingReservations()
	{
		$this->load->model('reservation_model');
		$data=$this->reservation_model->getPendingReservation();
		echo json_encode($data);
	}
	
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
	public function confirmReservation($id)
	{
		$this->load->model('reservation_model');  
		$this->reservation_model->id=$id;
		$this->reservation_model->status='CONFIRMED';
		$this->reservation_model->modifyReservationStatus();
		$this->getAllReservations();
	}
	
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
	public function cancelReservation($id)
	{
		$this->load->model('reservation_model');  
		$this->reservation_model->id=$id;
		$this->reservation_model->status='CANCELED';
		$this->reservation_model->modifyReservationStatus();
		$this->getAllReservations();
	}
}
?>
