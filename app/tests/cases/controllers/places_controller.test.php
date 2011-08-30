<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Tokyo' for 'JST/9.0/no DST' instead in /Users/jungsinyu/www/street-live/cake/console/templates/default/classes/test.ctp on line 22
/* Places Test cases generated on: 2011-08-30 22:49:06 : 1314712146*/
App::import('Controller', 'Places');

class TestPlacesController extends PlacesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PlacesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.place', 'app.country', 'app.city', 'app.member', 'app.blood', 'app.performer', 'app.performertype', 'app.performance', 'app.stage', 'app.performancetype', 'app.movie', 'app.performers_member');

	function startTest() {
		$this->Places =& new TestPlacesController();
		$this->Places->constructClasses();
	}

	function endTest() {
		unset($this->Places);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
