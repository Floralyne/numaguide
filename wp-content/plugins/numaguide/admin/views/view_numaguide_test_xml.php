<div class="container">
        <h2 class="pb-sm-4">Renseignement des métadonnées</h2>

        <form name="form" action="" method="post">
        <div class="titreForm">Informations du guide</div>
    <hr>


    <div class="soustitreForm">Métadonnnées</div>
    <hr>

    <form name="form" action="" method="post" enctype="multipart/form-data" >
        <div class="obligatoire">* champs obligatoires</div>
        <div class="form-group pb-sm">
            <label for="titreGuide">Titre du guide* :</label>
            <input type="text" class="form-control" id="titreGuide" name="titreGuide" maxlength="40"/>
        </div>

            <div class="form-group pb-sm">
                <label for="auteurGuide">Auteur(e)(s) du guide* :</label>
                <input type="auteur" class="form-control" id="auteurGuide" name="auteurGuide" required>
            </div>

            <hr>

            <div class="form-group pb-sm">
                <label for="urlGuide">Lien du guide :</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            http://numaguide.msh-vdl.fr/
                        </div>
                    </div>
                    <input class="form-control" type="text" pattern="/\W|_/g" maxlength="20" name="urlGuide"
                        placeholder="Adresse du guide">
                </div>
            </div>
        <hr>

    
            <summary>Métadonnées facultatives</summary>
            <div class="mt-3 mb-3 p-3 text-justify" id="infoMeta">Pour chaque type de publication, un chiffre est associé aux métadonnées nécessaires à un dépôt sur HAL. Les métadonnées obligatoires communes à tous types de publications. Les métadonnées nécessaires à la publication d'<span class="type">articles</span> sont marqués d'un <span class="typeArticle">(1)</span>, celles pour les <span class="type">communications</span> d'un <span class="typeCommu">(2)</span>, pour les <span class="type">pré-publications</span> d'un <span class="typePrePub">(3)</span>, pour les <span class="type">rapports</span> d'un <span class="typeRapport">(4)</span>.</div>
            <div class="form-group pb-sm-2">
            <div class="mb-2" id="metaObli">Les métadonnées suivantes sont obligatoires pour <span class="type">tout type de publication</span> sur HAL :</div>    
                <label for="type">Type :</label>
                <select class="form-control" name="type">
                    <option value="" selected="selected"></option>
                    <option value="ART" >Article</option>
                    <option value="COMM" >Communication de congrès</option>
                    <option value="POSTER" >Communication</option>
                    <option value="OTHER" >Autre publication</option>
                    <option value="UNDEFINED">Pré-publication Document de travail</option>
                    <option value="REPORT">Rapport</option>
                </select>
                <small class="text-muted">
                Le type correspond au type de publication sur HAL.
                </small>
            </div>

                <div class="form-group">
                    <label for="domaine">Domaine :</label>
                    <select class="form-control" name="domaine">
                        <option value="shs">--- Sciences de l'Homme et Société ---</option>
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
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="langage">Langue du document :</label>
                    <select class="form-control" name="langage">
                        <option value="FR">Français</option>
                        <option value="EN">Anglais</option>
                        <option value="IT">Italien</option>
                        <option value="ES">Espagnol</option>
                        <option value="DE">Allemand</option>
                    </select>
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                        <label for="institution">Institution :</label>
                        <input type="text" class="form-control" name="institution">
                        <small class="text-muted">
                </small>
                    </div>

                    <div class="form-group pb-sm-2">
                    <label for="DatedePublication">Date de publication:</label>
                    <input type="date" class="form-control" name="DatedePublication" min="1970-01-01" max="2030-12-31">
                    <small class="text-muted">
                </small>
                </div>
<hr>
<div class="mb-3" id="metaObli">Les métadonnées supplémentaires suivantes sont obligatoires pour un <span class="type">article</span> sur HAL :</div>    
            
                <div class="form-group pb-sm-2">
                    <label for="Nomdelarevue">Nom de la revue :</label>
                    <input type="text" class="form-control" name="Nomdelarevue">
                    <small class="text-muted">
                </small>
                </div>
