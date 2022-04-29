<!Doctype html>
    <html>
        
        <head>
            
            <meta charset="utf-8">
            
            <link rel="stylesheet" href="formulaires.css"/>

            <title>Configuration</title>
        
        </head>
        
        <body>

            
            <h3>Définition du mode en page d'acceuil</h3>
            <label for="mode_acceuil">
                <select name="mode_acceuil" required>
                    <option value="">Choix de l'option</option>
                    <option value="portail">Un portail</option>
                    <option value="redirection">Une redirection</option>
                </select>
            </label>
            <h3>Définition du guide numérique</h3>
            <label for="mode_acceuil">
                <select name="mode_acceuil" required>
                    <option value="">Choix du guide</option>
                    <option value="fête_science">Fête de la science</option>
                </select>
            </label>

            <p>Tous les guides dans la catégorie portail seront rajoutés sur le portail Numaguide.</p>
            <button>Valider le choix</button>

            <h3>URL de redirection</h3>
            <input type="url" placeholder="Exemple : https://www.msh-vdl.fr/">
            <button>Valider le choix</button>
        </body>
</html>
