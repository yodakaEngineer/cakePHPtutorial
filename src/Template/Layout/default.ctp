<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="">hoge</a></li>
                <li><a target="_blank" href="">sample</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Menu') ?></li>
            <ul class="side-nav">
                <?php if (isset($user)) {?>
                    <li><?= $this->Html->link(__('新規投稿'), ['controller' => 'Articles','action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('記事一覧'), ['controller' => 'Articles','action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('ユーザーリスト'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('新規タグ作成'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('タグリスト'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('ログアウト'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
                <?php }else{ ?>
                    <li><?= $this->Html->link(__('新規登録'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('ログイン'), ['controller' => 'Users', 'action' => 'login']) ?></li>
                <?php } ?>
            </ul>
        </ul>
    </nav>
    <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
