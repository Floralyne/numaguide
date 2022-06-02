<!-- formulaire de création de guide  -->
<div class="container" id="formCrea">

    <!-- formulaire de renseignement des informations générales du guide -->
    <div class="titreForm">Informations du guide</div>
    <hr>
    <form>
        <div class="form-group pb-sm">
            <label for="nom_guide">Titre du guide :</label>
            <input type="text" class="form-control" id="nomGuide" onChange="urlFonction()" name="nom du guide" maxlength="40" required>
        </div>
        <!-- <div class="form-group pb-sm">
            <label for="auteur_guide">Lien du guide :</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        http://numaguide.msh-vdl.fr/
                    </div>
                </div>
                <input class="form-control" type="text" pattern="/\W|_/g" maxlength="20" id="urlGuide" placeholder="Adresse du guide" required>
            </div>
        </div> -->
        <div class="form-group pb-sm">
            <label for="auteur_guide">Auteur(es) du guide :</label>
            <input type="auteur" class="form-control" name="auteur du guide" required>
            <small class="text-muted">
                Nom de famille en majuscules, prénom en minuscules, séparer les noms d'une virgule si plusieurs auteurs.
            </small>
        </div>
        <div class="form-check" id="divIndexer">
            <input id="indexer" type="checkbox" class="form-check-input mr-2 mt-auto mb-auto" name="visibilité du guide"
                required>
            <label for="visibilite_guide" class="form-check-label">Indexer le guide sur les moteurs de
                recherches</label>
        </div>
        <!-- formulaire de création des sections et slides  -->
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
            <label class="boutonForm boutonAjouter">
                    <input type="radio" name="options" id="option1" autocomplete="off" data-toggle="collapse"
                        aria-expanded="false" aria-controls="collapseExample" data-target="#campagne">Campagne
                </label>
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
            <label class="boutonForm boutonAjouter">
                    <input type="radio" name="options" id="option1" autocomplete="off" data-toggle="collapse"
                        aria-expanded="false" aria-controls="collapseExample" data-target="#sombre">Sombre
                </label>
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
        <div class="container-section" id="container-section">
            <details open>
                <summary class="soustitreForm">Section</summary>
                <hr>
                <div id="section_exemple">
                    <div class="form-group pb-2">
                        <label for="nom_section1">Nom de la section : </label>
                        <input type="text" class="form-control" name="nom de la section" required>
                    </div>
                    <hr>
                    <!-- <div>Slide :</div>
                    <div class="form-group pb-sm">
                        <textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft"
                            class="form-control mb-3 mt-3"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir">
                    </div> -->
                    <div class="form-group">
                        <button type="button" id="add_field_button" class="boutonForm boutonAjouter boutonPetit ml-auto mr-auto format_slide">Ajouter une
                            slide</button>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <button type="button" class="boutonForm boutonAction">Aperçu</button>
                        </div>
                        <div class="col-sm">
                            <button type="button" class="boutonForm boutonValider">Valider</button>
                        </div>
                    </div>
                </div>
            </details>
        </div>
        <div class="form-group">
            <div class="form-group row">
                <div class="col-sm">
                    <button type="button" class="boutonForm boutonSupprimer" id="supprimer_section"
                        onClick="alert('Supprimer ?')">Supprimer une section</button>
                </div>
                <div class="col-sm">
                    <button type="button" class="boutonForm boutonAjouter" id="ajout_section" style="visibility: visible" >Ajouter une
                        section</button>
                </div>
            </div>
            <hr>
            <button type="button" class="boutonForm boutonValider boutonPetit ml-auto mr-auto" id="validerGuide">Créer
                le
                guide</button>
        </div>
    </form>