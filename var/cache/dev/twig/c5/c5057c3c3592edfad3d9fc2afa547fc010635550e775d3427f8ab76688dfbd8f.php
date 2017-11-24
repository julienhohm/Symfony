<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_cf0e391ddfb9b3f718960afeba9c380f039968cbc9627c1999b7bd77f30fca45 extends Twig_Template
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
        $__internal_92bf7c44c1db64b534a814bc04c754404b859832f69fc3b42fa4af01e97a133a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92bf7c44c1db64b534a814bc04c754404b859832f69fc3b42fa4af01e97a133a->enter($__internal_92bf7c44c1db64b534a814bc04c754404b859832f69fc3b42fa4af01e97a133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e4418ead77b72256499778e90654503e5ff91e5a00fd0c341adeebde3fb8058e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4418ead77b72256499778e90654503e5ff91e5a00fd0c341adeebde3fb8058e->enter($__internal_e4418ead77b72256499778e90654503e5ff91e5a00fd0c341adeebde3fb8058e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_92bf7c44c1db64b534a814bc04c754404b859832f69fc3b42fa4af01e97a133a->leave($__internal_92bf7c44c1db64b534a814bc04c754404b859832f69fc3b42fa4af01e97a133a_prof);

        
        $__internal_e4418ead77b72256499778e90654503e5ff91e5a00fd0c341adeebde3fb8058e->leave($__internal_e4418ead77b72256499778e90654503e5ff91e5a00fd0c341adeebde3fb8058e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
