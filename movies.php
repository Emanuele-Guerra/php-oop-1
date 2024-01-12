<?php

class movie
{
    public $name;
    public $nation;
    public $lang;
    public $subEng;

    public function __construct($nome, $nazione, $lingua, $sottotitoli)
    {
        $this->name = $nome;
        $this->nation = $nazione;
        $this->lang = $lingua;
        $this->subEng = $sottotitoli;
    }
    public function getFullInfos()
    {
        $result = "name: " . $this->name . " | nation: " . $this->nation . " | original-language: " . $this->lang . " | subtitles: " . $this->subEng;
        return $result;
    }
}
