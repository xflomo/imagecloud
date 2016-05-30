<?php

/* MainBundle:layout:layout.html.twig */
class __TwigTemplate_d08f0c6b64be97b42cb86cb5e21e0b30014f0f93b8717ec0883690f3174d9acc extends Twig_Template
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
        $__internal_2e0aad05e1f31060b3514fc1bad8bbed82521e97d5c534a614a4e27d2661e8f2 = $this->env->getExtension("native_profiler");
        $__internal_2e0aad05e1f31060b3514fc1bad8bbed82521e97d5c534a614a4e27d2661e8f2->enter($__internal_2e0aad05e1f31060b3514fc1bad8bbed82521e97d5c534a614a4e27d2661e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:layout:layout.html.twig"));

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
            <li class=\"active\"><a href=\"/fotos\">Fotos</a></li>
            <li><a href=\"/profil\">Profil</a></li>
            <li><a href=\"/papierkorb\">Papierkorb</a></li>
            <li><a href=\"/einstellungen\">Einstellungen</a></li>
            <li><a href=\"/logout\">Abmelden</a></li>
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_2e0aad05e1f31060b3514fc1bad8bbed82521e97d5c534a614a4e27d2661e8f2->leave($__internal_2e0aad05e1f31060b3514fc1bad8bbed82521e97d5c534a614a4e27d2661e8f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bc636943d63ea18b9d321d705bbe62746b1bd608d805ceb287a90fcc4c52a40 = $this->env->getExtension("native_profiler");
        $__internal_3bc636943d63ea18b9d321d705bbe62746b1bd608d805ceb287a90fcc4c52a40->enter($__internal_3bc636943d63ea18b9d321d705bbe62746b1bd608d805ceb287a90fcc4c52a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Image stack";
        
        $__internal_3bc636943d63ea18b9d321d705bbe62746b1bd608d805ceb287a90fcc4c52a40->leave($__internal_3bc636943d63ea18b9d321d705bbe62746b1bd608d805ceb287a90fcc4c52a40_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_840aa347557f41532b9c6591cd758dea55519079c9a6253a0509f2a7121695d6 = $this->env->getExtension("native_profiler");
        $__internal_840aa347557f41532b9c6591cd758dea55519079c9a6253a0509f2a7121695d6->enter($__internal_840aa347557f41532b9c6591cd758dea55519079c9a6253a0509f2a7121695d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_840aa347557f41532b9c6591cd758dea55519079c9a6253a0509f2a7121695d6->leave($__internal_840aa347557f41532b9c6591cd758dea55519079c9a6253a0509f2a7121695d6_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_39eee8f44618079fd53b1310c1ec0152aa3063347ff3e643b2e31a1489bad3c0 = $this->env->getExtension("native_profiler");
        $__internal_39eee8f44618079fd53b1310c1ec0152aa3063347ff3e643b2e31a1489bad3c0->enter($__internal_39eee8f44618079fd53b1310c1ec0152aa3063347ff3e643b2e31a1489bad3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_39eee8f44618079fd53b1310c1ec0152aa3063347ff3e643b2e31a1489bad3c0->leave($__internal_39eee8f44618079fd53b1310c1ec0152aa3063347ff3e643b2e31a1489bad3c0_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b13ba384c4fa9cd829dc93b150f236f5570bad120d9e59d525c2f000e5045928 = $this->env->getExtension("native_profiler");
        $__internal_b13ba384c4fa9cd829dc93b150f236f5570bad120d9e59d525c2f000e5045928->enter($__internal_b13ba384c4fa9cd829dc93b150f236f5570bad120d9e59d525c2f000e5045928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b13ba384c4fa9cd829dc93b150f236f5570bad120d9e59d525c2f000e5045928->leave($__internal_b13ba384c4fa9cd829dc93b150f236f5570bad120d9e59d525c2f000e5045928_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  166 => 56,  163 => 55,  157 => 54,  145 => 51,  136 => 13,  132 => 12,  128 => 11,  124 => 10,  120 => 9,  117 => 8,  111 => 7,  99 => 5,  90 => 59,  88 => 54,  84 => 52,  82 => 51,  71 => 43,  39 => 15,  37 => 7,  32 => 5,  26 => 1,);
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
/*             <li class="active"><a href="/fotos">Fotos</a></li>*/
/*             <li><a href="/profil">Profil</a></li>*/
/*             <li><a href="/papierkorb">Papierkorb</a></li>*/
/*             <li><a href="/einstellungen">Einstellungen</a></li>*/
/*             <li><a href="/logout">Abmelden</a></li>*/
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
