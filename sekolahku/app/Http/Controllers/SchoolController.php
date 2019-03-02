<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Lang;

use Config;

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
        $this->_js = "homescript.js";
        $imageWord = "BETA SCHOOL MANAGEMENT SYSTEM";
        $imageCaption = " - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet eveniet architecto tempore odio facilis
                adipisicing elit -";
        $languageChoose = "Language";

        $data = (object) array(
            "schoolLogo" => $this->_schoolLogo,
            "title" => $this->_title,
            "css" => $this->_css,
            "caption" => $this->_caption,
            "optImage" => $this->_optImage,
            "schoolName" => $this->_schoolName,
            "js" => $this->_js,
            "imageWord" => $imageWord,
            "imageCaption" => $imageCaption,
            "languageChoose" => $languageChoose
        );

        return view('schoolMain/index',['data' => $data]);
    }

    public function changelang(Request $request){
        $lang = $request->input('lang');

        if($lang == "en"){
            Config::set('app.locale', 'en');

            $this->_schoolLogo = "testinglogo.png";
            $this->_title = "Home";
            $this->_css = "homecss.css";
            $this->_caption = Lang::get('caption');
            $this->_optImage = "ribbon.png";
            $this->_schoolName = Lang::get('caption');
            $this->_js = "homescript.js";
            $imageWord = Lang::get('imageWord');
            $imageCaption = Lang::get('imageCaption');
            $languageChoose = Lang::get('languageChoose');

            $data = (object) array(
                "schoolLogo" => $this->_schoolLogo,
                "title" => $this->_title,
                "css" => $this->_css,
                "caption" => $this->_caption,
                "optImage" => $this->_optImage,
                "schoolName" => $this->_schoolName,
                "js" => $this->_js,
                "imageWord" => $imageWord,
                "imageCaption" => $imageCaption,
                "languageChoose" => $languageChoose
            );
        }else if($lang == "id"){
            Config::set('app.locale', 'id');

            $this->_schoolLogo = "testinglogo.png";
            $this->_title = "Halaman Awal";
            $this->_css = "homecss.css";
            $this->_caption = Lang::get('caption');
            $this->_optImage = "ribbon.png";
            $this->_schoolName = Lang::get('caption');
            $this->_js = "homescript.js";
            $imageWord = Lang::get('imageWord');
            $imageCaption = Lang::get('imageCaption');
            $languageChoose = Lang::get('languageChoose');

            $data = (object) array(
                "schoolLogo" => $this->_schoolLogo,
                "title" => $this->_title,
                "css" => $this->_css,
                "caption" => $this->_caption,
                "optImage" => $this->_optImage,
                "schoolName" => $this->_schoolName,
                "js" => $this->_js,
                "imageWord" => $imageWord,
                "imageCaption" => $imageCaption,
                "languageChoose" => $languageChoose
            );
        }

        return view('schoolMain/index',['data' => $data]);
    }
}