<hr>
<div class="mb-3 text-justify" id="metaObli">Les métadonnées supplémentaires suivantes sont obligatoires pour une <span class="type">communication</span> et une <span class="type">communication de congrès</span> sur HAL :</div>    

                <div class="form-group pb-sm-2">
                        <label for="TitreduCongres">Titre du congrès :</label>
                        <input type="text" class="form-control" name="TitreduCongres">
                        <small class="text-muted">
                </small>
                    </div>

                    <div class="form-group pb-sm-2">
                        <label for="Datedebutducongres">Date de début du congrès :</label>
                        <input type="date" class="form-control" name="Datedebutducongres" min="1970-01-01" max="2030-12-31">
                        <small class="text-muted">
                </small>
                    </div>

                    <div class="form-group pb-sm-2">
                    <label for="ville">Ville :</label>
                    <input type="text" class="form-control" name="ville">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="pays">Pays :</label>
                    <select class="form-control" name="pays">
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
                    <small class="text-muted">
                </small> 
                </div>

<hr>

<div class="mb-3 text-justify" id="metaObli">Les métadonnées supplémentaires suivantes sont obligatoires pour un <span class="type">type autre</span> de publication sur HAL :</div>    

                <div class="form-group pb-sm-2">
                    <label for="description">Description :</label>
                    <textarea type="text" class="form-control" name="description" rows="3"></textarea>
                    <small class="text-muted">
                </small>
                </div>
<hr>
<div class="mb-3 text-justify" id="metaObli">Les métadonnées supplémentaires suivantes sont obligatoires pour un <span class="type">rapport</span> sur HAL :</div>    

                <div class="form-group pb-sm-2">
                    <label for="typerapport">Type de rapport :</label>
                    <select class="form-control" name="typerapport">
                    <option value="" selected="selected"></option>
                    <option value="6">Rapport de recherche</option>
                    <option value="4">Rapport Technique</option>
                    <option value="2">Contrat</option>
                    <option value="3">Interne</option>
                    <option value="0">Autre</option>
                    </select>
                    <small class="text-muted">
                </small>
                </div>
<hr>

<div class="mb-3 text-justify" id="metaObli">Les métadonnées supplémentaires suivantes sont facultatives pour <span class="type">tout dépôt</span> sur HAL :</div>    


                <div class="form-group mt-1">
                    <label for="Soustitre">Sous-titre :</label>
                    <input type="text" class="form-control" name="Soustitre">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                        <label for="resume">Résumé :</label>
                        <textarea type="text" class="form-control" name="resume" rows="5"></textarea>
                        <small class="text-muted">
                </small>
                    </div>

                <div class="form-group pb-sm-2">
                    <label for="motscles">Mots clés :</label>
                    <input type="text" class="form-control" name="motscles">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="DOIpublication">DOI de la publication :</label>
                    <input type="text" class="form-control" name="DOIpublication">
                    <small class="text-muted">
                </small>
                </div>

                

                <div class="form-group pb-sm-2">
                    <label for="Donneesassociees">Données associées :</label>
                    <input type="text" class="form-control" name="Donneesassociees">
                    <small class="text-muted">
                </small>
                </div>


                <div class="form-group pb-sm-2">
                    <label for="Datedeproduction">Date de production :</label>
                    <input type="date" class="form-control" name="Datedeproduction" min="1970-01-01" max="2030-12-31">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="licence">Licence :</label>
                <select class="form-control" name="licence">
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
                <small class="text-muted">
                </small>
                </div>
                
                <div class="form-group pb-sm-2">
                    <label for="source">Source :</label>
                    <input type="text" class="form-control" name="source">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="vulgarisation">Vulgarisation :</label>
                <select name="vulgarisation" class="form-control">
                    <option value="" selected="selected"></option>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="comitelecture">Comité de lecture :</label>
                <select class="form-control" name="comitelecture">
                    <option value="" selected="selected"></option>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="invite">Invité :</label>
                <select class="form-control" name="invite">
                    <option value="" selected="selected"></option>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="audience">Audience :</label>
                <select class="form-control" name="audience">
                    <option value="" selected="selected"></option>
                    <option value="2">Internationale</option>
                    <option value="3">Nationale</option>
                    <option value="1">Non spécifiée</option>
                </select>    
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="actes">Actes :</label>
                <select class="form-control" name="actes">
                    <option value="" selected="selected"></option>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="Aparaitre">Á paraitre :</label>
                <select class="form-control" name="Aparaitre">
                    <option value="" selected="selected"></option>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="edate">Date de publication électronique :</label>
                <input type="date" class="form-control" name="edate" min="1970-01-01" max="2030-12-31">
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="Titrevolume">Titre du volume :</label>
                <input type="text" class="form-control" name="Titrevolume">
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="volume">Volume :</label>
                <input type="text" class="form-control" name="volume">
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="numero">Numéro :</label>
                <input type="text" class="form-control" name="numero">
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="Numerorapport">N°rapport :</label>
                <input type="text" class="form-control" name="Numerorapport">
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="PageID">Page Indentifiant :</label>
                <input type="text" class="form-control" name="PageID">
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="Editeurcommercial">Editeur commercial :</label>
                    <input type="text" class="form-control" name="Editeurcommercial">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="Directeurcollection">Directeur de collection :</label>
                    <input type="text" class="form-control" name="Directeurcollection">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="Editeurscientifique">Editeur scientifique :</label>
                    <input type="text" class="form-control" name="Editeurscientifique">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="Organisateurcongres">Organisateur du congrès :</label>
                    <input type="text" class="form-control" name="Organisateurcongres">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="Urlediteur">URL du congrès ou de l'éditeur :</label>
                    <input type="text" class="form-control" name="Urlediteur">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                        <label for="classification">Classification :</label>
                        <textarea type="text" class="form-control" name="classification" rows="3"></textarea>
                        <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                        <label for="commentaire">Commentaire :</label>
                        <textarea type="text" class="form-control" name="commentaire" rows="5"></textarea>
                        <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="Referenceinterne">Reference interne :</label>
                <input type="text" class="form-control" name="Referenceinterne">
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="Collaborationprojet">Collaboration / Projet :</label>
                    <input type="text" class="form-control" name="Collaborationprojet">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="Voiraussi">Voir aussi :</label>
                    <input type="text" class="form-control" name="Voiraussi">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="Projetanr">Projet ANR :</label>
                    <input type="text" class="form-control" name="Projetanr">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="Projeteuropeen">Projet européen :</label>
                    <input type="text" class="form-control" name="Projeteuropeen">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                        <label for="financement">Financement :</label>
                        <textarea type="text" class="form-control" name="financement" rows="3"></textarea>
                        <small class="text-muted">
                </small>
                </div>
    

            <input type=submit name="ok" value="Envoyer">
        </form>

