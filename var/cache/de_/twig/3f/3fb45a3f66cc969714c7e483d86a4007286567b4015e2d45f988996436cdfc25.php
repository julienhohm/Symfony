<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7047a7b9257ae2650140731752234e3cf1b7f3e1a92f5f6c50cb6dc030e5f936 extends Twig_Template
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
        $__internal_c487dcf9bbb1cfecb3f9e3282d279d12391315112a8a78a03de4c95a02aa3f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c487dcf9bbb1cfecb3f9e3282d279d12391315112a8a78a03de4c95a02aa3f75->enter($__internal_c487dcf9bbb1cfecb3f9e3282d279d12391315112a8a78a03de4c95a02aa3f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c487dcf9bbb1cfecb3f9e3282d279d12391315112a8a78a03de4c95a02aa3f75->leave($__internal_c487dcf9bbb1cfecb3f9e3282d279d12391315112a8a78a03de4c95a02aa3f75_prof);

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
