<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_33c3695c3499b65e7e6e7620fc5fe4800b6f710eed7c122dd53b52dac3e5ac05 extends Twig_Template
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
        $__internal_165b9da468959e5e0affc58a3c66bf90bd282d67ba7812dd7b209c552c62c463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165b9da468959e5e0affc58a3c66bf90bd282d67ba7812dd7b209c552c62c463->enter($__internal_165b9da468959e5e0affc58a3c66bf90bd282d67ba7812dd7b209c552c62c463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_17c7e1321ff0611f419c34d3642cf51950e67acba6f8dc8c1cd7b4b0ce0e66b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c7e1321ff0611f419c34d3642cf51950e67acba6f8dc8c1cd7b4b0ce0e66b2->enter($__internal_17c7e1321ff0611f419c34d3642cf51950e67acba6f8dc8c1cd7b4b0ce0e66b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_165b9da468959e5e0affc58a3c66bf90bd282d67ba7812dd7b209c552c62c463->leave($__internal_165b9da468959e5e0affc58a3c66bf90bd282d67ba7812dd7b209c552c62c463_prof);

        
        $__internal_17c7e1321ff0611f419c34d3642cf51950e67acba6f8dc8c1cd7b4b0ce0e66b2->leave($__internal_17c7e1321ff0611f419c34d3642cf51950e67acba6f8dc8c1cd7b4b0ce0e66b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
