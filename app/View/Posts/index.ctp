<?php
echo "<table>";
$names = array('PostId','Title','Body','Created','Modified');
echo $this->Html->tableHeaders($names);

foreach ($posts as $post) {
    $d = $post['Post'];
    $d['id'] = $this->Html->link($post['Post']['id'], 
            array('controller' => 'posts', 'action' => 'details', $post['Post']['id']));
    echo $this->Html->tableCells($d);
}

echo "</table>";