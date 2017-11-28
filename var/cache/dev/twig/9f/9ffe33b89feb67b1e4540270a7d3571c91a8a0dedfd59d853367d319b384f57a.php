<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_0f0db89af0542d096f35a69fa6202e732acd4def7f4674217327e08ac7f77edc extends Twig_Template
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
        $__internal_f5d3ed448e5e86ec750ea7fd2aa3ad1457c553a92bbf5d979d625dea83d52615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d3ed448e5e86ec750ea7fd2aa3ad1457c553a92bbf5d979d625dea83d52615->enter($__internal_f5d3ed448e5e86ec750ea7fd2aa3ad1457c553a92bbf5d979d625dea83d52615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? null), "function", array())) {
            // line 2
            echo "at ";
            echo (($this->getAttribute(($context["trace"] ?? null), "class", array()) . $this->getAttribute(($context["trace"] ?? null), "type", array())) . $this->getAttribute(($context["trace"] ?? null), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute(($context["trace"] ?? null), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", array()), "")) : (""))) &&  !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "line", array()), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute(($context["trace"] ?? null), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute(($context["trace"] ?? null), "file", array()), $this->getAttribute(($context["trace"] ?? null), "line", array()))), array((" at line " . $this->getAttribute(($context["trace"] ?? null), "line", array())) => ""));
            echo ":";
            echo $this->getAttribute(($context["trace"] ?? null), "line", array());
            echo (($this->getAttribute(($context["trace"] ?? null), "function", array())) ? (")") : (""));
        }
        
        $__internal_f5d3ed448e5e86ec750ea7fd2aa3ad1457c553a92bbf5d979d625dea83d52615->leave($__internal_f5d3ed448e5e86ec750ea7fd2aa3ad1457c553a92bbf5d979d625dea83d52615_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  31 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:trace.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
