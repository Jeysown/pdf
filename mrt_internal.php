<?php
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();


// reference the Dompdf namespace
use Dompdf\Dompdf;

  ob_start();
    //be sure this file exists, and works outside of web context etc.)
    require("internal.php");
    $dompdf = new DOMPDF();
    $dompdf->setPaper('legal', 'portrait');
    $dompdf->load_html(ob_get_clean());
    $dompdf->render();
    $dompdf->stream("mrt_internal.pdf", array("Attachment" => false));

    exit(0);
 ?>
