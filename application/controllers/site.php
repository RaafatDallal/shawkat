<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$this->home();
		} 
	public function home(){
		$data['message']='Make a reservation';
        $this->load->view('view_header');	
   	    $this->load->view('view_reservation',$data);	
        $this->load->view('view_footer');	
 		}
		
	
	public function about(){
        $this->load->view('view_header');	
        $this->load->view('view_nav');	
        $this->load->view('view_about',$data);	
        $this->load->view('view_footer');	
 		}
		
	public function contact(){
		$data["message"]="";
		$this->load->view('view_header');	
        $this->load->view('view_nav');	
        $this->load->view('view_contact',$data);	
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
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("Name","Full Name","required|alpha|xss_clean");
		$this->form_validation->set_rules("Count","Count","required|is_natural|xss_clean");
		$this->form_validation->set_rules("Email","Email Adress","required|valid_email|xss_clean");
		$this->form_validation->set_rules("Phone","Phone","required|is_natural|xss_clean");
		$this->form_validation->set_rules("Message","Message","xss_clean");
		
		if($this->form_validation->run()==FALSE){
			   //the validation detected a fault in the parameters
			    $this->load->view('view_header');	
   	    		$this->load->view('view_reservation');	
       
		}else{
			//parameters are correct,insert into the database
		$this->load->model('reservation_model');
		$this->reservation_model->name=$this->input->post('Name');
		$this->reservation_model->date_time=$this->input->post('Date_time');
		$this->reservation_model->count=$this->input->post('Count');
		$this->reservation_model->email=$this->input->post('Email');
		$this->reservation_model->phone=$this->input->post('Phone');
		$this->reservation_model->message=$this->input->post('Message');
		$this->reservation_model->status="PENDING";
		$this->reservation_model->receive_date=date('Y-m-d');
		$this->reservation_model->addReservation();
		$data['message']='your reservation submited';
	
		$this->load->view('view_header');	
   	    $this->load->view('view_reservation',$data);	
        $this->load->view('view_footer');	
			}
		}
		
		
	}