<?php

//variables    
$d_titre = "";
$d_auteur = "";
$d_url = "";
$d_type = "";
$d_domaine = "";
$d_langue = "";
$d_institution =  "";
$d_datepublication = "";
$d_nomrevue = "";
$d_titrecongres = ""; 
$d_datedebutcongres = ""; 
$d_ville = "";
$d_pays = "";
$d_description = ""; 
$d_typerapport = "";
$d_soustitre = "";
$d_resume = "";
$d_motscles = "";
$d_doipublication = ""; 
$d_donneesassociees = "";
$d_dateproduction = "";
$d_licence = "";
$d_source = "";
$d_vulgarisation = ""; 
$d_comitedelecture = "";
$d_invite = "";
$d_audience = "";
$d_actes = "";
$d_aparaitre = ""; 
$d_datepublicationelec = ""; 
$d_titrevolume = "";
$d_volume = "";
$d_numero = "";
$d_nrapport = "";
$d_pageid = "";
$d_editeurcommercial = ""; 
$d_directeurcollection = "";
$d_editeurscientifique = "";
$d_organisateurducongres = "";
$d_urlcediteur = "";
$d_classification = "";
$d_commentaire = "";
$d_referenceinterne = ""; 
$d_collabprojet = "";
$d_voiraussi = "";
$d_projetanr = "";
$d_projeteurop = "";
$d_financement = "";

    if(isset($_POST['ok'])){
        $d_titre = $_POST['titreGuide'];
        $d_auteur == $_POST['auteurGuide'];
        $d_url = $_POST['urlGuide'];
        $d_type = $_POST['type'];
        $d_domaine = $_POST['domaine'];
        $d_langue = $_POST['langage'];
        $d_institution = $_POST['institution'];
        $d_datepublication = $_POST['DatedePublication'];
        $d_nomrevue = $_POST['Nomdelarevue'];
        $d_titrecongres = $_POST['TitreduCongres'];
        $d_datedebutcongres = $_POST['Datedebutducongres'];
        $d_ville = $_POST['ville'];
        $d_pays = $_POST['pays'];
        $d_description = $_POST['description'];
        $d_typerapport = $_POST['typerapport'];
        $d_soustitre = $_POST['Soustitre'];
        $d_resume = $_POST['resume'];
        $d_motscles = $_POST['motscles'];
        $d_doipublication = $_POST['DOIpublication'];
        $d_donneesassociees = $_POST['Donneesassociees'];
        $d_dateproduction = $_POST['Datedeproduction'];
        $d_licence = $_POST['licence'];
        $d_source = $_POST['source'];
        $d_vulgarisation = $_POST['vulgarisation'];
        $d_comitedelecture = $_POST['comitelecture'];
        $d_invite = $_POST['invite'];
        $d_audience = $_POST['audience'];
        $d_actes = $_POST['actes'];
        $d_aparaitre = $_POST['Aparaitre'];
        $d_datepublicationelec = $_POST['edate'];
        $d_titrevolume = $_POST['Titrevolume'];
        $d_volume = $_POST['volume'];
        $d_numero = $_POST['numero'];
        $d_nrapport = $_POST['Numerorapport'];
        $d_pageid = $_POST['PageID'];
        $d_editeurcommercial = $_POST['Editeurcommercial'];
        $d_directeurcollection = $_POST['Directeurcollection'];
        $d_editeurscientifique = $_POST['Editeurscientifique'];
        $d_organisateurducongres = $_POST['Organisateurcongres'];
        $d_urlcediteur = $_POST['Urlediteur'];
        $d_classification = $_POST['classification'];
        $d_commentaire = $_POST['commentaire'];
        $d_referenceinterne = $_POST['Referenceinterne'];
        $d_collabprojet = $_POST['Collaborationprojet'];
        $d_voiraussi = $_POST['Voiraussi'];
        $d_projetanr = $_POST['Projetanr'];
        $d_projeteurop = $_POST['Projeteuropeen'];
        $d_financement = $_POST['financement'];

}

