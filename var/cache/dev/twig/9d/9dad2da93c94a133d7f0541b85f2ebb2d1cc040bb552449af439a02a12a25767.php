<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3c0ae02049e09568dd4caa191fe4cca5c4bb1803dedb579cb689d27449e2dba2 extends Twig_Template
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
        $__internal_4b43a8a8742a8f18ff26ef640fdb9350c8cc1d77ab1c0afd570760a39f3aa81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b43a8a8742a8f18ff26ef640fdb9350c8cc1d77ab1c0afd570760a39f3aa81b->enter($__internal_4b43a8a8742a8f18ff26ef640fdb9350c8cc1d77ab1c0afd570760a39f3aa81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f642ad94a7c07c97d7cd972147a85bcd438f2ae393cd30b1dbcb5cd3414947ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f642ad94a7c07c97d7cd972147a85bcd438f2ae393cd30b1dbcb5cd3414947ac->enter($__internal_f642ad94a7c07c97d7cd972147a85bcd438f2ae393cd30b1dbcb5cd3414947ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4b43a8a8742a8f18ff26ef640fdb9350c8cc1d77ab1c0afd570760a39f3aa81b->leave($__internal_4b43a8a8742a8f18ff26ef640fdb9350c8cc1d77ab1c0afd570760a39f3aa81b_prof);

        
        $__internal_f642ad94a7c07c97d7cd972147a85bcd438f2ae393cd30b1dbcb5cd3414947ac->leave($__internal_f642ad94a7c07c97d7cd972147a85bcd438f2ae393cd30b1dbcb5cd3414947ac_prof);

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
