<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="book-form">
    <h1>modifier les détails du livre</h1>
    <form action="update" method="post">
    <input type="hidden" name="livre_id" value="<?php echo $livres[0]['livre_id'];?>">
            <label>Titre : <br>
                <input type="text" name="titre" value="<?php echo $livres[0]['titre'];?>"><br>
            </label>
            <label>Description :<br>
                <textarea name="description" cols="30" rows="10"><?php echo $livres[0]['description']; ?></textarea><br>
            </label>
            <label>Nombre de pages : <br>
                <input type="text" name="nombre_pages" value="<?php echo $livres[0]['nombre_pages'];?>"><br>
            </label>
            <label>Prix :<br>
                <input type="number" step="0.01" name="prix" value="<?php echo $livres[0]['prix'];?>"><br>
            </label>
            <label>Auteur(e) :</label>
                <select name="auteur_id">
                    <?php foreach($auteurs as $auteur){?>
                        <option value="<?php echo $auteur['auteur_id']; ?>"
                        <?php if($livres[0]['auteur_id'] == $auteur['auteur_id']){
                            echo "selected";
                        } ?>><?php echo $auteur['nom_auteur']; ?></option>
                    <?php }?>
                </select><br>
            <label>Éditeur :</label>
                <select name="editeur_id">
                    <?php foreach($editeurs as $editeur){?>
                        <option value="<?php echo $editeur['editeur_id']; ?>"
                        <?php if($livres[0]['editeur_id'] == $editeur['editeur_id']){
                            echo "selected";
                        } ?>><?php echo $editeur['nom_editeur']; ?></option>
                    <?php }?>
                </select><br>
            <label>Catégorie :</label>
                <select name="categorie_id">
                    <?php foreach($categories as $categorie){?>
                        <option value="<?php echo $categorie['categorie_id']; ?>"
                        <?php if($livres[0]['categorie_id'] == $categorie['categorie_id']){
                            echo "selected";
                        } ?>><?php echo $categorie['nom_categorie']; ?></option>
                    <?php }?>
                </select><br>
            <input type="submit" value="Modifier">
    </form>
    </div>
</body>
</html>