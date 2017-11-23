<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d5f6f81c2345e95e5b1cc9429bdfc8ff91b36422321d557bbbeea61caf86e369 extends Twig_Template
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
        $__internal_777fa2afab4404732364a14223369789bce0df19cfa6c5d93b6dab8438b7d50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777fa2afab4404732364a14223369789bce0df19cfa6c5d93b6dab8438b7d50d->enter($__internal_777fa2afab4404732364a14223369789bce0df19cfa6c5d93b6dab8438b7d50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : null);
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : null);
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_777fa2afab4404732364a14223369789bce0df19cfa6c5d93b6dab8438b7d50d->leave($__internal_777fa2afab4404732364a14223369789bce0df19cfa6c5d93b6dab8438b7d50d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
