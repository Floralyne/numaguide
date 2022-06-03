<style>
    #wpfooter {
        position: relative;
    }
</style>

<div class="container" id="formCrea">
    <div class="titreForm">Informations du guide</div>
    <hr>


    <div class="soustitreForm">Métadonnnées</div>
    <hr>

    <form name="form" action="" method="post">
            <div class="obligatoire">* champs obligatoires</div>
            <div class="form-group pb-sm">
                <label for="nom_guide">Titre du guide* :</label>
                <input type="text" class="form-control" id="nomGuide" name="nomGuide" maxlength="40" required>
            </div>

            <div class="form-group pb-sm">
                <label for="auteur_guide">Auteur(e)(s) du guide* :</label>
                <input type="auteur" class="form-control" name="auteurGuide" required>
            </div>

            <hr>

            <div class="form-group pb-sm">
                <label for="auteur_guide">Lien du guide :</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            http://numaguide.msh-vdl.fr/
                        </div>
                    </div>
                    <input class="form-control" type="text" pattern="/\W|_/g" maxlength="20" id="urlGuide"
                        placeholder="Adresse du guide">
                </div>
            </div>
        <hr>

        <details>
            <summary>Métadonnées facultatives</summary>
            <div class="mt-3 mb-3 p-3 text-justify" id="infoMeta">Pour chaque type de publication, un chiffre est associé aux métadonnées nécessaires à un dépôt sur HAL. Les métadonnées obligatoires communes à <span class="type">tous types de publications</span> sont marquées d'un (0). Les métadonnées nécessaires à la publication d'<span class="type">articles</span> sont marqués d'un <span class="typeArticle">(1)</span>, celles pour les <span class="type">communications</span> d'un <span class="typeCommu">(2)</span>, pour les <span class="type">pré-publications</span> d'un <span class="typePrePub">(3)</span>, pour les <span class="type">rapports</span> d'un <span class="typeRapport">(4)</span>.</div>
            <div class="form-group pb-sm-2">
                <label for="type">Type : <small class="text-muted"><em>Obligatoire sur HAL<em></small></label>
                <select class="form-control" id="type">
                    <option value="" selected="selected"></option>
                    <option value="ART" >Article</option>
                    <option value="COMM" >Communication de congrès</option>
                    <option value="POSTER" >Communication</option>
                    <option value="OTHER" >Autre publication</option>
                    <option value="UNDEFINED">Pré-publication Document de travail</option>
                    <option value="REPORT">Rapport</option>
                </select>
                <small class="text-muted">
                Correspond au type de publication.
                </small>
            </div>

                <div class="form-group">
                    <label for="domain">Domaine : <span class="typeTous">(0)</span></label>
                    <select class="form-control" id="domain">
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
                    <label for="language">Langue du document : <span class="typeTous">(0)</span></label>
                    <select class="form-control" id="language">
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
                        <label for="authorityInstitution">Institution : <span class="typeTous">(0)</span></label>
                        <input type="text" class="form-control" name="authorityInstitution">
                        <small class="text-muted">
                </small>
                    </div>

                    <div class="form-group pb-sm-2">
                    <label for="DatedePublication">Date de publication: <span class="typeTous">(O)</span></label>
                    <input type="date" class="form-control" name="DatedePublication" min="1970-01-01" max="2030-12-31">
                    <small class="text-muted">
                </small>
                </div>
<hr>
            
                <div class="form-group pb-sm-2">
                    <label for="Nomdelarevue">Nom de la revue :<span class="typeArticle">(1)</span></label>
                    <input type="text" class="form-control" name="Nomdelarevue">
                    <small class="text-muted">
                </small>
                </div>
