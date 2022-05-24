(function ($) {
  "use strict";

  //Les fonctions jQuery

  $(document).ready(function () {
    var i = 1;
    $("#ajout_section").click(function () {
      var nouvelle_section =
        '<details open><summary class="soustitreForm">Section</summary><hr><div id="section_exemple"><div class="form-group pb-sm"><label for="nom_section1">Nom de la section : </label><input type="text" class="form-control" name="nom de la section" required></div><div class="soustitreForm">Slide :</div><div class="form-group pb-sm"><textarea placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control mb-3"></textarea> <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"></div><div class="form-group"><div id="select_slide"><label for="select-slide">Choisir un format de slide :</label><select><option value="">------</option><option value="1">Slide 1</option><option value="2">Slide 2</option><option value="3">Slide 3</option><option value="4">Slide 4</option><option value="5">Slide 5</option><option value="6">Slide 6</option><option value="7">Slide 7</option><option value="8">Slide 9</option><option value="9">Slide 10</option><option value="10">Slide 11</option><option value="11">Slide 12</option><option value="12">Slide 13</option><option value="13">Slide 14</option><option value="14">Slide 15</option><option value="15">Slide 16</option><option value="16">Slide 17</option><option value="18">Slide 18</option></select></div><button type="button" class="boutonForm boutonAjouter boutonPetit ml-auto mr-auto" onclick="format_slide()">Ajouter une slide</button></div><div class="form-group row"><div class="col-sm"><button type="button" class="boutonForm boutonAction">Aperçu</button></div><div class="col-sm"><button type="button" class="boutonForm boutonValider">Valider</button></div></div></div></details>';

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

    // $("#ajout_slide").click(function () {
    //   var nouvelle_slide =
    //     '<label for="select-slide">Choisir un format de slide :</label> <select> <option value="">------</option> <option value="1">Slide 1</option> <option value="2">Slide 2</option> <option value="3">Slide 3</option> <option value="4">Slide 4</option> <option value="5">Slide 5</option> <option value="6">Slide 6</option> <option value="7">Slide 7</option> <option value="8">Slide 9</option> <option value="9">Slide 10</option> <option value="10">Slide 11</option> <option value="11">Slide 12</option> <option value="12">Slide 13</option> <option value="13">Slide 14</option> <option value="14">Slide 15</option> <option value="15">Slide 16</option> <option value="16">Slide 17</option> <option value="18">Slide 18</option> </select>';
	// 	$("#container-slide" + (i + 1)).append(nouvelle_slide);
	// 	$("#section" + i).append('<div id="container-slide' + (i + 1) + '"></div>');
    //   i++;
    // });
  });

})(jQuery);

function format_slide() {
	var format = document.getElementsById("select_slide");
	if (format.style.display === "none") {
		format.style.display="block";
	} else {
		format.style.display ="none"
	}
}

//Transforme le nom du guide vers l'url du guide dans le bon format 
function urlFonction() {
	if (document.getElementById("nomGuide").value) {
		str = document.getElementById("nomGuide").value;
		//Regex pour tous les caractères spéciaux
		var regex = new RegExp("\\\W|_", "g");
		//Par quoi c'est remplacer
		var replace = "-";
		//Limite la taille pour l'url
		str = str.substring(0,20);
		//Remplace les accents par des lettres sans accent
		str = supp_accent(str);
		//Fait la regex de remplacement et met la valeur dans l'imput
		document.getElementById("urlGuide").value = str.replace(regex, replace).toLowerCase();
	} else {
		document.getElementById("urlGuide").value = "";
	}
}

//Fonction pour remplacer les accent dans une phrase par les lettres sans accent
function supp_accent(my_string)
{
	// tableau accents
	var pattern_accent = new Array(/À/g, /Á/g, /Â/g, /Ã/g, /Ä/g, /Å/g, /Æ/g, /Ç/g, /È/g, /É/g, /Ê/g, /Ë/g,
	/Ì/g, /Í/g, /Î/g, /Ï/g, /Ð/g, /Ñ/g, /Ò/g, /Ó/g, /Ô/g, /Õ/g, /Ö/g, /Ø/g, /Ù/g, /Ú/g, /Û/g, /Ü/g, /Ý/g,
	/Þ/g, /ß/g, /à/g, /á/g, /â/g, /ã/g, /ä/g, /å/g, /æ/g, /ç/g, /è/g, /é/g, /ê/g, /ë/g, /ì/g, /í/g, /î/g,
	/ï/g, /ð/g, /ñ/g, /ò/g, /ó/g, /ô/g, /õ/g, /ö/g, /ø/g, /ù/g, /ú/g, /û/g, /ü/g, /ý/g, /ý/g, /þ/g, /ÿ/g);

	// tableau sans accents
	var pattern_replace_accent = new Array("A","A","A","A","A","A","A","C","E","E","E","E",
	"I","I","I","I","D","N","O","O","O","O","O","O","U","U","U","U","Y",
	"b","s","a","a","a","a","a","a","a","c","e","e","e","e","i","i","i",
	"i","d","n","o","o","o","o","o","o","u","u","u","u","y","y","b","y");

	//pour chaque caractere si accentué le remplacer par un non accentué
	for(var i=0;i<pattern_accent.length;i++)
	{
		my_string = my_string.replace(pattern_accent[i],pattern_replace_accent[i]);
	}
	return my_string;
}
