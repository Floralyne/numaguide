$(document).ready(function(){
    var i=1;
   $("#ajout_section").click(function(){
    var nouvelle_section = '<div class="row"> <div class="col-sm"> <h3>Section</h3> </div> <div class="col-sm"> <a class="btn btn-dark float-right" data-toggle="collapse" href="#section" role="button" aria-expanded="false" aria-controls="section">Replier la section</a></div></div><hr><div class="collapse" id="section"><div class="form-group pb-sm-2"><label for="nom_section1">Nom de la section : </label><input type="text" class="form-control" name="nom de la section" required></div><h4>Slide</h4><div class="form-group pb-sm-2"><textarea style="width: 700px; height: 200px; font-size: 15px;"placeholder="Entrer du texte (Max. 500)" maxlength="500" wrap="soft"class="form-control"></textarea><input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"class="parcourir"></div><div class="form-group pb-sm-2"><button type="button" class="btn btn-light btn-lg btn-block">Ajouter une slide</button></div><div class="form-group pb-sm-2"><button type="button" class="btn btn-light btn-lg btn-block">Aperçu</button><button type="button" class="btn btn-light btn-lg btn-block">Valider</button></div></div></div>';
    

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

// function collapse() {
//     var x = document.getElementById("#section"+i);
//     if (x.style.display === "none") {
//       x.style.display = "block";
//     } else {
//       x.style.display = "none";
//     }
//   }