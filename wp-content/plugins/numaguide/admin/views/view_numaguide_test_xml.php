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
                    <option value="" selected="selected"></option>
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
                <input type="text" class="form-control" name="keyword">
            </div>

            <div class="form-group pb-sm-2">
                <label for="abstract">Résumé :</label>
                <textarea type="text" class="form-control" name="abstract" rows="5"></textarea>
            </div>

            <div class="form-group pb-sm-2">
                <label for="licence">Licence :</label>
                <select class="form-control" id="licence">
                <option value="" selected="selected"></option>
                <option value="http://creativecommons.org/licenses/by/">CC BY - Paternité</option>
                <option value="http://creativecommons.org/licenses/by-nc/">CC BY NC - Paternité - Pas d'utilisation commerciale</option>
                <option value="http://creativecommons.org/licenses/by-nd/">CC BY ND - Paternité - Pas de modifications</option>
                <option value="http://creativecommons.org/licenses/by-sa/">CC BY SA - Paternité - Partage selon les Conditions Initiales</option>
                <option value="http://creativecommons.org/licenses/by-nc-nd/">CC BY NC ND - Paternité - Pas d'utilisation commerciale - Pas de modification</option>
                <option value="http://creativecommons.org/licenses/by-nc-sa/">CC BY NC SA - Paternité - Pas d'utilisation commerciale - Partage selon les Conditions Initiales</option>
                <option value="http://creativecommons.org/choose/mark/">NC - Marque du Domaine Public</option>
                <option value="http://creativecommons.org/publicdomain/zero/1.0/">CC0 - Transfert dans le Domaine Public</option>
                <option value="http://hal.archives-ouvertes.fr/licences/etalab/">ETALAB - Licence Ouverte</option>
                <option value="http://hal.archives-ouvertes.fr/licences/copyright/">Copyright (Tous droits réservés)</option>
                <option value="http://hal.archives-ouvertes.fr/licences/publicDomain/">Domaine public</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="doi">DOI :</label>
                <input type="text" class="form-control" name="doi">
            </div>

            <div class="form-group pb-sm-2">
                <label for="identifier">Identifiant HAL :</label>
                <input type="text" class="form-control" name="idHal">
            </div>

            <div class="form-group pb-sm-2">
                <label for="writingDate">Date de début de production :</label>
                <input type="date" class="form-control" name="date" min="1970-01-01" max="2030-12-31">
            </div>

            <div class="form-group pb-sm-2">
                <label for="edate">Date de publication électronique :</label>
                <input type="date" class="form-control" name="date" min="1970-01-01" max="2030-12-31">
            </div>

            <div class="form-group pb-sm-2">
                <label for="reportType">Type de rapport :</label>
                <select class="form-control" name="reportType">
                <option value="" selected="selected"></option>
                <option value="6">Rapport de recherche</option>
                <option value="4">Rapport Technique</option>
                <option value="2">Contrat</option>
                <option value="3">Interne</option>
                <option value="0">Autre</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="lectureType">Niveau du cours :</label>
                <select name="lectureType" class="form-control">
                    <option value="" selected="selected"></option>
                    <option value="1">DEA</option>
                    <option value="2">École thématique</option>
                    <option value="7">3ème cycle</option>
                    <option value="10">École d'ingénieur</option>
                    <option value="11">Licence</option>
                    <option value="12">Master</option>
                    <option value="13" selected="selected">Doctorat</option>
                    <option value="14">DEUG</option>
                    <option value="15">Maitrise</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="conferenceTitle">Titre conférence :</label>
                <input type="text" class="form-control" name="conferenceTitle">
            </div>

            <div class="form-group pb-sm-2">
                <label for="conferenceStartDate">Date conférence :</label>
                <input type="date" class="form-control" name="conferenceStartDate" min="1970-01-01" max="2030-12-31">
            </div>

            <div class="form-group pb-sm-2">
                <label for="publisherLink">URL du congrès ou de l'éditeur :</label>
                <input type="text" class="form-control" name="publisherLink">
            </div>

            <div class="form-group pb-sm-2">
                <label for="popularLevel">Vulgarisation :</label>
                <select name="popularLevel" class="form-control">
                    <option value="" selected="selected"></option>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="peerReviewing">Comité de lecture :</label>
                <select class="form-control" name="peerReviewing">
                    <option value="" selected="selected"></option>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="audience">Audience :</label>
                <select class="form-control" name="audience">
                    <option value="" selected="selected"></option>
                    <option value="2">Internationale</option>
                    <option value="3">Nationale</option>
                    <option value="1">Non spécifiée</option>
                </select>    
            </div>

            <div class="form-group pb-sm-2">
                <label for="classification">Classification :</label>
                <input type="text" class="form-control" name="classification">
            </div>

            <div class="form-group pb-sm-2">
                <label for="collaboration">Collaboration :</label>
                <input type="text" class="form-control" name="collaboration">
            </div>

            <div class="form-group pb-sm-2">
                <label for="Volumenumber">Numéro du Volume
                     :</label>
                <input type="text" class="form-control" name="Volumenumber">
            </div>

            <div class="form-group pb-sm-2">
                <label for="revue">Nom de la revue :</label>
                <input type="text" class="form-control" name="revue">
            </div>

            <div class="form-group pb-sm-2">
                <label for="Revuenumber">Numéro de la revue:</label>
                <input type="text" class="form-control" name="number">
            </div>

            <div class="form-group pb-sm-2">
                <label for="volume">Volume :</label>
                <input type="text" class="form-control" name="volume">
            </div>

            <div class="form-group pb-sm-2">
                <label for="serie">Série :</label>
                <input type="text" class="form-control" name="serie">
            </div>

            <div class="form-group pb-sm-2">
                <label for="authorityInstitution">Institution :</label>
                <input type="text" class="form-control" name="authorityInstitution">
            </div>

            <div class="form-group pb-sm-2">
                <label for="director">Nom directeur :</label>
                <input type="text" class="form-control" name="director">
            </div>

            <div class="form-group pb-sm-2">
                <label for="funding">Financement :</label>
                <input type="text" class="form-control" name="funding">
            </div>

            <div class="form-group pb-sm-2">
                <label for="anrProject">Projets ANR :</label>
                <input type="text" class="form-control" name="anrProject">
            </div>

            <div class="form-group pb-sm-2">
                <label for="europeanProject">Projets européens :</label>
                <input type="text" class="form-control" name="europeanProject">
            </div>

            <div class="form-group pb-sm-2">
                <label for="city">Ville :</label>
                <input type="text" class="form-control" name="city">
            </div>

            <div class="form-group pb-sm-2">
                <label for="country">Pays :</label>
                <select class="form-control" name="country">
                    <option value="de">Allemagne</option>
                    <option value="be">Belgique</option>
                    <option value="ca">Canada</option>
                    <option value="es">Espagne</option>
                    <option value="us">États Unis</option>
                    <option value="fr" selected="selected">France</option>
                    <option value="ie">Ireland</option>
                    <option value="it">Italy</option>
                    <option value="gb">Royaume-Uni</option>
                </select>   
            </div>

            <div class="form-group pb-sm-2">
                <label for="seeAlso">Voir aussi :</label>
                <input type="text" class="form-control" name="seeAlso">
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
   
