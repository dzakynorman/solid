<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/dompdf/dompdf/src/autoloader.php");
// require_once '/dompdf/lib/html5lib/Parser.php';
// require_once '/php-font-lib/src/FontLib/Autoloader.php';
// require_once '/php-svg-lib/src/autoload.php';
// require_once '/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();
use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf {

  public function generate($html, $filename='', $stream=TRUE, $paper = 'A4', $orientation = "portrait")
  {

    $dompdf = new Dompdf();
    $dompdf->load_html($html);
    $dompdf->setPaper($paper, $orientation);
    $dompdf->render();
    ob_end_clean();

    if ($stream) {
        $dompdf->stream($filename.".pdf", array("Attachment" => 0));
    } else {
        return $dompdf->output();
    }


  }


}