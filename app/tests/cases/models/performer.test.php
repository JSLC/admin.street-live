<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Tokyo' for 'JST/9.0/no DST' instead in /Users/jungsinyu/www/street-live/cake/console/templates/default/classes/test.ctp on line 22
/* Performer Test cases generated on: 2011-08-30 21:15:46 : 1314706546*/
App::import('Model', 'Performer');

class PerformerTestCase extends CakeTestCase {
	var $fixtures = array('app.performer', 'app.performertype', 'app.life', 'app.stage', 'app.livetype', 'app.member', 'app.city', 'app.country', 'app.place', 'app.blood', 'app.performers_member');

	function startTest() {
		$this->Performer =& ClassRegistry::init('Performer');
	}

	function endTest() {
		unset($this->Performer);
		ClassRegistry::flush();
	}

}
