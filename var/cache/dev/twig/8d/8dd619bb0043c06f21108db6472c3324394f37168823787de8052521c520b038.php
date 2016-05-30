<?php

/* MainBundle:user:login.html.twig */
class __TwigTemplate_e6c544309749df22afcbd55acb04088fe6364db79ca225c4cc79552e9a3dcb27 extends Twig_Template
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
        $__internal_bd89762cb92327c6f3ab498b25351cc7a40dd82284344dc2c75d710de82e536a = $this->env->getExtension("native_profiler");
        $__internal_bd89762cb92327c6f3ab498b25351cc7a40dd82284344dc2c75d710de82e536a->enter($__internal_bd89762cb92327c6f3ab498b25351cc7a40dd82284344dc2c75d710de82e536a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:user:login.html.twig"));

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
        // line 56
        echo "

";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "</body>
</html>
";
        
        $__internal_bd89762cb92327c6f3ab498b25351cc7a40dd82284344dc2c75d710de82e536a->leave($__internal_bd89762cb92327c6f3ab498b25351cc7a40dd82284344dc2c75d710de82e536a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_045b29354c9588395ef2efc36c95ff47a9cba2065b70aa7b160162c3b3e6e229 = $this->env->getExtension("native_profiler");
        $__internal_045b29354c9588395ef2efc36c95ff47a9cba2065b70aa7b160162c3b3e6e229->enter($__internal_045b29354c9588395ef2efc36c95ff47a9cba2065b70aa7b160162c3b3e6e229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Image stack";
        
        $__internal_045b29354c9588395ef2efc36c95ff47a9cba2065b70aa7b160162c3b3e6e229->leave($__internal_045b29354c9588395ef2efc36c95ff47a9cba2065b70aa7b160162c3b3e6e229_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4511bad6500376bf1487feb05d0a51e4338096cc9637047c2d7d45f4a1293aed = $this->env->getExtension("native_profiler");
        $__internal_4511bad6500376bf1487feb05d0a51e4338096cc9637047c2d7d45f4a1293aed->enter($__internal_4511bad6500376bf1487feb05d0a51e4338096cc9637047c2d7d45f4a1293aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4511bad6500376bf1487feb05d0a51e4338096cc9637047c2d7d45f4a1293aed->leave($__internal_4511bad6500376bf1487feb05d0a51e4338096cc9637047c2d7d45f4a1293aed_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcf34812875fe4d6ee1a1047ab52b766933141d2fe47209900823e109257fc24 = $this->env->getExtension("native_profiler");
        $__internal_bcf34812875fe4d6ee1a1047ab52b766933141d2fe47209900823e109257fc24->enter($__internal_bcf34812875fe4d6ee1a1047ab52b766933141d2fe47209900823e109257fc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                        <br>
                        <input type=\"password\" id=\"password\" placeholder=\"Passwort\" name=\"_password\" class=\"form-control\" />

                        <button type=\"submit\" name=\"loginSubmit\" class=\"btn btn-default\">Anmelden</button>
                    </form>


                   <h1>
                       ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "                           <p>Username: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                       ";
        }
        // line 42
        echo "                   </h1>



                    ";
        // line 46
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 47
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 49
        echo "

                </div>
            </div>
        </div>

    ";
        
        $__internal_bcf34812875fe4d6ee1a1047ab52b766933141d2fe47209900823e109257fc24->leave($__internal_bcf34812875fe4d6ee1a1047ab52b766933141d2fe47209900823e109257fc24_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_750968aa5413f65992a8e43e91d948aae12442affc7c6ac52591ca8736cdfd96 = $this->env->getExtension("native_profiler");
        $__internal_750968aa5413f65992a8e43e91d948aae12442affc7c6ac52591ca8736cdfd96->enter($__internal_750968aa5413f65992a8e43e91d948aae12442affc7c6ac52591ca8736cdfd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_750968aa5413f65992a8e43e91d948aae12442affc7c6ac52591ca8736cdfd96->leave($__internal_750968aa5413f65992a8e43e91d948aae12442affc7c6ac52591ca8736cdfd96_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 61,  181 => 60,  178 => 59,  172 => 58,  159 => 49,  153 => 47,  151 => 46,  145 => 42,  139 => 40,  137 => 39,  125 => 30,  121 => 29,  110 => 20,  104 => 19,  95 => 11,  91 => 10,  87 => 9,  84 => 8,  78 => 7,  66 => 5,  57 => 63,  55 => 58,  51 => 56,  49 => 19,  39 => 13,  37 => 7,  32 => 5,  26 => 1,);
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
