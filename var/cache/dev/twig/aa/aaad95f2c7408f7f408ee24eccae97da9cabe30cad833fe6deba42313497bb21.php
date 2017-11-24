<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ece50ff3b644ec28d824c5495f36a5b85362f9458d55db91e663fe9535f63752 extends Twig_Template
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
        $__internal_140a205727390e4f986a63ee20dfba9b1e15e2b51d60abd29a11a2874272760d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140a205727390e4f986a63ee20dfba9b1e15e2b51d60abd29a11a2874272760d->enter($__internal_140a205727390e4f986a63ee20dfba9b1e15e2b51d60abd29a11a2874272760d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_71b2bba8b2ad9a5b2c59e4b2fba1cd43769e4da3b1185639e753bf2607bb9c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b2bba8b2ad9a5b2c59e4b2fba1cd43769e4da3b1185639e753bf2607bb9c92->enter($__internal_71b2bba8b2ad9a5b2c59e4b2fba1cd43769e4da3b1185639e753bf2607bb9c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_140a205727390e4f986a63ee20dfba9b1e15e2b51d60abd29a11a2874272760d->leave($__internal_140a205727390e4f986a63ee20dfba9b1e15e2b51d60abd29a11a2874272760d_prof);

        
        $__internal_71b2bba8b2ad9a5b2c59e4b2fba1cd43769e4da3b1185639e753bf2607bb9c92->leave($__internal_71b2bba8b2ad9a5b2c59e4b2fba1cd43769e4da3b1185639e753bf2607bb9c92_prof);

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
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
