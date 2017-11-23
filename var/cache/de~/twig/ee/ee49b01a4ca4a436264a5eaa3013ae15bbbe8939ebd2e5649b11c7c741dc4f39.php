<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9618fb385f27548aaf717ce25d8363a3037fd38d77cd4a84866ea38449ca69c6 extends Twig_Template
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
        $__internal_beb64306e95be46bcdc577e78f588c91358fbb3b50a2d8242b3d533dd27d5092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb64306e95be46bcdc577e78f588c91358fbb3b50a2d8242b3d533dd27d5092->enter($__internal_beb64306e95be46bcdc577e78f588c91358fbb3b50a2d8242b3d533dd27d5092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9d6502c961c4446a0683859df176e548bf2c865e6e0ac225c93fc9c0deba13bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6502c961c4446a0683859df176e548bf2c865e6e0ac225c93fc9c0deba13bc->enter($__internal_9d6502c961c4446a0683859df176e548bf2c865e6e0ac225c93fc9c0deba13bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_beb64306e95be46bcdc577e78f588c91358fbb3b50a2d8242b3d533dd27d5092->leave($__internal_beb64306e95be46bcdc577e78f588c91358fbb3b50a2d8242b3d533dd27d5092_prof);

        
        $__internal_9d6502c961c4446a0683859df176e548bf2c865e6e0ac225c93fc9c0deba13bc->leave($__internal_9d6502c961c4446a0683859df176e548bf2c865e6e0ac225c93fc9c0deba13bc_prof);

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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
