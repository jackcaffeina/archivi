<?php
App::uses('AppModel', 'Model');
/**
 * Documenttype Model
 *
 * @property Document $Document
 */
class Documenttype extends AppModel {
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
			'foreignKey' => 'documenttype_id',
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