<hr>
                <div class="form-group pb-sm-2">
                        <label for="TitreduCongres">Titre du congrès :<span class="typeCongres">(2)</span><span class="typecomCongres">(3)</span></label>
                        <input type="text" class="form-control" name="TitreduCongres">
                        <small class="text-muted">
                </small>
                    </div>

                    <div class="form-group pb-sm-2">
                        <label for="Datedebutducongres">Date de début du congrès :<span class="typeCongres">(2)</span><span class="typecomCongres">(3)</span></label>
                        <input type="date" class="form-control" name="Datedebutducongres" min="1970-01-01" max="2030-12-31">
                        <small class="text-muted">
                </small>
                    </div>

                    <div class="form-group pb-sm-2">
                    <label for="city">Ville :<span class="typeCongres">(2)</span><span class="typecomCongres">(3)</span></label>
                    <input type="text" class="form-control" name="city">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                    <label for="country">Pays :<span class="typeCongres">(2)</span><span class="typecomCongres">(3)</span></label>
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
                    <small class="text-muted">
                </small> 
                </div>

<hr>

                <div class="form-group pb-sm-2">
                    <label for="description">Description :<span class="typeAutre">(4)</span></label>
                    <textarea type="text" class="form-control" name="description" rows="3"></textarea>
                    <small class="text-muted">
                </small>
                </div>
