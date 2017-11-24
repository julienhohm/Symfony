<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2d896137cb2172f6bbf2d7c8aa0f18ca5835c9a54ad72c7165ac4ba7bd3bd871 extends Twig_Template
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
        $__internal_f03add8372a4cd4447ca0f674709b53cf32a4803e3763e5b953c8b72bf61086f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03add8372a4cd4447ca0f674709b53cf32a4803e3763e5b953c8b72bf61086f->enter($__internal_f03add8372a4cd4447ca0f674709b53cf32a4803e3763e5b953c8b72bf61086f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a83c18aca77f8590ddb4140f3ef410d5a403c520afa0bb07e34a0dfd0d9af141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83c18aca77f8590ddb4140f3ef410d5a403c520afa0bb07e34a0dfd0d9af141->enter($__internal_a83c18aca77f8590ddb4140f3ef410d5a403c520afa0bb07e34a0dfd0d9af141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f03add8372a4cd4447ca0f674709b53cf32a4803e3763e5b953c8b72bf61086f->leave($__internal_f03add8372a4cd4447ca0f674709b53cf32a4803e3763e5b953c8b72bf61086f_prof);

        
        $__internal_a83c18aca77f8590ddb4140f3ef410d5a403c520afa0bb07e34a0dfd0d9af141->leave($__internal_a83c18aca77f8590ddb4140f3ef410d5a403c520afa0bb07e34a0dfd0d9af141_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
