<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property $property
 */
?>
<h1>Property Search Results</h1>

<?= $this->Form->create(null, ['type' => 'get']) ?>
<?= $this->Form->control('bedrooms', ['label' => 'Min Bedrooms']) ?>
<?= $this->Form->control('bathrooms', ['label' => 'Min Bathrooms']) ?>
<?= $this->Form->control('price_min', ['label' => 'Min Price']) ?>
<?= $this->Form->control('price_max', ['label' => 'Max Price']) ?>
<?= $this->Form->button('Search') ?>
<?= $this->Form->end() ?>

<h2>Results</h2>
<?php if (!empty($properties)): //if propeties is not empty we gon iterate over each property and its properties?>
    <table>
        <tr>
            <th>Title</th>
            <th>Bedrooms</th>
            <th>Bathrooms</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <?php foreach ($properties as $property): ?>
        <tr>
            <td><?= h($property->title) ?></td>
            <td><?= h($property->bedrooms) ?></td>
            <td><?= h($property->bathrooms) ?></td>
            <td><?= h($property->price) ?></td>
            <td><?= h($property->description) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No properties found.</p>
<?php endif; ?>


