<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_50b2f5cb3123d7a774907482aaf5174e0ae5616512281d42e34bb951c80647b8 extends Twig_Template
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
        $__internal_37d0b2e971a9f19069f68a30ed0880e57f5c4cb38cc0894005413b0b8dd15f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d0b2e971a9f19069f68a30ed0880e57f5c4cb38cc0894005413b0b8dd15f6b->enter($__internal_37d0b2e971a9f19069f68a30ed0880e57f5c4cb38cc0894005413b0b8dd15f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ed9bde11c79613dda0b6bd722ac4397f440cb08cfdd9d74497782fdf0351dd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9bde11c79613dda0b6bd722ac4397f440cb08cfdd9d74497782fdf0351dd9b->enter($__internal_ed9bde11c79613dda0b6bd722ac4397f440cb08cfdd9d74497782fdf0351dd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_37d0b2e971a9f19069f68a30ed0880e57f5c4cb38cc0894005413b0b8dd15f6b->leave($__internal_37d0b2e971a9f19069f68a30ed0880e57f5c4cb38cc0894005413b0b8dd15f6b_prof);

        
        $__internal_ed9bde11c79613dda0b6bd722ac4397f440cb08cfdd9d74497782fdf0351dd9b->leave($__internal_ed9bde11c79613dda0b6bd722ac4397f440cb08cfdd9d74497782fdf0351dd9b_prof);

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
