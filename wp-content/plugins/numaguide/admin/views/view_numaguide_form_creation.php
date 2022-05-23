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
<div class="container">


    <!-- formulaire de renseignement des informations générales du guide -->
    <div class="titreForm">Informations du guide</div>
    <hr>

        <form>
            <div class="form-group pb-sm-2">
                <label for="nom_guide">Nom du guide :</label>
                <input type="text" id="nomGuide" class="form-control" name="nom du guide" onchange="urlFonction()" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="url_guide">URL du guide :</label>
                <input type="url" id="urlGuide" class="form-control" name="url du guide" required>
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
        <div class="titreForm">Création du guide</div>
        <hr>

        <div class="soustitreForm">Thèmes colorés</div>
        <div class="form-group row pb-sm-2">
            <div class="col-sm">
                <button type="button" class="boutonForm boutonAjouter">Printemps</button>
            </div>
            <div class="col-sm"> <button type="button" class="boutonForm boutonAjouter">Jour</button>
            </div>
            <div class="col-sm"><button type="button" class="boutonForm boutonAjouter">Nuit</button>
            </div>

        </div>

        <div class="container-section" id="container-section">
            <details open>
                <summary class="soustitreForm">Section</summary>

                <hr>
                <div id="section_exemple">
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
                        <button type="button" class="boutonForm boutonAjouter">Ajouter une slide</button>
                    </div>

                    <div class="form-group pb-sm-2">
                        <button type="button" class="boutonForm boutonAction">Aperçu</button>
                        <button type="button" class="boutonForm boutonValider">Valider</button>
                    </div>
                </div>
        </div>



        <div class="form-group pb-sm-2">
            <button type="button" class="boutonForm boutonSupprimer" id="supprimer_section"
                onClick="alert('Supprimer ?')">Supprimer une
                section</button>
            <button type="button" class="boutonForm boutonAjouter" id="ajout_section">Ajouter une
                section</button>
            <button type="button" class="btn btn-light btn-lg btn-block btn-add" id="ajout_section">CREER LE
                GUIDE</button>
        </div>


    </form>