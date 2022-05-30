$(document).ready(function(){
    var i=1;
   $("#ajout_section").click(function(){
    var nouvelle_section = '<details> <summary class="soustitreForm">Section</summary> <hr> <div id="section_exemple"> <div class="form-group pb-sm-2"> <label for="nom_section1">Nom de la section : </label> <input type="text" class="form-control" name="nom de la section" required> </div> <h4>Slide</h4>  <div class="form-group pb-sm-2"> <textarea style="width: 700px; height: 200px; font-size: 15px;" placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft" class="form-control"></textarea> <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)" class="parcourir"> </div> <div class="form-group pb-sm-2"> <button type="button" class="boutonForm boutonAjouter">Ajouter une slide</button> </div> <div class="form-group pb-sm-2"> <button type="button" class="boutonForm boutonAction">Aperçu</button> <button type="button" class="boutonForm boutonValider">Valider</button> </div> </div>';

    $('#section'+i).append(nouvelle_section);
    
    $('#container-section').append('<tr id="section'+(i+1)+'"></tr>');
    i++; 
});

   $("#supprimer_section").click(function(){
       if(i>1){
       $("#section"+(i-1)).html('');
       i--;
       }
   });

});
