<?php
include('inc/init.php');
include('tpl/header.php');
?>

<div class="container">
    <form action="action_animal_creer.php" method="POST">
        <div class="form-group">
            <label for="nom">Nom de l'animal</label>
            <input type="name" class="form-control" name="nom" id="nom">
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>

<?php
include('tpl/footer.php');
?>