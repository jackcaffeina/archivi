<div class="documents form">
<?php echo $this->Form->create('Document');?>
	<fieldset>
		<legend><?php echo __('Add Document'); ?></legend>
	<?php
		echo $this->Form->input('codice');
		echo $this->Form->input('desc_it');
		echo $this->Form->input('desc_en');
		echo $this->Form->input('type_id');
		echo $this->Form->input('citta');
		echo $this->Form->input('data');
		echo $this->Form->input('documenttype_id');
		echo $this->Form->input('source_id');
		echo $this->Form->input('invent');
		echo $this->Form->input('colloc');
		echo $this->Form->input('note_it');
		echo $this->Form->input('note_en');
		echo $this->Form->input('tt');
		echo $this->Form->input('act');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documenttypes'), array('controller' => 'documenttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documenttype'), array('controller' => 'documenttypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
