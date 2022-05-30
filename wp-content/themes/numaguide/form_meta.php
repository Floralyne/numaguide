<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="form_meta.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Métadonnées</title>
</head>

<body>
    <div class="container">
        <h2 class="pb-sm-4">Renseignement des métadonnées</h2>

        <form>
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

            <div class="form-group pb-sm-2">
                <label for="type">Type</label>
                <select name="type" class="form-control">
                    <option value="" selected="selected">Choisissez un type</option>
                    <option value="ART">Article dans une revue</option>
                    <option value="COMM">Communication dans un congrès</option>
                    <option value="POSTER">Poster</option>
                    <option value="OUV">Ouvrage</option>
                    <option value="COUV">Chapitre d'ouvrage</option>
                    <option value="DOUV">Direction d'ouvrage, Proceedings, Dossier</option>
                    <option value="PATENT">Brevet</option>
                    <option value="OTHER">Autre publication</option>
                    <option value="UNDEFINED">Pré-publication, Document de travail</option>
                    <option value="REPORT">Rapport</option>
                    <option value="THESE">Thèse</option>
                    <option value="HDR">HDR</option>
                    <option value="LECTURE">Cours</option>
                    <option value="IMG">Image</option>
                    <option value="VIDEO">Vidéo</option>
                    <option value="SON">Son</option>
                </select>
                <p class="legende">Obligatoire sur HAL : Toutes publications.</p>
            </div>

            <div class="form-group">
                <label for="domaine">Domaine :</label>
                <select class="form-control" name="domaine">
                    <option value="" selected="selected">Choisissez un domaine</option>
                    <option value="shs">Sciences de l'Homme et Société</option>
                    <option value="shs.anthro-bio">Anthropologie biologique</option>
                    <option value="shs.anthro-se">Anthropologie sociale et ethnologie</option>
                    <option value="shs.archeo">Archéologie et Préhistoire</option>
                    <option value="shs.archi">Architecture, aménagement de l'espace</option>
                    <option value="shs.art">Art et histoire de l'art</option>
                    <option value="shs.class">Etudes classiques</option>
                    <option value="shs.demo">Démographie</option>
                    <option value="shs.droit">Droit</option>
                    <option value="shs.eco">Economies et finances</option>
                    <option value="shs.edu">Education</option>
                    <option value="shs.envir">Etudes de l'environnement</option>
                    <option value="shs.genre">Etudes sur le genre</option>
                    <option value="shs.geo">Géographie</option>
                    <option value="shs.gestion">Gestion et management</option>
                    <option value="shs.hisphilso">Histoire, Philosophie et Sociologie des sciences</option>
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
                    <option value="shs.stat">Méthodes et statistiques</option>
                </select>
                <p class="legende">Obligatoire sur HAL : Toutes publications.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="domaine">Sous-domaine :</label>
                <select class="form-control" name="domaine">
                    <option value="" selected="selected">Choisissez un domaine</option>
                    <option value="shs">Sciences de l'Homme et Société</option>
                    <option value="shs.anthro-bio">Anthropologie biologique</option>
                    <option value="shs.anthro-se">Anthropologie sociale et ethnologie</option>
                    <option value="shs.archeo">Archéologie et Préhistoire</option>
                    <option value="shs.archi">Architecture, aménagement de l'espace</option>
                    <option value="shs.art">Art et histoire de l'art</option>
                    <option value="shs.class">Etudes classiques</option>
                    <option value="shs.demo">Démographie</option>
                    <option value="shs.droit">Droit</option>
                    <option value="shs.eco">Economies et finances</option>
                    <option value="shs.edu">Education</option>
                    <option value="shs.envir">Etudes de l'environnement</option>
                    <option value="shs.genre">Etudes sur le genre</option>
                    <option value="shs.geo">Géographie</option>
                    <option value="shs.gestion">Gestion et management</option>
                    <option value="shs.hisphilso">Histoire, Philosophie et Sociologie des sciences</option>
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
                    <option value="shs.stat">Méthodes et statistiques</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="language">Langue :</label>
                <select class="form-control" name="language">
                    <option value="fr">français</option>
                    <option value="en">anglais</option>
                    <option value="de">allemand</option>
                    <option value="it">italien</option>
                    <option value="es">espagnol</option>
                </select>
                <p class="legende">Obligatoire sur HAL : Article dans une revue, Communication dans un congrès, Poster,
                    Ouvrage,
                    Chapitre d'ouvrage, Direction d'ouvrage, Proceedings, Dossier, Brevet, Autres publications, Document
                    de
                    travail,
                    Rapport, Thèse, HDR, Cours.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="date">Date de publication :</label>
                <input type="date" class="form-control" value="2022-12-01" min="1990-01-01">
                <p class="legende">Obligatoire sur HAL : Toutes publications.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="description">Description :</label>
                <input type="text" class="form-control" placeholder="Entrez une description de la publication.">
                <p class="legende">Obligatoire sur HAL : Autre publication.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="conferenceStartDate">Date de la conférence :</label>
                <input type="date" class="form-control" value="2022-12-01" min="1990-01-01">
                <p class="legende">Obligatoire sur HAL : Conférence.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="city">Ville :</label>
                <input type="text" class="form-control" placeholder="Entrez une ville.">
                <p class="legende">Obligatoire sur HAL : Conférence.</p>
            </div>

            <div class="form-group pb-sm-3">
                <label for="conferenceTitle">Titre de la conférence :</label>
                <input type="text" class="form-control" placeholder="Entrez le titre de la conférence.">
                <p class="legende">Obligatoire sur HAL : Conférence.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="lectureType">Niveau du cours :</label>
                <select class="form-control" name="lectureType">
                    <option value="" selected="selected">------</option>
                    <option value="1">DEA</option>
                    <option value="2">Ecole thématique</option>
                    <option value="7">3ème cycle</option>
                    <option value="10">Ecole d'ingénieur</option>
                    <option value="11">Licence</option>
                    <option value="12">Master</option>
                    <option value="13">Doctorat</option>
                    <option value="14">DEUG</option>
                    <option value="15">Maitrise</option>
                </select>
                <p class="legende">Obligatoire sur HAL : Cours.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="imageType">Type d'image</label>
                <select class="form-control" name="imageType">
                    <option value="" selected="selected">------</option>
                    <option value="1">Photographie</option>
                    <option value="2">Dessin</option>
                    <option value="3">Carte</option>
                    <option value="4">Illustration</option>
                    <option value="5">Gravure</option>
                    <option value="6">Plan</option>
                    <option value="8">Image de synthèse</option>
                </select>
                <p class="legende">Obligatoire sur HAL : Image.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="country">Pays</label>
                <select class="form-control" name="country">
                    <option value="" selected="selected">------</option>
                    <option value="fr">France </option>
                    <option value="af">Afghanistan </option>
                    <option value="za">Afrique du Sud </option>
                    <option value="al">Albanie </option>
                    <option value="dz">Algerie </option>
                    <option value="de">Allemagne </option>
                    <option value="ad">Andorre </option>
                    <option value="ao">Angola </option>
                    <option value="ai">Anguilla </option>
                    <option value="aq">Antarctique</option>
                    <option value="ag">Antigua-et-Barbuda</option>
                    <option value="an">Antilles néerlandaises</option>
                    <option value="sa">Arabie Saoudite </option>
                    <option value="ar">Argentine </option>
                    <option value="am">Armenie </option>
                    <option value="aw">Aruba</option>
                    <option value="au">Australie </option>
                    <option value="at">Autriche </option>
                    <option value="az">Azerbaidjan </option>
                    <option value="bs">Bahamas </option>
                    <option value="bd">Bangladesh </option>
                    <option value="bb">Barbade </option>
                    <option value="bh">Bahrein </option>
                    <option value="be">Belgique </option>
                    <option value="bz">Belize </option>
                    <option value="bm">Bermudes </option>
                    <option value="by">Bielorussie </option>
                    <option value="bo">Bolivie </option>
                    <option value="bw">Botswana </option>
                    <option value="bt">Bhoutan </option>
                    <option value="ba">Boznie_Herzegovine </option>
                    <option value="br">Brésil</option>
                    <option value="bn">Brunéi Darussalam</option>
                    <option value="bg">Bulgarie </option>
                    <option value="bf">Burkina_Faso </option>
                    <option value="bi">Burundi </option>
                    <option value="kh">Cambodge </option>
                    <option value="cm">Cameroun </option>
                    <option value="ca">Canada </option>
                    <option value="cv">Cap-Vert </option>
                    <option value="cl">Chili </option>
                    <option value="cn">Chine </option>
                    <option value="cy">Chypre </option>
                    <option value="co">Colombie </option>
                    <option value="km">Colombie </option>
                    <option value="cg">Congo </option>
                    <option value="cd">Congo-Kinshasa</option>
                    <option value="kp">Corée du Nord </option>
                    <option value="kr">Corée du Sud </option>
                    <option value="cr">Costa_Rica </option>
                    <option value="ci">Côte d'Ivoire </option>
                    <option value="hr">Croatie </option>
                    <option value="cu">Cuba </option>
                    <option value="dk">Danemark </option>
                    <option value="dj">Djibouti </option>
                    <option value="dm">Dominique </option>
                    <option value="eg">Egypte </option>
                    <option value="es">Espagne </option>
                    <option value="ee">Estonie </option>>
                    <option value="Feroe">Feroe </option>
                    <option value="fj">Fidji </option>
                    <option value="fi">Finlande </option>
                    <option value="ga">Gabon </option>
                    <option value="gm">Gambie </option>
                    <option value="gh">Ghana </option>
                    <option value="gi">Gibraltar </option>
                    <option value="gr">Grece </option>
                    <option value="gl">Groenland </option>
                    <option value="gp">Guadeloupe </option>
                    <option value="gu">Guam </option>
                    <option value="gt">Guatemala</option>
                    <option value="gg">Guernesey </option>
                    <option value="gn">Guinée </option>
                    <option value="qw">Guinée-Bissau </option>
                    <option value="gq">Guinée équatoriale </option>
                    <option value="gy">Guyana</option>
                    <option value="gf ">Guyane Francaise </option>
                    <option value="ht">Haiti </option>
                    <option value="hn">Honduras </option>
                    <option value="hu">Hongrie </option>
                    <option value="in">Inde </option>
                    <option value="id">Indonesie </option>
                    <option value="ir">Iran </option>
                    <option value="iq">Iraq </option>
                    <option value="ie">Irlande </option>
                    <option value="is">Islande </option>
                    <option value="il">Israel </option>
                    <option value="it">italie </option>
                    <option value="jm">Jamaique </option>
                    <option value="jp">Japon </option>
                    <option value="je">Jersey </option>
                    <option value="jo">Jordanie </option>
                    <option value="kz">Kazakhstan </option>
                    <option value="ke">Kenya </option>
                    <option value="kg">Kirghizistan </option>
                    <option value="ki">Kiribati</option>
                    <option value="xk">Kosovo</option>
                    <option value="kw">Koweit</option>
                    <option value="re">La Réunion</option>
                    <option value="la">Laos</option>
                    <option value="ls">Lesotho</option>
                    <option value="lv">Lettonie</option>
                    <option value="lb">Liban</option>
                    <option value="ly">Lybie</option>
                    <option value="lr">Liberia</option>
                    <option value="li">Liechtenstein</option>
                    <option value="lt">Lituanie</option>
                    <option value="lu">Luxembourg</option>
                    <option value="mk">Macedoine</option>
                    <option value="mg">Madagascar</option>
                    <option value="my">Malaisie</option>
                    <option value="mw">Malawi</option>
                    <option value="mv">Maldives</option>
                    <option value="ml">Mali</option>
                    <option value="mt">Malte</option>
                    <option value="ma">Maroc</option>
                    <option value="mq">Martinique </option>
                    <option value="mu">Maurice </option>
                    <option value="mr">Mauritanie </option>
                    <option value="yt">Mayotte </option>
                    <option value="mx">Mexique </option>
                    <option value="md">Moldavie </option>
                    <option value="mc">Monaco </option>
                    <option value="mn">Mongolie </option>
                    <option value="ms">Montserrat </option>
                    <option value="me">Monténégro</option>
                    <option value="mz">Mozambique </option>
                    <option value="mm">Myanmar</option>
                    <option value="na">Namibie </option>
                    <option value="nr">Nauru </option>
                    <option value="np">Nepal </option>
                    <option value="ni">Nicaragua </option>
                    <option value="ne">Niger </option>
                    <option value="ng">Nigeria </option>
                    <option value="nu">Niue </option>
                    <option value="no">Norvège </option>
                    <option value="nc">Nouvelle-Calédonie </option>
                    <option value="nz">Nouvelle Zélande </option>
                    <option value="om">Oman </option>
                    <option value="ug">Ouganda </option>
                    <option value="uz">Ouzbekistan </option>
                    <option value="pk">Pakistan </option>
                    <option value="pw">Palaos</option>
                    <option value="pa">Panama </option>
                    <option value="pg">Papouasie-Nouvelle-Guinée </option>
                    <option value="py">Paraguay </option>
                    <option value="nl">Pays-Bas </option>
                    <option value="bq">Pays-Bas caribéens</option>
                    <option value="pe">Perou </option>
                    <option value="ph">Philippines </option>
                    <option value="pl">Pologne </option>
                    <option value="pf">Polynésie française</option>
                    <option value="pr">Porto Rico</option>
                    <option value="pt">Portugal</option>
                    <option value="qa">Qatar </option>
                    <option value="hk">R.A.S chinoise de Hong Kong</option>
                    <option value="mo">R.A.S chinoise de Macao</option>
                    <option value="ro">Roumanie </option>
                    <option value="gb">Royaume-Uni </option>
                    <option value="ru">Russie </option>
                    <option value="rw">Rwanda </option>
                    <option value="cf">République centrafricaine</option>
                    <option value="cz">République tchèque</option>
                    <option value="eh">Sahara occidental</option>
                    <option value="bl">Saint-Barthélemy</option>
                    <option value="kn">Saint-Kitts-et-Nevis</option>
                    <option value="lc">Sainte-Lucie </option>
                    <option value="mf">Saint-Martin (partie française)</option>
                    <option value="mf">Saint-Martin (partie néerlandaises)</option>
                    <option value="pm">Saint-Pierre-et-Miquelon</option>
                    <option value="vc">Saint-Vincent-et-les-Grenadines</option>
                    <option value="sh">Sainte-Hélène</option>
                    <option value="sw">Samoa</option>
                    <option value="as">Samoa américaines </option>
                    <option value="st">Sao Tomé-et-Principe</option>
                    <option value="rs">Serbie </option>
                    <option value="sc">Seychelles </option>
                    <option value="sl">Sierra Leone </option>
                    <option value="sg">Singapour </option>
                    <option value="sk">Slovaquie </option>
                    <option value="si">Slovénie</option>
                    <option value="so">Somalie </option>
                    <option value="sd">Soudan</option>
                    <option value="ss">Soudan du Sud</option>
                    <option value="lk">Sri Lanka</option>
                    <option value="se">Suède </option>
                    <option value="ch">Suisse </option>
                    <option value="sr">Surinam </option>
                    <option value="sj">Svalbard et Jan Mayen</option>
                    <option value="sz">Swaziland </option>
                    <option value="sy">Syrie </option>
                    <option value="sn">Sénégal</option>
                    <option value="tj">Tadjikistan</option>
                    <option value="tz">Tanzanie </option>
                    <option value="tw">Taïwan </option>
                    <option value="tz">Tanzanie </option>
                    <option value="td">Tchad </option>
                    <option value="tf">Terres australes françaises</option>
                    <option value="io">Territoire britannique de l'océan Indien</option>
                    <option value="ps">Territoires palestiniens</option>
                    <option value="th">Thailande </option>
                    <option value="tl">Timor oriental</option>
                    <option value="tg">Togo </option>
                    <option value="tk">Tokelau</option>
                    <option value="to">Tonga</option>
                    <option value="tt">Trinité-et-Tobago </option>
                    <option value="ta">Tristan de Cuncha </option>
                    <option value="tn">Tunisie </option>
                    <option value="tm">Turmenistan </option>
                    <option value="tr">Turquie </option>
                    <option value="ua">Ukraine </option>
                    <option value="uy">Uruguay </option>
                    <option value="vu">Vanuatu </option>
                    <option value="ve">Venezuela </option>
                    <option value="vn">Vietnam </option>
                    <option value="wf">Wallis-et-Futuna </option>
                    <option value="ye">Yemén</option>
                    <option value="zm">Zambie </option>
                    <option value="zw">Zimbabwe </option>
                    <option value="zz">Région indéterminée</option>
                    <option value="eg">Égypte</option>
                    <option value="ae">Émirats arabes unis</option>
                    <option value="ec">Équateur</option>
                    <option value="er">Érythrée</option>
                    <option value="va">État de la Cité du Vatican</option>
                    <option value="fm">États fédérés de Micronésie</option>
                    <option value="us">États-Unis</option>
                    <option value="et">Éthiopie</option>
                    <option value="bv">Île Bouvet</option>
                    <option value="cx">Île Christmas</option>
                    <option value="cp">Île Clipperton</option>
                    <option value="nf">Île Norfolk</option>
                    <option value="im">Île de Man</option>
                    <option value="ac">Île de l’Ascension</option>
                    <option value="ic">Îles Canaries</option>
                    <option value="ky">Îles Caïmans</option>
                    <option value="cc">Îles Cocos (Keeling)</option>
                    <option value="ck">Îles Cook</option>
                    <option value="fo">Îles Féroé</option>
                    <option value="hm">Îles Heard et MacDonald</option>
                    <option value="fk">Îles Malouines</option>
                    <option value="mp">Îles Mariannes du Nord</option>
                    <option value="mh">Îles Marshall</option>
                    <option value="sb">Îles Salomon</option>
                    <option value="tc">Îles Turques-et-Caïques</option>
                    <option value="vg">Îles Vierges britanniques</option>
                    <option value="vi">Îles Vierges des États-Unis</option>
                    <option value="um">Îles mineures éloignées des États-Unis</option>
                    <option value="ax">Îles Åland</option>
                </select>
                <p class="legende">Obligatoire sur HAL : Image, Conférence.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="keyword">Mots-clés :</label>
                <input type="text" class="form-control" placeholder="Entrez des mots-clés, séparés par des virgules.">
                <p class="legende">Obligatoire sur HAL : Image, Thèse.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="licence">Licence :</label>
                <select class="form-control" name="licence">
                    <option value="">------</option>
                    <option value="http://creativecommons.org/licenses/by/">CC BY - Paternité</option>
                    <option value="http://creativecommons.org/licenses/by-nc/">CC BY NC - Paternité - Pas d'utilisation
                        commerciale
                    </option>
                    <option value="http://creativecommons.org/licenses/by-nd/">CC BY ND - Paternité - Pas de
                        modifications
                    </option>
                    <option value="http://creativecommons.org/licenses/by-sa/">CC BY SA - Paternité - Partage selon les
                        Conditions
                        Initiales</option>
                    <option value="http://creativecommons.org/licenses/by-nc-nd/">CC BY NC ND - Paternité - Pas
                        d'utilisation
                        commerciale - Pas de modification</option>
                    <option value="http://creativecommons.org/licenses/by-nc-sa/">CC BY NC SA - Paternité - Pas
                        d'utilisation
                        commerciale - Partage selon les Conditions Initiales</option>
                    <option value="http://creativecommons.org/choose/mark/">NC - Marque du Domaine Public</option>
                    <option value="http://creativecommons.org/publicdomain/zero/1.0/">CC0 - Transfert dans le Domaine
                        Public
                    </option>
                    <option value="http://hal.archives-ouvertes.fr/licences/etalab/">ETALAB - Licence Ouverte</option>
                    <option value="http://hal.archives-ouvertes.fr/licences/copyright/">Copyright (Tous droits réservés)
                    </option>
                    <option value="http://hal.archives-ouvertes.fr/licences/publicDomain/">Domaine public</option>
                </select>
                <p class="legende">Obligatoire sur HAL : Image, Vidéo, Son.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="number">Label, numéro du manifeste :</label>
                <input class="form-control" type="text" name="number" maxlength="17">
                <p class="legende">Obligatoire sur HAL : Manifeste.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="reportType">Type de rapport.</label>
                <select class="form-control" name="reportType">
                    <option value="6" selected="selected">Rapport de recherche</option>
                    <option value="4">Rapport Technique</option>
                    <option value="2">Contrat</option>
                    <option value="3">Interne</option>
                    <option value="0">Autre</option>
                </select>
                <p class="legende">Obligatoire sur HAL : Rapport.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="authorityInstitution">Organisme de délivrance.</label>
                <input class="form-control" type="text" name="authorityInstitution">
                <p class="legende">Obligatoire sur HAL : Thèse.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="director">Nom du drirecteur :</label>
                <input class="form-control" type="text" name="director">
                <p class="legende">Obligatoire sur HAL : Thèse, Habilitation à diriger des recherches.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="subTitle">Sous-titre : </label>
                <input class="form-control" type="text" name="subTitle">
            </div>

            <div class="form-group pb-sm-2">
                <label for="abstract">Abstract :</label>
                <input class="form-control" type="text" name="abstract">
                <p class="legende">Obligatoire sur HAL : Thèse.</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="identifier">Identifiants :</label>
                <input class="form-control" type="text" name="identifier">
                </select>
                <p>DOI, arXiv, Chemrxiv, inSPIRE HEP, SWHID, SAM (ENSAM), PPN (Sudoc), Ineris, HDL, OATAO, Okina
                    (Université
                    Angers), MeditAgri Catalog, UT key WOS, PII</p>
            </div>

            <div class="form-group pb-sm-2">
                <label for="writingDate">Début de production :</label>
                <input class="form-control" type="date" name="writingDate">
            </div>

            <div class="form-group pb-sm-2">
                <label for="popularLevel">Vulgarisation :</label>
                <select class="form-control" name="popularLevel">
                    <option value="0" selected="selected">Non</option>
                    <option value="1">Oui</option>
                </select>
            </div>

            <div class="form-check pb-sm-2">
                <input class="form-check-input" type="checkbox" name="peerReviewing">
                <label for="peerReviewing" class="form-check-label">Comité de lecture</label>
            </div>

            <div class="form-group pb-sm-2">
                <label for="audience">Audience :</label>
                <select class="form-control" name="audience">
                    <option value="2" selected="selected">Internationale</option>
                    <option value="3">Nationale</option>
                    <option value="1">Non spécifiée</option>
                </select>
            </div>

            <div class="form-group pb-sm-2">
                <label for="edate">Date de publication électronique :</label>
                <input class="form-control" type="date" name="edate">
            </div>

            <div class="form-group pb-sm-2">
                <label for="serie">Titre du volume :</label>
                <input class="form-control" type="text" name="serie">
            </div>

            <div class="form-group pb-sm-2">
                <label for="volume">Titre du volume :</label>
                <input class="form-control" type="text" name="volume">
            </div>

            <div class="form-group pb-sm-2">
                <label for="publisherLink">URL du congrès ou éditeur :</label>
                <input class="form-control" type="url" name="publisherLink">
            </div>

            <div class="form-group pb-sm-2">
                <label for="classification">Classification :</label>
                <input class="form-control" type="text" name="classification">
            </div>

            <div class="form-group pb-sm-2">
                <label for="collaboration">Collaboration, projet :</label>
                <input class="form-control" type="text" name="collaboration">
            </div>

            <div class="form-group pb-sm-2">
                <label for="seeAlso">Voir aussi :</label>
                <input class="form-control" type="text" name="seeAlso">
            </div>

            <div class="form-group pb-sm-2">
                <label for="anrProject">Projet ANR :</label>
                <input class="form-control" type="text" name="anrProject">
            </div>

            <div class="form-group pb-sm-2">
                <label for="europeanProject">Projet européen :</label>
                <input class="form-control" type="text" name="europeanProject">
            </div>

            <div class="form-group pb-sm-2">
                <label for="funding">Financement :</label>
                <input class="form-control" type="text" name="funding">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>