(function ($) {
  "use strict";

  //Les fonctions jQuery

  $(document).ready(function () {
    var i = 1;
    $("#ajout_section").click(function () {
      	var nouvelle_section ='<details open><summary class="soustitreForm">Section</summary><hr><div id="section_exemple"><div class="form-group pb-sm"><label for="nom_section1">Nom de la section : </label><input type="text" class="form-control" name="nom de la section" required></div><div class="soustitreForm">Slide :</div><div class="form-group pb-sm"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3"></textarea><input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"></div><button type="button" class="boutonForm boutonAjouter boutonPetit ml-auto mr-auto format_slide">Ajouter une slide</button></div><div class="form-group row"><div class="col-sm"><button type="button" class="boutonForm boutonAction">Aperçu</button></div><div class="col-sm"><button type="button" class="boutonForm boutonValider">Valider</button></div></div></div></details>';
      $("#section" + i).append(nouvelle_section);

      $("#container-section").append('<div id="section' + (i + 1) + '"></div>');
      i++;
    });

    $("#supprimer_section").click(function () {
      if (i > 1) {
        $("#section" + (i - 1)).html("");
        i--;
      }
    });

	// Génére la liste des formats de slides
	$(".format_slide").click(function () {
		var liste_slide = '<div class="liste_slide"><label for="select-slide">Choisir un format de slide :</label><select><option value="">------</option><optgroup label="Introduction :"><option value="1">Slide 1 : Titre, sous-titre(s), auteur(s)</option><option value="2">Slide 2 : Titre, sous-titre(s), auteur(s), mot(s)-clé(s)</option><option value="3">Slide 3 : Remerciements</option><option value="4">Slide 4 : Résumé</option><option value="5">Slide 5 : Introduction</option></optgroup><optgroup label="Texte :"><option value="6">Slide 6</option><option value="7">Slide 7</option><option value="8">Slide 8</option></optgroup><optgroup label="Avec une image :"><option value="9">Slide 9</option><option value="10">Slide 10</option><option value="11">Slide 11</option><option value="12">Slide 12</option></optgroup><optgroup label="Avec du son :"><option value="13">Slide 13</option><option value="14">Slide 14</option></optgroup><optgroup label="Avec une vidéo :"><option value="15">Slide 15</option><option value="16">Slide 16</option><option value="17">Slide 17</option></optgroup><optgroup label="Références :"><option value="18">Slide 18 : Bibliographie</option><option value="19">Slide 19 : Bibliographie (2)</option></optgroup></select><button type="button" class="boutonForm boutonValider choix_format">Valider</button></div>'; 
		$(this).parent().append(liste_slide);
	});


	// Apparition des formulaire de slide après choix d'un format 
	$(".choix_format").click(function() {
		var choix = $(this).val(); 
		if (choix == '1') {
			$(this).parent().append('<div class="form-group"><label>Titre :</label><input type="text"><label>Auteur(s) :</label><input type="text"></div>'); 
		}
		else if (choix == '2') {
			$(this).parent().append('<div class="form-group"><label>Titre :</label><input type="text"><label>Sous-titre(s) :</label><input type="text"><label>Auteur(s) :</label><input type="text"><input type="text"><label>Affiliation(s) :</label><input type="text"><input type="text"><label>Mot(s)-clés :</label><input type="text"></div>');
		}
		else if (choix == '3') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>'); 
		}
		else if (choix == '4') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '5') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '6') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '7') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '8') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '9') {
			$(this).parent().append('<div class="form-group"><input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"></div>');
		}
		else if (choix == '10') {
			$(this).parent().append('<div class="form-group"><input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '11') {
			$(this).parent().append('<div class="form-group"><input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '12') {
			$(this).parent().append('<div class="form-group"><input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '13') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea><input class="form-control" placeholder="URL" required><textarea placeholder="Entrer une légende (Max. 200)" maxlength="200" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '14') {
			$(this).parent().append('<div class="form-group"><input class="form-control" placeholder="URL" required><textarea placeholder="Entrer une légende (Max. 200)" maxlength="200" wrap="soft" class="form-control mb-3 mt-3"></textarea><input class="form-control" placeholder="URL" required><textarea placeholder="Entrer une légende (Max. 200)" maxlength="200" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '15') {
			$(this).parent().append('<div class="form-group"><input class="form-control" placeholder="URL" required></div>');
		}
		else if (choix == '16') {
			$(this).parent().append('<div class="form-group"><input class="form-control" placeholder="URL" required><textarea placeholder="Entrer une légende (Max. 200)" maxlength="200" wrap="soft" class="form-control mb-3 mt-3"></textarea><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '17') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea><input class="form-control" placeholder="URL" required>');
		}
		else if (choix == '18') {
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else if (choix == '19') { 
			$(this).parent().append('<div class="form-group"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3 mt-3"></textarea></div>');
		}
		else {
			$(this).parent().append("Choisir un format de slide.");
		}
	});


// 	// Supprimer liste des formats et slides 
// 	$(".supprimer_liste").click(function(event) {
// 		event.stopPropagation();
// 		$(this).closest('liste_slide').empty();
//    });

  });

})(jQuery);


