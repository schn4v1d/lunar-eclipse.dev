<?php

namespace LunarEclipse\Website\Pages;

class About extends Page {
    public function render(): string {
        return $this->twig->render('about.twig', $this->variables);
    }
}
