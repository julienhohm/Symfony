<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cde799cabc5ad7c648dbb0bc606364cc03292d342af9ce8034778bbec093807e extends Twig_Template
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
        $__internal_da15d577a817238d638326f78e604189851416b93a3d29c08d526fcb7ea00e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da15d577a817238d638326f78e604189851416b93a3d29c08d526fcb7ea00e6f->enter($__internal_da15d577a817238d638326f78e604189851416b93a3d29c08d526fcb7ea00e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : null)));
        echo "
*/
";
        
        $__internal_da15d577a817238d638326f78e604189851416b93a3d29c08d526fcb7ea00e6f->leave($__internal_da15d577a817238d638326f78e604189851416b93a3d29c08d526fcb7ea00e6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
