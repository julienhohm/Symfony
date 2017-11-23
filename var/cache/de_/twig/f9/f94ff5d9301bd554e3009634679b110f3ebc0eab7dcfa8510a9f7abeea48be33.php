<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fe06225e9d9192bf4d1805a5c7bb5d5b4867bd8461e55ec62bb15d7eea16824d extends Twig_Template
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
        $__internal_66ad83ef983dfc98b693617c8c0857a1597a878784710911fe0e42d65e112fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ad83ef983dfc98b693617c8c0857a1597a878784710911fe0e42d65e112fa5->enter($__internal_66ad83ef983dfc98b693617c8c0857a1597a878784710911fe0e42d65e112fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_66ad83ef983dfc98b693617c8c0857a1597a878784710911fe0e42d65e112fa5->leave($__internal_66ad83ef983dfc98b693617c8c0857a1597a878784710911fe0e42d65e112fa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
