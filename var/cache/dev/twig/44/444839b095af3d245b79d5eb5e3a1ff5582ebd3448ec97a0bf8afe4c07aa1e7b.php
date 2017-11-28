<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e23b7a7ed502cf8a23b1fc66de3933dcae23790a271e8ecbbe39da1ee9bce888 extends Twig_Template
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
        $__internal_1295d5ce8f877d7e277f13b20ce815b9f156f102ab3ee0e3142418d3ab72241c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1295d5ce8f877d7e277f13b20ce815b9f156f102ab3ee0e3142418d3ab72241c->enter($__internal_1295d5ce8f877d7e277f13b20ce815b9f156f102ab3ee0e3142418d3ab72241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1295d5ce8f877d7e277f13b20ce815b9f156f102ab3ee0e3142418d3ab72241c->leave($__internal_1295d5ce8f877d7e277f13b20ce815b9f156f102ab3ee0e3142418d3ab72241c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
