<div class="container">
        <h2 class="pb-sm-4">Renseignement des métadonnées</h2>

        <form name="form" action="" method="post">
            <div class="form-group pb-sm-2">
                <label for="title">Titre :</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="author">Auteur(s) :</label>
                <input type="text" class="form-control" name="author" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="url">URL</label>
                <input type="url" class="form-control" name='url' value="https://numaguide.fr/" required>
            </div>
            <input type=submit name="ok" value="Envoyer">
        </form>

<?php
        if(isset($_POST['ok'])){
    $donnee_titre = $_POST['title'];
    $donnee_auteur = $_POST['author'];
    $donnee_url = $_POST['url'];

}
?>

<?php

$dom = new DOMDocument('1.0', 'utf-8'); 
$dom->validateOnParse = true;
$dom->load('test.xml');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;

//creation des principaux elements, sans valeurs
$all = $dom->createElement('metadonnees');
$donnees = $dom->createElement('donneesObligatoires');
$fichier = $dom->createElement('notes');
$facultatif = $dom->createElement('donneesFacultatives');
$choix = $dom->createElement('publication');


//creation des elements avec valeurs
$desc = $dom->createElement('description','fichier de métadonnees');
$licence = $dom->createElement('licence', 'type de licence');

$titre = $dom->createElement('title',$donnee_titre);
$auteur = $dom->createElement('author', $donnee_auteur);
$lien = $dom->createElement('URL', $donnee_url);


//creation de la structure xml
$dom->appendChild($all);
$all->appendChild($fichier);
$all->appendChild($donnees);
$all->appendChild($facultatif);
$all->appendChild($choix);

$fichier->appendChild($desc);
$fichier->appendChild($licence);

$donnees->appendChild($titre);
$donnees->appendChild($lien);
$donnees->appendChild($auteur);

$facultatif->appendChild($subtitle);
$facultatif->appendChild($abstract);
$facultatif->appendChild($keyword);
$facultatif->appendChild($identifier); // attribut type  DOI
$facultatif->appendChild($language);
$facultatif->appendChild($writingDate);
$facultatif->appendChild($Licence);
$facultatif->appendChild($classification );
$facultatif->appendChild($comment);
$facultatif->appendChild($collaboration);
$facultatif->appendChild($seeAlso);
$facultatif->appendChild($anrProject);
$facultatif->appendChild($europeanProject);
$facultatif->appendChild($funding);

$choix->appendChild($type);
$choix->appendChild($domain);



//affichage des métadonnées avec balises xml apparentes
if(isset($_POST['ok'])){
    echo "<xmp>".$res= $dom->saveXML()."</xmp>";
    
}
?>


</div>
   