<hr>

                <div class="form-group pb-sm-2">
                    <label for="reportType">Type de rapport :<span class="typeRapport">(5)</span></label>
                    <select class="form-control" name="reportType">
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

                <div class="form-group mt-1">
                    <label for="Soustitre">Sous-titre :</label>
                    <input type="text" class="form-control" name="Soustitre">
                    <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                        <label for="abstract">Résumé :</label>
                        <textarea type="text" class="form-control" name="abstract" rows="5"></textarea>
                        <small class="text-muted">
                </small>
                    </div>

                <div class="form-group pb-sm-2">
                    <label for="keyword">Mots clés :</label>
                    <input type="text" class="form-control" name="keyword">
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
                <label for="popularLevel">Vulgarisation :</label>
                <select name="popularLevel" class="form-control">
                    <option value="" selected="selected"></option>
                    <option value="0">Oui</option>
                    <option value="1">Non</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="peerReviewing">Comité de lecture :</label>
                <select class="form-control" name="peerReviewing">
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
                <label for="edate">Date de publication électronique :</label>
                <input type="date" class="form-control" name="edate" min="1970-01-01" max="2030-12-31">
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

        </details>
        <input class="boutonForm boutonValider mt-3" type=submit name="ok" value="Envoyer">
        <hr>
        <div class="titreForm">Création du guide</div>
        <hr>
        <div class="soustitreForm">Thèmes colorés</div>
        <div class="form-group row">
            <div class="col">
                <input type="radio" name="options" id="option1" autocomplete="off" data-toggle="collapse"
                    aria-expanded="false" aria-controls="collapseExample" data-target="#ete">
                <label class="boutonForm boutonAjouter" for="option1">Été</label>
                <div class="collapse" id="ete">
                    <div class="card card-body" id="paletteete">
                        <div id="numaFFA86B">#FFA86B</div>
                        <div id="numaFFCC84">#FFCC84</div>
                        <div id="numaFFE69E">#FFE69E</div>
                        <div id="numaFFFFEB">#FFFFEB</div>
                        <div id="numaCCF6EE">#CCF6EE</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <input type="radio" name="options" id="option2" autocomplete="off" data-toggle="collapse"
                    aria-expanded="false" aria-controls="collapseExample" data-target="#pastel">
                <label class="boutonForm boutonAjouter" for="option2">Pastel</label>

                <div class="collapse" id="pastel">
                    <div class="card card-body" id="palettepastel">
                        <div id="numaEEF9FF">#EEF9FF</div>
                        <div id="numaFFF7FC">#FFF7FC</div>
                        <div id="numaFFFDED">#FFFDED</div>
                        <div id="numaFFF7EC">#FFF7EC</div>
                        <div id="numaFFFBFB">#FFFBFB</div>
                    </div>
                </div>
            </div>
            <div class="col">

                <input type="radio" name="options" id="option3" autocomplete="off" data-toggle="collapse"
                    aria-expanded="false" aria-controls="collapseExample" data-target="#campagne">
                <label class="boutonForm boutonAjouter" for="option3">Campagne</label>


                <div class="collapse" id="campagne">
                    <div class="card card-body" id="palettecampagne">
                        <div id="numaD3C1C3">#D3C1C3</div>
                        <div id="numaE2D0BE">#E2D0BE</div>
                        <div id="numaEEE5BF">#EEE5BF</div>
                        <div id="numaE8F8C1">#E8F8C1</div>
                        <div id="numaD0F0B9">#D0F0B9</div>
                    </div>
                </div>
            </div>
            <div class="col">

                <input type="radio" name="options" id="option4" autocomplete="off" data-toggle="collapse"
                    aria-expanded="false" aria-controls="collapseExample" data-target="#sombre">
                <label class="boutonForm boutonAjouter" for="option4">Sombre</label>

                <div class="collapse" id="sombre">
                    <div class="card card-body" id="palettesombre">
                        <div id="numa002029">#002029</div>
                        <div id="numa032934">#032934</div>
                        <div id="numa04323E">#04323E</div>
                        <div id="numa0D3B47">#0D3B47</div>
                        <div id="numa144B58">#144B58</div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div id="sectiondesac">
            <div class="soustitreForm">Section</div>
            <hr>
            <div class="form-group pb-sm">
                <label for="nom_guide">Titre de la section :</label>
                <input type="text" class="form-control" id="nomGuide" name="nomGuide" maxlength="40" disabled>
            </div>
        </div>
        <hr>
        <div class="soustitreForm">Choix des slides</div>
        <hr>
        <details>
            <summary>Slides introductives</summary>
            <div class="form-group pb-sm-2" id="groupeIntro">
                <div class="soustitreForm2">Slide 1 - Titre, sous-titre, auteur(s)</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_1.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-1"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-2"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-3"></textarea>
                    </div>
                </div>

                <hr>
                <div class="soustitreForm2">Slide 2 - Titre, sous-titre, auteur(e)(s), affiliation(s), mots-clés</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_2.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-1"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-2"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-3"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-4"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-5"></textarea>
                    </div>
                </div>
                <hr>

                <div class="soustitreForm">Slide 3 - Remerciements</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_3.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide3-1"></textarea>
                    </div>
                </div>
                <hr>
                <div class="soustitreForm">Slide 4 - Résumé</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_4.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide4-1"></textarea>
                    </div>
                </div>
                <hr>
                <div class="soustitreForm">Slide 5 - Introduction</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_5.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide5-1"></textarea>
                    </div>
                </div>
            </div>
        </details>
        <hr>
        <details>
            <summary>Slides textuelles</summary>
            <div class="form-group pb-sm-2" id="groupeTexte">
                <div class="soustitreForm">Slide 6 - Paragraphe</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_6.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-1"></textarea>
                    </div>
                </div>

                <hr>
                <div class="soustitreForm">Slide 7 - Deux paragraphes verticaux</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_7.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide7-1"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide7-2"></textarea>
                    </div>
                </div>
                <hr>

                <div class="soustitreForm">Slide 8 - Deux paragraphes horizontaux</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_8.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide8-1"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide8-2"></textarea>

                    </div>
                </div>
            </div>
        </details>
        <hr>
        <details>
            <summary>Slides images</summary>
            <div class="form-group pb-sm-2" id="groupeImages">
                <div class="soustitreForm">Slide 9 - Image plein écran</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_9.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <input type="file" name="slide9-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir">
                    </div>
                </div>

                <hr>
                <div class="soustitreForm">Slide 10 - Un paragraphe et une image</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_10.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide10-2"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide10-1">
                    </div>
                </div>
                <hr>

                <div class="soustitreForm">Slide 11 - Une image et un paragraphe</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_11.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide11-1">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide11-2"></textarea>
                    </div>
                </div>

                <hr>
                <div class="soustitreForm">Slide 12 - Un paragraphe et une image</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_12.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide12-1"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide12-2">
                    </div>
                </div>
            </div>
        </details>
        <hr>

        <details>
            <summary>Slides son</summary>
            <div class="form-group pb-sm-2" id="groupeSon">
                <div class="soustitreForm">Slide 13 - Paragraphe, son, légende</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_13.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide13-1"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide13-2">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide13-3"></textarea>
                    </div>
                </div>

                <hr>
                <div class="soustitreForm">Slide 14 - Son et légende, son et légende</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_14.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide14-1">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide14-2"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide14-3">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide14-4"></textarea>
                    </div>
                </div>
            </div>
        </details>
        <hr>

        <details>
            <summary>Slides vidéos</summary>
            <div class="form-group pb-sm-2" id="groupeVideos">
                <div class="soustitreForm">Slide 15 - Vidéo plein écran</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_15.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide15-1">
                    </div>
                </div>

                <hr>
                <div class="soustitreForm">Slide 16 - Vidéo et légende, paragraphe</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_16.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide16-1">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide16-2"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide16-3">
                    </div>
                </div>

                <hr>
                <div class="soustitreForm">Slide 17 - Paragraphe et vidéo</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_17.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide17-1"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            name="slide17-2">
                    </div>
                </div>
            </div>
        </details>
        <hr>
        <details>
            <summary>Slides de fin</summary>
            <div class="form-group pb-sm-2" id="groupeFin">
                <div class="soustitreForm">Slide 18 - Bibliographie</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_18.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide18-1"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide18-2"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide18-3"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide18-4"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide18-5"></textarea>
                    </div>
                </div>

                <hr>
                <div class="soustitreForm">Slide 19 - Bibliographie</div>
                <div class="row">
                    <div class="col col-lg-3 mb-auto mt-auto">
                        <figure class="figure  mt-auto mb-auto">
                            <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_19.png'; ?>"
                                class="figure-img img-fluid rounded">
                        </figure>
                    </div>
                    <div class="col">
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-1"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-2"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-3"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-4"></textarea>
                        <textarea class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-5"></textarea>
                    </div>
                </div>
        </details>
