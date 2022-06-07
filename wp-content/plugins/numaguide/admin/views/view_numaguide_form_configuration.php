<div class="container" id="formCrea">

    <div class="titreForm">Configuration de la page d'accueil</div>
    <hr>
    <div class="soustitreForm">Paramètres de la page d'accueil</div>
    <hr>
    <div class="form-group mt-2 mb-2">
        <label for="mode_accueil">Affichage de la page d'accueil : </label>
        <select name="mode_accueil" disabled>
            <option value="redirection">Un guide</option>
            <option value="portail">Une redirection</option>
            <option value="portail">Un portail</option>
        </select>
    </div>

    <hr>

    <div class="form-group mt-2 mb-2">
        <label for="mode_accueil">Choix du guide :</label>
        <select name="mode_accueil" disabled>
            <option value="redirection">Fête de la Science</option>
        </select>
    </div>

    <div><b>OU</b></div>

    <div class="form-group mt-2 mb-2">
        <label>Redirection : </label>
        <input type="url" placeholder="Exemple : https://www.msh-vdl.fr/" disabled>
    </div>

    <button class="boutonForm boutonValider mt-4" disabled>Valider le choix</button>

</div>