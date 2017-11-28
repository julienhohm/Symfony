<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_994e536028f9d89cd81299412cb43b76194bc9f31fc95a92d97832bdad5e19d7 extends Twig_Template
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
        $__internal_420ecc133648b70121a83e119d47bf8860fd57501853547f9a5405888463e204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420ecc133648b70121a83e119d47bf8860fd57501853547f9a5405888463e204->enter($__internal_420ecc133648b70121a83e119d47bf8860fd57501853547f9a5405888463e204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null), "exception" => $this->getAttribute(($context["exception"] ?? null), "toarray", array()))));
        echo "
";
        
        $__internal_420ecc133648b70121a83e119d47bf8860fd57501853547f9a5405888463e204->leave($__internal_420ecc133648b70121a83e119d47bf8860fd57501853547f9a5405888463e204_prof);

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
        return new Twig_Source("", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
