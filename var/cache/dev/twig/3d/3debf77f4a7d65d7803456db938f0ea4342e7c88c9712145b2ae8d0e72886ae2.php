<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_0c4953287de03b72796710d9ac2d94aade09e5d6a926c8a0aecf7b1376324c28 extends Twig_Template
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
        $__internal_7a725abdb3acbb2c76279f45dd5bce55345c747e5b101f3d83ed08c2e99c23f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a725abdb3acbb2c76279f45dd5bce55345c747e5b101f3d83ed08c2e99c23f4->enter($__internal_7a725abdb3acbb2c76279f45dd5bce55345c747e5b101f3d83ed08c2e99c23f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

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
        
        $__internal_7a725abdb3acbb2c76279f45dd5bce55345c747e5b101f3d83ed08c2e99c23f4->leave($__internal_7a725abdb3acbb2c76279f45dd5bce55345c747e5b101f3d83ed08c2e99c23f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
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
        return new Twig_Source("", "@Twig/Exception/trace.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
