<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9f4e34280d8b1129e3192c6c133ed3ec03d37e1940c030050ea37211106cb578 extends Twig_Template
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
        $__internal_70ca40c7c50fc89c85a7f9806ad2644d2fddf1a9fb04fe8ef037f212f16ad8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ca40c7c50fc89c85a7f9806ad2644d2fddf1a9fb04fe8ef037f212f16ad8dd->enter($__internal_70ca40c7c50fc89c85a7f9806ad2644d2fddf1a9fb04fe8ef037f212f16ad8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_70ca40c7c50fc89c85a7f9806ad2644d2fddf1a9fb04fe8ef037f212f16ad8dd->leave($__internal_70ca40c7c50fc89c85a7f9806ad2644d2fddf1a9fb04fe8ef037f212f16ad8dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
