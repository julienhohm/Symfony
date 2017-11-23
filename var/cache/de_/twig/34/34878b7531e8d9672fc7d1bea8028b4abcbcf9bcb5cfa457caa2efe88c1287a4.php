<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a04b37ff95db1de022747be821f7a4fd252e80bf20dd7806fe6eff6ad0cb0d2a extends Twig_Template
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
        $__internal_3fcf757826ecea4ac36f0b6b1b8f2ce7a8af0560bc5d5f8e244e142db91e2aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fcf757826ecea4ac36f0b6b1b8f2ce7a8af0560bc5d5f8e244e142db91e2aa2->enter($__internal_3fcf757826ecea4ac36f0b6b1b8f2ce7a8af0560bc5d5f8e244e142db91e2aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "js", null, true);
        echo "

*/
";
        
        $__internal_3fcf757826ecea4ac36f0b6b1b8f2ce7a8af0560bc5d5f8e244e142db91e2aa2->leave($__internal_3fcf757826ecea4ac36f0b6b1b8f2ce7a8af0560bc5d5f8e244e142db91e2aa2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
