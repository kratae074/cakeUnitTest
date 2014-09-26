<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 */
class Category extends AppModel {
/**
 * generateCategoryList
 *
 * @ return array category list 
 */
	public function generateCategoryList($order = 'asc'){
		return $this->find('list', array('order' => array('name' => $order)));
	}

}
