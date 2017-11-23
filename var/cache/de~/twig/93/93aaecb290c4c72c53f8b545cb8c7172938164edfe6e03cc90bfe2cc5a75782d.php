<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_062d2765a011620b6d73c82eabfd9e25721e0be85d8317f339764a5606a61e85 extends Twig_Template
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
        $__internal_c9c5fd435a31f5804930b3a8537e23a84e9d1a51ab74ba3c17ab37c2b14abfd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c5fd435a31f5804930b3a8537e23a84e9d1a51ab74ba3c17ab37c2b14abfd8->enter($__internal_c9c5fd435a31f5804930b3a8537e23a84e9d1a51ab74ba3c17ab37c2b14abfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9c0682922dc394b7ce59e049e12bd243cec0c9588284209a1a3e85d9db09f95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0682922dc394b7ce59e049e12bd243cec0c9588284209a1a3e85d9db09f95b->enter($__internal_9c0682922dc394b7ce59e049e12bd243cec0c9588284209a1a3e85d9db09f95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c9c5fd435a31f5804930b3a8537e23a84e9d1a51ab74ba3c17ab37c2b14abfd8->leave($__internal_c9c5fd435a31f5804930b3a8537e23a84e9d1a51ab74ba3c17ab37c2b14abfd8_prof);

        
        $__internal_9c0682922dc394b7ce59e049e12bd243cec0c9588284209a1a3e85d9db09f95b->leave($__internal_9c0682922dc394b7ce59e049e12bd243cec0c9588284209a1a3e85d9db09f95b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
