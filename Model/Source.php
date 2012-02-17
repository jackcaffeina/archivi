<?php
App::uses('AppModel', 'Model');
/**
 * Source Model
 *
 * @property Document $Document
 */
class Source extends AppModel {
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
			'foreignKey' => 'source_id',
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
