<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_216180dd67c50f963ee3aaeb8f32af49e9daf4dbec518aae9b66fafa8fb9b3fc extends Twig_Template
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
        $__internal_c9f34d1bf8daaf0b40d0351614ed4d773ac885818488c5bb4fdd1d86548380e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f34d1bf8daaf0b40d0351614ed4d773ac885818488c5bb4fdd1d86548380e0->enter($__internal_c9f34d1bf8daaf0b40d0351614ed4d773ac885818488c5bb4fdd1d86548380e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_10bc3e7ab41e30c1d99a7d73b8520285a2ab7f963af573aa269c7de3c850fe6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bc3e7ab41e30c1d99a7d73b8520285a2ab7f963af573aa269c7de3c850fe6b->enter($__internal_10bc3e7ab41e30c1d99a7d73b8520285a2ab7f963af573aa269c7de3c850fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c9f34d1bf8daaf0b40d0351614ed4d773ac885818488c5bb4fdd1d86548380e0->leave($__internal_c9f34d1bf8daaf0b40d0351614ed4d773ac885818488c5bb4fdd1d86548380e0_prof);

        
        $__internal_10bc3e7ab41e30c1d99a7d73b8520285a2ab7f963af573aa269c7de3c850fe6b->leave($__internal_10bc3e7ab41e30c1d99a7d73b8520285a2ab7f963af573aa269c7de3c850fe6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
