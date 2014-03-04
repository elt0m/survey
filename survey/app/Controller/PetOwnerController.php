<?php 
class PetOwnerController extends AppController {    
	public $components = array(
		"Pass4v"
	);
	
	public $uses = array(
		 "PetOwner"
		,"Pets"
		,"WeightLogs"
	);
	
	public $autoLayout = false;
	
	public function index() { 
		$email = $this->request->data["email"];
		$password = $this->request->data['password'];
		
		//set condition
		$conditions = array(
			 "mail_address" => $email
		    ,"password" => $password
		);
		
		// get owner information
		$owner_info = $this->Pets->find("all"
		    ,array(
		     //    "conditions" => $conditions
		       // "fields" => array("pet_owner_id",'WeightLogs.measurement_date' )
		       "contain" => array(
					
			   )
		    )
	    );
		    
		//$pets = $this->Pets->find("all");
		//echo "<pre>";print_r($owner_info);
		
		//$this->Pass4v->response($a);
    }
}