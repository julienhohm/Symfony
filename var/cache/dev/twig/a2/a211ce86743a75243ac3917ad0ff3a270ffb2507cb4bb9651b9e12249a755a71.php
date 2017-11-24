<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_402f1c9b018ff08e401763608822776d824b6adecc7ad7da3973b5441ab378a7 extends Twig_Template
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
        $__internal_deaaf485083e93726815f44c1c94cc269a7e70afc9fdf8b0c1bda83394d05b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deaaf485083e93726815f44c1c94cc269a7e70afc9fdf8b0c1bda83394d05b35->enter($__internal_deaaf485083e93726815f44c1c94cc269a7e70afc9fdf8b0c1bda83394d05b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_192f52f0d2d0767420f6625eb723668822c217e9291cb17f019d23b19fb84cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192f52f0d2d0767420f6625eb723668822c217e9291cb17f019d23b19fb84cec->enter($__internal_192f52f0d2d0767420f6625eb723668822c217e9291cb17f019d23b19fb84cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_deaaf485083e93726815f44c1c94cc269a7e70afc9fdf8b0c1bda83394d05b35->leave($__internal_deaaf485083e93726815f44c1c94cc269a7e70afc9fdf8b0c1bda83394d05b35_prof);

        
        $__internal_192f52f0d2d0767420f6625eb723668822c217e9291cb17f019d23b19fb84cec->leave($__internal_192f52f0d2d0767420f6625eb723668822c217e9291cb17f019d23b19fb84cec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
