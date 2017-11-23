<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ae9d8e8ebdc74da0214169d68eeeebc659415f794cffccfce2f41d858078dbae extends Twig_Template
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
        $__internal_2cf3cab0ffdb8e8c36fc91cdd6a5a8a007d19e3664ec3e89f0d81f0a8abaa086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf3cab0ffdb8e8c36fc91cdd6a5a8a007d19e3664ec3e89f0d81f0a8abaa086->enter($__internal_2cf3cab0ffdb8e8c36fc91cdd6a5a8a007d19e3664ec3e89f0d81f0a8abaa086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2cf3cab0ffdb8e8c36fc91cdd6a5a8a007d19e3664ec3e89f0d81f0a8abaa086->leave($__internal_2cf3cab0ffdb8e8c36fc91cdd6a5a8a007d19e3664ec3e89f0d81f0a8abaa086_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
