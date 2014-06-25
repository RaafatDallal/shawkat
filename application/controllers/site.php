<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->home();
	} 
	public function home()
	{
        $this->load->view('view_header');	
		$this->load->view('view_menu');
   	    $this->load->view('view_content_home');	
        $this->load->view('view_footer');	
 	}
		
	
	public function specials()
	{
		$this->load->view('view_header');	
		$this->load->view('view_menu');
   	    $this->load->view('view_content_specials');	
        $this->load->view('view_footer');	
	}
	
	
	public function contact_us()
	{
        $this->load->view('view_header');	
        $this->load->view('view_menu');
        $this->load->view('view_content_contact_us');	
        $this->load->view('view_footer');	
 	}
		
	public function our_story()
	{
		$this->load->view('view_header');	
		$this->load->view('view_menu');
   	    $this->load->view('view_content_ourstory');	
        $this->load->view('view_footer');	
	}
	
	
	
	public function reservation(){
		$data['message']='';
        $this->load->view('view_header');	
		$this->load->view('view_menu');
   	    $this->load->view('view_reservation',$data);	
        $this->load->view('view_footer');	
 		}
	
 	 /**
	 * function name : make_reservation
	 * 
	 * Description : 
	 * validation and assign variables to insert a new reservation to the database.
	 * 
	 * Created date : 08-06-2014
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author :Mohamad Raafat Dallal
	 * contact : raafat.dallal@gmail.com
	  * 
	  */
 	public function make_reservation(){
	/*	$this->load->library("form_validation");
		
		$this->form_validation->set_rules("name","Full Name","required|alpha|xss_clean");
		$this->form_validation->set_rules("count","Count","required|is_natural|xss_clean");
		$this->form_validation->set_rules("email","Email Adress","required|valid_email|xss_clean");
		$this->form_validation->set_rules("phone","Phone","required|is_natural|xss_clean");
		$this->form_validation->set_rules("message","Message","xss_clean");
		
		if($this->form_validation->run()==FALSE){
			   //the validation detected a fault in the parameters
			     $this->load->view('view_header');	
		$this->load->view('view_menu');
   	    $this->load->view('view_reservation');	
        $this->load->view('view_footer');	
       
		}
		else */
		if($this->input->post('name') == null)
		{
			$data['message']='please enter the name';
		}
		else {
			if($this->input->post('Date_time')== null)
			{
				$data['message']='please enter the date of your reservation';
			}
			else {
				 if($this->input->post('Count')!=null && is_integer($this->input->post('Count')) )	
				 {
				 	$data['message']='please enter the number of persons';	
				 }	
				 else {
				 	  if($this->input->post('email')==null)
					  {
					  	$data['message']='please enter your email';
					  }
					  else {
					  		//parameters are correct,insert into the database
							$this->load->model('reservation_model');
							$this->reservation_model->name=$this->input->post('name');
							$this->reservation_model->date_time=$this->input->post('Date_time');
							$this->reservation_model->count=$this->input->post('Count');
							$this->reservation_model->email=$this->input->post('email');
							$this->reservation_model->phone=$this->input->post('phone');
							$this->reservation_model->message=$this->input->post('message');
							$this->reservation_model->status="PENDING";
							$this->reservation_model->receive_date=date('Y-m-d');
							$this->reservation_model->addReservation();
							$data['message']='your reservation submited';
						
						    
				 		   }
				     }		
				}
			}
		$this->load->view('view_header');	
		$this->load->view('view_menu');
   	    $this->load->view('view_reservation',$data);	
        $this->load->view('view_footer');	
		}
		
		
	}
