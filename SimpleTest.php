<?php
    use PHPunit\Framework\TestCase;

    require_once "Wordcount";

    class SimpleTest extends TestCase{
        public function testCountWord()
        {
            //membuat objek baru dari kelas wordcount
            $Wc = new Wordcount();
            
            //ini adalah kalimat yang akan diuji
            $TestSentence = "My name is Joko";

            //memanggil method untuk menghitung banyak kata pada kalimat di atas
            $Wordcount = $Wc->countWord($TestSentence);

            //memeriksa apakah jumlah kata yang dihitung sama dengan 4
            $this ->assertEquals(4, $Wordcount);
        }
    }
?>
