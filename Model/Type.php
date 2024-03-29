<?php
App::uses('AppModel', 'Model');
/**
 * Type Model
 *
 * @property Document $Document
 */
class Type extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'codice';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
