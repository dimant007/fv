<?php

class Layout_Default extends fvLayout
{
    function __construct()
    {
        $this->view()->lang = 'ru';
        //$this->view()->lang = Language::getManager()->getCurrentLanguage()->code;

        $this->addCSS([
            "/theme/stylesheets/bootstrap.css",
            "/theme/stylesheets/index.css",
            "/theme/stylesheets/media.css"

        ]);

        $this->addJS([
            "/theme/scripts/jquery-2.1.4.js",
            "/theme/scripts/index2.js",
            "/theme/scripts/scrolltop.js"
        ]);
    }

}
