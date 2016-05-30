<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_99f302551d92ca993d82a607a06b62e0815373a118ca0477351320ce6dc1981e extends Twig_Template
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
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
