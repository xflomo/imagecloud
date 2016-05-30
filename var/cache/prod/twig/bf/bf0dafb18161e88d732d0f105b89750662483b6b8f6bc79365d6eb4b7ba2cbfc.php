<?php

/* @RasFlashAlert/FlashAlert/jsAlertClose.html.twig */
class __TwigTemplate_098463ddade2502dc81d0a5a7bcba1edc2c73d732b3e7bed40a31d4c36c6e5ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
    // Pure JavaScript implementation for flash alerts
    var onLoad = function () {
        var elems = document.getElementById(\"ras-flash-alerts\").getElementsByTagName('button');
        for (var i in elems) {
            if ((\" \" + elems[i].className + \" \").indexOf(\"alert-close\") > -1) {
                elems[i].onclick = function () {
                    fadeout(this.parentNode);
                };
            }
        }
    }

    var fadeout = function(elem) {
        var o = 1;
        var timer = setInterval(function () {
            if (o <= 0.0) {
                elem.style.display = 'none';
                clearInterval(timer);

            }
            elem.style.opacity = o;
            elem.style.filter = 'alpha(opacity=' + o * 100 + \")\";
            o -= 0.1;
        }, 25);
    };

    if (window.attachEvent) {window.attachEvent('onload', onLoad);}
    else if (window.addEventListener) {window.addEventListener('load', onLoad, false);}
    else {document.addEventListener('load', onLoad, false);}
</script>
";
    }

    public function getTemplateName()
    {
        return "@RasFlashAlert/FlashAlert/jsAlertClose.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     // Pure JavaScript implementation for flash alerts*/
/*     var onLoad = function () {*/
/*         var elems = document.getElementById("ras-flash-alerts").getElementsByTagName('button');*/
/*         for (var i in elems) {*/
/*             if ((" " + elems[i].className + " ").indexOf("alert-close") > -1) {*/
/*                 elems[i].onclick = function () {*/
/*                     fadeout(this.parentNode);*/
/*                 };*/
/*             }*/
/*         }*/
/*     }*/
/* */
/*     var fadeout = function(elem) {*/
/*         var o = 1;*/
/*         var timer = setInterval(function () {*/
/*             if (o <= 0.0) {*/
/*                 elem.style.display = 'none';*/
/*                 clearInterval(timer);*/
/* */
/*             }*/
/*             elem.style.opacity = o;*/
/*             elem.style.filter = 'alpha(opacity=' + o * 100 + ")";*/
/*             o -= 0.1;*/
/*         }, 25);*/
/*     };*/
/* */
/*     if (window.attachEvent) {window.attachEvent('onload', onLoad);}*/
/*     else if (window.addEventListener) {window.addEventListener('load', onLoad, false);}*/
/*     else {document.addEventListener('load', onLoad, false);}*/
/* </script>*/
/* */
