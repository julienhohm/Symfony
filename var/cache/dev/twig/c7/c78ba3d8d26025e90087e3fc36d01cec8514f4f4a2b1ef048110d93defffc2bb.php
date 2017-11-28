<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b226e109a5053409ab6dbc1219e8bbacc98004197e7e70a881bf2ad2e56d1c37 extends Twig_Template
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
        $__internal_f738ea27afa66ae15e932a2eeb71fdf2e20a44c869a9952fee502a70edb81b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f738ea27afa66ae15e932a2eeb71fdf2e20a44c869a9952fee502a70edb81b13->enter($__internal_f738ea27afa66ae15e932a2eeb71fdf2e20a44c869a9952fee502a70edb81b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f738ea27afa66ae15e932a2eeb71fdf2e20a44c869a9952fee502a70edb81b13->leave($__internal_f738ea27afa66ae15e932a2eeb71fdf2e20a44c869a9952fee502a70edb81b13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
