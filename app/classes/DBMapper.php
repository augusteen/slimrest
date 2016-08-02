<?php

abstract class DBMapper
{
	
	protected $db;

	public function __construct($db){
		$this->db = $db;
	}
}