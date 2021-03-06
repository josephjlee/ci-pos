<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migrate extends CI_Controller
{
   public function ver($version)
   {
      $this->load->library('migration');

      if ($this->migration->version($version) === FALSE) {
         show_error($this->migration->error_string());
      } else {
         $data['version'] = $version;
         $this->load->view('exe/notif_migration', $data);
      }
   }
}

/* End of file Migrate.php */
