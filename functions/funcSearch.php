<?php
// ====================================================================================
// ====================================================================================
// ------------------------------- ALL FUNCTIONS FOR SEARCH -----------------------
// ====================================================================================
// ====================================================================================
// Cette fonction affiche pour le moment que les films
function getSearchMovie($connexion, $input) {
  $ask = $connexion->query(
  "SELECT title, description, synopsis, note_presse, image
   FROM movies
   WHERE title REGEXP '{$input}'
   OR description REGEXP '{$input}'
   Or synopsis REGEXP  '{$input}'
   Or note_presse REGEXP  '{$input}'
   ");
  $reponse = $ask->fetchAll();
  return $reponse;
}


?>
