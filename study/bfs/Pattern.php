<?php

class Pattern {
    public $blockLine;
    public $patternFrom;

    public function __construct($blockLine, $patternFrom) {
        $this->blockLine   = $blockLine;
        $this->patternFrom = $patternFrom;
    }
}