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
    <?php
} else {
    echo "<table>";
    $names = array('PostId', 'Title', 'Body', 'Created', 'Modified');
    echo $this->Html->tableHeaders($names);

    foreach ($post as $details) {
        echo $this->Html->tableCells($details);
    }
    echo "</table>";
}
