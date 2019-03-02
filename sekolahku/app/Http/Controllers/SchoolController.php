<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //
    private $_schoolLogo;
    private $_title;
    private $_css;
    private $_js;
    private $_caption;
    private $_optImage;
    private $_schoolName;

    public function index(){
        $this->_schoolLogo = "testinglogo.png";
        $this->_title = "Home";
        $this->_css = "homecss.css";
        $this->_caption = "- Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae neque earum tempora autem. At sunt quibusdam sae
        neque earum tempora autem. At sunt quibusdam sae -";
        $this->_optImage = "ribbon.png";
        $this->_schoolName = "Pre school";

        $data = (object) array(
            "schoolLogo" => $this->_schoolLogo,
            "title" => $this->_title,
            "css" => $this->_css,
            "caption" => $this->_caption,
            "optImage" => $this->_optImage,
            "schoolName" => $this->_schoolName,
        );

        return view('schoolMain/index',['data' => $data]);
    }
}
