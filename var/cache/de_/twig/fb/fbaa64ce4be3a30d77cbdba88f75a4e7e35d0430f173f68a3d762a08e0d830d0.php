<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c8af24a04a345a642e9917d1ba808769313f08809312b835c99b47e0bd63d276 extends Twig_Template
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
        $__internal_f3947455122f476d1b1d45a9b8f8f255f94764bf2538d1e3f39cc6154595c22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3947455122f476d1b1d45a9b8f8f255f94764bf2538d1e3f39cc6154595c22c->enter($__internal_f3947455122f476d1b1d45a9b8f8f255f94764bf2538d1e3f39cc6154595c22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : null)));
        echo "
";
        
        $__internal_f3947455122f476d1b1d45a9b8f8f255f94764bf2538d1e3f39cc6154595c22c->leave($__internal_f3947455122f476d1b1d45a9b8f8f255f94764bf2538d1e3f39cc6154595c22c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
