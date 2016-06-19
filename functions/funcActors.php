<?php
// ====================================================================================
// ====================================================================================
// ------------------------------- ALL FUNCTIONS FOR ALLACTORS -----------------------
// ====================================================================================
// ====================================================================================

// Cette fonction affiche l'intégralité des films de la table movies...
function getAllActors($connexion){
  $ask = $connexion->query(
  "SELECT firstname, lastname, image, id, biography
   FROM actors
   ORDER BY id"
  );
  $reponse = $ask->fetchAll();
  return $reponse;
}
// Cette fonction récupère tout ce que je veux pour un acteur
function getActorById($id, $connexion) {
  $ask = $connexion->query(
  "SELECT id, firstname, lastname, dob, nationality, recompenses AS oscar, created_at, biography, sex, image
   FROM actors
   WHERE id = {$id}
   AND sex REGEXP '^(m|f)$'"

  );
  $reponse = $ask->fetch();
  return $reponse;
}
// cette function me permet d'ajouter un nouvel acteur
function insertNewActor($connexion) {
  $ask = $connexion->prepare(
  "INSERT INTO actors(firstname, lastname, sex, dob, nationality, image, biography, roles)
  VALUES(:firstname, :lastname, :sex, :dob, :nationality, :image, :biography, :roles)"
  );
  $ask->execute([
    'firstname' => $_POST['firstnameActeur'],
    'lastname' => $_POST['lastnameActeur'],
    'sex' => $_POST['sexeActeur'],
    'dob' => $_POST['dobActeur'],
    'nationality' => $_POST['nationalityActeur'],
    'image' => $_POST['urlImgActeur'],
    'biography' => $_POST['biographyActor'],
    'roles' => $_POST['rolesActeur'],
  ]);
}
// Cette function permet d'afficher uniquement les données du dernier acteur enregistrer dans la DB
function getLastActorInBdd($connexion) {
  $ask = $connexion->query(
  'SELECT firstname, lastname, image, sex, nationality, dob, biography, recompenses, roles
   FROM actors
   ORDER BY id DESC
   LIMIT 1'
  );
  $reponse = $ask->fetch();
  return $reponse;
}

// function getLastActorInBdd($connexion) {
//   $ask = $connexion->query(
//   'SELECT firstname, lastname, image, sex, nationality, dob, biography, recompenses, roles
//    FROM actors
//    WHERE firstname REGEXP "^([A-Z][a-z\- (ç|é|è|ê)?]{1,}$"
//    AND lastname REGEXP "^([a-z][a-z\- (ç|é|è|ê)?]{1,}$"
//    AND sex REGEXP "^(m|f)$"
//    AND nationality REGEXP "^([A-Z][a-z\- (ç|é|è|ê)?]{1,})$"
//    AND biography REGEXP "^([A-Z][a-z\-\'\? (ç|é|è|ê)?]{1,})$"
//    AND recompenses REGEXP "^([0-9]{0,2}$)"
//    AND roles REGEXP "^([A-Z][a-z\-\;\' (ç|é|è|ê)?]{1,}$)"
//    ORDER BY id DESC
//    LIMIT 1'
//   );
//   $reponse = $ask->fetch();
//   return $reponse;
// }


// ====================================================================================
// ====================================================================================
// ------------------------------- ALL FUNCTIONS FOR STATS ----------------------------
// ====================================================================================
// ====================================================================================

// --------------------------- ALL FUNCTIONS FOR STATS ACTORS -------------------------


 ?>
