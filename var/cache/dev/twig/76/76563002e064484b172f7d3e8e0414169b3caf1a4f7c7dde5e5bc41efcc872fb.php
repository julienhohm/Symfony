<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7380f353489ad0a5ff6672a52fb97048e5c767e201659521c867011c902d8955 extends Twig_Template
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
        $__internal_57ad3c0e925e1947db69cc1b643da28184976becee2d5eba7fb31156f34fb17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ad3c0e925e1947db69cc1b643da28184976becee2d5eba7fb31156f34fb17b->enter($__internal_57ad3c0e925e1947db69cc1b643da28184976becee2d5eba7fb31156f34fb17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_627085f9d444bd2840960a7f111342af8f8f21fa0675c43979294f15dcaec05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627085f9d444bd2840960a7f111342af8f8f21fa0675c43979294f15dcaec05c->enter($__internal_627085f9d444bd2840960a7f111342af8f8f21fa0675c43979294f15dcaec05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_57ad3c0e925e1947db69cc1b643da28184976becee2d5eba7fb31156f34fb17b->leave($__internal_57ad3c0e925e1947db69cc1b643da28184976becee2d5eba7fb31156f34fb17b_prof);

        
        $__internal_627085f9d444bd2840960a7f111342af8f8f21fa0675c43979294f15dcaec05c->leave($__internal_627085f9d444bd2840960a7f111342af8f8f21fa0675c43979294f15dcaec05c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
