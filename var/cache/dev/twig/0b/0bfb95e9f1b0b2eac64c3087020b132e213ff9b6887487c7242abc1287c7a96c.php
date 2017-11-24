<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1ca283ec8cf616fa84c4e9b3af5d3403d3e234af7547eca2228793f8bb63e64d extends Twig_Template
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
        $__internal_946207b58ec32eb042279918e4931272fe554325baf23a4b1cf822ce878f4afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946207b58ec32eb042279918e4931272fe554325baf23a4b1cf822ce878f4afc->enter($__internal_946207b58ec32eb042279918e4931272fe554325baf23a4b1cf822ce878f4afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8e14e24964388c5f2999adfa4f56407268be6e5cb3f9da1d05f1a89853ae9d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e14e24964388c5f2999adfa4f56407268be6e5cb3f9da1d05f1a89853ae9d03->enter($__internal_8e14e24964388c5f2999adfa4f56407268be6e5cb3f9da1d05f1a89853ae9d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_946207b58ec32eb042279918e4931272fe554325baf23a4b1cf822ce878f4afc->leave($__internal_946207b58ec32eb042279918e4931272fe554325baf23a4b1cf822ce878f4afc_prof);

        
        $__internal_8e14e24964388c5f2999adfa4f56407268be6e5cb3f9da1d05f1a89853ae9d03->leave($__internal_8e14e24964388c5f2999adfa4f56407268be6e5cb3f9da1d05f1a89853ae9d03_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
