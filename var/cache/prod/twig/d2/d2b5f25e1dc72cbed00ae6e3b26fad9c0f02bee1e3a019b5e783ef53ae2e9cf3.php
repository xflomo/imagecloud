<?php

/* @Main/user/login.html.twig */
class __TwigTemplate_0afe6ce27619edc78cc79db49857ce7726985c95decfca33183a2ba0317cf1f6 extends Twig_Template
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
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>



    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "

";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
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
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "


        <div class=\"start-mask-container\">
            <div class=\"login-mask-container\">
                <h2>Anmelden</h2>
                <img src=\"images/avatar_2x.png\" class=\"img-responsive\">
                <div class=\"login-input-grp\">

                    <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\" role=\"form\">
                        <input type=\"text\" id=\"username\" placeholder=\"Benutzername\" name=\"_username\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
                        <br>
                        <input type=\"password\" id=\"password\" placeholder=\"Passwort\" name=\"_password\" class=\"form-control\" />

                        <input type=\"hidden\" name=\"_target_path\" value=\"/anmelden\" />


                        <button type=\"submit\" name=\"loginSubmit\" class=\"btn btn-default\">Anmelden</button>
                    </form>


                   <h1>
                       ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "                           <p>Username: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                       ";
        }
        // line 45
        echo "                   </h1>



                    ";
        // line 49
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 50
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 52
        echo "

                </div>
            </div>
        </div>

    ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Main/user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 64,  157 => 63,  154 => 62,  151 => 61,  141 => 52,  135 => 50,  133 => 49,  127 => 45,  121 => 43,  119 => 42,  104 => 30,  100 => 29,  89 => 20,  86 => 19,  80 => 11,  76 => 10,  72 => 9,  69 => 8,  66 => 7,  60 => 5,  54 => 66,  52 => 61,  48 => 59,  46 => 19,  36 => 13,  34 => 7,  29 => 5,  23 => 1,);
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
/* 		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* */
/* */
/*     {% block body %}*/
/* */
/* */
/* */
/*         <div class="start-mask-container">*/
/*             <div class="login-mask-container">*/
/*                 <h2>Anmelden</h2>*/
/*                 <img src="images/avatar_2x.png" class="img-responsive">*/
/*                 <div class="login-input-grp">*/
/* */
/*                     <form action="{{ path('login') }}" method="post" role="form">*/
/*                         <input type="text" id="username" placeholder="Benutzername" name="_username" class="form-control" value="{{ last_username }}" />*/
/*                         <br>*/
/*                         <input type="password" id="password" placeholder="Passwort" name="_password" class="form-control" />*/
/* */
/*                         <input type="hidden" name="_target_path" value="/anmelden" />*/
/* */
/* */
/*                         <button type="submit" name="loginSubmit" class="btn btn-default">Anmelden</button>*/
/*                     </form>*/
/* */
/* */
/*                    <h1>*/
/*                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                            <p>Username: {{ app.user.username }}</p>*/
/*                        {% endif %}*/
/*                    </h1>*/
/* */
/* */
/* */
/*                     {% if error %}*/
/*                         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                     {% endif %}*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endblock %}*/
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
