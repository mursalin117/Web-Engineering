<?php
    require __DIR__ . '/vendor/autoload.php';
    
    use Dompdf\Dompdf;
    
    $html =
        '<html><body>' .
        '<p>Put your html here, or generate it with your favourite ' .
        'templating system.</p>' .
        '</body></html>';
    
    echo $html;
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->render();
    $output = $dompdf->output();
    file_put_contents('Brochure.pdf', $output);

    // require_once(__DIR__."vendor/dompdf/dompdf_config.inc.php");

    // use Dompdf\Adapter\CPDF;
    // use Dompdf\Dompdf;
    // use Dompdf\Exception;
     
    // $cart_body='<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>New Order Placed</title></head><body><p>Test Printing...</p></body></html>';
    // echo $cart_body;
    // $dompdf = new Dompdf();
    // $dompdf->load_html($cart_body);//body -> html content which needs to be converted as pdf..
    // $dompdf->render();
    // $dompdf->stream("sample.pdf"); //To popup pdf as download
?>