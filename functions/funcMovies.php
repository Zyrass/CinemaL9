<?php
// ====================================================================================
// ====================================================================================
// ------------------------------- ALL FUNCTIONS FOR ALLMOVIES -----------------------
// ====================================================================================
// ====================================================================================
// Cette fonction affiche l'intégralité des films de la table movies...
function getAllMovies($connexion){
  $ask = $connexion->query(
  "SELECT title, image, id
   FROM movies
   ORDER BY id"
  );
  $reponse = $ask->fetchAll();
  return $reponse;
}
// Cette fonction permet d'ajouter un nouveau film
function insertMovie($id, $connexion){
  $ask = $connexion->prepare(
  "INSERT INTO movies(id, title, synopsis, description, image, distributeur, budget, note_presse)
   VALUES(:id, :title, :synopsis, :description, :image, :distributeur, :budget, :note_presse)"
  );
  $ask->execute([
    'id' => $id,
    'title' => $_POST['titleMovie'],
    'synopsis' => $_POST['synopsisMovie'],
    "description" => $_POST['descMovie'],
    "image" => $_POST['urlImgMovie'],
    "distributeur" => $_POST['distributeur'],
    "budget" => $_POST['budgetMovie'],
    "note_presse" => $_POST['noteMovie'],
  ]);
}
// Cette function permet d'afficher uniquement les données du dernier film enregistrer dans la DB
function getLastMovieInBdd($connexion) {
  $ask = $connexion->query(
  "SELECT title, synopsis, image, distributeur, budget, note_presse
   FROM movies
   WHERE title REGEXP '^([A-Z][a-z\- (ç|é|è|ê)?]{1,}$'
   AND note_presse REGEXP '^([0-5]{1})$'
   AND image REGEXP '^(http(s)?://(www\.)?[^/]+/[^/]*(\.jpeg|\.jpg|\.png|\.svg)?)$'
   AND synopsis REGEXP '^([A-Z][a-z\-\'\? (ç|é|è|ê)?]{1,})$'
   AND description REGEXP '^([A-Z][a-z\-\'\? (ç|é|è|ê)?]{1,})$'
   AND budget REGEXP '^([0-9\,\-\. ]{1,}($|£|€)?$)'
   AND distributeur REGEXP '^([A-Z][a-z\-\' (ç|é|è|ê)?]{1,}$)'
   ORDER BY id DESC
   LIMIT 1"
  );
  $reponse = $ask->fetch();
  return $reponse;
}
// ====================================================================================
// ====================================================================================
// ------------------------------- ALL FUNCTIONS FOR STATS ----------------------------
// ====================================================================================
// ====================================================================================

// --------------------------- ALL FUNCTIONS FOR STATS MOVIES -------------------------


 ?>
