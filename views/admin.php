<?php $title = "Admin | SmartLab"?>
<?php ob_start(); ?>

<section class="accueil">
<h1>Page administrateur</h1>
    <div class="links">  
        <a class="inscription" href="admin/register"> <!-- Code le bloc Nouveau Compte -->
            <span class="material-symbols-outlined">person_add</span> <!-- Icône -->
            <div class="link-title">Nouveau compte</div> <!-- Titre -->
            <div class="description">Créer ou modifier un compte d'accès pour les utilisateurs</div> <!-- Description -->
        </a>
        <a class="actions" href="statistics"> <!-- Code le bloc Statistiques -->
            <span class="material-symbols-outlined">query_stats</span>
            <div class="link-title">Statistiques</div>
            <div class="description">Vue d'ensemble des opérations des utilisateurs</div>
        </a>
        <a class="dossiers" href="index"> <!-- Code le bloc Suivi des Actions -->
            <span class="material-symbols-outlined">summarize</span>
            <div class="link-title">Suivi des actions</div>
            <div class="description">Accès aux dossiers patients</div>
        </a>
        <a class="monitoring" href="monitoring"> <!-- Code le monitoring -->
            <span class="material-symbols-outlined">monitoring</span>
            <div class="link-title">Monitoring</div>
            <div class="description">Etat de la connexion au logiciel Sillage</div>
        </a>
    </div>
</section>



<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>
