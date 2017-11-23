<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ce2bdebf135cc08e09efcd099ed85110ff9a31fa69c99f73401ea1e88cc3c301 extends Twig_Template
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
        $__internal_5ae7d3d9f0bd9de8c801a4bc1d93dca29d37f1764e5730da26bb0625a8180aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae7d3d9f0bd9de8c801a4bc1d93dca29d37f1764e5730da26bb0625a8180aff->enter($__internal_5ae7d3d9f0bd9de8c801a4bc1d93dca29d37f1764e5730da26bb0625a8180aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null))));
        echo "
";
        
        $__internal_5ae7d3d9f0bd9de8c801a4bc1d93dca29d37f1764e5730da26bb0625a8180aff->leave($__internal_5ae7d3d9f0bd9de8c801a4bc1d93dca29d37f1764e5730da26bb0625a8180aff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
