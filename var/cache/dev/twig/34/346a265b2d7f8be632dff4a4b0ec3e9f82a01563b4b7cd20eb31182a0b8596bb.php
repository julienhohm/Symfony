<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7849d0aef132da6569d950df724a35bd81b850b382bc8566f5a5f04707078c4d extends Twig_Template
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
        $__internal_f85207a496385d76beb9627b7f594e7a97866761b59be0d07d134c3e18d0ef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85207a496385d76beb9627b7f594e7a97866761b59be0d07d134c3e18d0ef52->enter($__internal_f85207a496385d76beb9627b7f594e7a97866761b59be0d07d134c3e18d0ef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f85207a496385d76beb9627b7f594e7a97866761b59be0d07d134c3e18d0ef52->leave($__internal_f85207a496385d76beb9627b7f594e7a97866761b59be0d07d134c3e18d0ef52_prof);

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
