
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        public $title;
       public $content;
       public $date;

       public function get_last_ten_entries()
       {
               $query = $this->db->get('test', 10);
               return $query->result();
       }



}
