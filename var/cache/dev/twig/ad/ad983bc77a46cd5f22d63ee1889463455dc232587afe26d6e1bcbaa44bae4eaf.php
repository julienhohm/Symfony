<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5f2c52f0a0b1d152fff57aa7572e4051024c06532c2772070bc180d050a33c97 extends Twig_Template
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
        $__internal_070b6909ea2c9dae86256dc01f26458a2b7be581188f7b1893d296a988f0f0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070b6909ea2c9dae86256dc01f26458a2b7be581188f7b1893d296a988f0f0e8->enter($__internal_070b6909ea2c9dae86256dc01f26458a2b7be581188f7b1893d296a988f0f0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null))));
        echo "
";
        
        $__internal_070b6909ea2c9dae86256dc01f26458a2b7be581188f7b1893d296a988f0f0e8->leave($__internal_070b6909ea2c9dae86256dc01f26458a2b7be581188f7b1893d296a988f0f0e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
