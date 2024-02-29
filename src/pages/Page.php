<?php

namespace LunarEclipse\Website\Pages;

use Twig\Environment;

abstract class Page {
    protected Environment $twig;
    public array $variables;

    public function __construct() {
        $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__, 2) . '/templates');
        $this->twig = new Environment($loader, []);
        $this->variables = [];
    }

    public abstract function render(): string;
}