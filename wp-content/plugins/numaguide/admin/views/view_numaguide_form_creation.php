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

    <form name="form" action="" method="post" enctype="multipart/form-data" >
        <div class="obligatoire">* champs obligatoires</div>
        <div class="form-group pb-sm">
            <label for="nom_guide">Titre du guide* :</label>
            <input type="text" class="form-control" id="nomGuide" name="nomGuide" onChange="urlFonction()" maxlength="40">
        </div>

            <div class="form-group pb-sm">
                <label for="auteur_guide">Auteur(e)(s) du guide* :</label>
                <input type="auteur" class="form-control" id="auteurGuide" name="auteurGuide" required>
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
                    <input class="form-control" type="text" maxlength="20" id="urlGuide"
                        placeholder="Adresse du guide" disabled>
                </div>
            </div>
        <hr>

        <details>
            <summary>Métadonnées facultatives</summary>
            <div class="mt-3 mb-3 p-3 text-justify" id="infoMeta">Pour chaque type de publication, des métadonnées nécessaires à un dépôt sur HAL sont associées. Ces métadonnées seront ensuite associées aux balises xml correspondantes, puis générées, prêtes à être copiées et utilisées.</div>
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
                        <option value="fr">Français</option>
                        <option value="en">Anglais</option>
                        <option value="it">Italien</option>
                        <option value="es">Espagnol</option>
                        <option value="de">Allemand</option>
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
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="comitelecture">Comité de lecture :</label>
                <select class="form-control" name="comitelecture">
                    <option value="" selected="selected"></option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="invite">Invité :</label>
                <select class="form-control" name="invite">
                    <option value="" selected="selected"></option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
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
                    <option value="">Non</option>
                    <option value="1">Oui</option>
                </select>
                <small class="text-muted">
                </small>
                </div>

                <div class="form-group pb-sm-2">
                <label for="Aparaitre">Á paraitre :</label>
                <select class="form-control" name="Aparaitre">
                    <option value="" selected="selected"></option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
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
                <input type="text" class="form-control" id="nomSection" name="nomSection" maxlength="40" disabled>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-1"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-2"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-1"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-2"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-3"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-4"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide3-1" maxlength="700" placeholder="700 caractères max."></textarea>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide4-1" maxlength="700" placeholder="700 caractères max."></textarea>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide5-1" maxlength="700" placeholder="700 caractères max."></textarea>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide6-1" maxlength="2000" placeholder="2000 caractères max."></textarea>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide7-1" maxlength="1100" placeholder="1100 caractères max."></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide7-2" maxlength="1100" placeholder="1100 caractères max."></textarea>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide8-1" maxlength="1100" placeholder="1100 caractères max."></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide8-2" maxlength="1100" placeholder="1100 caractères max."></textarea>

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
                        <input type="file" name="slide9-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir" />
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide10-2" maxlength="700" placeholder="700 caractères max."></textarea>
                        <input type="file" name="slide10-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir" />
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
                        <input type="file" name="slide11-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"/>
                        <textarea type="text"class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide11-2" maxlength="700" placeholder="700 caractères max."></textarea>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide12-2" maxlength="700" placeholder="700 caractères max."></textarea>
                        <input type="file" name="slide12-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"/>
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
                        <textarea type="text" class="form-control m-1" rows="1" name="slide13-1" maxlength="700" placeholder="700 caractères max."></textarea>
                        <input type="file" name="slide13-2" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"/>
                        <textarea type="text" class="form-control m-1" rows="1" name="slide13-3"></textarea>
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
                        <input type="file" name="slide14-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"/>
                        <textarea type="text" class="form-control m-1" rows="1"
                            name="slide14-2"></textarea>
                        <input  type="file" name="slide14-3" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"/>
                        <textarea type="text" class="form-control m-1" rows="1"
                            name="slide14-4"></textarea>
                    </div>
                </div>
            </div>
        </details>
        <hr>

        <details>
            <summary>Slides vidéos</summary>
            <div class="mt-3 mb-3 p-3 text-justify" id="infoMeta"><span class="comment">Comment importer une vidéo ?</span><br>
                <br>- Si l'hébergeur est <span class="type">Youtube</span>, veuillez copier le lien direct de la vidéo <br> <span class="typePubli">(Exemple : https://www.youtube.com/watch?v=1eXOOotL5pk)</span>
                <br>- Si l'hébergeur est <span class="type">Dailymotion</span>, veuillez copier le lien direct de la vidéo <br><span class="typePubli">(Exemple : https://www.dailymotion.com/video/x7wt1qq)</span>
                <br>- Si l'hébergeur est <span class="type">Canal U</span>, veuillez copier le lien embed de la vidéo <br><span class="typePubli">(Exemple : https://www.canal-u.tv/embed/116919?t=0)</span>
            </div>
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
                        <input type="text" name="slide15-1" class="form-control m-1" placeholder="Lien de la vidéo"/>
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
                        <input type="text" name="slide16-1" class="form-control m-1" placeholder="Lien de la vidéo"/>
                        <textarea type="text" class="form-control m-1" rows="1"
                            name="slide16-2"></textarea>
                        <textarea type="text" class="form-control m-1" rows="1"
                            name="slide16-3" maxlength="700" placeholder="700 caractères max."></textarea>
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
                        <textarea type="text" class="form-control m-1" rows="1"
                            name="slide17-1" maxlength="700" placeholder="700 caractères max."></textarea>
                        <input type="text" name="slide17-2" class="form-control m-1" placeholder="Lien de la vidéo"/>
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
                        <textarea type="text" name="slide18-1" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            ></textarea>
                        <textarea type="text"  name="slide18-2"class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                           ></textarea>
                        <textarea type="text" name="slide18-3"class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            ></textarea>
                        <textarea type="text" name="slide18-4"class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            ></textarea>
                        <textarea type="text" name="slide18-5"class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            ></textarea>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-1"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-2"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-3"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-4"></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-5"></textarea>
                    </div>
                </div>
        </details>
        <input type=submit name="ok" class="boutonForm boutonValider mt-5" value="Créer le mini guide">
