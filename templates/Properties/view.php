<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property $property
 */
?>
<h1><?= h($property->title) ?></h1>

<p><strong>Bedrooms:</strong> <?= h($property->bedrooms) ?></p>
<p><strong>Bathrooms:</strong> <?= h($property->bathrooms) ?></p>
<p><strong>Price:</strong> <?= h($property->price) ?></p>
<p><strong>Description:</strong> <?= h($property->description) ?></p>

<?= $this->Html->link('Edit', ['action' => 'edit', $property->id]) ?>
<?= $this->Form->postLink(
    'Delete',
    ['action' => 'delete', $property->id],
    ['confirm' => 'Are you sure you want to delete # ' . $property->id]
) ?>