</div>
<hr>

<div class="form-group pb-sm-2">
    <label for="slide1text">Choisir une slide avec un texte</label>
    <select name="slide1text">
        <option value="slide3" selected>Slide 3</option>
        <option value="slide4">Slide 4</option>
        <option value="slide5">Slide 5</option>
        <option value="slide6">Slide 6</option>
        <option value="slide10">Slide 10</option>
        <option value="slide11">Slide 11</option>
        <option value="slide12">Slide 12</option>
        <option value="slide17">Slide 17</option>
    </select>
    <input type="text" class="form-control" name="slide1text-1">
</div>

<div class="form-group pb-sm-2">
    <label for="slide2text">Choisir une slide avec deux textes</label>
    <select name="slide2text">
        <option value="slide7" selected>Slide 7</option>
        <option value="slide8">Slide 8</option>
        <option value="slide13">Slide 13</option>
        <option value="slide14">Slide 14</option>
        <option value="slide16">Slide 16</option>
    </select>
    <input type="text" class="form-control" name="slide2text-1">
    <input type="text" class="form-control" name="slide2text-2">
</div>

<div class="form-group pb-sm-2">
    <label for="slide5text">Choisir une slide avec cinq textes</label>
    <select name="slide5text">
        <option value="slide2" selected>Slide 2</option>
        <option value="slide18">Slide 18</option>
        <option value="slide19">Slide 19</option>
    </select>
    <input type="text" class="form-control" name="slide5text-1">
    <input type="text" class="form-control" name="slide5text-2">
    <input type="text" class="form-control" name="slide5text-3">
    <input type="text" class="form-control" name="slide5text-4">
    <input type="text" class="form-control" name="slide5text-5">
