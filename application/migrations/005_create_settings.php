<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_settings extends CI_Migration {

	public function up()
	{

		$this->dbforge->add_field(array(
			
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '60'
			),
			'h2_header' => array(
				'type' => 'VARCHAR',
				'constraint' => '40'
			),
			'about_text' => array(
				'type' => 'text'
			),
			'footer_text' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
				
		));

		$this->dbforge->add_key('title', TRUE); 
		$this->dbforge->create_table('settings');
	}

	public function down()
	{
		$this->dbforge->drop_table('settings');
	}
	
   }
	
?>