<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0db53145e8132c0d747197cadaddad5aabd6897d7fc148f2da65291bf5eb88ad extends Twig_Template
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
        $__internal_2bd8be9a64a30eb10a50e520ca1c04f935be0d260ad6809f77b457e9658f1030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd8be9a64a30eb10a50e520ca1c04f935be0d260ad6809f77b457e9658f1030->enter($__internal_2bd8be9a64a30eb10a50e520ca1c04f935be0d260ad6809f77b457e9658f1030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2bd8be9a64a30eb10a50e520ca1c04f935be0d260ad6809f77b457e9658f1030->leave($__internal_2bd8be9a64a30eb10a50e520ca1c04f935be0d260ad6809f77b457e9658f1030_prof);

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