//creation du DOMDocument
$dom = new DOMDocument('1.0', 'utf-8'); 
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;


//creation des principaux elements, sans valeurs
$all = $dom->createElement('all');
$HAL = $dom->createElement('HAL');
$informations = $dom->createElement('informations');
$file = $dom->createElement('file');
$meta = $dom->createElement('meta');
$auhtor = $dom->createElement('author');
$required = $dom->createElement('required');
$optional = $dom->createElement('optional');
$author = $dom->createElement('author');
$authorvalidity = $dom->createElement('authorvalidity');
$authors = $dom->createElement('authors');

//creation des elements avec valeurs
$desc = $dom->createElement('description','fichier de métadonnees');
$licencedoc = $dom->createElement('licencedoc', 'type de licence');

$titre = $dom->createElement('title',$d_titre);
$auteur = $dom->createElement('searchAuthor', $d_auteur);
$url = $dom->createElement('urlGuide', $d_url);
$type = $dom->createElement('type', $d_type);
$domaine = $dom->createElement('domain', $d_domaine);
$langue = $dom->createElement('language', $d_langue);
$institution = $dom->createElement('authorityInstitution', $d_institution);
$datepublication = $dom->createElement('date-id', $d_datepublication);
$nomrevue = $dom->createElement('journal', $d_nomrevue);
$titrecongres = $dom->createElement('conferenceTitle', $d_titrecongres);
$datedebutcongres = $dom->createElement('conferenceStartDate-id', $d_datedebutcongres);
$ville = $dom->createElement('city', $d_ville);
$pays = $dom->createElement('country', $d_pays);
$description = $dom->createElement('description', $d_description);
$typerapport = $dom->createElement('reportType', $d_typerapport);
$soustitre = $dom->createElement('subTitle', $d_soustitre);
$resume = $dom->createElement('abstract', $d_resume);
$motscles = $dom->createElement('keyword', $d_motscles);
$doipublication = $dom->createElement('identifier', $d_doipublication);
$donneesassociees = $dom->createElement('researchdata', $d_donneesassociees);
$dateproduction = $dom->createElement('writingDate-id', $d_dateproduction);
$licence = $dom->createElement('licence', $d_licence);
$source = $dom->createElement('source', $d_source);
$vulgarisation = $dom->createElement('popularLevel', $d_vulgarisation);
$comitedelecture = $dom->createElement('peerReviewing', $d_comitedelecture);
$invite = $dom->createElement('invitedCommunication', $d_invite);
$audience = $dom->createElement('audience', $d_audience);
$actes = $dom->createElement('proceedings', $d_actes);
$aparaitre = $dom->createElement('inPress', $d_aparaitre);
$datepublicationelec = $dom->createElement('edate-id', $d_datepublicationelec);
$titrevolume = $dom->createElement('serie', $d_titrevolume);
$volume = $dom->createElement('volume', $d_volume);
$numero = $dom->createElement('issue', $d_numero);
$nrapport = $dom->createElement('number', $d_nrapport);
$pageid = $dom->createElement('page', $d_pageid);
$editeurcommercial = $dom->createElement('publisher', $d_editeurcommercial);
$directeurcollection = $dom->createElement('seriesEditor', $d_directeurcollection);
$editeurscientifique = $dom->createElement('scientificEditor', $d_editeurscientifique);
$organisateurducongres = $dom->createElement('conferenceOrganizer', $d_organisateurducongres);
$urlcediteur = $dom->createElement('publisherLink', $d_urlcediteur);
$classification = $dom->createElement('classification', $d_classification);
$commentaire = $dom->createElement('comment', $d_commentaire);
$referenceinterne = $dom->createElement('localReference', $d_referenceinterne);
$collabprojet = $dom->createElement('collaboration', $d_collabprojet);
$voiraussi = $dom->createElement('seeAlso', $d_voiraussi);

