<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c9b356d7913657b7a9d28c089a819d5e86a4cf473855ac19ce8ecb480427e8aa extends Twig_Template
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
        $__internal_490df1290edc8ed3be6d3b4a09891d8a38af60166540f921318706ad44c6ef8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490df1290edc8ed3be6d3b4a09891d8a38af60166540f921318706ad44c6ef8e->enter($__internal_490df1290edc8ed3be6d3b4a09891d8a38af60166540f921318706ad44c6ef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
        
        $__internal_490df1290edc8ed3be6d3b4a09891d8a38af60166540f921318706ad44c6ef8e->leave($__internal_490df1290edc8ed3be6d3b4a09891d8a38af60166540f921318706ad44c6ef8e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