</div>
</form>

</div>

<?php

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

    // Slide 1
    if ($_POST['slide1-1'] !== ''&$_POST['slide1-2'] !== ''&$_POST['slide1-3'] !== '') {
        $texte1 = $_POST['slide1-1'];
        $texte2 = $_POST['slide1-2'];
        $texte3 = $_POST['slide1-3'];
        
        $slide = apply_filters('ng_creer_slide1', $ng_guide_nom, $texte1, $texte2, $texte3, $slide);
    }

    // Slide 2
    if ($_POST['slide2-1'] !== ''&$_POST['slide2-2'] !== ''&$_POST['slide2-3'] !== ''&$_POST['slide2-4'] !== ''&$_POST['slide2-5'] !== '') {
        $texte1 = $_POST['slide2-1'];
        $texte2 = $_POST['slide2-2'];
        $texte3 = $_POST['slide2-3'];
        $texte4 = $_POST['slide2-4'];
        $texte5 = $_POST['slide2-5'];
        
        $slide = apply_filters('ng_creer_slide2', $ng_guide_nom, $texte1, $texte2, $texte3, $texte4, $texte5, $slide);
    }

    //Slide 3
    if ($_POST['slide3-1'] !== '') {
        $texte1 = $_POST['slide3-1'];
        
        $slide = apply_filters('ng_creer_slide3', $ng_guide_nom, $texte1, $slide);
    }

    //Slide 4
    if ($_POST['slide4-1'] !== '') {
        $texte1 = $_POST['slide4-1'];
        
        $slide = apply_filters('ng_creer_slide4', $ng_guide_nom, $texte1, $slide);
    }

    //Slide 5
    if ($_POST['slide5-1'] !== '') {
        $texte1 = $_POST['slide5-1'];
        
        $slide = apply_filters('ng_creer_slide5', $ng_guide_nom, $texte1, $slide);
    }

    //Slide 6
    if ($_POST['slide6-1'] !== '') {
        $texte1 = $_POST['slide6-1'];
        
        $slide = apply_filters('ng_creer_slide6', $ng_guide_nom, $texte1, $slide);
    }

    //Slide 7
    if ($_POST['slide7-1'] !== ''&$_POST['slide7-2'] !== '') {
        $texte1 = $_POST['slide7-1'];
        $texte2 = $_POST['slide7-2'];
        
        $slide = apply_filters('ng_creer_slide7', $ng_guide_nom, $texte1, $texte2, $slide);
    }

    //Slide 8
    if ($_POST['slide8-1'] !== ''&$_POST['slide8-2'] !== '') {
        $texte1 = $_POST['slide8-1'];
        $texte2 = $_POST['slide8-2'];
        
        $slide = apply_filters('ng_creer_slide8', $ng_guide_nom, $texte1, $texte2, $slide);
    }

    // Slide 9
    if ($_FILES['slide9-1']["name"] != "") {
        $image1 = $_FILES['slide9-1'];
        
        $slide = apply_filters('ng_creer_slide9', $ng_guide_nom, $image1, $slide);
    }

    // Slide 10
    if ($_FILES['slide10-1']["name"] != ""&$_POST['slide10-2'] !== '') {
        $image1 = $_FILES['slide10-1'];
        $texte1 = $_POST['slide10-2'];
        
        $slide = apply_filters('ng_creer_slide10', $ng_guide_nom, $image1, $texte1, $slide);
    }

    // Slide 11
    if ($_FILES['slide11-1']["name"] != ""&$_POST['slide11-2'] !== '') {
        $image1 = $_FILES['slide11-1'];
        $texte1 = $_POST['slide11-2'];
        
        $slide = apply_filters('ng_creer_slide11', $ng_guide_nom, $image1, $texte1, $slide);
    }

    // Slide 12
    if ($_FILES['slide12-1']["name"] != ""&$_POST['slide12-2'] !== '') {
        $image1 = $_FILES['slide12-1'];
        $texte1 = $_POST['slide12-2'];
        
        $slide = apply_filters('ng_creer_slide12', $ng_guide_nom, $image1, $texte1, $slide);
    }

    // Slide 13
    if ($_FILES['slide13-2']["name"] != ""&$_POST['slide13-1'] !== ''&$_POST['slide13-3'] !== '') {
        $texte1 = $_POST['slide13-1'];
        $texte2 = $_POST['slide13-3'];
        $son1 = $_FILES['slide13-2'];
        
        $slide = apply_filters('ng_creer_slide13', $ng_guide_nom, $texte1, $texte2, $son1, $slide);
    }

    // Slide 14
    if ($_FILES['slide14-1']["name"] != ""&$_FILES['slide14-3']["name"] != ""&$_POST['slide14-2'] !== ''&$_POST['slide14-4'] !== '') {
        $texte1 = $_POST['slide14-2'];
        $texte2 = $_POST['slide14-4'];
        $son1 = $_FILES['slide14-1'];
        $son2 = $_FILES['slide14-3'];
        
        $slide = apply_filters('ng_creer_slide14', $ng_guide_nom, $texte1, $texte2, $son1, $son2, $slide);
    }

    // Slide 15
    if ($_POST['slide15-1'] !== '') {
        $video1 = $_POST['slide15-1'];
        
        $slide = apply_filters('ng_creer_slide15', $ng_guide_nom, $video1, $slide);
    }

    // Slide 16
    if ($_POST['slide16-1'] !== ''&$_POST['slide16-2'] !== ''&$_POST['slide16-3'] !== '') {
        $video1 = $_POST['slide16-1'];
        $texte1 = $_POST['slide16-2'];
        $texte2 = $_POST['slide16-3'];
        
        $slide = apply_filters('ng_creer_slide16', $ng_guide_nom, $video1, $texte1, $texte2, $slide);
    }

    // Slide 17
    if ($_POST['slide17-1'] !== ''&$_POST['slide17-2'] !== '') {
        $video1 = $_POST['slide17-2'];
        $texte1 = $_POST['slide17-1'];
        
        $slide = apply_filters('ng_creer_slide17', $ng_guide_nom, $video1, $texte1, $slide);
    }

    // Slide 18
    if ($_POST['slide18-1'] !== ''&$_POST['slide18-2'] !== ''&$_POST['slide18-3'] !== ''&$_POST['slide18-4'] !== ''&$_POST['slide18-5'] !== '') {
        $texte1 = $_POST['slide18-1'];
        $texte2 = $_POST['slide18-2'];
        $texte3 = $_POST['slide18-3'];
        $texte4 = $_POST['slide18-4'];
        $texte5 = $_POST['slide18-5'];
        
        $slide = apply_filters('ng_creer_slide18', $ng_guide_nom, $texte1, $texte2, $texte3, $texte4, $texte5, $slide);
    }

    // Slide 19
    if ($_POST['slide19-1'] !== ''&$_POST['slide19-2'] !== ''&$_POST['slide19-3'] !== ''&$_POST['slide19-4'] !== ''&$_POST['slide19-5'] !== '') {
        $texte1 = $_POST['slide19-1'];
        $texte2 = $_POST['slide19-2'];
        $texte3 = $_POST['slide19-3'];
        $texte4 = $_POST['slide19-4'];
        $texte5 = $_POST['slide19-5'];
        
        $slide = apply_filters('ng_creer_slide19', $ng_guide_nom, $texte1, $texte2, $texte3, $texte4, $texte5, $slide);
    }

    if ($slide !== null) {
        apply_filters('ng_creer_guide', $ng_guide_nom, $slide);
    }
}


