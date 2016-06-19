<?php
// ====================================================================================
// ====================================================================================
// ----------------------------- ALL FUNCTIONS FOR ALLDirectors -----------------------
// ====================================================================================
// ====================================================================================

// Cette fonction affiche l'intégralité des films de la table movies...
function getAllDirectors($connexion){
  $ask = $connexion->query(
  "SELECT firstname, lastname, image, id, biography
   FROM directors
   ORDER BY id"
  );
  $reponse = $ask->fetchAll();
  return $reponse;
}

// Cette fonction récupère tout ce que je veux pour un réalisateur
function getDirectorById($id, $connexion) {
  $ask = $connexion->query(
  "SELECT id, firstname, lastname, dob, nationality, note, created_at, biography, sex, image, updated_at
   FROM directors
   WHERE id = {$id}
   AND sex REGEXP '^(m|f)$'"

  );
  $reponse = $ask->fetch();
  return $reponse;
}


// cette function me permet d'ajouter un nouveau réalisateur
function insertNewDirector($connexion) {
  $ask = $connexion->prepare(
  "INSERT INTO directors(firstname, lastname, sex, dob, nationality, image, biography, note)
  VALUES(:firstname, :lastname, :sex, :dob, :nationality, :image, :biography, :note)"
  );
  $ask->execute([
    'firstname' => $_POST['firstnameDirector'],
    'lastname' => $_POST['lastnameDirector'],
    'sex' => $_POST['sexeDirector'],
    'dob' => $_POST['dobDirector'],
    'nationality' => $_POST['nationalityDirector'],
    'image' => $_POST['urlImgDirector'],
    'biography' => $_POST['biographyDirector'],
    'note' => $_POST['noteDirector'],
  ]);
}
// Cette function permet d'afficher uniquement les données du dernier acteur enregistrer dans la DB
function getLastDirectorInBdd($connexion) {
  $ask = $connexion->query(
  "SELECT firstname, lastname, id, image, sex, nationality, dob, note
   FROM actors
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

// ------------------------- ALL FUNCTIONS FOR STATS DIRECTORS ------------------------


?>
