<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8b4e6049a9f229710720e341d7715d26ea8c6aefe626666eb3d2e1e92e8053f7 extends Twig_Template
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
        $__internal_b9dc5e698ed1b878589d3da69034c27f615313c64e768122aae84a51fd818c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9dc5e698ed1b878589d3da69034c27f615313c64e768122aae84a51fd818c47->enter($__internal_b9dc5e698ed1b878589d3da69034c27f615313c64e768122aae84a51fd818c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_826739f1790c002cabbc4c1d43eb916e002319fda5c95c786caa402243111ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826739f1790c002cabbc4c1d43eb916e002319fda5c95c786caa402243111ace->enter($__internal_826739f1790c002cabbc4c1d43eb916e002319fda5c95c786caa402243111ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b9dc5e698ed1b878589d3da69034c27f615313c64e768122aae84a51fd818c47->leave($__internal_b9dc5e698ed1b878589d3da69034c27f615313c64e768122aae84a51fd818c47_prof);

        
        $__internal_826739f1790c002cabbc4c1d43eb916e002319fda5c95c786caa402243111ace->leave($__internal_826739f1790c002cabbc4c1d43eb916e002319fda5c95c786caa402243111ace_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
