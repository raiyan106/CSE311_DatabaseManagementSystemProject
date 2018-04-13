<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Police_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Admin/index.php');
	}

	public function gd()
	{
		$this->load->view('Admin/gd_instructions.php');
	}

	public function safety_tips()
	{
		$this->load->view('Admin/safety_tips.php');
	}

	public function emergency()
	{
		$this->load->view('Admin/emergency_numbers.php');
	}

	public function about()
	{
		$this->load->view('Admin/about.php');
	}

	public function manage_index()
	{
		$this->load->model('police_model');
		if($this->police_model->validate())
			$this->load->view('Manage/Manage_index.php');
		else $this->load->view('failed.php');
	}

	public function subinspector()
	{
		$this->load->model('police_model');
		$data['subinspector_list']=$this->police_model->getAllSubinspector();
		$this->load->view('Subinspector/subInspector_index.php',$data);
	}

	public function artillery()
	{
		$this->load->model('police_model');
		$data['artillery_list']=$this->police_model->getAllArtillery();
		$this->load->view('Manage/Artillery/artillery_index.php',$data);
	}

	public function new_artillery()
	{
		$this->load->model('police_model');
		if($this->police_model->save_artillery())
			$this->load->view('add_message.php');
		else
			$this->load->view('failed.php');
	}

	public function change_artillery()
	{
		$this->load->model('police_model');
		if($this->police_model->update_artillery())
			$this->load->view('update_message.php');
		else
			$this->load->view('failed.php');

	}

	public function lostAndFound()
	{
		$this->load->model('police_model');
		$data['lostAndFound_list']=$this->police_model->getAlllostAndFound();
		$this->load->view('Manage/LostAndFound/lostAndFound_index.php',$data);

	}

	public function new_lostAndFound()
	{
		$this->load->model('police_model');
		if($this->police_model->save_lostAndFound())
			$this->load->view('add_message.php');
		else
			$this->load->view('failed.php');
	}

	public function change_lostAndFound()
	{
		$this->load->model('police_model');
		if($this->police_model->update_lostAndFound())
			$this->load->view('update_message.php');
		else
			$this->load->view('failed.php');
	}

	public function criminalInfo()
	{
		$this->load->model('police_model');
		$data['criminalInfo_list']=$this->police_model->getAllcriminalInfo();
		$this->load->view('Manage/CriminalInfo/criminalInfo_index.php',$data);
	}

	public function load_department()
	{
		$this->load->view('Department/department_index.php');
	}

	public function load_logistics()
	{
		$this->load->view('Department/Logistics/logistics_index.php');
	}

	public function all_logistics()
	{
		$this->load->model('police_model');
		$data['logistics_list']=$this->police_model->getAlllogistics();
		$this->load->view('Department/Logistics/viewAll_logistics.php',$data);
	}

	public function load_intelligence()
	{
		$this->load->view('Department/Intelligence/intelligence_index.php');
	}

	public function all_intelligence()
	{
		$this->load->model('police_model');
		$data['intelligence_list']=$this->police_model->getAllintelligence();
		$this->load->view('Department/Intelligence/viewAll_intelligence.php',$data);
	}

	public function load_crimeDivision()
	{
		$this->load->view('Department/CrimeDivision/crimeDivision_index.php');
	}

	public function all_crimeDivision()
	{
		$this->load->model('police_model');
		$data['crimeDivision_list']=$this->police_model->getAllcrimeDivision();
		$this->load->view('Department/CrimeDivision/viewAll_crimeDivision.php',$data);
	}

	public function load_entryForm()
	{
		$this->load->view('add_form.php');
	}

	public function add_employee()
	{
		$this->load->model('police_model');
		if($this->police_model->employee_added())
			$this->load->view('add_message.php');
		else
			$this->load->view('failed.php');

	}

	public function search_section()
	{
		$this->load->view('Search/search_index.php');
	}

	/*public function searchByPriviledge()
	{
		$this->load->model('police_model');
		$data['priviledge_list']=$this->police_model->search_priviledge2();
		
		$this->load->view('Search/result_priviledge.php',$data);
		

	}*/

	public function deleteById()
	{
		$this->load->model('police_model');
		if($this->police_model->delete_success())
			$this->load->view('delete_message.php');
		else
			$this->load->view('failed.php');
	}

	public function searchByName()
	{
		$this->load->model('police_model');
		$data['search_list']=$this->police_model->getAllsearchList();
		$this->load->view('Search/result_name.php',$data);

	}

	public function searchById()
	{
		$this->load->model('police_model');
		$data2['search_list2']=$this->police_model->getAllsearchList2();
		$this->load->view('Search/result_id.php',$data2);

	}
}
