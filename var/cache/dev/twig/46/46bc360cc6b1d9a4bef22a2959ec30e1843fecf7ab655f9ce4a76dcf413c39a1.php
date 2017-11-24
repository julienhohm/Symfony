<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_becee07805f88215adbcce699f266c3ca2d45355762a1dc7101f30680e4dba9a extends Twig_Template
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
        $__internal_33e833b79581bee8c49296b3e3acc05b1c0805e25affce5251c170c3b7bd6d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e833b79581bee8c49296b3e3acc05b1c0805e25affce5251c170c3b7bd6d4b->enter($__internal_33e833b79581bee8c49296b3e3acc05b1c0805e25affce5251c170c3b7bd6d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_554a8ec8ae9870f381b49c38e5e2b6deca4199554dab2bb35bc46c9fc669f02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554a8ec8ae9870f381b49c38e5e2b6deca4199554dab2bb35bc46c9fc669f02f->enter($__internal_554a8ec8ae9870f381b49c38e5e2b6deca4199554dab2bb35bc46c9fc669f02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_33e833b79581bee8c49296b3e3acc05b1c0805e25affce5251c170c3b7bd6d4b->leave($__internal_33e833b79581bee8c49296b3e3acc05b1c0805e25affce5251c170c3b7bd6d4b_prof);

        
        $__internal_554a8ec8ae9870f381b49c38e5e2b6deca4199554dab2bb35bc46c9fc669f02f->leave($__internal_554a8ec8ae9870f381b49c38e5e2b6deca4199554dab2bb35bc46c9fc669f02f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
