<?php

class Book {

    //Porpiedades
    //Metodos
    
    public function __construct(

        private string $author,
        private string $title,
        private float $price,
        private int $stock,
        private int $id
    ) {
        // echo "Book class has been initialized";
    }

    public function getInfo(){

        $info = "<b> {$this->title} </b> Escrito por: <i> {$this->author} </i> <br> 
                Precio: {$this->price} <br> 
                Id: {$this->id} <br>";
        

        if($this->stock > 0){
            $info .= "Piezas disponibles en Stock: <span style='color:green'>{$this->stock}</span>";
        }
        else {
            $info .= "<span style='color:red'> Agotado </span>";
        }

        return $info;
    }
}

/* $Book1 = new Book("J.K. Rowling", "Harry Potter", 100.50, 10, 1);

echo $Book1->getInfo();

echo "<br>";
echo "<br>";

$Book2 = new Book("J.R.R. Tolkien", "El Señor de los Anillos", 150.50, 0, 2);

echo $Book2->getInfo(); */

// $Book1 = new Book();

//var_dump($Book1);
