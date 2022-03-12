<?php 
class Crud extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Crud_model');
	}
        /*Insert*/
	public function savedata()
	{
		$data['info'] = $this->displaydata();
		/*load registration view form*/
		$this->load->view('insert', $data);
		
		// Check submit button 
		 if($this->input->post('save'))
		 {
		    $data['first_name']=$this->input->post('first_name');
			$data['last_name']=$this->input->post('last_name');
		 	$data['email']=$this->input->post('email');
		 	 $response=$this->Crud_model->saverecords($data);
		 	 if($response==true){
		         echo "Records Saved Successfully";
		 	 }
		 	 else{
		 	 		echo "Insert error !";
		 	 }
		 	
		 }
	}
	/*Display*/
    public function displaydata()
  {
      $result=$this->Crud_model->display_records();
    //   $this->load->view('insert',$result);
	// var_dump($result);
	return $result;
  }
	
}
?>