</div>

<input type=submit name="ok" class="boutonForm boutonValider" value="Créer le mini guide">
</form>

<form form name="form" action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload_logo" id="upload_logo" />
    <input type=submit name="check" value="Créer le mini guide">
</form>

</div>

<?php

if (isset($_POST['check'])) {
    require( ABSPATH . 'wp-load.php' );
    // Slide avec une image
    $wordpress_upload_dir = wp_upload_dir();
    // $wordpress_upload_dir['path'] est le path entier du serveur vers (wp-content/uploads/2017/05)
    // $wordpress_upload_dir['url'] le lien absolut vers l'url du même dossier, pour montrer le lien vers le fichier
    $i = 1; // compteur si le même nom de fichier

    $imgSlide9 = $_FILES['upload_logo'];
    $new_file_path = $wordpress_upload_dir['path'] . '/' . $imgSlide9['name'];
   
    $new_file_mime = mime_content_type($imgSlide9['tmp_name']);

    if (empty($imgSlide9)) {
        die('File is not selected.');
    }

    if ($imgSlide9['error']) {
        die($imgSlide9['error']);
    }

    if ($imgSlide9['size'] > wp_max_upload_size()) {
        die('La taille de l\'image est trop grande.');
    }

    if (!in_array($new_file_mime, get_allowed_mime_types())) {
        die('Le type de l\'image n\'est pas valide');
    }

    while (file_exists($new_file_path)) {
        $i++;
        $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $imgSlide9['name'];
    }
    
    // Ajout de l'image dans wordpress
    if (move_uploaded_file($imgSlide9['tmp_name'], $new_file_path)) {

        $upload_id = wp_insert_attachment(array(
            'guid' => $new_file_path,
            'post_mime_type' => $new_file_mime,
            'post_title' => preg_replace('/\.[^.]+$/', '', $imgSlide9['name']),
            'post_content' => '',
            'post_status' => 'inherit',
        ), $new_file_path);

        // wp_generate_attachment_metadata() won't work if you do not include this file
        //require_once ABSPATH . 'wp-admin/includes/image.php';

        // Generate and save the attachment metas into the database
        wp_update_attachment_metadata($upload_id, wp_generate_attachment_metadata($upload_id, $new_file_path));

        // Show the uploaded file in browser
        wp_redirect($wordpress_upload_dir['url'] . '/' . basename($new_file_path));
        
    }
}



