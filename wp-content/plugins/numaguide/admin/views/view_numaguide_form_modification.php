<style>
    #wpfooter {
        position: relative;
    }
</style>

<div class="container" id="formCrea">
    <div class="titreForm">Liste des guides</div>
    <hr>
    <nav class="navbar">

        <form class="form">
            <div class="row">
                <div class="col"> <input class="" type="search" placeholder="Rechercher un guide" aria-label="Search"
                        disabled>
                </div>
                <div class="col"> <button class="boutonForm boutonAction" type="submit" disabled>Search</button>
                </div>
            </div>

    </nav>

    </form>

    <div class="titreForm">Informations du guide</div>
    <hr>


    <div class="soustitreForm">Métadonnnées</div>
    <hr>

    <form name="form" action="" method="post" enctype="multipart/form-data">
        <div class="obligatoire">* champs obligatoires</div>
        <div class="form-group pb-sm">
            <label for="nom_guide">Titre du guide* :</label>
            <input type="text" class="form-control" id="nomGuide" name="nomGuide" maxlength="40" disabled>
        </div>

        <div class="form-group pb-sm">
            <label for="auteur_guide">Auteur(e)(s) du guide* :</label>
            <input type="auteur" class="form-control" name="auteurGuide" disabled>
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
                    placeholder="Adresse du guide" disabled>
            </div>
        </div>
        <hr>

        <details>
            <summary>Métadonnées facultatives</summary>
            <div class="mt-3 mb-3 p-3 text-justify" id="infoMeta">Pour chaque type de publication, des métadonnées
                nécessaires à un dépôt sur HAL sont associées. Ces métadonnées seront ensuite associées aux balises xml
                correspondantes, puis générées, prêtes à être copiées et utilisées.</div>
            <div class="form-group pb-sm-2">
                <div class="mb-2" id="metaObli">Les métadonnées suivantes sont obligatoires pour <span class="type">tout
                        type de publication</span> sur HAL :</div>
                <label for="type">Type :</label>
                <select class="form-control" name="type" disabled>
                    <option value="" selected="selected"></option>
                    <option value="ART">Article</option>
                    <option value="COMM">Communication de congrès</option>
                    <option value="POSTER">Communication</option>
                    <option value="OTHER">Autre publication</option>
                    <option value="UNDEFINED">Pré-publication Document de travail</option>
                    <option value="REPORT">Rapport</option>
                </select>
                <small class="text-muted">
                    Le type correspond au type de publication sur HAL.
                </small>
            </div>

            <div class="form-group">
                <label for="domaine">Domaine :</label>
                <select class="form-control" name="domaine" disabled>
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
                <select class="form-control" name="langage" disabled>
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
                <input type="text" class="form-control" name="institution" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="DatedePublication">Date de publication:</label>
                <input type="date" class="form-control" name="DatedePublication" min="1970-01-01" max="2030-12-31" disabled>
                <small class="text-muted">
                </small>
            </div>
            <hr>
            <div class="mb-3" id="metaObli">Les métadonnées supplémentaires suivantes sont obligatoires pour un <span
                    class="type">article</span> sur HAL :</div>

            <div class="form-group pb-sm-2">
                <label for="Nomdelarevue">Nom de la revue :</label>
                <input type="text" class="form-control" name="Nomdelarevue" disabled>
                <small class="text-muted">
                </small>
            </div>
            <hr>
            <div class="mb-3 text-justify" id="metaObli">Les métadonnées supplémentaires suivantes sont obligatoires
                pour une <span class="type">communication</span> et une <span class="type">communication de
                    congrès</span> sur HAL :</div>

            <div class="form-group pb-sm-2">
                <label for="TitreduCongres">Titre du congrès :</label>
                <input type="text" class="form-control" name="TitreduCongres" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Datedebutducongres">Date de début du congrès :</label>
                <input type="date" class="form-control" name="Datedebutducongres" min="1970-01-01" max="2030-12-31" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="ville">Ville :</label>
                <input type="text" class="form-control" name="ville" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="pays">Pays :</label>
                <select class="form-control" name="pays" disabled>
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

            <div class="mb-3 text-justify" id="metaObli">Les métadonnées supplémentaires suivantes sont obligatoires
                pour un <span class="type">type autre</span> de publication sur HAL :</div>

            <div class="form-group pb-sm-2">
                <label for="description">Description :</label>
                <textarea type="text" class="form-control" name="description" rows="3" disabled></textarea>
                <small class="text-muted">
                </small>
            </div>
            <hr>
            <div class="mb-3 text-justify" id="metaObli">Les métadonnées supplémentaires suivantes sont obligatoires
                pour un <span class="type">rapport</span> sur HAL :</div>

            <div class="form-group pb-sm-2">
                <label for="typerapport">Type de rapport :</label>
                <select class="form-control" name="typerapport" disabled>
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

            <div class="mb-3 text-justify" id="metaObli">Les métadonnées supplémentaires suivantes sont facultatives
                pour <span class="type">tout dépôt</span> sur HAL :</div>


            <div class="form-group mt-1">
                <label for="Soustitre">Sous-titre :</label>
                <input type="text" class="form-control" name="Soustitre" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="resume">Résumé :</label>
                <textarea type="text" class="form-control" name="resume" rows="5" disabled></textarea>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="motscles">Mots clés :</label>
                <input type="text" class="form-control" name="motscles" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="DOIpublication">DOI de la publication :</label>
                <input type="text" class="form-control" name="DOIpublication" disabled>
                <small class="text-muted">
                </small>
            </div>



            <div class="form-group pb-sm-2">
                <label for="Donneesassociees">Données associées :</label>
                <input type="text" class="form-control" name="Donneesassociees" disabled>
                <small class="text-muted">
                </small>
            </div>


            <div class="form-group pb-sm-2">
                <label for="Datedeproduction">Date de production :</label>
                <input type="date" class="form-control" name="Datedeproduction" min="1970-01-01" max="2030-12-31" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="licence">Licence :</label>
                <select class="form-control" name="licence" disabled>
                    <option value="" selected="selected"></option>
                    <option value="http://creativecommons.org/licenses/by/">CC BY - Paternité</option>
                    <option value="http://creativecommons.org/licenses/by-nc/">CC BY NC - Paternité - Pas d'utilisation
                        commerciale</option>
                    <option value="http://creativecommons.org/licenses/by-nd/">CC BY ND - Paternité - Pas de
                        modifications</option>
                    <option value="http://creativecommons.org/licenses/by-sa/">CC BY SA - Paternité - Partage selon les
                        Conditions Initiales</option>
                    <option value="http://creativecommons.org/licenses/by-nc-nd/">CC BY NC ND - Paternité - Pas
                        d'utilisation commerciale - Pas de modification</option>
                    <option value="http://creativecommons.org/licenses/by-nc-sa/">CC BY NC SA - Paternité - Pas
                        d'utilisation commerciale - Partage selon les Conditions Initiales</option>
                    <option value="http://creativecommons.org/choose/mark/">NC - Marque du Domaine Public</option>
                    <option value="http://creativecommons.org/publicdomain/zero/1.0/">CC0 - Transfert dans le Domaine
                        Public</option>
                    <option value="http://hal.archives-ouvertes.fr/licences/etalab/">ETALAB - Licence Ouverte</option>
                    <option value="http://hal.archives-ouvertes.fr/licences/copyright/">Copyright (Tous droits réservés)
                    </option>
                    <option value="http://hal.archives-ouvertes.fr/licences/publicDomain/">Domaine public</option>
                </select>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="source">Source :</label>
                <input type="text" class="form-control" name="source" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="vulgarisation">Vulgarisation :</label>
                <select name="vulgarisation" class="form-control" disabled>
                    <option value="" selected="selected"></option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="comitelecture">Comité de lecture :</label>
                <select class="form-control" name="comitelecture" disabled>
                    <option value="" selected="selected"></option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="invite">Invité :</label>
                <select class="form-control" name="invite" disabled>
                    <option value="" selected="selected"></option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="audience">Audience :</label>
                <select class="form-control" name="audience" disabled>
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
                <select class="form-control" name="actes" disabled>
                    <option value="" selected="selected"></option>
                    <option value="">Non</option>
                    <option value="1">Oui</option>
                </select>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Aparaitre">Á paraitre :</label>
                <select class="form-control" name="Aparaitre" disabled>
                    <option value="" selected="selected"></option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="edate">Date de publication électronique :</label>
                <input type="date" class="form-control" name="edate" min="1970-01-01" max="2030-12-31" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Titrevolume">Titre du volume :</label>
                <input type="text" class="form-control" name="Titrevolume" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="volume">Volume :</label>
                <input type="text" class="form-control" name="volume" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="numero">Numéro :</label>
                <input type="text" class="form-control" name="numero" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Numerorapport">N°rapport :</label>
                <input type="text" class="form-control" name="Numerorapport" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="PageID">Page Indentifiant :</label>
                <input type="text" class="form-control" name="PageID" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Editeurcommercial">Editeur commercial :</label>
                <input type="text" class="form-control" name="Editeurcommercial" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Directeurcollection">Directeur de collection :</label>
                <input type="text" class="form-control" name="Directeurcollection" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Editeurscientifique">Editeur scientifique :</label>
                <input type="text" class="form-control" name="Editeurscientifique" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Organisateurcongres">Organisateur du congrès :</label>
                <input type="text" class="form-control" name="Organisateurcongres" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Urlediteur">URL du congrès ou de l'éditeur :</label>
                <input type="text" class="form-control" name="Urlediteur" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="classification">Classification :</label>
                <textarea type="text" class="form-control" name="classification" rows="3" disabled></textarea>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="commentaire">Commentaire :</label>
                <textarea type="text" class="form-control" name="commentaire" rows="5" disabled></textarea>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Referenceinterne">Reference interne :</label>
                <input type="text" class="form-control" name="Referenceinterne" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Collaborationprojet">Collaboration / Projet :</label>
                <input type="text" class="form-control" name="Collaborationprojet" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Voiraussi">Voir aussi :</label>
                <input type="text" class="form-control" name="Voiraussi" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Projetanr">Projet ANR :</label>
                <input type="text" class="form-control" name="Projetanr" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="Projeteuropeen">Projet européen :</label>
                <input type="text" class="form-control" name="Projeteuropeen" disabled>
                <small class="text-muted">
                </small>
            </div>

            <div class="form-group pb-sm-2">
                <label for="financement">Financement :</label>
                <textarea type="text" class="form-control" name="financement" rows="3" disabled></textarea>
                <small class="text-muted">
                </small>
            </div>

        </details>

        <input class="boutonForm boutonValider mt-3" type=submit name="ok" value="Envoyer" disabled>
        <hr>
        <div class="titreForm">Création du guide</div>
        <hr>
        <div class="soustitreForm">Thèmes colorés</div>
        <div class="form-group row">
            <div class="col">
                <input type="radio" name="options" id="option1" autocomplete="off" data-toggle="collapse"
                    aria-expanded="false" aria-controls="collapseExample" data-target="#ete" disabled>
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
                    aria-expanded="false" aria-controls="collapseExample" data-target="#pastel" disabled>
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
                    aria-expanded="false" aria-controls="collapseExample" data-target="#campagne" disabled>
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
                    aria-expanded="false" aria-controls="collapseExample" data-target="#sombre" disabled>
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
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-1" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-2" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide1-3" disabled></textarea>
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
                            name="slide2-1" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-2" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-3" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-4" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide2-5" disabled></textarea>
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
                            name="slide3-1" disabled></textarea>
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
                            name="slide4-1" disabled></textarea>
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
                            name="slide5-1" disabled></textarea>
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
                            name="slide6-1" disabled></textarea>
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
                            name="slide7-1" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide7-2" disabled></textarea>
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
                            name="slide8-1" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide8-2" disabled></textarea>

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
                        <input type="file" name="slide9-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            disabled />
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
                            name="slide10-2" disabled></textarea>
                        <input type="file" name="slide10-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            disabled />
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
                        <input type="file" name="slide11-1" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" />
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide11-2" disabled></textarea>
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
                            name="slide12-2" disabled></textarea>
                        <input type="file" name="slide12-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            disabled />
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
                        <textarea type="text" class="form-control m-1" rows="1" name="slide13-1" disabled></textarea>
                        <input type="file" name="slide13-2" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            disabled />
                        <textarea type="text" class="form-control m-1" rows="1" name="slide13-3" disabled></textarea>
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
                        <input type="file" name="slide14-1" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            disabled />
                        <textarea type="text" class="form-control m-1" rows="1" name="slide14-2" disabled></textarea>
                        <input type="file" name="slide14-3" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"
                            disabled />
                        <textarea type="text" class="form-control m-1" rows="1" name="slide14-4" disabled></textarea>
                    </div>
                </div>
            </div>
        </details>
        <hr>

        <details>
            <summary>Slides vidéos</summary>
            <div class="mt-3 mb-3 p-3 text-justify" id="infoMeta"><span class="comment">Comment importer une vidéo
                    ?</span><br>
                <br>- Si l'hébergeur est <span class="type">Youtube</span>, veuillez copier le lien direct de la vidéo
                <br> <span class="typePubli">(Exemple : https://www.youtube.com/watch?v=1eXOOotL5pk)</span>
                <br>- Si l'hébergeur est <span class="type">Dailymotion</span>, veuillez copier le lien direct de la
                vidéo <br><span class="typePubli">(Exemple : https://www.dailymotion.com/video/x7wt1qq)</span>
                <br>- Si l'hébergeur est <span class="type">Canal U</span>, veuillez copier le lien embed de la vidéo
                <br><span class="typePubli">(Exemple : https://www.canal-u.tv/embed/116919?t=0)</span>
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
                        <input type="text" name="slide15-1" class="form-control" placeholder="Lien de la vidéo"
                            disabled />
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
                        <input type="text" name="slide16-1" class="form-control" placeholder="Lien de la vidéo"
                            disabled />
                        <textarea type="text" class="form-control m-1" rows="1" name="slide16-2" disabled></textarea>
                        <textarea type="text" class="form-control m-1" rows="1" name="slide16-3" disabled></textarea>
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
                        <textarea type="text" class="form-control m-1" rows="1" name="slide17-1" disabled></textarea>
                        <input type="text" name="slide17-2" class="form-control" placeholder="Lien de la vidéo"
                            disabled />
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
                        <textarea type="text" name="slide18-1" class="form-control m-1" id="exampleFormControlTextarea1"
                            rows="1" disabled></textarea>
                        <textarea type="text" name="slide18-2" class="form-control m-1" id="exampleFormControlTextarea1"
                            rows="1" disabled></textarea>
                        <textarea type="text" name="slide18-3" class="form-control m-1" id="exampleFormControlTextarea1"
                            rows="1" disabled></textarea>
                        <textarea type="text" name="slide18-4" class="form-control m-1" id="exampleFormControlTextarea1"
                            rows="1" disabled></textarea>
                        <textarea type="text" name="slide18-5" class="form-control m-1" id="exampleFormControlTextarea1"
                            rows="1" disabled></textarea>
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
                            name="slide19-1" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-2" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-3" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-4" disabled></textarea>
                        <textarea type="text" class="form-control m-1" id="exampleFormControlTextarea1" rows="1"
                            name="slide19-5" disabled></textarea>
                    </div>
                </div>
        </details>
        <input type=submit name="ok" class="boutonForm boutonValider mt-5" value="Créer le mini guide" disabled>
</div>
</form>

</div>