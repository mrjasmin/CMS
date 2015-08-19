<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_news extends CI_Migration {

	public function up()
	{

		
		$this->dbforge->add_field(array(
			'ID' => array(
				'type' => 'INT',
				'constraint' => 6,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'author' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'content' => array(
				'type' => 'text'
			),
			'date' => array(
				'type' => 'DATETIME'
			),
				
		));
	
	    $this->dbforge->add_key('ID', TRUE); 
		$this->dbforge->create_table('news');
	}

	public function down()
	{
		$this->dbforge->drop_table('news');
	}
	
   }
	
?>