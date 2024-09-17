<?php
class WordFrequencyCounter {
    private $wordFrequencies;


    public function __construct($String) {
        $this->wordFrequencies = $this->countWords($String);
    }


    private function countWords($String) {
        $wordFrequencies = [];


        $String = strtolower($String);

        $words = preg_split('/\s+/', $String, 0, PREG_SPLIT_NO_EMPTY);

    
        foreach ($words as $word) {
            $wordFrequencies[$word] = isset($wordFrequencies[$word]) ? $wordFrequencies[$word] + 1 : 1;

        }

        return $wordFrequencies;
    }

    
    public function getWordFrequencies() {
        return (object) $this->wordFrequencies;
    }
}


$String = "the man the boss and the worker";


$wordCounter = new WordFrequencyCounter($String);


$result = $wordCounter->getWordFrequencies();
print_r($result);

?>
