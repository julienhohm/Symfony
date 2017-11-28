<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d4431fa91ca67d64a2c87185f70464a039e19148eb1360e1a1a68f0fa7e90c91 extends Twig_Template
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
        $__internal_a241260d7e47f5582c53e97cc00a84990e46ae56ba55bc2afb7a883cbc0b8a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a241260d7e47f5582c53e97cc00a84990e46ae56ba55bc2afb7a883cbc0b8a2d->enter($__internal_a241260d7e47f5582c53e97cc00a84990e46ae56ba55bc2afb7a883cbc0b8a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a241260d7e47f5582c53e97cc00a84990e46ae56ba55bc2afb7a883cbc0b8a2d->leave($__internal_a241260d7e47f5582c53e97cc00a84990e46ae56ba55bc2afb7a883cbc0b8a2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
