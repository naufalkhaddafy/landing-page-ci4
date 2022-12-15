<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{

    public function getAbout()
    {
        return view('landing-page/about');
    }

    public function getAnnouncement()
    {
        return view('landing-page/announcement');
    }

    public function getProject()
    {
        return view('landing-page/project');
    }

    public function getContact()
    {
        return view('landing-page/contact');
    }
}