//PHP Métadonnées 

//variables    
$d_titre = "";
$d_auteur = "";
$d_url = "";
$d_type = "";
$d_type_texte = "";
$d_domaine = "";
$d_domaine_texte="";
$d_langue = "";
$d_langue_texte = ""; 
$d_institution =  "";
$d_datepublication = "";
$d_nomrevue = "";
$d_titrecongres = ""; 
$d_datedebutcongres = ""; 
$d_ville = "";
$d_pays = "";
$d_pays_texte = ""; 
$d_description = ""; 
$d_typerapport = "";
$d_typerapport_texte = ""; 
$d_soustitre = "";
$d_resume = "";
$d_motscles = "";
$d_doipublication = ""; 
$d_donneesassociees = "";
$d_dateproduction = "";
$d_licence = "";
$d_licence_texte = ""; 
$d_source = "";
$d_vulgarisation = ""; 
$d_vulgarisation_texte = ""; 
$d_comitedelecture = "";
$d_comitedelecture_texte = ""; 
$d_invite = "";
$d_invite_texte = ""; 
$d_audience = "";
$d_audience_texte = ""; 
$d_actes = "";
$d_actes_texte = ""; 
$d_aparaitre = ""; 
$d_aparaitre_texte = ""; 
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
        $d_titre = $_POST['nomGuide'];
        $d_auteur = $_POST['auteurGuide'];
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


        if ($d_url != "") {
           $d_url = 'http://numaguide.msh-vdl.fr/'.$d_url; 
            
        }

        if ($d_type != "") {
            if ($d_type == "") { $d_type_texte = " "; }
            if ($d_type == "ART") { $d_type_texte = "Article"; }
            if ($d_type == "COMM") { $d_type_texte = "Communication de congrès"; }
            if ($d_type == "POSTER") { $d_type_texte = "Poster"; }
            if ($d_type == "OTHER") { $d_type_texte = "Autre publication"; }
            if ($d_type == "UNDEFINED") { $d_type_texte = "Pré-publication Document de travail"; }
            if ($d_type == "REPORT") { $d_type_texte = "Rapport"; }
            
        }

        if ($d_domaine != "") {
            if ($d_domaine == "shs") { $d_domaine_texte = "--- Sciences de l'Homme et Société ---"; }
            if ($d_domaine == "shs.anthro-bio") { $d_domaine_texte = "Athropologie biologique"; }
            if ($d_domaine == "shs.anthro-se") { $d_domaine_texte = "Anthropologie sociale et ethnologie"; }
            if ($d_domaine == "shs.archeo") { $d_domaine_texte = "Archéologie et Préhistoire"; }
            if ($d_domaine == "shs.archi") { $d_domaine_texte = "Architecture, aménagement de l'espace"; }
            if ($d_domaine == "shs.art") { $d_domaine_texte = "Art et histoire de l'art"; }
            if ($d_domaine == "shs.class") { $d_domaine_texte = "Études classiques"; }
            if ($d_domaine == "shs.demo") { $d_domaine_texte = "Démographie"; }
            if ($d_domaine == "shs.droit") { $d_domaine_texte = "Droit"; }
            if ($d_domaine == "shs.eco") { $d_domaine_texte = "Économies et finances"; }
            if ($d_domaine == "shs.edu") { $d_domaine_texte = "Éducation"; }
            if ($d_domaine == "shs.envir") { $d_domaine_texte = "Études de l'environnement"; }
            if ($d_domaine == "shs.genre") { $d_domaine_texte = "Études sur le genre"; }
            if ($d_domaine == "shs.geo") { $d_domaine_texte = "Géographie"; }
            if ($d_domaine == "shs.gestion") {$d_domaine_texte = "Gestion et management"; }
            if ($d_domaine == "shs.hisphilso") { $d_domaine_texte = "Histoire, Philosophie et Scociologie des sciences"; }
            if ($d_domaine == "shs.hist") { $d_domaine_texte = "Histoire"; }
            if ($d_domaine == "shs.info") { $d_domaine_texte = "Sciences de l'information et de la communication"; }
            if ($d_domaine == "shs.langue") { $d_domaine_texte = "Linguistique"; }
            if ($d_domaine == "shs.litt") { $d_domaine_texte = "Littératures"; }
            if ($d_domaine == "shs.museo") { $d_domaine_texte = "Héritage culturel et muséologie"; }
            if ($d_domaine == "shs.musiq") { $d_domaine_texte = "Musique, musicologie et arts de la scène"; }
            if ($d_domaine == "shs.phil") { $d_domaine_texte = "Philosophie"; }
            if ($d_domaine == "shs.psy") { $d_domaine_texte = "Psychologie"; }
            if ($d_domaine == "shs.relig") { $d_domaine_texte = "Religions"; }
            if ($d_domaine == "shs.scipo") { $d_domaine_texte = "Science politique"; }
            if ($d_domaine == "shs.socio") { $d_domaine_texte = "Sociologie"; }
            if ($d_domaine == "shs.stat") { $d_domaine_texte = "Méthodes et statistiques"; }
            
        }

        if ($d_langue != "") {
            if ($d_langue == "fr") { $d_langue_texte = "Français"; }
            if ($d_langue == "en") { $d_langue_texte = "Anglais"; }
            if ($d_langue == "it") { $d_langue_texte = "Italien"; }
            if ($d_langue == "es") { $d_langue_texte = "Espagnol"; }
            if ($d_langue == "de") { $d_langue_texte = "Allemand"; }
        }
        if ($d_pays != "") {
            if ($d_pays == "de") { $d_pays_texte = "Allemagne"; }
            if ($d_pays == "be") { $d_pays_texte = "Belgique"; }
            if ($d_pays == "ca") { $d_pays_texte = "Canada"; }
            if ($d_pays == "es") { $d_pays_texte = "Espagne"; }
            if ($d_pays == "us") { $d_pays_texte = "États Unis"; }
            if ($d_pays == "fr") { $d_pays_texte = "France"; }
            if ($d_pays == "ie") { $d_pays_texte = "Irelande"; }
            if ($d_pays == "it") { $d_pays_texte = "Italie"; }
            if ($d_pays == "gb") { $d_pays_texte = "Royaume-Uni"; }
        }

        if ($d_typerapport != "") {
            if ($d_typerapport == "") { $d_typerapport_texte = " "; }
            if ($d_typerapport == "6") { $d_typerapport_texte = "Rapport de recherche"; }
            if ($d_typerapport == "4") { $d_typerapport_texte = "Rapport Technique"; }
            if ($d_typerapport == "2") { $d_typerapport_texte = "Contrat"; }
            if ($d_typerapport == "3") { $d_typerapport_texte = "Interne"; }
            if ($d_typerapport == "0") { $d_typerapport_texte = "Autre"; }
        }

        if ($d_licence != "") {
            if ($d_licence == "") { $d_licence_texte = " "; }
            if ($d_licence == "http://creativecommons.org/licenses/by/") { $d_licence_texte = "CC BY - Paternité"; }
            if ($d_licence == "http://creativecommons.org/licenses/by-nc/") { $d_licence_texte = "CC BY NC - Paternité - Pas d'utilisation commerciale"; }
            if ($d_licence == "http://creativecommons.org/licenses/by-nd/") { $d_licence_texte = "CC BY ND - Paternité - Pas de modifications"; }
            if ($d_licence == "http://creativecommons.org/licenses/by-sa/") { $d_licence_texte = "CC BY SA - Paternité - Partage selon les Conditions Initiales"; }
            if ($d_licence == "http://creativecommons.org/licenses/by-nc-nd/") { $d_licence_texte = "CC BY NC ND - Paternité - Pas d'utilisation commerciale - Pas de modification"; }
            if ($d_licence == "http://creativecommons.org/licenses/by-nc-sa/") { $d_licence_texte = "CC BY NC SA - Paternité - Pas d'utilisation commerciale - Partage selon les Conditions Initiales"; }
            if ($d_licence == "http://creativecommons.org/choose/mark/") { $d_licence_texte = "NC - Marque du Domaine Public"; }
            if ($d_licence == "http://creativecommons.org/publicdomain/zero/1.0/") { $d_licence_texte = "CC0 - Transfert dans le Domaine Public"; }
            if ($d_licence == "http://hal.archives-ouvertes.fr/licences/etalab/") { $d_licence_texte = "ETALAB - Licence Ouverte"; }
            if ($d_licence == "http://hal.archives-ouvertes.fr/licences/copyright/") { $d_licence_texte = "Copyright (Tous droits réservés)"; }
            if ($d_licence == "http://hal.archives-ouvertes.fr/licences/publicDomain/") { $d_licence_texte = "Domaine public"; }
        }

        if ($d_vulgarisation != "") {
            if ($d_vulgarisation == "") { $d_vulgarisation_texte = " "; }
            if ($d_vulgarisation == "0") { $d_vulgarisation_texte = "No"; }
            if ($d_vulgarisation == "1") { $d_vulgarisation_texte = "Yes"; }
        }

        if ($d_comitedelecture != "") {
            if ($d_comitedelecture == "") { $d_comitedelecture_texte = " "; }
            if ($d_comitedelecture == "0") { $d_comitedelecture_texte = "No"; }
            if ($d_comitedelecture == "1") { $d_comitedelecture_texte = "Yes"; }
        }
        
        if ($d_invite != "") {
            if ($d_invite == "") { $d_invite_texte = " "; }
            if ($d_invite == "0") { $d_invite_texte = "No"; }
            if ($d_invite == "1") { $d_invite_texte = "Yes"; }
        }

        if ($d_audience != "") {
            if ($d_audience == "") { $d_audience_texte = " "; }
            if ($d_audience == "2") { $d_audience_texte = "Internationale"; }
            if ($d_audience == "3") { $d_audience_texte = "Nationale"; }
            if ($d_audience == "1") { $d_audience_texte = "Non spécifiée"; }
        }

        if ($d_actes != "") {
            if ($d_actes == "") { $d_actes_texte = " "; }
            if ($d_actes == "0") { $d_actes_texte = "No"; }
            if ($d_actes == "1") { $d_actes_texte = "Yes"; }
        }

        if ($d_aparaitre != "") {
            if ($d_aparaitre == "") { $d_aparaitre_texte = " "; }
            if ($d_aparaitre == "0") { $d_aparaitre_texte = "No"; }
            if ($d_aparaitre == "1") { $d_aparaitre_texte = "Yes"; }
        }


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
$type = $dom->createElement('type', $d_type_texte);
$domaine = $dom->createElement('domain', $d_domaine_texte);
$langue = $dom->createElement('language', $d_langue_texte);
$institution = $dom->createElement('authorityInstitution', $d_institution);
$datepublication = $dom->createElement('date-id', $d_datepublication);
$nomrevue = $dom->createElement('journal', $d_nomrevue);
$titrecongres = $dom->createElement('conferenceTitle', $d_titrecongres);
$datedebutcongres = $dom->createElement('conferenceStartDate-id', $d_datedebutcongres);
$ville = $dom->createElement('city', $d_ville);
$pays = $dom->createElement('country', $d_pays_texte);
$description = $dom->createElement('description', $d_description);
$typerapport = $dom->createElement('reportType', $d_typerapport_texte);
$soustitre = $dom->createElement('subTitle', $d_soustitre);
$resume = $dom->createElement('abstract', $d_resume);
$motscles = $dom->createElement('keyword', $d_motscles);
$doipublication = $dom->createElement('identifier', $d_doipublication);
$donneesassociees = $dom->createElement('researchdata', $d_donneesassociees);
$dateproduction = $dom->createElement('writingDate-id', $d_dateproduction);
$licence = $dom->createElement('licence', $d_licence_texte);
$source = $dom->createElement('source', $d_source);
$vulgarisation = $dom->createElement('popularLevel', $d_vulgarisation_texte);
$comitedelecture = $dom->createElement('peerReviewing', $d_comitedelecture_texte);
$invite = $dom->createElement('invitedCommunication', $d_invite_texte);
$audience = $dom->createElement('audience', $d_audience_texte);
$actes = $dom->createElement('proceedings', $d_actes_texte);
$aparaitre = $dom->createElement('inPress', $d_aparaitre_texte);
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


