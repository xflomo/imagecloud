<?php

/* MainBundle:Layout:layout.html.twig */
class __TwigTemplate_47f064174edddf55a7beaf2cc9a9175d2f758c39b3fe626e5392d4f7d23962ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>


<nav>
    <div class=\"container\">
        <ul>
            <li class=\"active\">Fotos</li>
            <li>Netzwerk</li>
            <li>Profil</li>
            <li>Papierkorb</li>
            <li>Einstellungen</li>
        </ul>
    </div>
</nav>
<header>
    <div class=\"container\">
        <div class=\"header-menu-content\">
            <div class=\"upload-bar\">
                <i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i> Bilder hochladen
            </div>
            <div class=\"search-bar\">
                <input type=\"text\" placeholder=\"Suche\" name=\"filtr-search\" data-search/>
                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"profil-bar\">
                <img src=\"http://denise.fb-dev.de/art/avatar_2x.png\">
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "
            </div>
        </div>
    </div>

</header>


    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "

";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Image stack";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/dropzone/css/dropzone.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/css/lightgallery.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  139 => 56,  136 => 55,  133 => 54,  127 => 51,  121 => 13,  117 => 12,  113 => 11,  109 => 10,  105 => 9,  102 => 8,  99 => 7,  93 => 5,  87 => 59,  85 => 54,  81 => 52,  79 => 51,  68 => 43,  36 => 15,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}Image stack{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/* 		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>*/
/*         <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/dropzone/css/dropzone.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/lightGallery/css/lightgallery.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*     {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* */
/* <nav>*/
/*     <div class="container">*/
/*         <ul>*/
/*             <li class="active">Fotos</li>*/
/*             <li>Netzwerk</li>*/
/*             <li>Profil</li>*/
/*             <li>Papierkorb</li>*/
/*             <li>Einstellungen</li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* <header>*/
/*     <div class="container">*/
/*         <div class="header-menu-content">*/
/*             <div class="upload-bar">*/
/*                 <i class="fa fa-cloud-upload" aria-hidden="true"></i> Bilder hochladen*/
/*             </div>*/
/*             <div class="search-bar">*/
/*                 <input type="text" placeholder="Suche" name="filtr-search" data-search/>*/
/*                 <i class="fa fa-search" aria-hidden="true"></i>*/
/*             </div>*/
/*             <div class="profil-bar">*/
/*                 <img src="http://denise.fb-dev.de/art/avatar_2x.png">*/
/*                 {{ app.user.username }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </header>*/
/* */
/* */
/*     {% block body %} {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/main.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
