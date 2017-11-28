<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_215adc711e3a9a9af1c9600f6fb8a1a701ee7f2bf4e73a6b1c27036f10210f2b extends Twig_Template
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
        $__internal_b39ab97fa522eefb523ea2b078a083beebe506f6e0841a1b0f81f902b3b11182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39ab97fa522eefb523ea2b078a083beebe506f6e0841a1b0f81f902b3b11182->enter($__internal_b39ab97fa522eefb523ea2b078a083beebe506f6e0841a1b0f81f902b3b11182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? null);
        echo " ";
        echo ($context["status_text"] ?? null);
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b39ab97fa522eefb523ea2b078a083beebe506f6e0841a1b0f81f902b3b11182->leave($__internal_b39ab97fa522eefb523ea2b078a083beebe506f6e0841a1b0f81f902b3b11182_prof);

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
