<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6cc6d93aed8ccc4d0916c89e36c05a03d8ac91fd4cd912e92c5eb3053eba069c extends Twig_Template
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
        $__internal_9756eebd351fdd38b3ce64abd1459a72195a1dc9ced53c52bc9ef4fec4d8c71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9756eebd351fdd38b3ce64abd1459a72195a1dc9ced53c52bc9ef4fec4d8c71e->enter($__internal_9756eebd351fdd38b3ce64abd1459a72195a1dc9ced53c52bc9ef4fec4d8c71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9756eebd351fdd38b3ce64abd1459a72195a1dc9ced53c52bc9ef4fec4d8c71e->leave($__internal_9756eebd351fdd38b3ce64abd1459a72195a1dc9ced53c52bc9ef4fec4d8c71e_prof);

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
