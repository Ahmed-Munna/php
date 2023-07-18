<?php

class Word {

    private $word;

    public function __construct($word) {
        $this->word = $word;
    }
    public function setWord($word) {
        $this->word = $word;
        return $this;
    }

    public function wordToUpper() {
        $this->word = strtoupper($this->word);
        return $this;
    }

    public function wordToLower() {
        $this->word = strtolower($this->word);
        return $this;
    }

    public function printWord() {
        echo $this->word;
        return 0;
    }
}

$word = new Word('Word');

$w = $word->setWord("Hello World")
           ->wordToLower()
            ->printWord();
