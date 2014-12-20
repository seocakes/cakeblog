<?php
echo "<table>";
$names = array('PostId','Title','Body','Created','Modified');
echo $this->Html->tableHeaders($names);

foreach ($posts as $post) {
    echo $this->Html->tableCells($post['Post']);
}

echo "</table>";