<?php

class Portfolio_Model extends Model {
	public function get_data() {
		return array(
			array(
				'Year' => '2006',
				'Site' => 'http://somesite1.ru',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".',
                'photo' => 'https://gamerwall.pro/uploads/posts/2022-09/1662385378_25-gamerwall-pro-p-ochen-tolstii-kot-instagram-35.jpg'
			),
			array(
				'Year' => '2007',
				'Site' => 'http://somesite1.ru',
				'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.',
                'photo' => 'https://i.pinimg.com/originals/c8/ef/f2/c8eff2a30321ba421bb18062ae6e3838.jpg'
			),
		);
		
	}
}