// Transforme le nom du guide vers l'url du guide dans le bon format 
function urlFonction() {
	if (document.getElementById("nomGuide").value) {
		str = document.getElementById("nomGuide").value;
		// Regex pour tous les caractères spéciaux
		var regex = new RegExp("\\\W|_", "g");
		// Par quoi c'est remplacer
		var replace = "";
		// Limite la taille pour l'url
		str = str.substring(0,20);
		// Remplace les accents par des lettres sans accent
		str = supp_accent(str);
		// Fait la regex de remplacement et met la valeur dans l'imput
		document.getElementById("urlGuide").value = str.replace(regex, replace).toLowerCase();
	} else {
		document.getElementById("urlGuide").value = "";
	}
}

// Fonction pour remplacer les accent dans une phrase par les lettres sans accent
function supp_accent(my_string)
{
	// Tableau accents
	var pattern_accent = new Array(/À/g, /Á/g, /Â/g, /Ã/g, /Ä/g, /Å/g, /Æ/g, /Ç/g, /È/g, /É/g, /Ê/g, /Ë/g,
	/Ì/g, /Í/g, /Î/g, /Ï/g, /Ð/g, /Ñ/g, /Ò/g, /Ó/g, /Ô/g, /Õ/g, /Ö/g, /Ø/g, /Ù/g, /Ú/g, /Û/g, /Ü/g, /Ý/g,
	/Þ/g, /ß/g, /à/g, /á/g, /â/g, /ã/g, /ä/g, /å/g, /æ/g, /ç/g, /è/g, /é/g, /ê/g, /ë/g, /ì/g, /í/g, /î/g,
	/ï/g, /ð/g, /ñ/g, /ò/g, /ó/g, /ô/g, /õ/g, /ö/g, /ø/g, /ù/g, /ú/g, /û/g, /ü/g, /ý/g, /ý/g, /þ/g, /ÿ/g);

	// Tableau sans accents
	var pattern_replace_accent = new Array("A","A","A","A","A","A","A","C","E","E","E","E",
	"I","I","I","I","D","N","O","O","O","O","O","O","U","U","U","U","Y",
	"b","s","a","a","a","a","a","a","a","c","e","e","e","e","i","i","i",
	"i","d","n","o","o","o","o","o","o","u","u","u","u","y","y","b","y");

	// Pour chaque caractere si accentué le remplacer par un non accentué
	for(var i=0;i<pattern_accent.length;i++)
	{
		my_string = my_string.replace(pattern_accent[i],pattern_replace_accent[i]);
	}
	return my_string;
}

// Fonction pour copier le XML
function copierTexte() {
    // Selectionne l'élément à prendre
    let texteACopier = document.querySelectorAll("#a-copier")[0];

    // Met en sélection chaque charactère
    var range = document.createRange();
    var selection = window.getSelection();
    range.selectNode(texteACopier);
    selection.removeAllRanges();
    selection.addRange(range);

    // Action pour notifier que le texte à été copié
    const btn = document.getElementById("btnCopier");

    if(btn.innerText === "Copier le texte"){
        btn.innerText = "Bien copié !";
    }else{
        btn.innerText= "Copier le texte";
    }

}


  