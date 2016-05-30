<?php

/* @Main/start/index.html.twig */
class __TwigTemplate_857adfdbbe3caba20ca9b6aca349be3b7f61a2faa9ae50b8608936ee97dc8aa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:layout:layout.html.twig", "@Main/start/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"?action=uploadFunction\" method=\"post\" enctype=\"multipart/form-data\" class=\"dropzone\" id=\"my-awesome-dropzone\">
        <menu type=\"context\" id=\"copy-paste\">
            <li><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> Details</li>
            <li><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Passwort sichern</li>
            <li><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> Passwort löschen</li>
            <li><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Umbenennen</li>
            <li><i class=\"fa fa-download\" aria-hidden=\"true\"></i> Downloaden</li>
            <li><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> Sichtbar</li>
            <li><i class=\"fa fa-eye-slash\" aria-hidden=\"true\"></i> Versteckt</li>
            <li><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i> Teilen</li>
            <li><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Wiederherstellen</li>
            <li><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> Löschen</li>
        </menu>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                <h4>Ein Fehler ist aufgetreten!</h4>
                <p>";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        <div class=\"container content-top-spacer\">
            <div class=\"row low-margin\">
                <!-- This is the set up of a basic gallery, your items must have the categories they belong to in a data-category
                attribute, which starts from the value 1 and goes up from there -->
                <div class=\"demo-gallery\">
                    <ul id=\"lightgallery\" class=\"list-unstyled row low-margin\">
                        <li class=\"col-xs-6 col-sm-4 col-md-3 low-padding\" data-src=\"/images/desert.jpg\" data-sub-html=\"<p>Coole Sache vom 20.07.15</p>\">
                            <a href=\"\">
                                <img class=\"img-responsive\" src=\"/images/desert.jpg\" contextmenu=\"copy-paste\">
                            </a>
                        </li>
                        <li class=\"col-xs-6 col-sm-4 col-md-3 low-padding\" data-src=\"/images/desert.jpg\">
                            <a href=\"\">
                                <img class=\"img-responsive\" src=\"/images/desert.jpg\" contextmenu=\"copy-paste\">
                            </a>
                        </li>
                        <li class=\"col-xs-6 col-sm-4 col-md-3 low-padding\" data-src=\"/images/desert.jpg\">
                            <a href=\"\">
                                <img class=\"img-responsive\" src=\"/images/desert.jpg\" contextmenu=\"copy-paste\">
                            </a>
                        </li>
                        <li class=\"col-xs-6 col-sm-4 col-md-3 low-padding\" data-src=\"/images/desert.jpg\">
                            <a href=\"\">
                                <img class=\"img-responsive\" src=\"/images/desert.jpg\" contextmenu=\"copy-paste\">
                            </a>
                        </li>
                        <li class=\"col-xs-6 col-sm-4 col-md-3 low-padding\" data-src=\"/images/desert.jpg\">
                            <a href=\"\">
                                <img class=\"img-responsive\" src=\"/images/desert.jpg\" contextmenu=\"copy-paste\">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </form>

";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/dropzone/js/dropzone.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lightgallery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-fullscreen.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-thumbnail.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-video.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-autoplay.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-zoom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-hash.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-pager.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Main/start/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 78,  150 => 77,  146 => 76,  142 => 75,  138 => 74,  134 => 73,  130 => 72,  126 => 71,  122 => 70,  118 => 69,  112 => 67,  109 => 66,  66 => 25,  57 => 22,  52 => 19,  48 => 18,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'MainBundle:layout:layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <form action="?action=uploadFunction" method="post" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">*/
/*         <menu type="context" id="copy-paste">*/
/*             <li><i class="fa fa-info-circle" aria-hidden="true"></i> Details</li>*/
/*             <li><i class="fa fa-lock" aria-hidden="true"></i> Passwort sichern</li>*/
/*             <li><i class="fa fa-unlock-alt" aria-hidden="true"></i> Passwort löschen</li>*/
/*             <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Umbenennen</li>*/
/*             <li><i class="fa fa-download" aria-hidden="true"></i> Downloaden</li>*/
/*             <li><i class="fa fa-eye" aria-hidden="true"></i> Sichtbar</li>*/
/*             <li><i class="fa fa-eye-slash" aria-hidden="true"></i> Versteckt</li>*/
/*             <li><i class="fa fa-share-alt" aria-hidden="true"></i> Teilen</li>*/
/*             <li><i class="fa fa-undo" aria-hidden="true"></i> Wiederherstellen</li>*/
/*             <li><i class="fa fa-trash" aria-hidden="true"></i> Löschen</li>*/
/*         </menu>*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="alert alert-danger alert-dismissible fade in" role="alert">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*                 <h4>Ein Fehler ist aufgetreten!</h4>*/
/*                 <p>{{ flashMessage }}</p>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="container content-top-spacer">*/
/*             <div class="row low-margin">*/
/*                 <!-- This is the set up of a basic gallery, your items must have the categories they belong to in a data-category*/
/*                 attribute, which starts from the value 1 and goes up from there -->*/
/*                 <div class="demo-gallery">*/
/*                     <ul id="lightgallery" class="list-unstyled row low-margin">*/
/*                         <li class="col-xs-6 col-sm-4 col-md-3 low-padding" data-src="/images/desert.jpg" data-sub-html="<p>Coole Sache vom 20.07.15</p>">*/
/*                             <a href="">*/
/*                                 <img class="img-responsive" src="/images/desert.jpg" contextmenu="copy-paste">*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="col-xs-6 col-sm-4 col-md-3 low-padding" data-src="/images/desert.jpg">*/
/*                             <a href="">*/
/*                                 <img class="img-responsive" src="/images/desert.jpg" contextmenu="copy-paste">*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="col-xs-6 col-sm-4 col-md-3 low-padding" data-src="/images/desert.jpg">*/
/*                             <a href="">*/
/*                                 <img class="img-responsive" src="/images/desert.jpg" contextmenu="copy-paste">*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="col-xs-6 col-sm-4 col-md-3 low-padding" data-src="/images/desert.jpg">*/
/*                             <a href="">*/
/*                                 <img class="img-responsive" src="/images/desert.jpg" contextmenu="copy-paste">*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="col-xs-6 col-sm-4 col-md-3 low-padding" data-src="/images/desert.jpg">*/
/*                             <a href="">*/
/*                                 <img class="img-responsive" src="/images/desert.jpg" contextmenu="copy-paste">*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>*/
/*     <script src="{{ asset('vendor/dropzone/js/dropzone.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/lightgallery.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/lg-fullscreen.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/lg-thumbnail.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/lg-video.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/lg-autoplay.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/lg-zoom.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/lg-hash.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/lg-pager.js') }}"></script>*/
/*     <script src="{{ asset('vendor/lightGallery/js/jquery.mousewheel.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */
