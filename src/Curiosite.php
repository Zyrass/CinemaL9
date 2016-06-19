<?php

/*
* Quelques pistes de réfléxions pour aller plus loin.......et pour votre curiosité :)
*/

// Quelle est la différence entre include et require en PHP?
?>
<dfn>Include : Include permet d'appeler un morceau de code issu
d'une autre page et ainsi éviter la répétition de code.<dfn>

<dfn>Require : Require permet sensiblement la même chose mais à la différence qu'il
provoque une erreur bloquante toute exécution de code supplémentaire.</dfn>

<dfn>Criticité d'erreur n'est pas la même mieux vaut utilisé include que require</dfn>


<?php
// Que signifie instead of ? Pourquoi l'utiliser en Orienté Objet? Décrivez un exemple...
?>
<dfn>En français, sa se traduits par <strong>plutôt que</strong>.
C'est une instance de.</dfn>


<?php
// Que signifie le "===" en Orienté Objet? Décrivez le en 1 exemple
?>
<dfn>En utilisant le triple égale ("===").
lors d'une comparaison, la valeur et le type sont considérés
<a href="http://notes-de-cours.com/web/blogue/15/la-difference-entre-la-double-et-la-triple-egalite">Lien vers l'explication</a></dfn>
<dfn>== ou ===
     === c'est  pour comparer le type/ la nature de mes 2 variables comparées


      $objetDVD = new Dvd();

      $objetBlueRay = new BlueRay();

      $objetDVD === $objetBlueRay; = Faux

      123 == "123"

      "123" === 123

      123.0 === 123</dfn>


<?php
// Qu'est ce qu'une composition d'objet? A t-on deja utilisé dans le miniprojet? Si oui, où?
?>
<dfn>

    Attribut connexion de ma classe Movie

  + Quand une classe a des attributs qui sont des objets d'autre classe
  " Quand il y a un ou plusieurs objets dans un meme objet"

  </dfn>

<?php
// Qu'est ce qu'un sous-namespace ? Décrivez le en 1 exemple...
?>
<dfn>C'est un namespace avec des sous-namespace (dossier/sous-dossier)
Exemple :
use src\lib\Movie;
</dfn>

<?php
// Peut on crée un objet B provenant d'une classe B dans une classe A?
?>
<dfn>  Oui, mais à éviter: C'est une dépendance forte entre les classes (à privilégier l'injection d'objet)

  class A{

      public function toto(){
        $obj = new B();
      }
  }

  class B {


  }
</dfn>


<?php
// Quelle est la différence entre classe et classe abstraite?
?>
<dfn>Une classe abstraite est une classe dont toutes les méthodes n’ont pas été implémentées.
  Elle n’est donc pas instanciable, mais sert avant tout à factoriser du code. Une classe
  qui hérite d’une classe abstraite doit obligatoirement implémenter les méthodes manquantes
  (qui ont été elles-mêmes déclarées «abstraites» dans la classe parente).
  En revanche, elle n’est pas obligée de réimplémenter les méthodes déjà implémentées
  dans la classe parente (d’où une maintenance du code plus facile).</dfn>

  <dfn>C'est une classe qui n peut créer des objets. Elle sert uniquement à être héritée.
       La classe abstraite ne peut pas hérité d'une autre classe.


  abstract class humain {
    protected $nom;
    protected $prenom;
  }

  class Personnel extends Humain{

  }
</dfn>
  <dfn></dfn>
  <dfn></dfn>

<?php
// Que signifie  S.O.L.I.D.? A quoi sa sert dans l'Orienté Objet?
?>
<dfn>
En programmation informatique, SOLID est un acronyme représentant 5 principes de bases pour
la programmation orientée objet. Ces 5 principes sont censés
apporter une ligne directrice permettant le développement de logiciel plus
fiable et plus robuste1.

S . Single Responsibility Principle
  + Principe de responsabilité unique. Une classe fait un seul métier (logique métier).
  + Ne pas avoir 3000 lignes de code.

O . Ouvert/fermé (Open/closed principle)
  + Une classe doit être ouverte à l'extension, mais fermée à la modification.
  + Quand une classe a des méthodes ou des attributs que je veux modifier.
    Il vaut mieux paser par l'héritage pour surcharger (modifier) le comportement de certains
    attributs ou méthodes.
  + Ferme à la modification, ouvert à l'extenssion.

  Exemple :

  class Alpha {
    public function mail($sujet, $contenu, $destinataire){
    }
  }

  class Beta extends Alpha {
    public function mail($sujet, $contenu, $destinataire){
      // autre chose
    }
  }

  $obj = new Beta();
  $obj->mail($sujet, $contenu...)

