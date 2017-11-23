<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6e4570fad85f6f3092700e80b4da0b39d79996b97c2a68ef92cae4c383c27b16 extends Twig_Template
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
        $__internal_18de50693de854ee803960b60293e24e8c5d9dcaab62fd9cd5cfc311083e2e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18de50693de854ee803960b60293e24e8c5d9dcaab62fd9cd5cfc311083e2e7f->enter($__internal_18de50693de854ee803960b60293e24e8c5d9dcaab62fd9cd5cfc311083e2e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a416c83284e382e4a98143297eee86a20a064f94da7d0867e47b5824c0dad54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a416c83284e382e4a98143297eee86a20a064f94da7d0867e47b5824c0dad54c->enter($__internal_a416c83284e382e4a98143297eee86a20a064f94da7d0867e47b5824c0dad54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_18de50693de854ee803960b60293e24e8c5d9dcaab62fd9cd5cfc311083e2e7f->leave($__internal_18de50693de854ee803960b60293e24e8c5d9dcaab62fd9cd5cfc311083e2e7f_prof);

        
        $__internal_a416c83284e382e4a98143297eee86a20a064f94da7d0867e47b5824c0dad54c->leave($__internal_a416c83284e382e4a98143297eee86a20a064f94da7d0867e47b5824c0dad54c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
