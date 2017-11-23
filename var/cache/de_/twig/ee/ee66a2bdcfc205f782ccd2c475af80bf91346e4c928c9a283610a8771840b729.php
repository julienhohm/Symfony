<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e57bcf0fb33777784c68c8865db81e45815ccd572e0dae4ad389c325c670bb8f extends Twig_Template
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
        $__internal_899e009c6db0b5e81eabbd6681105416562d23d933e7dec91cfa0acf68c28c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899e009c6db0b5e81eabbd6681105416562d23d933e7dec91cfa0acf68c28c1d->enter($__internal_899e009c6db0b5e81eabbd6681105416562d23d933e7dec91cfa0acf68c28c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_899e009c6db0b5e81eabbd6681105416562d23d933e7dec91cfa0acf68c28c1d->leave($__internal_899e009c6db0b5e81eabbd6681105416562d23d933e7dec91cfa0acf68c28c1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
