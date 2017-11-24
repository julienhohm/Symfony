<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0e0ad0790714d312cff30338aa99469f696fc487b368dd78decbb02b75d6de80 extends Twig_Template
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
        $__internal_2bb65f896be139b3ba463f65708a0e3fbb7cde0176980de2b14d1a655c2fffec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb65f896be139b3ba463f65708a0e3fbb7cde0176980de2b14d1a655c2fffec->enter($__internal_2bb65f896be139b3ba463f65708a0e3fbb7cde0176980de2b14d1a655c2fffec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a18ebff93e7c4b39efdb78a99920f88ce73319fac492ba9a9168f861f4174bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18ebff93e7c4b39efdb78a99920f88ce73319fac492ba9a9168f861f4174bbc->enter($__internal_a18ebff93e7c4b39efdb78a99920f88ce73319fac492ba9a9168f861f4174bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2bb65f896be139b3ba463f65708a0e3fbb7cde0176980de2b14d1a655c2fffec->leave($__internal_2bb65f896be139b3ba463f65708a0e3fbb7cde0176980de2b14d1a655c2fffec_prof);

        
        $__internal_a18ebff93e7c4b39efdb78a99920f88ce73319fac492ba9a9168f861f4174bbc->leave($__internal_a18ebff93e7c4b39efdb78a99920f88ce73319fac492ba9a9168f861f4174bbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
