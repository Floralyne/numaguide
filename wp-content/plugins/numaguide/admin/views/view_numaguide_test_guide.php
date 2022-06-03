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
            <input type="text" class="form-control" id="nomGuide" name="nomGuide" maxlength="40">
        </div>

        <div class="form-group pb-sm">
            <label for="auteur_guide">Auteur(e)(s) du guide* :</label>
            <input type="auteur" class="form-control" name="auteurGuide">
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
            <div class="form-group mt-1">
                <label for="subtitle">Sous-titre : <span class="typeTous">(0)</span></label>
                <input type="text" class="form-control" name="subtitle">
            </div>
            <div class="form-group pb-sm-2">
                <label for="type">Type : <span class="typeTous">(0)</span></label>
                <select class="form-control" id="type">
                    <option>------</option>
                    <option>Article</option>
                    <option>Communication</option>
                    <option>Pré-publication</option>
                    <option>Rapport</option>
                </select>
                <small class="text-muted">
                Correspond au type de publication.
</small>
            </div>

            <div class="form-group">
                <label for="domain">Domaine : <span class="typeTous">(0)</span></label>
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
                <label for="language">Langue du document : <span class="typeTous">(0)</span></label>
                <select class="form-control" id="language">
                    <option value="FR">Français</option>
                    <option value="EN">Anglais</option>
                    <option value="IT">Italien</option>
                    <option value="ES">Espagnol</option>
                    <option value="DE">Allemand</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                    <label for="authorityInstitution">Institution : <span class="typeTous">(0)</span></label>
                    <input type="text" class="form-control" name="identifier">
                </div>
<hr>
            <div class="form-group pb-sm-2">
                <label for="date">Date : <span class="typeTous">(1)</span></label>
                <input type="date" class="form-control" name="date" min="1970-01-01" max="2030-12-31">
            </div>

            

            <div class="form-group pb-sm-2">
                <label for="description">Description :</label>
                <textarea type="text" class="form-control" name="description" rows="3"></textarea>
            </div>

            <div class="form-group pb-sm-2">
                <label for="keyword">Mots clés :</label>
                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button"
                    aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
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
                    <label for="peerReviewing">Comité de lecture </label>
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

    //Slide 9 image
    if ($_FILES['slide9-1'] != NULL) {

        

    }

    //Slide avec trois textes
    if ($_POST['slide1-1'] !== ''&$_POST['slide1-2'] !== ''&$_POST['slide1-3'] !== '') {
        
    }

    //Slides avec un texte
    if ($_POST['slide1text-1'] !== '') {
        
    }

    //Slides avec deux textes
    if ($_POST['slide2text-1'] !== ''&$_POST['slide2text-2'] !== '') {
           }

    //Slides avec cinq textes
    if ($_POST['slide5text-1'] !== ''&$_POST['slide5text-2'] !== ''&$_POST['slide5text-3'] !== ''&$_POST['slide5text-4'] !== ''&$_POST['slide5text-5'] !== '') {

    }

    if ($slide !== null) {
        apply_filters('ng_creer_guide', $ng_guide_nom, $slide);
    }
}

?>