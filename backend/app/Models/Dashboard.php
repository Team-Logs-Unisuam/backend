<?php

namespace App\Models;

class Dashboard
{
    public $titulo;
    public $subtitulo;
    public $quantidade;

    public function __construct($titulo, $subtitulo, $quantidade)
    {
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->quantidade = $quantidade;
    }
}
