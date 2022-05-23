(function ($) {
  "use strict";

  /**
   * All of the code for your admin-facing JavaScript source
   * should reside in this file.
   *
   * Note: It has been assumed you will write jQuery code here, so the
   * $ function reference has been prepared for usage within the scope
   * of this function.
   *
   * This enables you to define handlers, for when the DOM is ready:
   *
   * $(function() {
   *
   * });
   *
   * When the window is loaded:
   *
   * $( window ).load(function() {
   *
   * });
   *
   * ...and/or other possibilities.
   *
   * Ideally, it is not considered best practise to attach more than a
   * single DOM-ready or window-load handler for a particular page.
   * Although scripts in the WordPress core, Plugins and Themes may be
   * practising this, we should strive to set a better example in our own work.
   */

  $(document).ready(function () {
    var i = 1;
    $("#ajout_section").click(function () {
      var nouvelle_section =
        '<details> <summary class="soustitreForm">Section</summary> <hr> <div id="section_exemple"> <div class="form-group pb-sm-2"> <label for="nom_section1">Nom de la section : </label> <input type="text" class="form-control" name="nom de la section" required> </div> <h4>Slide</h4>  <div class="form-group pb-sm-2"> <textarea style="width: 700px; height: 200px; font-size: 15px;" placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control"></textarea> <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"> </div> <div class="form-group pb-sm-2"> <button type="button" class="boutonForm boutonAjouter" id="#ajout_slide">Ajouter une slide</button> </div> <div class="form-group pb-sm-2"> <button type="button" class="boutonForm boutonAction">Aperçu</button> <button type="button" class="boutonForm boutonValider">Valider</button> </div> </div>';

      $("#section" + i).append(nouvelle_section);

      $("#container-section").append('<tr id="section' + (i + 1) + '"></tr>');
      i++;
    });

    $("#supprimer_section").click(function () {
      if (i > 1) {
        $("#section" + (i - 1)).html("");
        i--;
      }
    });

    $("#ajout_slide").click(function () {
      var nouvelle_slide =
        '<label for="select-slide">Choisir un format de slide :</label> <select> <option value="">------</option> <option value="1">Slide 1</option> <option value="2">Slide 2</option> <option value="3">Slide 3</option> <option value="4">Slide 4</option> <option value="5">Slide 5</option> <option value="6">Slide 6</option> <option value="7">Slide 7</option> <option value="8">Slide 9</option> <option value="9">Slide 10</option> <option value="10">Slide 11</option> <option value="11">Slide 12</option> <option value="12">Slide 13</option> <option value="13">Slide 14</option> <option value="14">Slide 15</option> <option value="15">Slide 16</option> <option value="16">Slide 17</option> <option value="18">Slide 18</option> </select>';
		$("#container-slide" + i).append(nouvelle_slide);
      i++;
    });
  });
})(jQuery);
