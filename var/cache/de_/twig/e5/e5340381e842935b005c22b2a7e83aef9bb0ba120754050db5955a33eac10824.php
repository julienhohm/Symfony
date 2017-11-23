<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_ea15ffe93278d8679dc7e749d81e65dff9b1959c6701c063a7849d0dc4d85d96 extends Twig_Template
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
        $__internal_6385488dda49f12b752526f9e4a681ff8cd6d6ae6b933a1322a24bcc432495ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6385488dda49f12b752526f9e4a681ff8cd6d6ae6b933a1322a24bcc432495ac->enter($__internal_6385488dda49f12b752526f9e4a681ff8cd6d6ae6b933a1322a24bcc432495ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6385488dda49f12b752526f9e4a681ff8cd6d6ae6b933a1322a24bcc432495ac->leave($__internal_6385488dda49f12b752526f9e4a681ff8cd6d6ae6b933a1322a24bcc432495ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
