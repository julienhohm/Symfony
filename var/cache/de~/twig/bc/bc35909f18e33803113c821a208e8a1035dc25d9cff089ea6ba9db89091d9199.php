<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4bd0b9aa65688a53c23b37aed6b9e4f4ceb88b2ac35bc14e6a9447cfd4257854 extends Twig_Template
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
        $__internal_ddfe4f6f9c6a83bb015772aefa95264b94afcdd3f08c70f1fecd01af5a238c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfe4f6f9c6a83bb015772aefa95264b94afcdd3f08c70f1fecd01af5a238c2d->enter($__internal_ddfe4f6f9c6a83bb015772aefa95264b94afcdd3f08c70f1fecd01af5a238c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_47d375fdb0096cd946730ac6f6755e76228d183ab359b12c2b9a3062e7df32ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d375fdb0096cd946730ac6f6755e76228d183ab359b12c2b9a3062e7df32ca->enter($__internal_47d375fdb0096cd946730ac6f6755e76228d183ab359b12c2b9a3062e7df32ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ddfe4f6f9c6a83bb015772aefa95264b94afcdd3f08c70f1fecd01af5a238c2d->leave($__internal_ddfe4f6f9c6a83bb015772aefa95264b94afcdd3f08c70f1fecd01af5a238c2d_prof);

        
        $__internal_47d375fdb0096cd946730ac6f6755e76228d183ab359b12c2b9a3062e7df32ca->leave($__internal_47d375fdb0096cd946730ac6f6755e76228d183ab359b12c2b9a3062e7df32ca_prof);

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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
