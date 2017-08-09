<h1>
    Liste des livres par auteurs
</h1>

<table class="table table-bordered">

    <thead>

    <?php if (isset($bookList[0]));?>

    <tr>

        <?php foreach ($cols as $colName):?>
        <th><?= $colName ?></th>

        <?php endforeach; ?>
        <?php endif; ?>



    </tr>


    </thead>

</table>

<?php
