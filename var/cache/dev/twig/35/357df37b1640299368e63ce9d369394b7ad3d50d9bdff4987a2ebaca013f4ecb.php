<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_8e3ec9b4855ffd5c7a52c5a7c578d283896ab36df9764c55c6501d798818eb89 extends Twig_Template
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
        $__internal_000dfbf7e1bb32947c5aa9c1a03067fa160196c8bc635567c1a77fcf211110dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000dfbf7e1bb32947c5aa9c1a03067fa160196c8bc635567c1a77fcf211110dd->enter($__internal_000dfbf7e1bb32947c5aa9c1a03067fa160196c8bc635567c1a77fcf211110dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_66d83a8089a734089e03a276b8b7b71f7a2324fa842f74802eb39b66d70bb6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d83a8089a734089e03a276b8b7b71f7a2324fa842f74802eb39b66d70bb6eb->enter($__internal_66d83a8089a734089e03a276b8b7b71f7a2324fa842f74802eb39b66d70bb6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_000dfbf7e1bb32947c5aa9c1a03067fa160196c8bc635567c1a77fcf211110dd->leave($__internal_000dfbf7e1bb32947c5aa9c1a03067fa160196c8bc635567c1a77fcf211110dd_prof);

        
        $__internal_66d83a8089a734089e03a276b8b7b71f7a2324fa842f74802eb39b66d70bb6eb->leave($__internal_66d83a8089a734089e03a276b8b7b71f7a2324fa842f74802eb39b66d70bb6eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
