<script>
    function urlFonction() {
        if (document.getElementById(
            "nomGuide").value) {
            document.getElementById(
                "urlGuide").value = document.getElementById(
                    "nomGuide").replace(' ', '-').toLowerCase().value;
        } else {
            document.getElementById(
                "secondaryaddress").value = "";
            document.getElementById(
                "secondaryzip").value = "";
        }
    }
</script>

<!-- formulaire de création de guide  -->
<div class="container" id="formCrea">

    <!-- formulaire de renseignement des informations générales du guide -->
    <div class="titreForm">Informations du guide</div>
    <hr>
    <form>
        <div class="form-group pb-sm">
            <label for="nom_guide">Titre du guide :</label>
            <input type="text" class="form-control" name="nom du guide" required>
        </div>
        <div class="form-group pb-sm">
            <label for="auteur_guide">Lien du guide :</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        http://numaguide.msh-vdl.fr/
                    </div>
                </div>
                <input class="form-control" type="text" placeholder="Adresse du guide" required>
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
                <button type="button" class="boutonForm boutonAjouter">NumaGuide</button>
            </div>
            <div class="col"> <button type="button" class="boutonForm boutonAjouter">Pastel</button>
            </div>
            <div class="col"><button type="button" class="boutonForm boutonAjouter">Automne</button>
            </div>
            <div class="col"><button type="button" class="boutonForm boutonAjouter">Sombre</button>
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
                        <button type="button" class="boutonForm boutonAjouter boutonPetit ml-auto mr-auto">Ajouter une
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