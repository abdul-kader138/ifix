<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        show_404();
    }

    function demo()
    {

        echo '<!DOCTYPE html>
            <html>
                <head>
                    <title>Stock Manager Advance</title>
                    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
                    <style>
                        html, body { height: 100%; }
                        body { margin: 0; padding: 0; width: 100%; display: table; font-weight: 72; font-family: \'Lato\'; }
                        .container { text-align: center; display: table-cell; vertical-align: middle; }
                        .content { text-align: center; display: inline-block; }
                        .title { font-size: 72px; }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <div class="content">
                            <div class="title">Demo is disabled!</div>
                        </div>
                    </div>
                </body>
            </html>
            ';
    }

}
