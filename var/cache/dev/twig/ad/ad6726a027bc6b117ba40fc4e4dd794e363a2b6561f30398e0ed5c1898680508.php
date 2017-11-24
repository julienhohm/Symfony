<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_3f16bd6e92c62ae4ff11e44fb2a4a617eaf443af56cc18f9fe10a9f9c5f76ee2 extends Twig_Template
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
        $__internal_bd74c077d40c22d4cf1fa28cab397b5b606c5c1866516b5b323d12cfe5a260a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd74c077d40c22d4cf1fa28cab397b5b606c5c1866516b5b323d12cfe5a260a0->enter($__internal_bd74c077d40c22d4cf1fa28cab397b5b606c5c1866516b5b323d12cfe5a260a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_d0e93b2b3948633857fd8e0179cf8a5415c10ebb21108f0e2b14c005748d76e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e93b2b3948633857fd8e0179cf8a5415c10ebb21108f0e2b14c005748d76e9->enter($__internal_d0e93b2b3948633857fd8e0179cf8a5415c10ebb21108f0e2b14c005748d76e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_bd74c077d40c22d4cf1fa28cab397b5b606c5c1866516b5b323d12cfe5a260a0->leave($__internal_bd74c077d40c22d4cf1fa28cab397b5b606c5c1866516b5b323d12cfe5a260a0_prof);

        
        $__internal_d0e93b2b3948633857fd8e0179cf8a5415c10ebb21108f0e2b14c005748d76e9->leave($__internal_d0e93b2b3948633857fd8e0179cf8a5415c10ebb21108f0e2b14c005748d76e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
