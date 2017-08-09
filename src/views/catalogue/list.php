<table class="table table-bordered">
    <thead>
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
    </tr>
    </thead>
    <?php while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)): ?>

        <tr>
            <td><?= $row["titre"] ?></td>
            <td><?= $row["nom_complet"] ?></td>
        </tr>

    <?php endwhile; ?>


</table>

<table class="table table-bordered">
    <thead>
    <?php

    if (isset($catalogue[0])): ?>

    <?php $cols = array_keys($catalogue[0]); ?>
    <tr>
        <?php foreach ($cols as $colName): ?>
            <th><?= $colName ?></th>
        <?php endforeach; ?>

    </tr>
    <?php endif; ?>

    </thead>
    <!-- affichage des données -->

    <?php foreach($catalogue as $livre): ?>
        <tr>

            <?php foreach($livre as $colData): ?>

                <td><?= $colData ?></td>

            <?php endforeach; ?>
        </tr>

    <?php endforeach; ?>
</table>