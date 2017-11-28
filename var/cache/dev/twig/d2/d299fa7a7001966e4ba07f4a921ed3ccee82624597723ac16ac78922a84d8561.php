<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_39d14c956fb7f96b6b5e5ab351ca572ed3846aeb40d9ed77076778cf26455bc4 extends Twig_Template
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
        $__internal_f7ed894bd5e9016b12e54df20b80b33539fc4e5316e02bbc8d0ca35ac3e05c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ed894bd5e9016b12e54df20b80b33539fc4e5316e02bbc8d0ca35ac3e05c31->enter($__internal_f7ed894bd5e9016b12e54df20b80b33539fc4e5316e02bbc8d0ca35ac3e05c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f7ed894bd5e9016b12e54df20b80b33539fc4e5316e02bbc8d0ca35ac3e05c31->leave($__internal_f7ed894bd5e9016b12e54df20b80b33539fc4e5316e02bbc8d0ca35ac3e05c31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
