<?php


class HomepageController
{
    public function render(array $GET, array $POST)
    {

        require 'View/homepage.php';
    }
}