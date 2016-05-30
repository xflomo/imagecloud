<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6e642076b0604f1277dcb5addf1bcefe6a64cf484efa5f502f9b0b01cb07cbbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79e377f76e26ee85775e9d3cad56980aac99e26b11a4a89736cc36c2dd32e717 = $this->env->getExtension("native_profiler");
        $__internal_79e377f76e26ee85775e9d3cad56980aac99e26b11a4a89736cc36c2dd32e717->enter($__internal_79e377f76e26ee85775e9d3cad56980aac99e26b11a4a89736cc36c2dd32e717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e377f76e26ee85775e9d3cad56980aac99e26b11a4a89736cc36c2dd32e717->leave($__internal_79e377f76e26ee85775e9d3cad56980aac99e26b11a4a89736cc36c2dd32e717_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dedc46ae30391c22265337116b7fbadeda4d4ec5bc62785b8862a73f5c9f41c9 = $this->env->getExtension("native_profiler");
        $__internal_dedc46ae30391c22265337116b7fbadeda4d4ec5bc62785b8862a73f5c9f41c9->enter($__internal_dedc46ae30391c22265337116b7fbadeda4d4ec5bc62785b8862a73f5c9f41c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dedc46ae30391c22265337116b7fbadeda4d4ec5bc62785b8862a73f5c9f41c9->leave($__internal_dedc46ae30391c22265337116b7fbadeda4d4ec5bc62785b8862a73f5c9f41c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18cc0ddd5e8e16b2546ebc9dc4410ada9753819ac9291ddf7b70cddea730be09 = $this->env->getExtension("native_profiler");
        $__internal_18cc0ddd5e8e16b2546ebc9dc4410ada9753819ac9291ddf7b70cddea730be09->enter($__internal_18cc0ddd5e8e16b2546ebc9dc4410ada9753819ac9291ddf7b70cddea730be09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18cc0ddd5e8e16b2546ebc9dc4410ada9753819ac9291ddf7b70cddea730be09->leave($__internal_18cc0ddd5e8e16b2546ebc9dc4410ada9753819ac9291ddf7b70cddea730be09_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd65c2a83d2f3878ff399176e7450df9a443f7e9a24f4bbe80ad1b5e429dc328 = $this->env->getExtension("native_profiler");
        $__internal_cd65c2a83d2f3878ff399176e7450df9a443f7e9a24f4bbe80ad1b5e429dc328->enter($__internal_cd65c2a83d2f3878ff399176e7450df9a443f7e9a24f4bbe80ad1b5e429dc328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd65c2a83d2f3878ff399176e7450df9a443f7e9a24f4bbe80ad1b5e429dc328->leave($__internal_cd65c2a83d2f3878ff399176e7450df9a443f7e9a24f4bbe80ad1b5e429dc328_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
