<?php
/**
 * XML-Password implementiert das Interface Element. Der im Parameter vom Konstruktor uebergebene Wert wird
 * verarbeitet und mittels der Methode "getString()" in richtiger Form zurueckgegeben.
 *
 * Autor: Stefan Erceg
 * Version: 1.0
 * Datum: 30.11.2014
 */

class XMLPassword implements Element {

    private $value;

    /**
     * Im Konstruktor wird dem deklarierten Attribut "value" der im Parameter uebergebene Wert zugewiesen. Ausserdem
     * wird die Methode "getString()" ausgefuehrt.
     * @param $value Wert des Elements
     */

    public function __construct($value) {
        $this->value = $value;
        $this->getString();
    }

    /**
     * Die Passwort-Elemente werden in XML-Form zurueckgegeben.
     * @return string Passwort-Elemente in XML-Form
     */

    public function getString() {
        return '<password>'.$this->value.'</password>';
    }

} 