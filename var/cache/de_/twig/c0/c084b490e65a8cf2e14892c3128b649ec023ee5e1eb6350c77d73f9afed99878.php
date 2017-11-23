<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e48f7b5ec3bcc7b22e2d58ebc18863fe82d011d70a9946d25c6dc2c077fb3af0 extends Twig_Template
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
        $__internal_b562968754b2ca52982d81bca377fc7f8211136aee9624ad66df9d13bee5b0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b562968754b2ca52982d81bca377fc7f8211136aee9624ad66df9d13bee5b0ad->enter($__internal_b562968754b2ca52982d81bca377fc7f8211136aee9624ad66df9d13bee5b0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b562968754b2ca52982d81bca377fc7f8211136aee9624ad66df9d13bee5b0ad->leave($__internal_b562968754b2ca52982d81bca377fc7f8211136aee9624ad66df9d13bee5b0ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
