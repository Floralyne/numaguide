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

            <div class="form-group pb-sm-2">
                <label for="subtitle">Sous-titre :</label>
                <input type="text" class="form-control" name="subtitle" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="identifier">Identifant :</label>
                <input type="text" class="form-control" name="identifier" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="">Identifant :</label>
                <input type="text" class="form-control" name="identifier" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="identifier">Identifant :</label>
                <input type="text" class="form-control" name="identifier" required>
            </div>

    

            <input type=submit name="ok" value="Envoyer">
        </form>

<?php

//variables    
    $d_titre = "";
    $d_auteur = "";
    $d_url = "";
    $d_subtitle ="";
    $d_identifier= "";
    $d_abstract = "";
    $d_keyword = "";
    $d_language = "";
    $d_writingDate = "";
    $d_Licence = "";
    $d_classification = "";
    $d_comment = "";
    $d_collaboration = "";
    $d_seeAlso = "";
    $d_anrProject = "";
    $d_europeanProject = "";
    $d_funding = "";
    $d_popularLevel = "";
    $d_type = "";
    $d_domain = "";

    if(isset($_POST['ok'])){
        $d_titre = $_POST['title'];
        $d_auteur = $_POST['author'];
        $d_url = $_POST['url'];
        $d_subtitle = $_POST['subtitle'];
        $d_identifier = $_POST['identifier'];
}

//creation du DOMDocument
$dom = new DOMDocument('1.0', 'utf-8'); 
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

$titre = $dom->createElement('title',$d_titre);
$auteur = $dom->createElement('author', $d_auteur);
$lien = $dom->createElement('URL', $d_url);

$subtitle = $dom->createElement('subtitle', $d_subtitle);
$abstract = $dom->createElement('abstract', $d_abstract);
$keyword = $dom->createElement('keyword', $d_keyword);
$identifier = $dom->createElement('identifier', $d_identifier);
$language = $dom->createElement('language', $d_language);
$writingDate = $dom->createElement('writingDate', $d_writingDate);
$Licence = $dom->createElement('Licence', $d_Licence);
$classification = $dom->createElement('classification', $d_classification);
$comment = $dom->createElement('comment', $d_comment);
$collaboration = $dom->createElement('collaboration', $d_collaboration);
$seeAlso = $dom->createElement('seeAlso', $d_seeAlso);
$anrProject = $dom->createElement('anrProject', $d_anrProject);
$europeanProject = $dom->createElement('europeanProject', $d_europeanProject);
$funding = $dom->createElement('funding', $d_funding);
$popularLevel = $dom->createElement('niveaudevulgatisation', $d_popularLevel);

$type = $dom->createElement('type', $d_type);
$domain = $dom->createElement('domain', $d_domain);


//creation attributs des balises 
$id_type = $dom->createAttribute('type');
$id_type->value = 'DOI';


//ajout de l'attribut
$identifier->appendChild($id_type);


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
$facultatif->appendChild($identifier); 
$facultatif->appendChild($language);
$facultatif->appendChild($writingDate);
$facultatif->appendChild($Licence);
$facultatif->appendChild($classification);
$facultatif->appendChild($comment);
$facultatif->appendChild($collaboration);
$facultatif->appendChild($seeAlso);
$facultatif->appendChild($anrProject);
$facultatif->appendChild($europeanProject);
$facultatif->appendChild($funding);
$facultatif->appendChild($popularLevel);

$choix->appendChild($type);
$choix->appendChild($domain);

//affichage des métadonnées avec balises xml apparentes et indentées
if(isset($_POST['ok'])){
    
    echo "<div id=\"meta\"><xmp id=\"a-copier\">".$res= $dom->saveXML()."</xmp></div><div class=\"text-center\"><button class=\"button-52\" onclick=\"copierTexte()\">Copier le texte</button></div>";

}
?>


</div>
   
