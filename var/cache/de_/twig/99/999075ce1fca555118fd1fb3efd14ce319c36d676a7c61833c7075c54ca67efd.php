<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_34b617126558fd73a52a1754d56f7540c721cd004e75c74727af493218df5695 extends Twig_Template
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
        $__internal_ae4cfc2017add44b6b4bbe60c160a82e57511bc3d252371f874ff4fc2d82c92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4cfc2017add44b6b4bbe60c160a82e57511bc3d252371f874ff4fc2d82c92e->enter($__internal_ae4cfc2017add44b6b4bbe60c160a82e57511bc3d252371f874ff4fc2d82c92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ae4cfc2017add44b6b4bbe60c160a82e57511bc3d252371f874ff4fc2d82c92e->leave($__internal_ae4cfc2017add44b6b4bbe60c160a82e57511bc3d252371f874ff4fc2d82c92e_prof);

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
        return new Twig_Source("", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
