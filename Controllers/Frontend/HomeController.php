<?php

namespace Controllers\Frontend;


class HomeController
{
    public function index()
    {
        return view("Frontend.home", []);
    }

}
