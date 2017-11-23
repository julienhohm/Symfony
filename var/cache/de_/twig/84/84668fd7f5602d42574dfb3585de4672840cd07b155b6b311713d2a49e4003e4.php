<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3fdef59e669aa97a6f693c4588fc3998745d492714b63a732a675ed2f9cc890a extends Twig_Template
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
        $__internal_1ee3ea5c60031714605fd2114977e20f2c5a479d53127125c3fb04e0b940b5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee3ea5c60031714605fd2114977e20f2c5a479d53127125c3fb04e0b940b5f2->enter($__internal_1ee3ea5c60031714605fd2114977e20f2c5a479d53127125c3fb04e0b940b5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1ee3ea5c60031714605fd2114977e20f2c5a479d53127125c3fb04e0b940b5f2->leave($__internal_1ee3ea5c60031714605fd2114977e20f2c5a479d53127125c3fb04e0b940b5f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
