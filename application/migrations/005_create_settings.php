<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_settings extends CI_Migration {

	public function up()
	{

		$this->dbforge->add_field(array(
			
			'id' => array(
				'type' => 'INT',
				'constraint' => 6,
				'unsigned' => TRUE,
				'auto_increment' => FALSE, 
			),

			'title' => array(
				'type' => 'VARCHAR',	
				'constraint' => '60'
				
			),
			'h2_header' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
				'default' => 'Hello, world!'
			),
			'about_text' => array(
				'type' => 'text'
			),
			'footer_text' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'default' => 'Footer text'
			),
			'meta_title' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'default' => 'LightCMS Demo'
			),

			'meta_author' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'default' => 'Jasmin Krhan'
			),

			'meta_content' => array(
				'type' => 'VARCHAR',
				'constraint' => '300',
				'default' => 'LightCMS'
			),
				
		));

		$this->dbforge->add_key('id', TRUE); 
		$this->dbforge->create_table('settings');


	}

	public function down()
	{
		$this->dbforge->drop_table('settings');
	}
	
   }
	
?>