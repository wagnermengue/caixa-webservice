<?php
/**
 * User: Wagner Mengue
 * Date: 01/2018
 * Version: 1.0
 *
 * Classe para construir xml DOMDocument adaptada da original de TONI VAN DE VOORDE.
 *
 */
class XmlDomConstruct extends DOMDocument {

    public function convertArrayToXml($mixed, DOMElement $domElement = null) {

        $domElement = is_null($domElement) ? $this : $domElement;

        if (is_array($mixed)) {
            foreach( $mixed as $index => $mixedElement ) {
                //Para não enviar a tag DESCONTOS quanto não houver
            	if($index == 'DESCONTOS'){
            		if(count($mixed[$index])==0){
            			continue;
            		}
            	}
            	if ( is_int($index) ) {
                    $node = $domElement;
                }
                else {
					$node = $this->createElement($index);
                    $domElement->appendChild($node);
                }
                $this->convertArrayToXml($mixedElement, $node);
            }
        } else {
            $domElement->appendChild($this->createTextNode($mixed));
        }
    }
}