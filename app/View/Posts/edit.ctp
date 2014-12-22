<h2>Eintrag bearbeiten</h2>
<?php
 echo $this->Form->create('Post');
 echo $this->Form->input('title');
 echo $this->Form->input('body', array('rows' => '3'));
 echo $this->Form->input('id', array('type' => 'hidden'));
 
 echo $this->Form->end('Absenden');
 //echo $this->Form->button('Reset', array('type' => 'reset')). ' - '.
 //       $this->Form->button('Absenden', array('type' => 'submit'));
 
 echo '<p>'.$this->Html->link('Zurück zur Übersicht aller Posts',array('action' => 'index')).'</p>';
?>