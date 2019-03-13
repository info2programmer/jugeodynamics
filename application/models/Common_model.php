<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model
{
    function  __construct(){
        parent::__construct();
    }
   
    ################################ UPDATE DATA ########################################
	function updateData($searchByValue=null,$searchFields=null,$object,$tableName){
        $this->db->where($searchFields, $searchByValue);
        $this->db->update($tableName, $object);
    }
    
    	// Delete Record
	public function delete_record($where_feald,$delete_id,$table_name)
	{
		$this->db->where($where_feald, $delete_id);
		$this->db->delete($table_name);
		
	}
	// Active Or Deactive Fealds
	public function chage_status($where_feald,$update_id,$table_name,$object)
	{
		$this->db->where($where_feald, $update_id);
		$this->db->update($table_name, $object);
		
	}
	// Insert Function
	public function insert_record($table_name,$object)
	{
		$this->db->insert($table_name, $object);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}
	// This function for image upload
	public function upload_image($file,$path,$redirect)
	{
		
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload($file)){
			//$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error_message', $this->upload->display_errors());
			redirect($redirect,'refresh');
		}
		else{
			$fileData=$this->upload->data();
		}
		return $fileData['file_name'];
	}
	// This Function For Send SMTP mail
	public function send_smtpmail($email,$subject,$mailBody)
	{
		$config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.zoho.com',
            'smtp_port' => 465,
            'smtp_user' => 'admin@izifiso.com',
            'smtp_pass' => '005ikaytas',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
		$this->load->library('email', $config);
		
		$this->email->from('admin@izifiso.com', 'IZIFISO ADMIN');
        $this->email->to($email); 
        $this->email->subject($subject);
        $this->email->message($mailBody);  
        $this->email->set_mailtype("html");
        $this->email->send();
    }
    
    public function checkcredential($username,$password,$table){
		//encrypt password
		$password=md5($password);
		$this->db->where('email',$username);
		$this->db->where('password',$password);
        $result=$this->db->get($table);        
		if($result->num_rows()==1){
			return $result->row(0)->id;
		}
		else{
			return false;
		}
	}

	public function find_data($table,$return_type='array',$list=NULL,$conditions='',$select='*',$join='',$group_by='',$order_by='',$limit=0,$offset=0,$or_where_in='',$or_like='')
	{
		
		$result = array();		
		
		$this->db->select($select);		
		
		if(!empty($table['alias_name']))
		{
			$table_name = $table['name'].' as '.$table['alias_name'];
		}
		else
		{
			$table_name = $table['name'];
		}
		$this->db->from($table_name);
		
		if(is_array($join))
		{
			for($j=0;$j<count($join);$j++)
			{
				if($join[$j]['table'])
				{
					/*$table_join = $join[$j]['table'].' as '.$join[$j]['table_alias']*/;
					//$table_join_name = $join[$j]['table_alias'];
					$table_join = $join[$j]['table'];
					$table_join_name = $join[$j]['table'];
				}
				else
				{
					/*$table_join = $join[$j]['table'];
					$table_join_name = $join[$j]['table'];*/
				}
				if(!empty($join[$j]['table_master_alias']))
				{
					$table_master_join = $join[$j]['table_master_alias'];
				}
				else
				{
					$table_master_join = $join[$j]['table_master'];
				}
				$this->db->join($table_join,$table_join_name.'.'.$join[$j]['field'].'='.$table_master_join.'.'.$join[$j]['field_table_master']/*.$join[$j]['and']*/,$join[$j]['type']);
			}
		}
		
		if($conditions != '')$this->db->where($conditions);	
		if($or_where_in != '')$this->db->or_where_in($or_where_in);
		
		if($or_like != '')$this->db->or_like($or_like);		
		
		if(is_array($group_by))
		{
			for($g=0;$g<count($group_by);$g++)
			{
				$this->db->group_by($group_by[$g]);
			}
		}
		
		if(is_array($order_by))
		{
			for($o=0;$o<count($order_by);$o++)
			{
				$this->db->order_by($order_by[$o]['field'],$order_by[$o]['type']);
			}
		}
		
		if($limit != 0)$this->db->limit($limit,$offset);
		
		
		$query = $this->db->get();
		
		//echo $this->db->last_query();
		switch ($return_type) 
		{
			case 'array':
			case '':
				if($query->num_rows() > 0){$result = $query->result();}
				break;
				
			case 'row':
				if($query->num_rows() > 0){$result = $query->row();}
				break;
			
			case 'row-array':
				if($query->num_rows() > 0){$result = $query->row_array();}
				break;
				
			case 'list':
			
				$list_arr[''] = 'Choose'. $list['empty_name'];
				if($query->num_rows() > 0)
				{
					foreach ($query->result() as $row)
					{
						$list_arr[$row->$list['key']] = $row->$list['value'];
					}
				} else {
					$list_arr[] = 'No City Found';
				}
				$result = $list_arr;
				break;
				
			case 'count':
				$result = $query->num_rows();
				break;
		}
		//echo $this->db->last_query();die;
        return $result;
	}
	

	// This Function For Remove All Special Char
	public function cleanSpecialChar($string) {
		$string = trim($string);
		$string = strtolower($string);
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
	 
		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
    

    // Get User Agent
    public function useAgent()
    {
        if ($this->agent->is_browser())
        {
            $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
            $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
            $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $agent = $agent . " Platform ". $this->agent->platform(); 
        return $agent;
    }

	
	
    
	
}