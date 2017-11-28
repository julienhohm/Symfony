<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_188d459284a858a97e231a6eb89cf9d50a9d7805b8690b539e4996562d510f64 extends Twig_Template
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
        $__internal_b004bc2b15ff8158eaf0978d61a0261a85b671b2e0955184903be09ec3fd526c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b004bc2b15ff8158eaf0978d61a0261a85b671b2e0955184903be09ec3fd526c->enter($__internal_b004bc2b15ff8158eaf0978d61a0261a85b671b2e0955184903be09ec3fd526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b004bc2b15ff8158eaf0978d61a0261a85b671b2e0955184903be09ec3fd526c->leave($__internal_b004bc2b15ff8158eaf0978d61a0261a85b671b2e0955184903be09ec3fd526c_prof);

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
