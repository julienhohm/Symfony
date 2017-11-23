<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf043cdc1f86180e4b139ce9ecd758283ee7565b0ba4e5ddd009afa4c62823f7 extends Twig_Template
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
        $__internal_8f05e5bd40b473dd7aa66d1fc2cd6985bbdd18fd475c1daa8f991d884973e56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f05e5bd40b473dd7aa66d1fc2cd6985bbdd18fd475c1daa8f991d884973e56c->enter($__internal_8f05e5bd40b473dd7aa66d1fc2cd6985bbdd18fd475c1daa8f991d884973e56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f6d818a1cb3370ed8baccb7d4d04a3d3ae0b0161122acabc35ba2edc5412fe6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d818a1cb3370ed8baccb7d4d04a3d3ae0b0161122acabc35ba2edc5412fe6d->enter($__internal_f6d818a1cb3370ed8baccb7d4d04a3d3ae0b0161122acabc35ba2edc5412fe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8f05e5bd40b473dd7aa66d1fc2cd6985bbdd18fd475c1daa8f991d884973e56c->leave($__internal_8f05e5bd40b473dd7aa66d1fc2cd6985bbdd18fd475c1daa8f991d884973e56c_prof);

        
        $__internal_f6d818a1cb3370ed8baccb7d4d04a3d3ae0b0161122acabc35ba2edc5412fe6d->leave($__internal_f6d818a1cb3370ed8baccb7d4d04a3d3ae0b0161122acabc35ba2edc5412fe6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
