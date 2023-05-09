<?php

class Servises_Model extends Model {
	public function get_data() {
		return $data =  array(
            array("name" => "servise1", "address" => "Митинская ул"),
            array("name" => "servise2", "address" => "Ленина ул"),
            array("name" => "servise3", "address" => "Койкого ул")
        );
		
	}
}