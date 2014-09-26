<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Fast Food',
			'created' => '2014-09-25 09:18:53',
			'modified' => '2014-09-25 09:18:53'
		),
		array(
			'id' => 2,
			'name' => 'Thai Food',
			'created' => '2014-09-25 09:18:53',
			'modified' => '2014-09-25 09:18:53'
		),
		array(
			'id' => 3,
			'name' => 'Veterian Food',
			'created' => '2014-09-25 09:18:53',
			'modified' => '2014-09-25 09:18:53'
		),
		array(
			'id' => 4,
			'name' => 'Japanese Food',
			'created' => '2014-09-25 09:18:53',
			'modified' => '2014-09-25 09:18:53'
		),
		array(
			'id' => 5,
			'name' => 'Italian Food',
			'created' => '2014-09-25 09:18:53',
			'modified' => '2014-09-25 09:18:53'
		),
		array(
			'id' => 6,
			'name' => 'Indian Food',
			'created' => '2014-09-25 09:18:53',
			'modified' => '2014-09-25 09:18:53'
		),
	);

}
