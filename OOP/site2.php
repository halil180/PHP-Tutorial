<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    class Book{
        private $title;
        private $author;
        private $pages;
        private $rating;


        function __construct($title, $author, $pages,$rating){
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
            $this->rating = $rating;
        }

        function isLongBook(){
            if($this->pages >= 500){
                return true;
            }
            return false;
        }

        function getTitle(){
            return $this->title;
        }
        function getRating(){
            return $this->rating;
        }
        function setRating($rating){
            $ratings = array("A", "B", "C", "D");
                if (in_array($rating, $ratings))
                {
                
            $this->rating = $rating;
                }
                else
                {
                echo "rating not valid ";
                }

        }
    }

    $book1 = new Book("Harry Potter","JK Rowling",400,"A");
    // RATING A B C D
    $book2 = new Book("Lord of the rings ","Tolkien",700,"C");

    echo $book1->getTitle() ;
    echo "<br>";
    echo $book1->getRating() ;
    echo "<br>";
    $book1->setRating("D");

    echo $book1->getRating() ;
    echo $book1->isLongBook() ? ' true ' : ' false ';
    ?>
    
</body>
</html>