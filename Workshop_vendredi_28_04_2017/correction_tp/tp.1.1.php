<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 1.1</title>
        <style media="screen">
            * { font-family: arial, sans-serif;}
            h1 { background-color: MediumSlateBlue; color: white; padding: 10px;}
            label { display: inline-block; font-style: italic; color: MediumSlateBlue; width: 140px;}
            input, select, textarea { width: calc(100% - 160px);}
            textarea {resize: none;}
            .bouton { width: inherit;}
            fieldset { width: 500px; margin: 0 auto;}
            .information span, .information p { display: inline-block;}
            .information p { margin: 0 10px; color: MediumSlateBlue;}
            .information span { color: darkred;}
            .information { width: 500px; margin: 0 auto; text-align: left;}
        </style>
    </head>
    <body>
        <h1>Affichage des saisies du formulaire</h1>
        <?php
            if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['cp']) && isset($_POST['sexe']) && isset($_POST['description']))
            {
                extract($_POST);
                echo '<div class="information">';
                echo '<span>Nom : </span><p>' . $nom . '</p><br />';
                echo '<span>Prénom : </span><p>' . $prenom . '</p><br />';
                echo '<span>Adresse : </span><p><i>' . $adresse . ' - ' . $cp . ' - ' . $ville . '</i></p><br />';
                echo '<span>Sexe : </span><p>' . $sexe . '</p><br />';
                echo '<span>Description : </span><p>' . $description . '</p><br />';
                echo '</div>';
            }
        ?>
        <hr>
        <form class="" action="" method="post">
            <fieldset>
            <legend>Formulaire</legend>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value=""><br />

                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" value=""><br />

                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" value=""><br />

                <label for="ville">Ville</label>
                <input type="text" name="ville" value=""><br />

                <label for="cp">Code postal</label>
                <input type="text" name="cp" value=""><br />

                <label for="sexe">Sexe</label>
                <select class="" name="sexe">
                    <option value="h">Homme</option>
                    <option value="f">Femme</option>
                </select><br />

                <label for="description">Description</label>
                <textarea name="description"></textarea><br />

                <input type="submit" name="envoi" value="Envoi"><br />
            </fieldset>
        </form>
    </body>
</html>
