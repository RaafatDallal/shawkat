<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

/**
 * Class name : Reservation
 * 
 * Description :
 * This class contains functions to deal with the reservation table (Add , Edit , Delete)
 * 
 * Created date ; 07-06-2014
 * Modification date : ---
 * Modfication reason : ---
 * Author :Mohamad Raafat Dallal
 * contact : raafat.dallal@gmail.com
 */    

class Reservation_model extends CI_Model{
	/** Reservation class variables **/
	
	//The id field of the Reservation.
	var $id;
	
	//Name of the customer.
	var $name = "";
	
	//Email of the customer.
	var $email = "";
	
	//count of people.  
	var $count = 0;
	
	//The date and time of the reservation.
	var $date_time = "";
	
	//The phone number of the customer.
	var $phone = "";
	
	//The message attached with the reservation.
	var $message = 0;
	
	//Is the reservation status or not.
	var $status = "PENDING";
	
	//The reservation receive date and time.
	var $receive_date = "";
	/**
     * Constructor
     **/	
	function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Class functions
	 **/
    
    /**
	 * function name : addReservation
	 * 
	 * Description : 
	 * add new reservation to the database.
	 * 
	 * parameters:
	 * 	
	 * Created date : 07-06-2014
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author :Mohamad Raafat Dallal
	 * contact : raafat.dallal@gmail.com
	 */
	 public function addReservation(){
		$query = "INSERT INTO reservation(
							name,
							email,
							count,
							date_time,
							phone,
							message,
							status,
							receive_date
						) 
						VALUES (
							'{$this->name}',
							'{$this->email}',
							'{$this->count}',
							'{$this->date_time}',
							'{$this->phone}',
							'{$this->message}',
							'{$this->status}',
							'{$this->receive_date}'
						);
					";
		$this->db->query($query);
		return $this->db->insert_id();
	 }
	 
	 /**
	 * function name : deleteReservation
	 * 
	 * Description : 
	 * delete the reservation of the given id from the database.
	 * 
	 * Created date : 07-06-2014
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author :Mohamad Raafat Dallal
	 * contact : raafat.dallal@gmail.com
	 */
	 public function deleteReservation(){
		$query = "delete from reservation
	 			  where id = {$this->id}";
		$this->db->query($query);
		return true;
	 }
	 
	 /**
	 * function name : modifyReservation
	 * 
	 * Description : 
	 * modify the data of the reservation of the given id.
	 * 
	 * Created date : 07-06-2014
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author :Mohamad Raafat Dallal
	 * contact : raafat.dallal@gmail.com
	 */
	 public function modifyReservation(){
		$query = "UPDATE reservation
				  SET
				    name = '{$this->name}',
					email = '{$this->email}',
					count = {$this->count},
					date_time = {$this->date_time},
					phone = {$this->phone},
					message = {$this->message},
					status = {$this->status},
					receive_date = {$this->receive_date}		
	 			  WHERE id = {$this->id}";
		$this->db->query($query);
		return true;
	 }
	
	/**
	 * function name : getAllReservation
	 * 
	 * Description : 
	 * Returns the data of all of the reservations in the database.
	 * 
	 * Created date : 07-06-2014
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author :Mohamad Raafat Dallal
	 * contact : raafat.dallal@gmail.com
	 */
	 public function getAllReservation(){
		$query = "SELECT *
				  FROM reservation";
				  
		$query = $this->db->query($query);
		return $query->result_array();
	 }
	 
	 /**
	 * function name : getPendingReservation
	 * 
	 * Description : 
	 * Returns the data of all of the pending reservations in the database.
	 * 
	 * Created date : 07-06-2014
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author :Mohamad Raafat Dallal
	 * contact : raafat.dallal@gmail.com
	 */
	 public function getPendingReservation(){
		$query = "SELECT * 
				  FROM reservation
				  where status like 'PENDING' ";
				  
		$query = $this->db->query($query);
		return $query->result_array();
	 }
	  
	 /**
	 * function name : modifyReservationStatus
	 * 
	 * Description : 
	 * modify the status of the reservation of the given id.
	 * 
	 * Created date : 07-06-2014
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author :Mohamad Raafat Dallal
	 * contact : raafat.dallal@gmail.com
	 */
	 public function modifyReservationStatus(){
		$query = "UPDATE reservation
				  SET
					status = '{$this->status}'		
	 			  WHERE id = {$this->id}";
		$this->db->query($query);
		return true;
	 }
	 }