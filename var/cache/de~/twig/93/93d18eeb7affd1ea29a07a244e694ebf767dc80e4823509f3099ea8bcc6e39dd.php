<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c321b27f600d2c707885c1fb6c3429dd09131cc27cf20f889d1ce73a1291c74f extends Twig_Template
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
        $__internal_414c414da8367a99568023dd3d70edeac530448d868178acd28d825855da3ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414c414da8367a99568023dd3d70edeac530448d868178acd28d825855da3ce3->enter($__internal_414c414da8367a99568023dd3d70edeac530448d868178acd28d825855da3ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_264d9d16ec2a6a42a5fa1a78dd10b42192ec2c9535a3394cd022ae8a94ecaf1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264d9d16ec2a6a42a5fa1a78dd10b42192ec2c9535a3394cd022ae8a94ecaf1f->enter($__internal_264d9d16ec2a6a42a5fa1a78dd10b42192ec2c9535a3394cd022ae8a94ecaf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_414c414da8367a99568023dd3d70edeac530448d868178acd28d825855da3ce3->leave($__internal_414c414da8367a99568023dd3d70edeac530448d868178acd28d825855da3ce3_prof);

        
        $__internal_264d9d16ec2a6a42a5fa1a78dd10b42192ec2c9535a3394cd022ae8a94ecaf1f->leave($__internal_264d9d16ec2a6a42a5fa1a78dd10b42192ec2c9535a3394cd022ae8a94ecaf1f_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
