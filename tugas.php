<h2 style="text-align: center;"> Daud Arby </h2>
<h2 style="text-align: center;"> XI RPL </h2>
<hr>
<?php
class Document {
    public $authors;
    public $date;
    public $email;
    public $daftar;

    public function setAuthors($authors){
        $this->authors = $authors;
    }

    public function setDate($date){
        $this->date = $date;
    }

    
    public function setEmail($email){
        $this->email = $email;
    }

        
    public function setDaftar($daftar){
        $this->daftar = $daftar;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getDate(){
        return $this->date;
    }
    public function getEmail(){
        return $this->email;
    }

    public function getDaftar(){
    return $this->daftar;
    }

}
$daud = new Document();
$daud-> setAuthors("Authors : Arby Ganteng");
$daud-> setDate("Tanggal Lahir : 06-06-2005");
$daud-> setEmail("Email : daudarbyyusuf665@gmail.com");
$daud-> setDaftar("<h3 text-align: center;>DAFTAR BUKU</h3>");

echo $daud->getAuthors();
echo "<br>";
echo $daud->getDate();
echo "<br>";
echo $daud->getEmail();
echo "<br>";
echo "<hr>";
echo $daud->getDaftar();


class Book extends Document {
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function  setAuthors($authors){
        $this->authors = $authors;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAuthors(){
        return $this->authors;
    }
}
$arby = new Book();
$arby-> setTitle("Judul Buku :  The Reverse World");

echo $arby->getTitle();
echo "<br>";
echo $arby->getAuthors();



class Email extends Book {
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function getSubject(){
        return $this->subject;
    }

    

}

$dary = new Email();
$dary-> setSubject("Sinopsis : Menceritakan sebuah Dunia dimana laki-laki memikli sifat dan perilaku 
seperti perempuan begitupun sebaliknya. ");

echo $dary->getSubject();
echo "<br>";
echo $dary->getAuthors();
echo "<br>";
echo "<hr>";