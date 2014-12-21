<h2>Eintrag hinzufügen</h2>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array(
    'type' => 'textarea',
    'rows' => '8'));

echo $this->Form->end('Post speichern');

?>