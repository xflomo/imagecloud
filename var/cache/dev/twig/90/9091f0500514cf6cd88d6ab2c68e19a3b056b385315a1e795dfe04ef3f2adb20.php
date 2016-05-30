<?php

/* MainBundle:start:index.html.twig */
class __TwigTemplate_36105dbe5a5cdbfb869a0cb80aa5af67b17fb4b5e6353a89c7b41630358b8d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:layout:layout.html.twig", "MainBundle:start:index.html.twig", 1);
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
        $__internal_3d82f65b95a36bbdcb2d7471272a5a77482889c7e4c1a8676703e8e9253e911b = $this->env->getExtension("native_profiler");
        $__internal_3d82f65b95a36bbdcb2d7471272a5a77482889c7e4c1a8676703e8e9253e911b->enter($__internal_3d82f65b95a36bbdcb2d7471272a5a77482889c7e4c1a8676703e8e9253e911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:start:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d82f65b95a36bbdcb2d7471272a5a77482889c7e4c1a8676703e8e9253e911b->leave($__internal_3d82f65b95a36bbdcb2d7471272a5a77482889c7e4c1a8676703e8e9253e911b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c565aeb2d8f8538b8179ca2666c4d379c4fc1cc8878f2fd6694631bb13da9c = $this->env->getExtension("native_profiler");
        $__internal_a9c565aeb2d8f8538b8179ca2666c4d379c4fc1cc8878f2fd6694631bb13da9c->enter($__internal_a9c565aeb2d8f8538b8179ca2666c4d379c4fc1cc8878f2fd6694631bb13da9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
                    <ul class=\"list-unstyled row low-margin\">
                        <span class=\"new-content-upload\"></span>

                        <span id=\"lightgallery\">

                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userFiles"]) ? $context["userFiles"] : $this->getContext($context, "userFiles")));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 37
            echo "                                <li class=\"col-xs-6 col-sm-4 col-md-3 low-padding\" data-src=\"/uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getUploadFolder", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "urlPath", array()));
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "originalName", array()));
            echo "\" data-sub-html=\"<p>Coole Sache vom 20.07.15</p>\">
                                    <a href=\"\">
                                        <img class=\"img-responsive\" src=\"/uploads/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getUploadFolder", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "urlPath", array()));
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "thumbnail", array()));
            echo "\" contextmenu=\"copy-paste\">
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
                        </span>
                    </ul>
                </div>

                <div class=\"col-sm-12 hidden\">
                    <div class=\"no-file-from-user\">
                        <i class=\"fa fa-cloud\" aria-hidden=\"true\"></i>
                        <p class=\"headline\">Du hast noch keine Bilder hochgeladen!</p>
                        <p>Lade jetzt Bilder per Drag & Drop hoch oder benutze den Button in der oberen Navigation.</p>
                    </div>

                </div>

            </div>

        </div>
    </form>

    <div id=\"preview-template\" style=\"display: none;\">
        <li class=\"dropzonePreviewTemplate dz-preview dz-file-preview col-xs-6 col-sm-4 col-md-3 low-padding\">
                <div class=\"dz-filename hidden\"><span data-dz-name></span></div>
                <div class=\"dz-size hidden\" data-dz-size></div>
                <img class=\"img-responsive\" data-dz-thumbnail />
            <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>
            <div class=\"dz-success-mark\"><span>✔</span></div>

                <div class=\"dz-error-mark\"><span>✘</span></div>
                <div class=\"\"><span data-dz-errormessage></span></div>

        </li>
    </div>

";
        
        $__internal_a9c565aeb2d8f8538b8179ca2666c4d379c4fc1cc8878f2fd6694631bb13da9c->leave($__internal_a9c565aeb2d8f8538b8179ca2666c4d379c4fc1cc8878f2fd6694631bb13da9c_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_406d69361d8d2af5c1a5d7bd9d659b837ff695fa66e4556ea48b188e08d672b4 = $this->env->getExtension("native_profiler");
        $__internal_406d69361d8d2af5c1a5d7bd9d659b837ff695fa66e4556ea48b188e08d672b4->enter($__internal_406d69361d8d2af5c1a5d7bd9d659b837ff695fa66e4556ea48b188e08d672b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/dropzone/js/dropzone.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lightgallery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-fullscreen.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-thumbnail.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-video.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-autoplay.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-zoom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-hash.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/lg-pager.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/lightGallery/js/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_406d69361d8d2af5c1a5d7bd9d659b837ff695fa66e4556ea48b188e08d672b4->leave($__internal_406d69361d8d2af5c1a5d7bd9d659b837ff695fa66e4556ea48b188e08d672b4_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:start:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 90,  200 => 89,  196 => 88,  192 => 87,  188 => 86,  184 => 85,  180 => 84,  176 => 83,  172 => 82,  168 => 81,  162 => 79,  156 => 78,  116 => 43,  102 => 39,  92 => 37,  88 => 36,  75 => 25,  66 => 22,  61 => 19,  57 => 18,  41 => 4,  35 => 3,  11 => 1,);
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
/*                     <ul class="list-unstyled row low-margin">*/
/*                         <span class="new-content-upload"></span>*/
/* */
/*                         <span id="lightgallery">*/
/* */
/*                             {% for file in userFiles %}*/
/*                                 <li class="col-xs-6 col-sm-4 col-md-3 low-padding" data-src="/uploads/{{ app.user.getUploadFolder }}/{{ file.urlPath|e }}/{{ file.originalName|e }}" data-sub-html="<p>Coole Sache vom 20.07.15</p>">*/
/*                                     <a href="">*/
/*                                         <img class="img-responsive" src="/uploads/{{ app.user.getUploadFolder }}/{{ file.urlPath|e }}/{{ file.thumbnail|e }}" contextmenu="copy-paste">*/
/*                                     </a>*/
/*                                 </li>*/
/*                             {% endfor %}*/
/* */
/*                         </span>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-12 hidden">*/
/*                     <div class="no-file-from-user">*/
/*                         <i class="fa fa-cloud" aria-hidden="true"></i>*/
/*                         <p class="headline">Du hast noch keine Bilder hochgeladen!</p>*/
/*                         <p>Lade jetzt Bilder per Drag & Drop hoch oder benutze den Button in der oberen Navigation.</p>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </form>*/
/* */
/*     <div id="preview-template" style="display: none;">*/
/*         <li class="dropzonePreviewTemplate dz-preview dz-file-preview col-xs-6 col-sm-4 col-md-3 low-padding">*/
/*                 <div class="dz-filename hidden"><span data-dz-name></span></div>*/
/*                 <div class="dz-size hidden" data-dz-size></div>*/
/*                 <img class="img-responsive" data-dz-thumbnail />*/
/*             <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>*/
/*             <div class="dz-success-mark"><span>✔</span></div>*/
/* */
/*                 <div class="dz-error-mark"><span>✘</span></div>*/
/*                 <div class=""><span data-dz-errormessage></span></div>*/
/* */
/*         </li>*/
/*     </div>*/
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
