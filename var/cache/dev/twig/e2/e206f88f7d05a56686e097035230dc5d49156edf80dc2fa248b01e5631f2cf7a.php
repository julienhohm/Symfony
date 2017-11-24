<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_65b714d25bf5a60679775bd5d7b53edf38232fd068428a81150360a7a6fd913f extends Twig_Template
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
        $__internal_77229355b266c26cebbf5728b7b02c53ed8a411243c119bea71bab3a1dc90fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77229355b266c26cebbf5728b7b02c53ed8a411243c119bea71bab3a1dc90fc2->enter($__internal_77229355b266c26cebbf5728b7b02c53ed8a411243c119bea71bab3a1dc90fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_e0c6301eedf9a0954c8077fc3695b65528b83a5810021b3bd3b2c38c9ab5a890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c6301eedf9a0954c8077fc3695b65528b83a5810021b3bd3b2c38c9ab5a890->enter($__internal_e0c6301eedf9a0954c8077fc3695b65528b83a5810021b3bd3b2c38c9ab5a890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_77229355b266c26cebbf5728b7b02c53ed8a411243c119bea71bab3a1dc90fc2->leave($__internal_77229355b266c26cebbf5728b7b02c53ed8a411243c119bea71bab3a1dc90fc2_prof);

        
        $__internal_e0c6301eedf9a0954c8077fc3695b65528b83a5810021b3bd3b2c38c9ab5a890->leave($__internal_e0c6301eedf9a0954c8077fc3695b65528b83a5810021b3bd3b2c38c9ab5a890_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
