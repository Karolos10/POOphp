<?php

require_once 'Book.php';

class Comic extends Book {

    //Porpiedades
    //Metodos
    
    public function __construct(

        $author,
        $title,
        $price,
        $stock,
        $id,
        private array $illustrators,
        private int $vol,
        
    ) {
        parent::__construct($author, $title, $price, $stock, $id);
    }

    public function getInfo(){
        
        $result = "Volumen: $this->vol <br>";

        $ul = "<ul> --Ilustrators--";
        foreach( $this->illustrators as $illustrator ){
            $ul .= "<li> $illustrator </li>";
        }
            
        $ul .= "</ul>";

        echo parent::getInfo();
        echo "<br>";

        return $result .= $ul;
        
    }
    
}

$comic1 = new Comic("Stan Lee", "Spiderman", 200.50, 10, 1, ["Steve Ditko", "John Romita Sr."], 1);

echo $comic1->getInfo();