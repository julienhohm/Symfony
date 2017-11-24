<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3a892697a0a57b45abb3491598793c332b385575f443d7a935bff22399204189 extends Twig_Template
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
        $__internal_d90bf005fcbb28ed0d8f80fee16edd9bf57ef3a7cd2a4e4365d8bb4ac05a2bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90bf005fcbb28ed0d8f80fee16edd9bf57ef3a7cd2a4e4365d8bb4ac05a2bdb->enter($__internal_d90bf005fcbb28ed0d8f80fee16edd9bf57ef3a7cd2a4e4365d8bb4ac05a2bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_bc6eedafb513718249b920c382a2b85a0fe53dcf881dd656f1d887ea28b7824f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6eedafb513718249b920c382a2b85a0fe53dcf881dd656f1d887ea28b7824f->enter($__internal_bc6eedafb513718249b920c382a2b85a0fe53dcf881dd656f1d887ea28b7824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d90bf005fcbb28ed0d8f80fee16edd9bf57ef3a7cd2a4e4365d8bb4ac05a2bdb->leave($__internal_d90bf005fcbb28ed0d8f80fee16edd9bf57ef3a7cd2a4e4365d8bb4ac05a2bdb_prof);

        
        $__internal_bc6eedafb513718249b920c382a2b85a0fe53dcf881dd656f1d887ea28b7824f->leave($__internal_bc6eedafb513718249b920c382a2b85a0fe53dcf881dd656f1d887ea28b7824f_prof);

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
