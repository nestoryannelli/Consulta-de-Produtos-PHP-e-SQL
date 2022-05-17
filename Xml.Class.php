<?php

/* 
 * Classe XML
 */

Class Xml
{
        
    // Atributos
       
        private $xml;
        private $tab = 1;
        
    // Métodos
        
        public function __construct($version = '1.0', $encode = 'UTF-8')
        {
            $this->xml .= "<?xml version = '$version' encoding = '$encode' ?>\n";
        }
       
        private function AddTab()
        {
            for($i = 1; $i <= $this->tab; $i++)
            {
                $this->xml .="\t";
            }
        }
        
        public function OpenTag($name)
        {
            $this->addTab();
            $this->xml .= "<$name>\n";
            $this->tab++;
        }
        
        public function CloseTag($name)
        {
            $this->tab--;
            $this->AddTab();
            $this->xml .= "</$name>\n";
        }
        
        public function AddTag($name, $value)
        {
            $this->AddTab();
            $this->xml .= "<$name>$value</$name>\n";
        }
        
        public function setValue($value)
        {
            $this->xml .= "$value\n";
        }
        
        public function __toString()
        {
            return $this->xml;
        }
        
}

