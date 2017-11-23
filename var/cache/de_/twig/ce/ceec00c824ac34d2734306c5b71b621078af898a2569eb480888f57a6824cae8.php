<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_19c88db5ee1c5ad5e1dfd209dcc3cd1bcdf4c9ab32fc72687be1a2551117b944 extends Twig_Template
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
        $__internal_b0640c69a9670f2b64d3c18205fa46992dd4318afdadca46ba756cbdf8d75489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0640c69a9670f2b64d3c18205fa46992dd4318afdadca46ba756cbdf8d75489->enter($__internal_b0640c69a9670f2b64d3c18205fa46992dd4318afdadca46ba756cbdf8d75489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b0640c69a9670f2b64d3c18205fa46992dd4318afdadca46ba756cbdf8d75489->leave($__internal_b0640c69a9670f2b64d3c18205fa46992dd4318afdadca46ba756cbdf8d75489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
