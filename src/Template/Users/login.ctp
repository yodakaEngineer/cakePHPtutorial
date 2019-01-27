<h1>ログイン</h1>
<div class="form large-9 medium-8 columns content">
<?= $this->Form->create() ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('ログイン') ?>
<?= $this->Form->end() ?>
</div>