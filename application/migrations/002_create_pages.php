<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_pages extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'page_id' => array(
				'type' => 'INT',
				'constraint' => 6,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'text' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'order' => array(
				'type' => 'INT'
			)
		));
	
	    $this->dbforge->add_key('page_id', TRUE); 
		$this->dbforge->create_table('pages');
	}

	public function down()
	{
		$this->dbforge->drop_table('pages');
	}
	
   }
	
?>