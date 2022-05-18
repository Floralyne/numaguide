

<!Doctype html>
<html>

<head>

    <meta charset="utf-8">



    <title>Création de guides</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    <script src="formulaires.js"></script>

    <link rel="stylesheet" href="formulaires.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script>

    </script>
</head>

<body>

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
                <button type="button" class="btn btn-light btn-lg btn-block btn-add" id="ajout_section">Ajouter une
                    section</button>
            </div>


        </form>

</body>

</html>









































<!-- Ancien code, a priori désuet, mais au cas où :  -->

<!-- <!Doctype html>
<html>

<head>
    <meta charset="utf-8">

    <script src="formulaires.js"></script>

    <title>Création de guides</title>

    <link rel="stylesheet" href="formulaires.css" />

</head>

<body>
    <div id="container">

        <div id="a1">
            <h2>Informations du guide</h2>
            <hr>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
            <div id="a2">
                <label for="nom_guide">Nom du guide :</label>
                <input type="text" name="nom du guide" required><br><br>
            </div>
            <div id="a3">
                <label for="url_guide">URL du guide :</label>
                <input type="url" name="url du guide" value="http:/numaguide.fr/" required><br><br>
            </div>
            <div id="a4">
                <label for="auteur_guide">Auteur du guide :</label>
                <input type="auteur" name="auteur du guide" required><br><br>
            </div>
            <div id="a5">
                <label for="visibilite_guide">Indexer le guide sur les moteurs de recherches : </label>
                <input type="checkbox" name="visibilité du guide" required><br><br>
            </div>
        </form>

        <div id="a6">
            <h2>Création du guide</h2>
            <hr>
        </div>

        <h3 id="a7">Thèmes des couleurs</h3>

        <form method="post" action="" enctype="multipart/form-data">
            <button id="a8">Printemps</button>
            <button id="a9">Jour</button>
            <button id="a10">Nuit</button>
        </form>

        <h3 id="a11">Section 1</h3>
        <button id="a12" class="repli">Replier la section</button>

        <form method="post" action="" enctype="multipart/form-data">
            <div id="a13">
                <label for="nom_section1">Nom de la section : </label>
                <input type="text" name="nom de la section" required>
            </div>
        </form>

        <h4 id="a14">Slide 1</h4>
        <form method="post" action="" enctype="multipart/form-data">
            <textarea style="width: 700px; height: 200px; font-size: 15px;" placeholder="Entrer du texte (Max. 500)"
                maxlength="500" wrap="soft" id="a15"></textarea>
            <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir" id="a16">
            <button id="a17" class="ajout_slide">Ajouter une slide</button>
            <button id="a18">Aperçu</button>
            <button id="a19">Valider</button>
        </form>
        <h3 id="a20">Sections 2</h3>
        <button class="repli" id="a21">Replier la section</button>

        <form method="post" action="" enctype="multipart/form-data">
            <div id="a22">
                <label for="nom_section1">Nom de la section : </label>
                <input type="text" name="nom de la section" required>
            </div>
        </form>
        <h4 id="a23">Slide 2</h4>
        <input type="url" name="video" placeholder="URL de la vidéo" id="a24">
        <h4 id="a25">Slide 2</h4>
        <input type="url" name="video" placeholder="URL de la vidéo" id="a26">
        <button id="a27"class="ajout_slide">Ajouter une slide</button>
        <button id="a28" class="ajout_section">Ajouter une section</button>
        <button id="a29">Aperçu</button>
        <button id="a30">Valider</button>
    </div>
</body>

</html> -->