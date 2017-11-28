<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2fe49d63a2138f854521b7cee98209d6cf16b4702364d3405b916328622900c5 extends Twig_Template
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
        $__internal_37551ecef25769becbb8d5a75e4ba932aa674ad8f259847ba345d69bf71ed56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37551ecef25769becbb8d5a75e4ba932aa674ad8f259847ba345d69bf71ed56e->enter($__internal_37551ecef25769becbb8d5a75e4ba932aa674ad8f259847ba345d69bf71ed56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null), "exception" => $this->getAttribute(($context["exception"] ?? null), "toarray", array()))));
        echo "
";
        
        $__internal_37551ecef25769becbb8d5a75e4ba932aa674ad8f259847ba345d69bf71ed56e->leave($__internal_37551ecef25769becbb8d5a75e4ba932aa674ad8f259847ba345d69bf71ed56e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
