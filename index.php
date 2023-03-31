<!doctype html>
<html lang="fr">
  <head>
    <!-- Meta tags requis pour Bootstrap -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Lien vers la feuille de style Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Feuille de style pour la barre de défilement -->
    <style>
      ::-webkit-scrollbar {
        width: 5px;
      }
      
      ::-webkit-scrollbar-track {
        background-color: #f1f1f1;
      }
      
      ::-webkit-scrollbar-thumb {
        background-color: #888;
      }
      
      ::-webkit-scrollbar-thumb:hover {
        background-color: #555;
      }

      /* Styles pour l'animation au survol */
      .list-group-item a {
        transition: color 0.3s ease-in-out;
      }

      .list-group-item a:hover {
        color: red;
      }
    </style>

    <!-- Lien vers la bibliothèque jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Exemple de contenu réactif avec liste sous forme de cards</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <h2>Titre de la section</h2>
          <p>Contenu de la section avec barre de défilement</p>
          <div style="height: 200px; overflow-y: scroll;">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-description="Description de la carte 1">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Titre de la carte 1</h5>
                  <small>Date de publication</small>
                </div>
                <p class="mb-1">Description de la carte 1</p>
              </a>
              <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-description="Description de la carte 2">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Titre de la carte 2</h5>
                  <small>Date de publication</small>
                </div>
                <p class="mb-1">Description de la carte 2</p>
              </a>
              <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-description="Description de la carte 3">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Titre de la carte 3</h5>
                  <small>Date de publication</small>
                </div>
                <p class="mb-1">Description de la carte 3</p>
              </a>
             </div>
         </div>
      </div>
    </div> 
   <script>
      $(document).ready(function() {
        $('.list-group-item').click(function(e) {
          e.preventDefault();
          var content = $(this).data('description');

          $.ajax({
            url: 'show.php',
            type: 'POST',
            data: {content},
            success: function(result) {
              // console.log(data);
              console.log(content); // afficher la description dans la console
            }
          });
        });


      });
   </script>
  </body>