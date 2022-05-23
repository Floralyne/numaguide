<!-- formulaire de création de guide  -->
<div class="container" id="formCrea">

    <!-- formulaire de renseignement des informations générales du guide -->
    <div class="titreForm">Informations du guide</div>
    <hr>
    <form>
        <div class="form-group pb-sm">
            <label for="nom_guide">Titre du guide :</label>
            <input type="text" class="form-control" id="nomGuide" onChange="urlFonction()" name="nom du guide" required>
        </div>
        <div class="form-group pb-sm">
            <label for="auteur_guide">Lien du guide :</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        http://numaguide.msh-vdl.fr/
                    </div>
                </div>
                <input class="form-control" type="text" id="urlGuide" placeholder="Adresse du guide" required>
            </div>
        </div>
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
                <button type="button" class="boutonForm boutonAjouter" data-toggle="collapse" aria-expanded="false"
                    aria-controls="collapseExample" data-target="#numaguide">NumaGuide</button>
                <div class="collapse" id="numaguide">
                    <div class="card card-body" id="palettenumaguide">
                        <div id="numa363440">#363440</div>
                        <div id="numa35A6B1">#35A6B1</div>
                        <div id="numaE57654">#E57654</div>
                        <div id="numaE99350">#E99350</div>
                        <div id="numaFFF">#FFFFFF</div>
                    </div>
                </div>
                </button>
            </div>
            <div class="col">
                <button type="button" class="boutonForm boutonAjouter" data-toggle="collapse" aria-expanded="false"
                    aria-controls="collapseExample" data-target="#pastel">Pastel</button>
                <div class="collapse" id="pastel">
                    <div class="card card-body" id="palettepastel">
                        <div id="numaEEF9FF">#EEF9FF</div>
                        <div id="numaFFF7FC">#FFF7FC</div>
                        <div id="numaFFFDED">#FFFDED</div>
                        <div id="numaFFF7EC">#FFF7EC</div>
                        <div id="numaFFFBFB">#FFFBFB</div>
                    </div>
                </div>
                </button>
            </div>
            <div class="col">
                <button type="button" class="boutonForm boutonAjouter" data-toggle="collapse" aria-expanded="false"
                    aria-controls="collapseExample" data-target="#automne">Automne</button>
                <div class="collapse" id="automne">
                    <div class="card card-body" id="paletteautomne">
                        <div id="numaC58768">#C58768</div>
                        <div id="numa313232">#313232</div>
                        <div id="numaF5F1DF">#F5F1DF</div>
                        <div id="numaA2B1A7">#A2B1A7</div>
                        <div id="numa817677">#817677</div>
                    </div>
                </div>
                </button>
            </div>
            <div class="col">
                <button type="button" class="boutonForm boutonAjouter" data-toggle="collapse" aria-expanded="false"
                    aria-controls="collapseExample" data-target="#sombre">Sombre</button>
                <div class="collapse" id="sombre">
                    <div class="card card-body" id="palettesombre">
                        <div id="numa002029">#002029</div>
                        <div id="numa0C1D1D">#0C1D1D</div>
                        <div id="numa0E1717">#0E1717</div>
                        <div id="numa170E1D">#170E1D</div>
                        <div id="numa100F0F">#100F0F</div>
                    </div>
                </div>
                </button>
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
                    <div>Slide :</div>
                    <div class="form-group pb-sm">
                        <textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft"
                            class="form-control mb-3 mt-3"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir">
                    </div>
                    <div class="form-group">
                        <div id="select_slide">
                            <label for="select-slide">Choisir un format de slide :</label>
                            <select>
                                <option value="">------</option>
                                <option value="1">Slide 1</option>
                                <option value="2">Slide 2</option>
                                <option value="3">Slide 3</option>
                                <option value="4">Slide 4</option>
                                <option value="5">Slide 5</option>
                                <option value="6">Slide 6</option>
                                <option value="7">Slide 7</option>
                                <option value="8">Slide 9</option>
                                <option value="9">Slide 10</option>
                                <option value="10">Slide 11</option>
                                <option value="11">Slide 12</option>
                                <option value="12">Slide 13</option>
                                <option value="13">Slide 14</option>
                                <option value="14">Slide 15</option>
                                <option value="15">Slide 16</option>
                                <option value="16">Slide 17</option>
                                <option value="18">Slide 18</option>
                            </select>
                        </div>
                        <button type="button" class="boutonForm boutonAjouter boutonPetit ml-auto mr-auto" onclick="format_slide()">Ajouter une
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
                    <button type="button" class="boutonForm boutonAjouter" id="ajout_section">Ajouter une
                        section</button>
                </div>
            </div>
            <hr>
            <button type="button" class="boutonForm boutonValider boutonPetit ml-auto mr-auto" id="validerGuide">Créer
                le
                guide</button>
        </div>
    </form>