$projetanr = $dom->createElement('anrProject', $d_projetanr);
$projeteurop = $dom->createElement('europeanProject', $d_projeteurop);
$financement = $dom->createElement('funding', $d_financement);


//creation attributs des balises 
$id_type = $dom->createAttribute('type');
$id_type->value = 'DOI';


//ajout de l'attribut
$doipublication->appendChild($id_type);


//creation de la structure xml
$dom->appendChild($all);
//die(var_dump($HAL));
$all->appendChild($HAL);
$all->appendChild($informations);

$HAL->appendChild($file);
$HAL->appendChild($meta);
$HAL->appendChild($author);

$file->appendChild($url);

$meta->appendChild($required);
$meta->appendChild($optional);

$author->appendChild($authorvalidity);
$authorvalidity->appendChild($authors);
$authors->appendChild($auteur);


$informations->appendChild($desc);
$informations->appendChild($licencedoc);

$required->appendChild($titre);
$required->appendChild($type);
$required->appendChild($domaine);
$required->appendChild($langue);
$required->appendChild($institution);
$required->appendChild($datepublication);
$required->appendChild($nomrevue);
$required->appendChild($titrecongres);
$required->appendChild($datedebutcongres);
$required->appendChild($ville);
$required->appendChild($pays);
$required->appendChild($description);
$required->appendChild($typerapport);
$optional->appendChild($soustitre);
$optional->appendChild($resume);
$optional->appendChild($motscles);
$optional->appendChild($doipublication);
$optional->appendChild($donneesassociees);
$optional->appendChild($dateproduction);
$optional->appendChild($licence);
$optional->appendChild($source);
$optional->appendChild($vulgarisation);
$optional->appendChild($comitedelecture);
$optional->appendChild($invite);
$optional->appendChild($audience);
$optional->appendChild($actes);
$optional->appendChild($aparaitre);
$optional->appendChild($datepublicationelec);
$optional->appendChild($titrevolume);
$optional->appendChild($volume);
$optional->appendChild($numero);
$optional->appendChild($nrapport);
$optional->appendChild($pageid);
$optional->appendChild($editeurcommercial);
$optional->appendChild($directeurcollection);
$optional->appendChild($editeurscientifique);
$optional->appendChild($organisateurducongres);
$optional->appendChild($urlcediteur);
$optional->appendChild($classification);
$optional->appendChild($commentaire);
$optional->appendChild($referenceinterne);
$optional->appendChild($collabprojet);
$optional->appendChild($voiraussi);
$optional->appendChild($projetanr);
$optional->appendChild($projeteurop);
$optional->appendChild($financement);



//affichage des métadonnées avec balises xml apparentes et indentées
if(isset($_POST['ok'])){
    
    echo "<div id=\"meta\"><xmp id=\"a-copier\">".$res= $dom->saveXML()."</xmp></div><div class=\"text-center\"><br><button id=\"btnCopier\" class=\"boutonForm boutonAction\" onclick=\"copierTexte()\">Copier le texte</button></div>";

}
?>


</div>
   
