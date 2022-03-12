<?php
class Bookmarks extends CI_Controller {
    public function index()
    {   
        // $this->output->enable_profiler(TRUE); //enables the profiler
        if(isset($_POST['bookmarked'])){
        $this->load->view("/Bookmarks_views/bookmarks_template"); //loads the view
        }
        else{
            $this->load->view("/Bookmarks_views/bookmarks_template"); //loads the view
        }
    }
    public function show_fetch_datas(){
        // echo $this->db->count_all('manufacturers');
        $this->load->model("bookmark"); //loads the model
        $manufacturer = $this->bookmark-> get_all_manufacturers();
        var_dump($manufacturer);
    }
    public function add()
    {
        
        $this->load->model("bookmark");
        $manufacturer_details = array("name" => "Manufacturer3"); //or you can adjust this as non-array
        $add_manufacturer = $this->bookmark->add_manufacturer($manufacturer_details );
        if($add_manufacturer === TRUE) {
            echo "Manufacturer is added!";
        }
    }
    public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('bookmark');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('Bookmarks_views/bookmarks_template');
	
		/*Check submit button */
		if($this->input->post('clicked'))
		{
		    $data['name']=$this->input->post('name');
			$data['url']=$this->input->post('url');
			// $data['email']=$this->input->post('email');
			$response=$this->bookmark->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
                    
			}
			else{
					echo "Insert error !";
			}
            // redirect('Bookmarks/displaydata');
		}
	}
     /*Display*/
     public function displaydata()
     {
         $result['data']=$this->bookmark->display_records();
         $this->load->view('Bookmarks_views/bookmarks_template',$result);
     }
}
?>