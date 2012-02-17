<div class="types form">
<?php echo $this->Form->create('Type');?>
	<fieldset>
		<legend><?php echo __('Edit Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codice');
		echo $this->Form->input('desc_it');
		echo $this->Form->input('desc_en');
		echo $this->Form->input('tt');
		echo $this->Form->input('act');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Type.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Type.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
