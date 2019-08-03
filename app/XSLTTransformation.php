<?php


namespace app;


use DOMDocument;
use XSLTProcessor;

class XSLTTransformation
{
    public function __construct($xmlfilename, $xslfilename)
    {
        $xml = new DOMDocument();
        $xml->load($xmlfilename);

        $xsl = new DOMDocument();
        $xsl->load($xslfilename);

        $proc = new XSLTProcessor();
        $proc->importStyleSheet($xsl);

        echo $proc->transformToXml($xml);
    }
}
