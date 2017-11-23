<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_984db7529c2d399c9a7a5b2083856f5c9256a94b48e18c5151c1dcd0e04984bc extends Twig_Template
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
        $__internal_bf017e6f61e41b9471cfb9875f0d7dc47ff819dd3268d8eb212ff8f9bb0f0fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf017e6f61e41b9471cfb9875f0d7dc47ff819dd3268d8eb212ff8f9bb0f0fd3->enter($__internal_bf017e6f61e41b9471cfb9875f0d7dc47ff819dd3268d8eb212ff8f9bb0f0fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_587a37147ab46fcc2e66a2fd1d2f7b83ff4404030aefe192c0b846d01496907d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587a37147ab46fcc2e66a2fd1d2f7b83ff4404030aefe192c0b846d01496907d->enter($__internal_587a37147ab46fcc2e66a2fd1d2f7b83ff4404030aefe192c0b846d01496907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_bf017e6f61e41b9471cfb9875f0d7dc47ff819dd3268d8eb212ff8f9bb0f0fd3->leave($__internal_bf017e6f61e41b9471cfb9875f0d7dc47ff819dd3268d8eb212ff8f9bb0f0fd3_prof);

        
        $__internal_587a37147ab46fcc2e66a2fd1d2f7b83ff4404030aefe192c0b846d01496907d->leave($__internal_587a37147ab46fcc2e66a2fd1d2f7b83ff4404030aefe192c0b846d01496907d_prof);

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
