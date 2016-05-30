<?php

/* MainBundle:user:register.html.twig */
class __TwigTemplate_3d805c12ea052bb7d883d610bb6f642ffe20d8f4a8637dc17cbb01753d873ebc extends Twig_Template
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
        // line 43
        echo "

";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
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
        echo "        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
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
        <div class=\"regi-container\">
            <h2>Registrieren</h2>
            <div class=\"form-group\">

                ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Benutzername")));
        echo "
                </br>
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "E-Mail Adresse")));
        echo "
                </br>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Passwort")));
        echo "
                </br>
                <button type=\"submit\" class=\"btn btn-default\">Registrieren</button>

                ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

            </div>
        </div>
    </div>

";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:user:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  136 => 47,  133 => 46,  130 => 45,  119 => 36,  112 => 32,  107 => 30,  102 => 28,  98 => 27,  89 => 20,  86 => 19,  80 => 11,  76 => 10,  72 => 9,  69 => 8,  66 => 7,  60 => 5,  54 => 50,  52 => 45,  48 => 43,  46 => 19,  36 => 13,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}Image stack{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>*/
/*         <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="start-mask-container">*/
/*         <div class="regi-container">*/
/*             <h2>Registrieren</h2>*/
/*             <div class="form-group">*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_row(form.username, { 'attr': {'class': 'form-control', 'placeholder': 'Benutzername'} }) }}*/
/*                 </br>*/
/*                 {{ form_row(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'E-Mail Adresse'} }) }}*/
/*                 </br>*/
/*                 {{ form_row(form.password, { 'attr': {'class': 'form-control', 'placeholder': 'Passwort'} }) }}*/
/*                 </br>*/
/*                 <button type="submit" class="btn btn-default">Registrieren</button>*/
/* */
/*                 {{ form_end(form) }}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/main.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
