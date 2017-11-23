<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_aeb1ada288ab7b6c6ca369f21a420ba5f2a3d71ff3fac68246d296bd208e772b extends Twig_Template
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
        $__internal_1e91007ead4541e942a880f825e257d699a61638cbecbe8541d15e2c0a46373c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e91007ead4541e942a880f825e257d699a61638cbecbe8541d15e2c0a46373c->enter($__internal_1e91007ead4541e942a880f825e257d699a61638cbecbe8541d15e2c0a46373c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_88e582c7e7f50523c1de957b25e7bb0899a673355a61f11abefeb78cb52b8a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e582c7e7f50523c1de957b25e7bb0899a673355a61f11abefeb78cb52b8a8e->enter($__internal_88e582c7e7f50523c1de957b25e7bb0899a673355a61f11abefeb78cb52b8a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1e91007ead4541e942a880f825e257d699a61638cbecbe8541d15e2c0a46373c->leave($__internal_1e91007ead4541e942a880f825e257d699a61638cbecbe8541d15e2c0a46373c_prof);

        
        $__internal_88e582c7e7f50523c1de957b25e7bb0899a673355a61f11abefeb78cb52b8a8e->leave($__internal_88e582c7e7f50523c1de957b25e7bb0899a673355a61f11abefeb78cb52b8a8e_prof);

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
