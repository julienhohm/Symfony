<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3c79b11e24694cd44264099f08fb52e370d8bb406704477a6fc9d5a587bcc109 extends Twig_Template
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
        $__internal_2fc169ae9022953a1ceaa4d7cceb6abb48ec85c4460193e24d8098e61a195b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc169ae9022953a1ceaa4d7cceb6abb48ec85c4460193e24d8098e61a195b27->enter($__internal_2fc169ae9022953a1ceaa4d7cceb6abb48ec85c4460193e24d8098e61a195b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_2fc169ae9022953a1ceaa4d7cceb6abb48ec85c4460193e24d8098e61a195b27->leave($__internal_2fc169ae9022953a1ceaa4d7cceb6abb48ec85c4460193e24d8098e61a195b27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
