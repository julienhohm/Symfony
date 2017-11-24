<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_9088f6f6278c4d6ad30a2a83d22a31fa4c897cec0907da81ebb4df44c1e136bd extends Twig_Template
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
        $__internal_4b38b365e7d699cf612d866216c5daa0581831ec3849f8cf156a6538cef37b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b38b365e7d699cf612d866216c5daa0581831ec3849f8cf156a6538cef37b76->enter($__internal_4b38b365e7d699cf612d866216c5daa0581831ec3849f8cf156a6538cef37b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_a47a5978e59cedb7de2bf5d3cdecc099b59586dea5defc80009f9aa68a6e6e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47a5978e59cedb7de2bf5d3cdecc099b59586dea5defc80009f9aa68a6e6e8d->enter($__internal_a47a5978e59cedb7de2bf5d3cdecc099b59586dea5defc80009f9aa68a6e6e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_4b38b365e7d699cf612d866216c5daa0581831ec3849f8cf156a6538cef37b76->leave($__internal_4b38b365e7d699cf612d866216c5daa0581831ec3849f8cf156a6538cef37b76_prof);

        
        $__internal_a47a5978e59cedb7de2bf5d3cdecc099b59586dea5defc80009f9aa68a6e6e8d->leave($__internal_a47a5978e59cedb7de2bf5d3cdecc099b59586dea5defc80009f9aa68a6e6e8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