L . Substitution de Liskov (Liskov substitution Principle)
  + une instance de type T doit pouvoir être remplacée par une instance de type G, tel que G sous-type
    ActeurFilm.php de T, sans que cela ne modifie la cohérence du programme.
  + c'est pouvoir remplacer un objet B issue d'une classe Fille, par un objet A issue d'une classe
    mère sans casser la compatibilité des méthodes.

I . Ségrégation des interfaces (Interface segregation principle) (en)
  + Une interface :
    C'est une abstraction de méthodes en communs avec divers classes.
    C'est un sommaire (résumé) de méthodes pour homogéniser des comportements entre les classes.
  -----
  + Une ségrégation d'interface :
    Pour homogénéiser plusieurs clases, et ne pas avoir de classes Parents ( par héritage)
    Je peux séparer certains comportements entre les classes dans une ou plusieurs interfaces.
    Par ailleurs, cela procure plus de souplesse dans les arguments de méthodes.

  Exemple :
  La gestion de visibilité entre une catégorie, un movie, un commentaire...

  Exemple par la pratique :
  public static function gestionVisibilite(VisibleInterface $obj){
    // gerer la visibilité
    // objet, quelque soit la provenance de ma classe
    // a un comportement suffisant pour etre implémenter dans cette methode
  }

D . Inversion des dépendances (Dependency Inversion Principle)
  + Couplage faible :
    Il vaut mieux injecter en paramètre un objet issue d'une autre classe (injection de dépendances)
    dans une méthode. (Différente du couplage fort)
    Injecter des objets de provenance de différente classe dans mes méthodes de classe.

  Exemple :

    $volant = new Volant();
    $pneus = new Pneus();
    $pneusTwo = new Pneus();
    $pneusThree = new Pneus();
    $pneusFour = new Pneus();
    $voiture = new Voiture();

    class Voiture{

      public function __construct(
        Volant $volant,
        Pneus $pneus,
        Pneus $pneusTwo,
        Pneus $pneusThree,
        Pneus $pneusFour){
      }
    }

</dfn>


<?php
// Qu'est ce que l'Injection des Dépendances? Décrivez 1 exemple
?>
<dfn>L'injection de dépendances (dependency injection en anglais) est un mécanisme qui permet
  d'implémenter le principe de l'inversion de contrôle.

Il consiste à créer dynamiquement (injecter) les dépendances entre les différentes
classes en s'appuyant sur une description (fichier de configuration ou métadonnées)
ou de manière programmatique.
Ainsi les dépendances entre composants logiciels ne sont plus exprimées dans le code de
manière statique mais déterminées dynamiquement à l'exécution.</dfn>


<?php
// Qu'est ce qu'un Design Pattern? Citez en 2 en exemple
?>
<dfn>
  + Un patron de conception :
    Design Pattern : Patron de Conception => C'est un motif d'architecture de classe, interface,
    classe abstraite qui permet de résoudre certaines problématiques en application
    qui provient tout droit de l'UML (language formel Uniform Modeling Language).
    c'est une modélisation d'interaction entre les classes sur des problématiques précises



</dfn>


<?php
// Qu'est ce que le MVC? A quoi sa sert en Orienté Objet?
?>
<dfn>Le patron d'architecture logicielle modèle-vue-contrôleur (en abrégé MVC,
  en anglais model-view-controller), tout comme les patrons modèle-vue-présentation ou présentation,
  abstraction, contrôle, est un modèle destiné à répondre aux besoins des applications
  interactives en séparant les problématiques liées aux différents composants au sein de
  leur architecture respective.

Ce paradigme regroupe les fonctions nécessaires en trois catégories :

un modèle (modèle de données) ;
une vue (présentation, interface utilisateur) ;
un contrôleur (logique de contrôle, gestion des événements, synchronisation).</dfn>


<?php
// Qu'est ce que Composer? A quoi cela va nous servir dans notre projet?
?>
<dfn>Composer est un gestionnaire de dépendances open source écrit en PHP.
  Il permet à ses utilisateurs de déclarer et d'installer les bibliothèques dont le projet principal
  a besoin..

  + Composer est un logiciel qui permet de gérer les dépendances entre librairies =, packets, classes
    frameworks, composants ...
  + Il va chercher les dépendances d'une entres classes
  + (Si une classe dépendances d'une autre par héritage, par composition d'objets ...)
  -> Note : Composer utilise Git

  Bower c'est la même chose que Composer (php), mais uniquement pour de l'intégration.
  Composer, comme Bower et Npm, s'utilise en ligne de commande

  Composer : 2 utilités
  + Gérer les dépendances
  + Charger automatiquementmes classes

</dfn>



?>
