<?php
// ====================================================================================
// ====================================================================================
// ------------------------------- ALL FUNCTIONS FOR CATEGORIES -----------------------
// ====================================================================================
// ====================================================================================
// Je créer une fonction pour trier mes films par catégories
  function getAllCategories($connexion){
    $ask = $connexion->query(
    "SELECT categories.id AS id, categories.title AS titrecategorie, categories.description AS description, COUNT(movies.categories_id) AS nbfilmbycat
     FROM categories
     INNER JOIN movies
     ON movies.categories_id = categories.id
     GROUP BY categories.title"
    );
    $reponse = $ask->fetchAll();
    return $reponse;
  };
  // ====================================================================================
  // ====================================================================================
  // J'ajoute une fonction pour afficher mes films par catégories
    function getMoviesByCategories($id, $connexion){
      $ask = $connexion->query(
      "SELECT movies.title AS title, movies.image As image, movies.id AS moviesid
       FROM movies
       INNER JOIN categories
       ON categories.id = movies.categories_id
       WHERE movies.categories_id = {$id}"
      );
      $reponse = $ask->fetchAll();
      return $reponse;
    };
// ====================================================================================
// ====================================================================================
/* Cette fonction récupère tout le détail d'un film via son ID */
function getMoviesById($id, $connexion){
  $ask = $connexion->query(
    "SELECT *
    FROM movies
    WHERE id = {$id}"
);
  $reponse = $ask->fetch();
  return $reponse;
}
// ====================================================================================
// ====================================================================================
/* Cette fonction affiche tous les commentaires du film via son ID */
  function getAllComments($id, $connexion){
    $ask = $connexion->query(
      "SELECT comments.content AS content, comments.note AS note, comments.created_at AS creerle
      FROM comments
      WHERE comments.movies_id = {$id}"
    );
    $reponse = $ask->fetchAll();
    return $reponse;
  }
  // ====================================================================================
  // ====================================================================================
  /* Cette fonction affiche tous les médias du film via son ID */
  function getMediasByMovie($id, $connexion){
    $ask = $connexion->query(
      "SELECT medias.picture AS picture, medias.video AS video, medias.movies_id AS mid, medias.id
      FROM movies
      INNER JOIN medias
      ON medias.movies_id = movies.id
      WHERE movies.id = {$id}"
    );
    $reponse = $ask->fetchAll();
    return $reponse;
  }

  // ====================================================================================
  // ====================================================================================
  // ------------------------------- ALL FUNCTIONS FOR STATS ----------------------------
  // ====================================================================================
  // ====================================================================================

  // ------------------------- ALL FUNCTIONS FOR STATS CATEGORIES -----------------------

?>
