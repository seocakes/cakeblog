<?php
$switch = 0;
if (!$switch) {
    ?>
    <h3>
    <?php echo h($post['Post']['title']); ?>
    </h3>
    <p>
        <small>
            Created: <?php echo $post['Post']['created']; ?>
        </small>
    </p>
    <p>
    <?php echo h($post['Post']['body']); ?>
    </p>
    <?php echo '<p>'. $this->Html->link('Edit',
                array('action' => 'edit', $post['Post']['id'])).'</p>';
    
    echo '<p>'.$this->Form->postLink('Löschen',
                array('action' => 'delete', $post['Post']['id'])).'</p>';
} else {
    echo "<table>";
    $names = array('PostId', 'Title', 'Body', 'Created', 'Modified', 'Action');
    echo $this->Html->tableHeaders($names);

    foreach ($post as $details) {
        $details['edit'] = $this->Html->link('Bearbeiten',
                array('action'=>'edit', $post['Post']['id']));
         $details['delete'] = $this->Form->postLink('Löschen',
                array('action'=>'delete', $post['Post']['id']));
        echo $this->Html->tableCells($details);
    }
    echo "</table>";
}
