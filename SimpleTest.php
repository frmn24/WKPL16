<?php
    use PHPunit\Framework\TestCase;

    require_once "Wordcount";

    class SimpleTest extends TestCase{
        public function testCountWord()
        {
            $Wc = new Wordcount();


            $TestSentence = "My name is Joko";
            $Wordcount = $Wc->countWord($TestSentence);

            $this ->assertEquals(4, $Wordcount);
        }
    }
?>