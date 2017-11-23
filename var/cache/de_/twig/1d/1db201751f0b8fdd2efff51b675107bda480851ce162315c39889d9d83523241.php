<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c4cf8fa4399a6171ef3a5a8684f700dfd75e6c4b5158fbe37d10925584c3fbea extends Twig_Template
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
        $__internal_0e8d998961c28d4b7d2b23be69091a6b1882e3c95925ebda3c11dfde886c1984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8d998961c28d4b7d2b23be69091a6b1882e3c95925ebda3c11dfde886c1984->enter($__internal_0e8d998961c28d4b7d2b23be69091a6b1882e3c95925ebda3c11dfde886c1984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : null)));
        echo "
*/
";
        
        $__internal_0e8d998961c28d4b7d2b23be69091a6b1882e3c95925ebda3c11dfde886c1984->leave($__internal_0e8d998961c28d4b7d2b23be69091a6b1882e3c95925ebda3c11dfde886c1984_prof);

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
