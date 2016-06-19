<?php
namespace src;


/**
 * Class Acteur qui hérite de ma classe Personnel
 * @class Acteur
 * @extends Personnel
 */
class Acteur extends Personnel

{
      /**
       * Créer une méthode statique dans Acteur qui retourne la langue parlé
       * en fonction de la constante LANGUE et le PAYS
       */

       /**
        * Retourne toutes les informations statiques et propres à ma class
        * @return [type] [description]
        */
      public static function informationOfActeur(){

        if (self::PAYS == "France" || self::LANGUE == "Fr") {
          return "<p>La langue est le français pour tous mes acteurs</p>";
        }
        return "<p>Aucune langue détecté</p>";
      }

}


 ?>
