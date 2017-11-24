<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bc1d6c528da12626efc7fb9b80f806d50f7606e901bcdfbb073df3f52d11bfcc extends Twig_Template
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
        $__internal_38db99b2e0584ccd099895f9fb2c92de43b3d8ec68e295202f9adb60dac83dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38db99b2e0584ccd099895f9fb2c92de43b3d8ec68e295202f9adb60dac83dc0->enter($__internal_38db99b2e0584ccd099895f9fb2c92de43b3d8ec68e295202f9adb60dac83dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9bbd6a282bead96edb75e0a722ca503c58358b2183b1c6d3466450360df629db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbd6a282bead96edb75e0a722ca503c58358b2183b1c6d3466450360df629db->enter($__internal_9bbd6a282bead96edb75e0a722ca503c58358b2183b1c6d3466450360df629db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_38db99b2e0584ccd099895f9fb2c92de43b3d8ec68e295202f9adb60dac83dc0->leave($__internal_38db99b2e0584ccd099895f9fb2c92de43b3d8ec68e295202f9adb60dac83dc0_prof);

        
        $__internal_9bbd6a282bead96edb75e0a722ca503c58358b2183b1c6d3466450360df629db->leave($__internal_9bbd6a282bead96edb75e0a722ca503c58358b2183b1c6d3466450360df629db_prof);

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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
