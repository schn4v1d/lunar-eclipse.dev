<?php

namespace LunarEclipse\Website\Pages;

class Index extends Page {
    public function render(): string {
        return $this->twig->render('index.twig', $this->variables);
    }
}
