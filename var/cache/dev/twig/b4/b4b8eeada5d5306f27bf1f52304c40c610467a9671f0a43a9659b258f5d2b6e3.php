<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4857831431b97488a8dec0129c2d2a4f888007292407849133334dd87fd20b58 extends Twig_Template
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
        $__internal_8f60a2bbfea3ccf03ff77d85e05e368a4e505e6d23aed56200c72036cf1dda03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f60a2bbfea3ccf03ff77d85e05e368a4e505e6d23aed56200c72036cf1dda03->enter($__internal_8f60a2bbfea3ccf03ff77d85e05e368a4e505e6d23aed56200c72036cf1dda03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_5f5a1b77a6d7206c6d6cd21432042e2819820866e51803199f0ff867ddc0bd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5a1b77a6d7206c6d6cd21432042e2819820866e51803199f0ff867ddc0bd23->enter($__internal_5f5a1b77a6d7206c6d6cd21432042e2819820866e51803199f0ff867ddc0bd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8f60a2bbfea3ccf03ff77d85e05e368a4e505e6d23aed56200c72036cf1dda03->leave($__internal_8f60a2bbfea3ccf03ff77d85e05e368a4e505e6d23aed56200c72036cf1dda03_prof);

        
        $__internal_5f5a1b77a6d7206c6d6cd21432042e2819820866e51803199f0ff867ddc0bd23->leave($__internal_5f5a1b77a6d7206c6d6cd21432042e2819820866e51803199f0ff867ddc0bd23_prof);

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
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
