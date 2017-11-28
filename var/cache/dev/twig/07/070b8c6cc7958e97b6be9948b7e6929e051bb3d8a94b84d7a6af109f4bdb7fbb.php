<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c37bb1d18b422f227d7eadfaa039e080fd6c196cae237fde74f2df50752e3a9e extends Twig_Template
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
        $__internal_a24ee380dedabb4d658a175cb4b9387b80d50e4f23c2aa97f38b96ca92c33383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24ee380dedabb4d658a175cb4b9387b80d50e4f23c2aa97f38b96ca92c33383->enter($__internal_a24ee380dedabb4d658a175cb4b9387b80d50e4f23c2aa97f38b96ca92c33383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a24ee380dedabb4d658a175cb4b9387b80d50e4f23c2aa97f38b96ca92c33383->leave($__internal_a24ee380dedabb4d658a175cb4b9387b80d50e4f23c2aa97f38b96ca92c33383_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
