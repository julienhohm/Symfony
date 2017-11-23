<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3c1076df2c69b48d18e25e72bd9edd61bc97d92a812258a72cb37f1420157cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7bdf9ea2345c56685e1e1ce7e10e31565d78cd3986020c1c52a4b4f467c3c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bdf9ea2345c56685e1e1ce7e10e31565d78cd3986020c1c52a4b4f467c3c33->enter($__internal_e7bdf9ea2345c56685e1e1ce7e10e31565d78cd3986020c1c52a4b4f467c3c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e7bdf9ea2345c56685e1e1ce7e10e31565d78cd3986020c1c52a4b4f467c3c33->leave($__internal_e7bdf9ea2345c56685e1e1ce7e10e31565d78cd3986020c1c52a4b4f467c3c33_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4721e442fd388ce30b38479bfe0682b546fb6ee85292b770fa28e7feb173e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4721e442fd388ce30b38479bfe0682b546fb6ee85292b770fa28e7feb173e5a->enter($__internal_a4721e442fd388ce30b38479bfe0682b546fb6ee85292b770fa28e7feb173e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a4721e442fd388ce30b38479bfe0682b546fb6ee85292b770fa28e7feb173e5a->leave($__internal_a4721e442fd388ce30b38479bfe0682b546fb6ee85292b770fa28e7feb173e5a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
