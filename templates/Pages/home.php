<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

//$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>

<div class="row">
    <div class="column">
        <h2>Auth Demo App</h2>
        <p>powered by TinyAuth plugin</p>

        <hr>

        <p>Account Management:</p>
        <ul>
            <li><?php echo $this->Html->link('Account', ['controller' => 'Account', 'action' => 'index']); ?></li>
            <li><?php echo $this->Html->link('Login', ['controller' => 'Account', 'action' => 'login']); ?></li>
            <li><?php echo $this->Html->link('Logout', ['controller' => 'Account', 'action' => 'logout']); ?></li>
        </ul>

        <p> Demo cases:</p>
        <ul>
            <li><?php echo $this->Html->link('Articles', ['controller' => 'Articles', 'action' => 'index']); ?></li>
            <li><?php echo $this->Html->link('Posts', ['controller' => 'Posts', 'action' => 'login']); ?></li>
        </ul>
    </div>
</div>
