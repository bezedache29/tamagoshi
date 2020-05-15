<?php
include('inc/init.php');
include('tpl/header.php');
?>

<div class="container">

    <?php foreach($_SESSION['messages'] as $message): ?>
        <div class="alert alert-info alert-dismissible fade show">
            <?= $message ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['messages']); ?>

    <h2>
        Nombre d'actions depuis le début du jour : <?= $_SESSION['nb_actions'] ?>
        <br><small>Il reste <?= NB_ACTIONS_PAR_JOUR - $_SESSION['nb_actions'] ?> action(s) avant la tombée de la  nuit</small>
    </h2>

    <a class="btn btn-outline-dark" href="animal_creer.php">
        Créer un animal (+<?= NB_ACTIONS_CREATION_ANIMAL ?>)
    </a>
    <a class="btn btn-outline-dark" href="action_recuperer_provision.php">
        Chercher des provisions (+<?= NB_ACTIONS_RECHERCHE_PROVISION ?>)
    </a>

    <h2 class="mt-4">Mes animaux</h2>

    <?php if(empty($_SESSION['animaux'])): ?>
        Vous n'avez aucun animal
    <?php else: ?>
        <div class="row">


            <?php foreach($_SESSION['animaux'] as $id => $animal): ?>
                <div class="col-md-4">
                    <div class="card my-2">
                        <div class="card-header">
                            <h5>
                                <?= $animal->getNom() ?> (<?= $animal->getAge() ?>)
                            </h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-4 text-right">
                                    Santé
                                </div>
                                <div class="col-8 py-1">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $animal->getSante() ?>%;"><?= $animal->getSante() ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-right">
                                    Humeur
                                </div>
                                <div class="col-8 py-1">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $animal->getHumeur() ?>%;"><?= $animal->getHumeur() ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-right">
                                    Faim
                                </div>
                                <div class="col-8 py-1">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $animal->getFaim() ?>%;"><?= $animal->getFaim() ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 text-right">
                                    Soif
                                </div>
                                <div class="col-8 py-1">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $animal->getSoif() ?>%;"><?= $animal->getSoif() ?></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="mt-4">
                                <?php if(count($_SESSION['provisions']) > 0): ?>
                                    <a href="action_animal_nourrir.php?id=<?= $id ?>" class="btn btn-sm btn-dark">Nourrir (+1)</a>
                                <?php endif; ?>
                                <a href="action_animal_soigner.php?id=<?= $id ?>" class="btn btn-sm btn-dark">Soigner (+<?= NB_ACTIONS_SOIGNER ?>)</a>
                                <a href="action_animal_caresser.php?id=<?= $id ?>" class="btn btn-sm btn-dark">Caresser (+<?= NB_ACTIONS_CARESSER ?>)</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    <?php endif; ?>

    <h2 class="mt-4">Mes provisions</h2>

    <?php if(empty($_SESSION['provisions'])): ?>
        Vous n'avez aucune provision
    <?php else: ?>
        <div class="row">
            <?php foreach($_SESSION['provisions'] as $provision): ?>
                <div class="col-md-3">
                    <div class="card my-2">
                        <div class="card-header">
                            <?= $provision->getNom() ?>
                        </div>
                        <div class="card-body">
                            Impact sur la faim : <?= $provision->getImpactFaim() ?><br>
                            Impact sur la soif : <?= $provision->getImpactSoif() ?><br>
                            Impact sur la santé : <?= $provision->getImpactSante() ?><br>
                            Impact sur l'humeur : <?= $provision->getImpactHumeur() ?><br>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    <?php endif; ?>

</div>

<?php
include('tpl/footer.php');
?>