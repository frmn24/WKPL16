<?php
// File : Wordcount.php
class Wordcount
{
    //method untuk menghitung banyaknya jumlah kata pada sebuah kalimat
    public function countWords($sentence)
    {
        //mengembalikan hasil dari method
        return count(explode(" ", $sentence));
    }
}
?>
