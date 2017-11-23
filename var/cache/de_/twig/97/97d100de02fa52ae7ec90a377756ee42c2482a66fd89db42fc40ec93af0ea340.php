<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_26076de8a56546143a657a10220b4049ab559cdd6b1fbf8371b3a10bdf75f239 extends Twig_Template
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
        $__internal_da86604316c12e60ce83b1ec2b7c6d76e134786db172ad0015c8f7093369a395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da86604316c12e60ce83b1ec2b7c6d76e134786db172ad0015c8f7093369a395->enter($__internal_da86604316c12e60ce83b1ec2b7c6d76e134786db172ad0015c8f7093369a395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : null)));
        echo "
";
        
        $__internal_da86604316c12e60ce83b1ec2b7c6d76e134786db172ad0015c8f7093369a395->leave($__internal_da86604316c12e60ce83b1ec2b7c6d76e134786db172ad0015c8f7093369a395_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
