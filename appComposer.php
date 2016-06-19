<?php
  /**
   * Je charge Composer dans mon projet
   * Composer s'occupera de charger automatiquement mes classes en PHP
   */
include "vendor/autoload.php";

  use src\Movie;
  use src\Connexion;
  use src\Blueray;
  use Dompdf\Dompdf;

  $whoops = new \Whoops\Run;
  $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
  $whoops->register();


  // instantiate and use the dompdf class
  $dompdf = new Dompdf();
  $dompdf->loadHtml( '


  <div class="col-xs-12 well">

    <div class="col-xs-offset-2 col-xs-8">
      <legend class="text-danger">SALUT JE SUIS UN FICHIER PDF</legend>
      <hr />
      <blockquote cite="https://github.com/dompdf/dompdf">
        <h4>Quick Start</h4>
        <code>
          <pre>
          // reference the Dompdf namespace
          use Dompdf\Dompdf;

          // instantiate and use the dompdf class
          $dompdf = new Dompdf();
          $dompdf->loadHtml("hello world");

          // (Optional) Setup the paper size and orientation
          $dompdf->setPaper("A4", "landscape");

          // Render the HTML as PDF
          $dompdf->render();

          // Output the generated PDF to Browser
          $dompdf->stream();
          </pre>
        </code>
      </blockquote>

      <blockquote cite="https://github.com/dompdf/dompdf">
        <h4>Setting Options</h4>
        <code>
        <pre>
          use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set("defaultFont", "Courier");
$dompdf = new Dompdf($options);

or at run time

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->set_option("defaultFont", "Courier");
          </pre>
        </code>
      </blockquote>
    </div>

  </div>


  ');

  // (Optional) Setup the paper size and orientation
  $dompdf->setPaper('A4', 'landscape');

  // Render the HTML as PDF
  $dompdf->render();

  // Output the generated PDF to Browser
  $dompdf->stream();


  $bigTab = [
    [12,15,21],
    ["Quouquou", "mddrrr", "pouff le chien"],
    [15.5,999.54,"salut je suis trop cool"],
  ];

  dump($bigTab);


  $BlueRayFour = new BlueRay($connexion);
  $BlueRayFour->setPrix("45000");
  $BlueRayFour->setMecanisme("Sony");
  $BlueRayFour->setDiametre(10);
  $BlueRayFour->setPoids(15);
  $BlueRayFour->setTitre("BlueRay4");
  $BlueRayFour->setSynopsis("Blablabla BlueRay1");
  $BlueRayFour->setUtilisation("PlayStation 4");
  $BlueRayFour->setCodage($BlueRayFour->getCodage()[2]);


  $BlueRayThree = new BlueRay($connexion);
  $BlueRayThree->setPrix("99995000");
  $BlueRayThree->setMecanisme("Sony");
  $BlueRayThree->setDiametre(10);
  $BlueRayThree->setPoids(15);
  $BlueRayThree->setTitre("BlueRay3");
  $BlueRayThree->setSynopsis("Blablabla BlueRay2");
  $BlueRayThree->setUtilisation("Xbox One");
  $BlueRayThree->setCodage($BlueRayThree->getCodage()[1]);

  $newTabMovie = [
    $BlueRayFour,
    $BlueRayThree,
  ];


  dump($newTabMovie);



?>
