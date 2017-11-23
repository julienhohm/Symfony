<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_eacefb124cd41505c7c4e8b433260ce98569d8e73d0bdb0c0eca2a4a22aa241d extends Twig_Template
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
        $__internal_664c751b9f40b00004119f1e12819976b15ce612d6fb83bec9c0b1b02b6e452f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664c751b9f40b00004119f1e12819976b15ce612d6fb83bec9c0b1b02b6e452f->enter($__internal_664c751b9f40b00004119f1e12819976b15ce612d6fb83bec9c0b1b02b6e452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_664c751b9f40b00004119f1e12819976b15ce612d6fb83bec9c0b1b02b6e452f->leave($__internal_664c751b9f40b00004119f1e12819976b15ce612d6fb83bec9c0b1b02b6e452f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
