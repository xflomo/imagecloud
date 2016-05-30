<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45748c970102895e3a3a526695c164e8d1a5c0c8ad9b409c2925fe4024e1b321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7067a3edddff02a7de039ba1ac619a06cdb05809b3f2f8e07d50fb83de7316cf = $this->env->getExtension("native_profiler");
        $__internal_7067a3edddff02a7de039ba1ac619a06cdb05809b3f2f8e07d50fb83de7316cf->enter($__internal_7067a3edddff02a7de039ba1ac619a06cdb05809b3f2f8e07d50fb83de7316cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7067a3edddff02a7de039ba1ac619a06cdb05809b3f2f8e07d50fb83de7316cf->leave($__internal_7067a3edddff02a7de039ba1ac619a06cdb05809b3f2f8e07d50fb83de7316cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d99ff55fb87f514d0e8c8b8e3723a6287bb85804725f5b663058456875f198d6 = $this->env->getExtension("native_profiler");
        $__internal_d99ff55fb87f514d0e8c8b8e3723a6287bb85804725f5b663058456875f198d6->enter($__internal_d99ff55fb87f514d0e8c8b8e3723a6287bb85804725f5b663058456875f198d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d99ff55fb87f514d0e8c8b8e3723a6287bb85804725f5b663058456875f198d6->leave($__internal_d99ff55fb87f514d0e8c8b8e3723a6287bb85804725f5b663058456875f198d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8275d143000fd96c82c1c8861d0b8c7a37585e42b75542afd3614aa3508ba033 = $this->env->getExtension("native_profiler");
        $__internal_8275d143000fd96c82c1c8861d0b8c7a37585e42b75542afd3614aa3508ba033->enter($__internal_8275d143000fd96c82c1c8861d0b8c7a37585e42b75542afd3614aa3508ba033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8275d143000fd96c82c1c8861d0b8c7a37585e42b75542afd3614aa3508ba033->leave($__internal_8275d143000fd96c82c1c8861d0b8c7a37585e42b75542afd3614aa3508ba033_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c627c0c51ff35fa3345fc0f26806dd838ba25ea7b3680d26cd2c4951a707aee9 = $this->env->getExtension("native_profiler");
        $__internal_c627c0c51ff35fa3345fc0f26806dd838ba25ea7b3680d26cd2c4951a707aee9->enter($__internal_c627c0c51ff35fa3345fc0f26806dd838ba25ea7b3680d26cd2c4951a707aee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c627c0c51ff35fa3345fc0f26806dd838ba25ea7b3680d26cd2c4951a707aee9->leave($__internal_c627c0c51ff35fa3345fc0f26806dd838ba25ea7b3680d26cd2c4951a707aee9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
