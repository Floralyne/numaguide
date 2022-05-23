<div class="container">
        <h2 class="pb-sm-4">Renseignement des métadonnées</h2>

        <form name="form" action="" method="post">
            <div class="form-group pb-sm-2">
                <label for="title">Titre :</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="author">Auteur(s) :</label>
                <input type="text" class="form-control" name="author" required>
            </div>

            <div class="form-group pb-sm-2">
                <label for="url">URL</label>
                <input type="url" class="form-control" value="https://numaguide.fr/" required>
            </div>
            <input type=submit name="ok" value="Envoyer">
        </form>
<?php
        if(isset($_POST['ok'])){
    $donnee_titre = $_POST['title'];
    $donnee_auteur = $_POST['author'];
}
?>

<?php

$dom = new DOMDocument('1.0', 'utf-8'); 
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;

//create the main tags, without values
$donnees = $dom->createElement('donnees');
$donnee_1 = $dom->createElement('donnee');
// create some tags with values
$nom_1 = $dom->createElement('nom', $donnee_titre);
$domaine_1 = $dom->createElement('domaine', 'culture et ');
$id_1 = $dom->createElement('id', '1');

//create  and append an attribute
$attr_1 = $dom->createAttribute('version');
$attr_1->value = '1.0';
//append the attribute
$id_1->appendChild($attr_1);

//create the second tag donnee with different namespace
$namespace = 'www.example.com/libraryns/1.0';

//include the namespace prefix in the donnees tag
$donnees->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:ns', $namespace);
$donnee_2 = $dom->createElementNS($namespace,'ns:donnee');
$nom_2 = $dom->createElementNS($namespace, 'ns:nom');

//create a CDATA section (that is another DOMNode instance) and put it inside the name tag
$nom_cdata = $dom->createCDATASection('Guide');
$nom_2->appendChild($nom_cdata);
$domaine_2 = $dom->createElementNS($namespace, 'ns:domaine', 'sciences humaines et sociales');
$id_2 = $dom->createElementNS($namespace, 'ns:id', '2');

//create the XML structure
$donnees->appendChild($donnee_1);
$donnee_1->appendChild($nom_1);
$donnee_1->appendChild($domaine_1);
$donnee_1->appendChild($id_1);
$donnees->appendChild($donnee_2);
$donnee_2->appendChild($nom_2);
$donnee_2->appendChild($domaine_2);
$donnee_2->appendChild($id_2);

$dom->appendChild($donnees);

//saveXML() method returns the XML in a String
$tag = $dom->saveXML($dom->documentElement);

if(isset($_POST['ok'])){
    echo htmlspecialchars($tag);
}
?>
<div>
