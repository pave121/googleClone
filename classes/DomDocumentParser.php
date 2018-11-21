<?php

class DomDocumentParser{
    
    private $doc;
    
    public function __construct($url){
        
        $options = array(
            'http' => array('method' => 'GET',
                            'header' => 'User-Agent: looolaBot/0.01\n')
        );
        $context = stream_context_create($options);
        
        $this->doc = new domDocument();
        @$this->doc->loadHTML(file_get_contents($url, false, $context));
        
    }
    
    public function getLinks(){
        return $this->doc->getElementsByTagName("a");
    }
    
    public function getTitletags(){
        return $this->doc->getElementsByTagName("title");
        
    }
}

?>