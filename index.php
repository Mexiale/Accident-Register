<?php
require 'users/users.php';
$users = getUsers();
include 'partials/header.php';
?>


<div class="container">
    <p>
        <a class="btn btn-success" href="/accident/create.php">Enregistrer un accident</a>
        <a class="btn btn-success" href="/chart/index.php">Voir le graphe des accidents</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th>Lieu de Accident</th>
            <th>Date et heure</th>
            <th>Mise en Cause</th>
            <th>Nombre de Victime</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['lieu'] ?></td>
                <td><?php echo date('d-m-Y',strtotime($user['date'])) ?></td>
                <td><?php echo $user['mise_en_cause'] ?></td>
                <td><?php echo $user['nb_victime'] ?></td>
                <td>
                    <!-- <a href="view.php?id=php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a> -->
                    <a href="update.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Mettre à jour</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>

