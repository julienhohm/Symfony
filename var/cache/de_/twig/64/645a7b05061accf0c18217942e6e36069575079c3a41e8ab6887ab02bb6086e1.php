<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_44f83085cfd2c91bcf8ffd8ff596ff975006bd15ba8fd59621b641aec2231fe8 extends Twig_Template
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
        $__internal_6d5c26116d4d37c820d12980ce9e1f720aa6dd1a627cb828fb7f18a2619950fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5c26116d4d37c820d12980ce9e1f720aa6dd1a627cb828fb7f18a2619950fd->enter($__internal_6d5c26116d4d37c820d12980ce9e1f720aa6dd1a627cb828fb7f18a2619950fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6d5c26116d4d37c820d12980ce9e1f720aa6dd1a627cb828fb7f18a2619950fd->leave($__internal_6d5c26116d4d37c820d12980ce9e1f720aa6dd1a627cb828fb7f18a2619950fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
