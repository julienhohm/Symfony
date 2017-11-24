<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b89b56d4a975e444ef183178a00b9776fa0faf590807f454aaae4e02c3ff55ca extends Twig_Template
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
        $__internal_c8893a41d3b2debe45325797dbf1e673128cf0be1267cf4a0e4464ad61a758ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8893a41d3b2debe45325797dbf1e673128cf0be1267cf4a0e4464ad61a758ab->enter($__internal_c8893a41d3b2debe45325797dbf1e673128cf0be1267cf4a0e4464ad61a758ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_9132f5b000d8ce0ea24f0b7209d88d7242afe5604031bbb1dc99093568d8bded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9132f5b000d8ce0ea24f0b7209d88d7242afe5604031bbb1dc99093568d8bded->enter($__internal_9132f5b000d8ce0ea24f0b7209d88d7242afe5604031bbb1dc99093568d8bded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c8893a41d3b2debe45325797dbf1e673128cf0be1267cf4a0e4464ad61a758ab->leave($__internal_c8893a41d3b2debe45325797dbf1e673128cf0be1267cf4a0e4464ad61a758ab_prof);

        
        $__internal_9132f5b000d8ce0ea24f0b7209d88d7242afe5604031bbb1dc99093568d8bded->leave($__internal_9132f5b000d8ce0ea24f0b7209d88d7242afe5604031bbb1dc99093568d8bded_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
