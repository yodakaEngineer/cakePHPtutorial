<h1>This is Yodaka's Blog!!!</h1>

<div>
    <h3>Find Articles</h3>
    <?= $msg ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->input('title'); ?>
        <?= $this->Form->button('Submit') ?>
        <?= $this->Form->end() ?>
    </fieldset>
    <table>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>created</th>
            <th>modified</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= h($article->id) ?></td>
            <td><?= h($article->title) ?></td>
            <td><?= h($article->created) ?></td>
            <td><?= h($article->modified) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>