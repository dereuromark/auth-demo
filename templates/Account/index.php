<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="articles index content">
    <h2><?= __('Account') ?></h2>

    <h3>You are logged in :)</h3>

    <p>Name: </p>
    <p>Role: </p>


    <hr>

    <?php echo $this->Html->link('Logout', ['action' => 'logout']); ?>

</div>
