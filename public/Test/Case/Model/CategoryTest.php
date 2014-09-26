<?php
App::uses('Category', 'Model');

/**
 * Category Test Case
 *
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Category = ClassRegistry::init('Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

	public function testGenerateCategoryList(){
		$categories = $this->Category->generateCategoryList();
		$this->assertEquals(6, count($categories));
		$this->assertTrue(empty($categories[0]));
		$this->assertEquals('Fast Food', $categories[1]);
	}

	public function testGenerateCategoryListOrderASC() {
		$categories = $this->Category->generateCategoryList('asc');
		$sortCat = $orgCat = array_values($categories);
		sort($sortCat);
		$this->assertEquals($sortCat , $orgCat);
	}

	public function testGenerateCategoryListOrderDSC() {
		$categories = $this->Category->generateCategoryList('desc');
		$sortCat = $orgCat = array_values($categories);
		arsort($sortCat);
		$this->assertEquals($sortCat , $orgCat);
	}
}
