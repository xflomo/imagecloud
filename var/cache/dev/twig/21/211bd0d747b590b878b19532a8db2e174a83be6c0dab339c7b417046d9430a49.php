<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_be395c01fc093faa5bb8e50f15cc5c07c915731b5680f791d0c78691d56516ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fa9a8d8c8381ebb60cd00e73cee0d0db1f1933a4179173eba791bf840fead4c1 = $this->env->getExtension("native_profiler");
        $__internal_fa9a8d8c8381ebb60cd00e73cee0d0db1f1933a4179173eba791bf840fead4c1->enter($__internal_fa9a8d8c8381ebb60cd00e73cee0d0db1f1933a4179173eba791bf840fead4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9a8d8c8381ebb60cd00e73cee0d0db1f1933a4179173eba791bf840fead4c1->leave($__internal_fa9a8d8c8381ebb60cd00e73cee0d0db1f1933a4179173eba791bf840fead4c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_046974eef597fd24472c32d071206de550903e40b3a70ba36e3849a4954d59b5 = $this->env->getExtension("native_profiler");
        $__internal_046974eef597fd24472c32d071206de550903e40b3a70ba36e3849a4954d59b5->enter($__internal_046974eef597fd24472c32d071206de550903e40b3a70ba36e3849a4954d59b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_046974eef597fd24472c32d071206de550903e40b3a70ba36e3849a4954d59b5->leave($__internal_046974eef597fd24472c32d071206de550903e40b3a70ba36e3849a4954d59b5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b2dbe6d7dbe1fc647795ef120594518b89470f01bc244bb4fd3915b936005ee = $this->env->getExtension("native_profiler");
        $__internal_0b2dbe6d7dbe1fc647795ef120594518b89470f01bc244bb4fd3915b936005ee->enter($__internal_0b2dbe6d7dbe1fc647795ef120594518b89470f01bc244bb4fd3915b936005ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0b2dbe6d7dbe1fc647795ef120594518b89470f01bc244bb4fd3915b936005ee->leave($__internal_0b2dbe6d7dbe1fc647795ef120594518b89470f01bc244bb4fd3915b936005ee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48a46a72a0b3238a2cae64a7c9bc6c78712e56695ae72d3eb6a9933d9c0c728f = $this->env->getExtension("native_profiler");
        $__internal_48a46a72a0b3238a2cae64a7c9bc6c78712e56695ae72d3eb6a9933d9c0c728f->enter($__internal_48a46a72a0b3238a2cae64a7c9bc6c78712e56695ae72d3eb6a9933d9c0c728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48a46a72a0b3238a2cae64a7c9bc6c78712e56695ae72d3eb6a9933d9c0c728f->leave($__internal_48a46a72a0b3238a2cae64a7c9bc6c78712e56695ae72d3eb6a9933d9c0c728f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
