<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_15bc74503f4f5424d60a5f10fdb406be2100607d9f47c1c246dd6a9c83342264 extends Twig_Template
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
        $__internal_0446d6711df1bcc69d0b1b382dc58389d3321600916d012d5aedda6c13ba651f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0446d6711df1bcc69d0b1b382dc58389d3321600916d012d5aedda6c13ba651f->enter($__internal_0446d6711df1bcc69d0b1b382dc58389d3321600916d012d5aedda6c13ba651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
*/
";
        
        $__internal_0446d6711df1bcc69d0b1b382dc58389d3321600916d012d5aedda6c13ba651f->leave($__internal_0446d6711df1bcc69d0b1b382dc58389d3321600916d012d5aedda6c13ba651f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
