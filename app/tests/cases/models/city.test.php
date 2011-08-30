<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Tokyo' for 'JST/9.0/no DST' instead in /Users/jungsinyu/www/street-live/cake/console/templates/default/classes/test.ctp on line 22
/* City Test cases generated on: 2011-08-30 22:50:54 : 1314712254*/
App::import('Model', 'City');

class CityTestCase extends CakeTestCase {
	var $fixtures = array('app.city', 'app.country', 'app.member', 'app.place', 'app.stage');

	function startTest() {
		$this->City =& ClassRegistry::init('City');
	}

	function endTest() {
		unset($this->City);
		ClassRegistry::flush();
	}

}
