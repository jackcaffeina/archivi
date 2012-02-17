<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 * @property Document $Document
 */
class Image extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'titolo';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
