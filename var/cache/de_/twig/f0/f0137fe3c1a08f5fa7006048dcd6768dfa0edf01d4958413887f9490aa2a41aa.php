<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ee3b9dfd5c07fec70321c7c884e62763f58b84e3c6e8bd494390bba6a3951ca6 extends Twig_Template
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
        $__internal_14e19f2dabbda2999d107b8e91c18b9e91b61926efe4dc9c52f41908147c3107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e19f2dabbda2999d107b8e91c18b9e91b61926efe4dc9c52f41908147c3107->enter($__internal_14e19f2dabbda2999d107b8e91c18b9e91b61926efe4dc9c52f41908147c3107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_14e19f2dabbda2999d107b8e91c18b9e91b61926efe4dc9c52f41908147c3107->leave($__internal_14e19f2dabbda2999d107b8e91c18b9e91b61926efe4dc9c52f41908147c3107_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
