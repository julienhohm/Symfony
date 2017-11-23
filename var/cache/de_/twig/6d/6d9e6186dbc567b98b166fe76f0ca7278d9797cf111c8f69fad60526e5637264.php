<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9ac9b42f933ecc832f00ed8a7bb4054493c227b2d389804cac8a8cb5b5c1b1f3 extends Twig_Template
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
        $__internal_b0e7e23db52bc2fd3cc3a114990da3c4bff75534422833ddd58418909c7fe1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e7e23db52bc2fd3cc3a114990da3c4bff75534422833ddd58418909c7fe1f6->enter($__internal_b0e7e23db52bc2fd3cc3a114990da3c4bff75534422833ddd58418909c7fe1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b0e7e23db52bc2fd3cc3a114990da3c4bff75534422833ddd58418909c7fe1f6->leave($__internal_b0e7e23db52bc2fd3cc3a114990da3c4bff75534422833ddd58418909c7fe1f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
