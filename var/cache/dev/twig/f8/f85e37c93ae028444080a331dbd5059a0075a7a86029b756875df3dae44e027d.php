<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_cf1678fd0930bf868d33360f6d11368c80ee2387799821ec4d5f3bb6003c7386 extends Twig_Template
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
        $__internal_f6641de2628c27754683ffc2f55461c64ba51dde8cfa05b97cf45006bdee627a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6641de2628c27754683ffc2f55461c64ba51dde8cfa05b97cf45006bdee627a->enter($__internal_f6641de2628c27754683ffc2f55461c64ba51dde8cfa05b97cf45006bdee627a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f6641de2628c27754683ffc2f55461c64ba51dde8cfa05b97cf45006bdee627a->leave($__internal_f6641de2628c27754683ffc2f55461c64ba51dde8cfa05b97cf45006bdee627a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
