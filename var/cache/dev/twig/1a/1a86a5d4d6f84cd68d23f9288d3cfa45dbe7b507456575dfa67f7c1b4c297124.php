<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_00be2e4094381695ec66e08584a0c0e8ec5fa303824ceee9d10216f6203c024f extends Twig_Template
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
        $__internal_ba11fefce80fd6e5f6834b9eeffca7e5fc231bb9a383d87eeda9b781c4d1c2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba11fefce80fd6e5f6834b9eeffca7e5fc231bb9a383d87eeda9b781c4d1c2d8->enter($__internal_ba11fefce80fd6e5f6834b9eeffca7e5fc231bb9a383d87eeda9b781c4d1c2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ba11fefce80fd6e5f6834b9eeffca7e5fc231bb9a383d87eeda9b781c4d1c2d8->leave($__internal_ba11fefce80fd6e5f6834b9eeffca7e5fc231bb9a383d87eeda9b781c4d1c2d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
