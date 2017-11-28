<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_04caf7e1b84427e664f75c1a1c5ca8d04bff37c88cde6e59744bb97ac457411d extends Twig_Template
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
        $__internal_e5f7cdc21971efb7cf2e11a2a92e9fda14bfd7378e963033d8e95da7f13b334d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f7cdc21971efb7cf2e11a2a92e9fda14bfd7378e963033d8e95da7f13b334d->enter($__internal_e5f7cdc21971efb7cf2e11a2a92e9fda14bfd7378e963033d8e95da7f13b334d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e5f7cdc21971efb7cf2e11a2a92e9fda14bfd7378e963033d8e95da7f13b334d->leave($__internal_e5f7cdc21971efb7cf2e11a2a92e9fda14bfd7378e963033d8e95da7f13b334d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
