<?php get_header() ?>

<!-- formulaire de création de guide  -->
    <div class="container">


<!-- formulaire de renseignement des informations générales du guide -->
        <h2 class="pt-5 pb-4">Informations du guide</h2>

        <form>
            <div class="form-group pb-sm-2">
                <label for="nom_guide">Nom du guide :</label>
                <input type="text" class="form-control" name="nom du guide" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="url_guide">URL du guide :</label>
                <input type="url" class="form-control" name="url du guide" value="http:/numaguide.fr/" required><br><br>
            </div>

            <div class="form-group pb-sm-2">
                <label for="auteur_guide">Auteur(es) du guide :</label>
                <input type="auteur" class="form-control" name="auteur du guide" required>
            </div>

            <div class="form-check pb-sm-2">
                <input type="checkbox" class="form-check-input" name="visibilité du guide" required>
                <label for="visibilite_guide" class="form-check-label">Indexer le guide sur les moteurs de
                    recherches</label>
            </div>


<!-- formulaire de création des sections et slides  -->
            <h2 class="pt-5 pb-sm-4">Création du guide</h2>

            <h3 class="pb-sm-4">Thèmes des couleurs</h3>
            <div class="form-group row pb-sm-2">
                <div class="col-sm">
                    <button type="button" class="btn btn-light btn-lg btn-block">Printemps</button>
                </div>
                <div class="col-sm"> <button type="button" class="btn btn-light btn-lg btn-block">Jour</button>
                </div>
                <div class="col-sm"><button type="button" class="btn btn-light btn-lg btn-block">Nuit</button>
                </div>

            </div>
    
            <div class="container-section" id="container-section">
                <div class="row">
                    <div class="col-sm">
                        <h3>Section</h3>
                    </div>
                    <div class="col-sm">
                        <a class="btn btn-dark float-right" data-toggle="collapse" href="#section_exemple" role="button"
                            aria-expanded="false" aria-controls="section_exemple">Replier la section</a>
                    </div>
                </div>
                <hr>
                <div class="collapse" id="section_exemple">
                    <div class="form-group pb-sm-2">
                        <label for="nom_section1">Nom de la section : </label>
                        <input type="text" class="form-control" name="nom de la section" required>
                    </div>


                    <h4>Slide</h4>

                    <div class="form-group pb-sm-2">
                        <textarea style="width: 700px; height: 200px; font-size: 15px;"
                            placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft"
                            class="form-control"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir">
                    </div>


                    <div class="form-group pb-sm-2">
                        <button type="button" class="btn btn-light btn-lg btn-block">Ajouter une slide</button>
                    </div>

                    <div class="form-group pb-sm-2">
                        <button type="button" class="btn btn-light btn-lg btn-block">Aperçu</button>
                        <button type="button" class="btn btn-light btn-lg btn-block">Valider</button>
                    </div>
                </div>
            </div>

            <!-- Deuxième section pouvant être présente d'emblée, comme sur le template ; retirée pour le moment pour simplifier la création de section par le js ;  -->
            <!-- <div class="row">
                <div class="col-sm">
                    <h3>Section</h3>
                </div>
                <div class="col-sm">
                    <a class="btn btn-dark float-right" data-toggle="collapse" href="#section2" role="button"
                        aria-expanded="false" aria-controls="section2">Replier la section</a>
                </div>

            </div>
            <hr>

            <div id="section2" class="collapse">
                <div class="form-group pb-sm-2">
                    <label for="nom_section1">Nom de la section : </label>
                    <input type="text" class="form-control" name="nom de la section" required>
                </div>
                <h4>Slide</h4>

                <div class="form-group pb-sm-2">
                    <input type="url" class="form-control" name="video" placeholder="URL de la vidéo">
                </div>
                <h4>Slide</h4>

                <div class="form-group pb-sm-2">
                    <input name="video" class="form-control" placeholder="URL de la vidéo" id="a26">
                </div>
                <div class="form-group pb-sm-2">
                    <button type="button" class="btn btn-light btn-lg btn-block">Ajouter une slide</button>
                </div>

                <div class="form-group pb-sm-2">
                    <button type="button" class="btn btn-light btn-lg btn-block">Aperçu</button>
                    <button type="button" class="btn btn-light btn-lg btn-block">Valider</button>
                </div>
            </div>


            <div id="section_exemple">
                <div class="row">
                    <div class="col-sm">
                        <h3>Section</h3>
                    </div>
                    <div class="col-sm">
                        <a class="btn btn-dark float-right" data-toggle="collapse" href="#section2" role="button"
                            aria-expanded="false" aria-controls="section2">Replier la section</a>
                    </div>

                </div>

                <div class="collapse">
                    <div class="form-group pb-sm-2">
                        <label for="nom_section1">Nom de la section : </label>
                        <input type="text" class="form-control" name="nom de la section" required>
                    </div>

                    <h4>Slide</h4>

                    <div class="form-group pb-sm-2">
                        <textarea style="width: 700px; height: 200px; font-size: 15px;"
                            placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft"
                            class="form-control"></textarea>
                        <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir">
                    </div>


                    <div class="form-group pb-sm-2">
                        <button type="button" class="btn btn-light btn-lg btn-block">Ajouter une slide</button>
                    </div>

                    <div class="form-group pb-sm-2">
                        <button type="button" class="btn btn-light btn-lg btn-block">Aperçu</button>
                        <button type="button" class="btn btn-light btn-lg btn-block">Valider</button>
                    </div>
                </div>
            </div> -->


            <div class="form-group pb-sm-2">
                <button type="button" class="btn btn-light btn-lg btn-block btn-add" id="supprimer_section">Supprimer une
                    section</button>
                <button type="button" class="boutonForm boutonAjouter" id="ajout_section">Ajouter une
                    section</button>
            </div>


        </form>