if (isset($_POST['ok'])) {
    //Titre du guide
    $slide = "<style>html[lang] {
            margin-top: 0 !important;
          }
          </style>";
    $ng_guide_nom = $_POST['nomGuide'];
    $enleveaccent_array = array('Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
        'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
        'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
        'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y');

    $ng_guide_nom = strtr($ng_guide_nom, $enleveaccent_array);
    $ng_guide_nom = str_replace('\'', '', trim($ng_guide_nom));
    $ng_guide_nom = preg_replace('/[^A-Za-z0-9-]/', '', $ng_guide_nom);
    $ng_guide_nom = preg_replace('/-+/', '-', $ng_guide_nom);
    $ng_guide_nom = substr($ng_guide_nom, 0, 20);

    // Creation du tag pour lier les articles

    wp_create_term($ng_guide_nom);

    //Slide avec trois textes
    if ($_POST['slide1-1'] !== ''&$_POST['slide1-2'] !== ''&$_POST['slide1-3'] !== '') {
        $ng_slide1_nom = $_POST['slide1'];
        $ng_slide1_value1 = $_POST['slide1-1'];
        $ng_slide1_value2 = $_POST['slide1-2'];
        $ng_slide1_value3 = $_POST['slide1-2'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide1_value1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide1_value2 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide1_value3 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(51),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        die("monkey");

        $info_slide = array($ng_slide1_nom, 'views/slides/slide_1.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

    }

    //Slides avec un texte
    if ($_POST['slide1text-1'] !== '') {
        $ng_slide1text_nom = $_POST['slide1text'];
        $ng_slide1text_value1 = $_POST['slide1text-1'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide1text_value1 . '<!-- /wp:paragraph -->';

        if ($ng_slide1text_nom == 'slide3') {
            $num_cat = 53;
            $nom_slide = 'slide_3';
        }if ($ng_slide1text_nom == 'slide4') {
            $num_cat = 54;
            $nom_slide = 'slide_4';
        }if ($ng_slide1text_nom == 'slide5') {
            $num_cat = 55;
            $nom_slide = 'slide_5';
        }if ($ng_slide1text_nom == 'slide6') {
            $num_cat = 56;
            $nom_slide = 'slide_6';
        }if ($ng_slide1text_nom == 'slide10') {
            $num_cat = 60;
            $nom_slide = 'slide_10';
        }if ($ng_slide1text_nom == 'slide11') {
            $num_cat = 61;
            $nom_slide = 'slide_11';
        }if ($ng_slide1text_nom == 'slide12') {
            $num_cat = 62;
            $nom_slide = 'slide_12';
        }if ($ng_slide1text_nom == 'slide17') {
            $num_cat = 67;
            $nom_slide = 'slide_17';
        }

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array($num_cat),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide1text_nom, 'views/slides/' . $nom_slide . '.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

    }

    //Slides avec deux textes
    if ($_POST['slide2text-1'] !== ''&$_POST['slide2text-2'] !== '') {
        $ng_slide2text_nom = $_POST['slide2text'];
        $ng_slide2text_value1 = $_POST['slide2text-1'];
        $ng_slide2text_value2 = $_POST['slide2text-2'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide2text_value1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide2text_value2 . '<!-- /wp:paragraph -->';

        if ($ng_slide2text_nom == 'slide7') {
            $num_cat = 57;
            $nom_slide = 'slide_7';
        }if ($ng_slide2text_nom == 'slide8') {
            $num_cat = 58;
            $nom_slide = 'slide_8';
        }if ($ng_slide2text_nom == 'slide13') {
            $num_cat = 63;
            $nom_slide = 'slide_13';
        }if ($ng_slide2text_nom == 'slide14') {
            $num_cat = 64;
            $nom_slide = 'slide_14';
        }if ($ng_slide2text_nom == 'slide16') {
            $num_cat = 66;
            $nom_slide = 'slide_16';
        }

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array($num_cat),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide2text_nom, 'views/slides/' . $nom_slide . '.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);
    }

    //Slides avec cinq textes
    if ($_POST['slide5text-1'] !== ''&$_POST['slide5text-2'] !== ''&$_POST['slide5text-3'] !== ''&$_POST['slide5text-4'] !== ''&$_POST['slide5text-5'] !== '') {
        $ng_slide5text_nom = $_POST['slide5text'];
        $ng_slide5text_value1 = $_POST['slide5text-1'];
        $ng_slide5text_value2 = $_POST['slide5text-2'];
        $ng_slide5text_value3 = $_POST['slide5text-3'];
        $ng_slide5text_value4 = $_POST['slide5text-4'];
        $ng_slide5text_value5 = $_POST['slide5text-5'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide5text_value1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide5text_value2 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide5text_value3 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide5text_value4 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide5text_value5 . '<!-- /wp:paragraph -->';

        if ($ng_slide5text_nom == 'slide2') {
            $num_cat = 52;
            $nom_slide = 'slide_2';
        }if ($ng_slide5text_nom == 'slide18') {
            $num_cat = 68;
            $nom_slide = 'slide_18';
        }if ($ng_slide5text_nom == 'slide19') {
            $num_cat = 69;
            $nom_slide = 'slide_19';
        }

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array($num_cat),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide5text_nom, 'views/slides/' . $nom_slide . '.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);
    }

    if ($slide !== null) {
        apply_filters('ng_creer_guide', $ng_guide_nom, $slide);
    }
}

?>