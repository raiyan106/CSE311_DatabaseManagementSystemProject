<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Police_Model extends CI_Model {

       

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function validate()
        {
            $username=$_POST['username'];
            $password=$_POST['password'];

            $this->db->select('Username','Password');
            $this->db->from('admin');
            $this->db->where('Username',$username);
            $this->db->where('Password',$password);

            $query=$this->db->get();
            if($query->num_rows()==1)
                return $query->result();
            else return false;

        }

        public function getAllSubinspector()
        {
            $this->db->select('Name, ID, Age, Salary, dept_in_charge');
            $this->db->from('subinspector');
            return $this->db->get()->result_array();
        }

        public function getAllArtillery()
        {
            $this->db->select('Name, Model, Date, Total_Rounds');
            $this->db->from('artillery');
            return $this->db->get()->result_array();
        }

        public function save_artillery()
        {
             $table_data=array(
              'Name'=>$this->input->post('name'),
              'Model'=> $this->input->post('model'),
              'Date'=>$this->input->post('date'),
              'Total_Rounds'=> $this->input->post('total_rounds'),
              );

        if($this->db->insert('artillery', $table_data))
          return TRUE;
        else
          return false;

        }

        public function update_artillery()
        {
          $name=$_POST['name'];
            $tr=$_POST['total_rounds'];
            
            $this->db->set('Total_Rounds',$tr,'FALSE');
            $this->db->where('Name',$name);
            if($this->db->update('artillery'))
                return true;
            else
                return false;  
        }

        public function getAlllostAndFound()
        {
            $this->db->select('Name, Age, ID, Gender, Status');
            $this->db->from('lost_and_found');
            return $this->db->get()->result_array();
        }

        public function save_lostAndFound()
        {
             $table_data=array(
              'Name'=>$this->input->post('name'),
              'Age'=> $this->input->post('age'),
              'Gender'=> $this->input->post('gender'),
              );

        if($this->db->insert('lost_and_found', $table_data))
          return TRUE;
        else
          return false;

        }

        public function update_lostAndFound()
        {
            $stat=$_POST['status'];
            $id=$_POST['id'];
            
            $this->db->set('Status',$stat,'FALSE');
            $this->db->where('ID',$id);
            if($this->db->update('lost_and_found'))
                return true;
            else
                return false;

        }

        public function getAllcriminalInfo()
        {
            $this->db->select('Name, Age, Area');
            $this->db->from('criminal_info');
            return $this->db->get()->result_array();

        }

        public function getAlllogistics()
        {
            $this->db->select('Name, ID, Salary');
            $this->db->from('employee');
            $this->db->where('Dept_Title',0);
            return $this->db->get()->result_array();

        }

         public function getAllintelligence()
        {
            $this->db->select('Name, ID, Salary');
            $this->db->from('employee');
            $this->db->where('Dept_Title',1);
            return $this->db->get()->result_array();

        }

         public function getAllcrimeDivision()
        {
            $this->db->select('Name, ID, Salary');
            $this->db->from('employee');
            $this->db->where('Dept_Title',2);
            return $this->db->get()->result_array();

        }

        public function employee_added()
        {
            $table_data=array(
              'Name'=>$this->input->post('name'),
              'Salary'=>$this->input->post('salary'),
            'Dept_Title'=>$this->input->post('department')
              );
        if($this->db->insert('employee', $table_data))
          return TRUE;
        else
          return false;
        }
      

        public function delete_success()
        {
            $id=$_POST['id'];

            if($id>=300 && $id<=399)
            {
                $this->db->where('ID',$id);
            if($this->db->delete('employee')) return TRUE;
            else return FALSE;
            }


            if($id>=200 && $id<=299)
            {
                $this->db->where('ID',$id);
            if($this->db->delete('sergeants')) return TRUE;
            else return FALSE;
            }


            if($id>=100 && $id<=199)
            {
                $this->db->where('ID',$id);
            if($this->db->delete('subinspector')) return TRUE;
            else return FALSE;
            }


            if($id>=400 && $id<=499)
            {
                $this->db->where('ID',$id);
            if($this->db->delete('lost_and_found')) return TRUE;
            else return FALSE;
            }

        }

        public function getAllsearchList()
        {
            $name=$_POST['name'];
            $this->db->select('Name,ID, Salary, Dept_Title');
            $this->db->from('employee');
            $this->db->where('Name',$name);
            return $this->db->get()->result_array();
        }

        public function getAllsearchList2()
        {
            $id=$_POST['id'];
            $this->db->select('Name,ID, Salary, Dept_Title');
            $this->db->from('employee');
            $this->db->where('ID',$id);
            return $this->db->get()->result_array();
        }




        
     
}