//creation des attributs dans les balises 
$type_value = $dom->createAttribute('value');
$type_value-> value = $d_type;

$domaine_value = $dom->createAttribute('value');
$domaine_value->value = $d_domaine;

$langue_value = $dom->createAttribute('value');
$langue_value-> value = $d_langue;

$datepublication_when = $dom->createAttribute('when');
$datepublication_when-> value = $d_datepublication;

$datedebutcongres_when = $dom->createAttribute('when');
$datedebutcongres_when-> value = $d_datedebutcongres;

$pays_key = $dom->createAttribute('key');
$pays_key-> value = $d_pays;

$typerapport_value = $dom->createAttribute('value'); 
$typerapport_value-> value = $d_typerapport;

$motscles_n = $dom->createAttribute('n'); 
$motscles_n-> value = "1";

$id_type = $dom->createAttribute('type');
$id_type->value = "DOI";

$dateproduction_when = $dom->createAttribute('when');
$dateproduction_when-> value = $d_dateproduction;

$licence_type = $dom->createAttribute('type');
$licence_type-> value = $d_licence;

$vulgarisation_value = $dom->createAttribute('value'); 
$vulgarisation_value-> value = $d_vulgarisation;

$comitelecture_value = $dom->createAttribute('value'); 
$comitelecture_value-> value = $d_comitedelecture;

