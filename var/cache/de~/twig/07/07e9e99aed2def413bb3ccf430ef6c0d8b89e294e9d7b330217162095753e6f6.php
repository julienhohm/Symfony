<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cdcc2c5aebcb16f3da3b8fa293d042feab5f04236228cc486549b6afa9a78996 extends Twig_Template
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
        $__internal_5b07a427e00ec0d87e9916012cc73afbdaeea4aab4bcc5771713a8f86f960062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b07a427e00ec0d87e9916012cc73afbdaeea4aab4bcc5771713a8f86f960062->enter($__internal_5b07a427e00ec0d87e9916012cc73afbdaeea4aab4bcc5771713a8f86f960062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_fd0bbc91115b9ca9532b8aebddecf0fb8eb606fe961f6ba4e131170b969b80d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0bbc91115b9ca9532b8aebddecf0fb8eb606fe961f6ba4e131170b969b80d8->enter($__internal_fd0bbc91115b9ca9532b8aebddecf0fb8eb606fe961f6ba4e131170b969b80d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5b07a427e00ec0d87e9916012cc73afbdaeea4aab4bcc5771713a8f86f960062->leave($__internal_5b07a427e00ec0d87e9916012cc73afbdaeea4aab4bcc5771713a8f86f960062_prof);

        
        $__internal_fd0bbc91115b9ca9532b8aebddecf0fb8eb606fe961f6ba4e131170b969b80d8->leave($__internal_fd0bbc91115b9ca9532b8aebddecf0fb8eb606fe961f6ba4e131170b969b80d8_prof);

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
