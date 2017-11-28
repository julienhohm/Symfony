<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_870546c885a00d0932ad252251e18e407cbf01a17fef7d9f3c88420781486fb1 extends Twig_Template
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
        $__internal_fddf71e1cbf2c920f33b68e3ff470280adecfb489d8977149725a92ff521a78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddf71e1cbf2c920f33b68e3ff470280adecfb489d8977149725a92ff521a78d->enter($__internal_fddf71e1cbf2c920f33b68e3ff470280adecfb489d8977149725a92ff521a78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
        
        $__internal_fddf71e1cbf2c920f33b68e3ff470280adecfb489d8977149725a92ff521a78d->leave($__internal_fddf71e1cbf2c920f33b68e3ff470280adecfb489d8977149725a92ff521a78d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