$invite_value = $dom->createAttribute('value'); 
$invite_value-> value = $d_invite;

$audience_value = $dom->createAttribute('value'); 
$audience_value -> value = $d_audience; 

$actes_value = $dom->createAttribute('value'); 
$actes_value-> value = $d_actes;

$aparaitre_value = $dom->createAttribute('value'); 
$aparaitre_value-> value = $d_aparaitre; 

$edate_when = $dom->createAttribute('when');
$edate_when-> value = $d_datepublicationelec; 

$serie_value = $dom->createAttribute('value'); 
$serie_value-> value = $d_titrevolume; 

$volume_value = $dom->createAttribute('value'); 
$volume_value-> value = $d_volume;

$numero_value = $dom->createAttribute('value'); 
$numero_value-> value = $d_numero;

$nrapport_n = $dom->createAttribute('n');
$nrapport_n-> value = $d_nrapport; 

$pageid_value = $dom->createAttribute('value'); 
$pageid_value-> value = $d_pageid;

$urleditreu_url = $dom->createAttribute('url'); 
$urleditreu_url-> value = $d_urlcediteur;

$classification_value = $dom->createAttribute('value'); 
$classification_value-> value = $d_classification;

$anrp_value = $dom->createAttribute('value'); 
$anrp_value-> value = $d_projetanr;

