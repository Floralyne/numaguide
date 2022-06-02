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
                <label for="url">URL :</label>
                <input type="url" class="form-control" name='url' value="https://numaguide.fr/" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="subtitle">Sous-titre :</label>
                <input type="text" class="form-control" name="subtitle" required>
            </div>

            <div class="form-group pb-sm-2">
                 <label for="type">Type :</label>
                 <select class="form-control" id="type">
                      <option>------</option>
                      <option>Article</option>
                      <option>Communication</option>
                      <option>Ouvrage</option>
                      <option>Pré-publication</option>
                      <option>Rapport</option>
                      <option>Cours</option>
                 </select>
            </div>

            <div class="form-group pb-sm-2">
                 <label for="domain">Domaine :</label>
                 <select class="form-control" id="domain">
                      <option value="">--- Sciences de l'Homme et Société ---</option>
                      <option value="shs.anthro-bio">Athropologie biologique</option>
                      <option value="shs.anthro-se">Anthropologie sociale et ethnologie</option>
                      <option value="shs.archeo">Archéologie et Préhistoire</option>
                      <option value="shs.archi">Architecture, aménagement de l'espace</option>
                      <option value="shs.art">Art et histoire de l'art</option>
                      <option value="shs.class">Études classiques</option>
                      <option value="shs.demo">Démographie</option>
                      <option value="shs.droit">Droit</option>
                      <option value="shs.eco">Économies et finances</option>
                      <option value="shs.edu">Éducation</option>
                      <option value="shs.envir">Études de l'environnement</option>
                      <option value="shs.genre">Études sur le genre</option>
                      <option value="shs.geo">Géographie</option>
                      <option value="shs.gestion">Gestion et management</option>
                      <option value="shs.hisphilso">Histoire, Philosophie et Scociologie des sciences</option>
                      <option value="shs.hist">Histoire</option>
                      <option value="shs.info">Sciences de l'information et de la communication</option>
                      <option value="shs.langue">Linguistique</option>
                      <option value="shs.litt">Littératures</option>
                      <option value="shs.museo">Héritage culturel et muséologie</option>
                      <option value="shs.musiq">Musique, musicologie et arts de la scène</option>
                      <option value="shs.phil">Philosophie</option>
                      <option value="shs.psy">Psychologie</option>
                      <option value="shs.relig">Religions</option>
                      <option value="shs.scipo">Science politique</option>
                      <option value="shs.socio">Sociologie</option>
                      <option value="shs.stat">Méthodes et statsitiques</option>
                 </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="language">Langue du document : </label>
                <select class="form-control" id="language">
                    <option value="FR">Français</option>
                    <option value="EN">Anglais</option>
                    <option value="IT">Italien</option>
                    <option value="ES">Espagnol</option>
                    <option value="DE">Allemand</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="date">Date :</label>
                <input type="date" class="form-control" name="date" min="1970-01-01" max="2030-12-31">
            </div>

            <div class="form-group pb-sm-2">
                <label for="description">Description :</label>
                <textarea type="text" class="form-control" name="description" rows="3"></textarea>
            </div>

            <div class="form-group pb-sm-2">
                <label for="keyword">Mots clés :</label>
                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                <input type="text" class="form-control" name="keyword">
                </div>
            </div>

            <div class="form-group pb-sm-2">
                <label for="abstract">Résumé :</label>
                <textarea type="text" class="form-control" name="identifier" rows="5"></textarea>
            </div>

            <div class="form-group pb-sm-2">
                <label for="licence">Licence :</label>
                <input type="text" class="form-control" name="identifier">
            </div>



            <div class="form-group pb-sm-2">
                <label for="identifier">Identifiant auteur :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="writingDate">Date de début de production :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="edate">Date de publication électronique :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="reportType">Type de rapport :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="lectureType">Niveau du cours :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="conferenceTitle">Titre conférence :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="conferenceStartDate">Date conférence :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="publisherLink">URL du congrès ou de l'éditeur :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="popularLevel">Niveau de vulgarisation :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="peerReviewing">Comité de lecture  </label>
                <input type="checkbox" class="form-check-input" name="peerReviewing">
            </div>

            <div class="form-group pb-sm-2">
                <label for="audience">Audience :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="classification">Classification :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="collaboration">Collaboration :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="number">Label :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="volume">Volume :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="serie">Série :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="authorityInstitution">Institution :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="director">Nom directeur :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="funding">Financement :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="anrProject">Projets ANR :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="europeanProject">Projets européens :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="city">Ville :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="country">Pays :</label>
                <input type="text" class="form-control" name="identifier">
            </div>

            <div class="form-group pb-sm-2">
                <label for="seeAlso">Voir aussi :</label>
                <input type="text" class="form-control" name="identifier">
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
    
    echo "<div id=\"meta\"><xmp id=\"a-copier\">".$res= $dom->saveXML()."</xmp></div><div class=\"text-center\"><br><button id=\"btnCopier\" class=\"boutonForm boutonAction\" onclick=\"copierTexte()\">Copier le texte</button></div>";

}
?>


</div>
   
