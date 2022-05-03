<?php

$a = 5;
$b = 6;

$d = "__This is text__";

$c = $a + $b;

echo $c . "<br>";
echo $a . $d . $b;

$mass = [1, 2, 3, 4, 5, 6, 7, 8, 9];


foreach ($mass as $iter) {
    echo "<br>" . $iter;
}

$array = array(9, 8, 7, 6, 5, 4);

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}

$massH = ["1" => 12, "2" => 45, "3" => 56, "4" => 345];

foreach ($massH as $name => $numbers) {
    echo "{$name} == $numbers" . "<br>";
}

if ($a > $b) {
    echo "$a > $b" . "<br>";
}
else {
    echo "$a < $b" . "<br>";
}


$firstText = '7';
$secondText = 7;

if ($firstText === $secondText) {
    echo "$firstText === $secondText";
}
else if ($firstText == $secondText ) {
    echo "$firstText == $secondText";
}


$number  = "first second third fourth fifth sixth seventh";
$massNumber = explode(" ", $number );

foreach ($massNumber as $iter) {
    echo "<br>" . $iter;
}


echo "<br>";
echo implode(", ", $massNumber) . "<br>";


var_dump($firstText + $secondText);



class Book {
    private $title;
    private $author;
    private $price;

    public function __construct() {
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}

class AdventureGenreBook extends Book {
    private $publisher;

    public function __construct($publisher)
    {
        parent::__construct();
        $this->publisher = $publisher;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }
}

class Singleton {
    private static $_instance = null;

    private function __construct()
    {
    }

    public function __clone()
    {

    }

    static public function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}

$firstSingleton = Singleton::getInstance();
$secondSingleton = Singleton::getInstance();

if ($firstSingleton === $secondSingleton) {
    echo "<br>" . "Same instance";
}
else {
    echo  "<br>" . "Different instance";
}

$book = new Book();
$book->setPrice(300);
$price = $book->getPrice();
echo "<br>" . $price;