$europrojet_value = $dom->createAttribute('value');
$europrojet_value-> value = $d_projeteurop;


//ajout de l'attribut
$type->appendChild($type_value);
$domaine->appendChild($domaine_value);
$langue->appendChild($langue_value);
$datepublication->appendChild($datepublication_when);
$datedebutcongres->appendChild($datedebutcongres_when);
$pays->appendChild($pays_key);
$typerapport->appendChild($typerapport_value);
$motscles->appendChild($motscles_n);
$doipublication->appendChild($id_type);
$dateproduction->appendChild($dateproduction_when);
$licence->appendChild($licence_type);
$vulgarisation->appendChild($vulgarisation_value);
$comitedelecture->appendChild($comitelecture_value);
$invite->appendChild($invite_value);
$audience->appendChild($audience_value);
$actes->appendChild($actes_value);
$aparaitre->appendChild($aparaitre_value);
$datepublicationelec->appendChild($edate_when);
$titrevolume->appendChild($serie_value);
$volume->appendChild($volume_value);
$numero->appendChild($numero_value);
$nrapport->appendChild($nrapport_n);
$pageid->appendChild($pageid_value);
$urlcediteur->appendChild($urleditreu_url);
$classification->appendChild($classification_value);
$projetanr->appendChild($anrp_value);
$projeteurop->appendChild($europrojet_value);

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