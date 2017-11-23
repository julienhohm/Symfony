<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_77bf8dfe3b2314e1ca019da578d27dea293658e6116204265e43a26c6c50444d extends Twig_Template
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
        $__internal_1e993f2daf9deecc27a899df34bfe740806378ba2e3f8bd6af42dc76786fb9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e993f2daf9deecc27a899df34bfe740806378ba2e3f8bd6af42dc76786fb9b1->enter($__internal_1e993f2daf9deecc27a899df34bfe740806378ba2e3f8bd6af42dc76786fb9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1e993f2daf9deecc27a899df34bfe740806378ba2e3f8bd6af42dc76786fb9b1->leave($__internal_1e993f2daf9deecc27a899df34bfe740806378ba2e3f8bd6af42dc76786fb9b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
