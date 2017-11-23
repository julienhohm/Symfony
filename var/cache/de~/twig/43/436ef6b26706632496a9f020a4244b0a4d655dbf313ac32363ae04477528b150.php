<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3e3cfe76230e5d301a3c407a058a2c1f52a4cdb574d0ea80ef653cc4b8dfb14b extends Twig_Template
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
        $__internal_407f30e20adf9259e6b30f8cf27f5d156434b6a4ccc2f6c6d7c59ff00929c567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407f30e20adf9259e6b30f8cf27f5d156434b6a4ccc2f6c6d7c59ff00929c567->enter($__internal_407f30e20adf9259e6b30f8cf27f5d156434b6a4ccc2f6c6d7c59ff00929c567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_7763f8515384ede8f7dc8f13fd703b627d34b7aa3a0f90805cc2637a10cf3806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7763f8515384ede8f7dc8f13fd703b627d34b7aa3a0f90805cc2637a10cf3806->enter($__internal_7763f8515384ede8f7dc8f13fd703b627d34b7aa3a0f90805cc2637a10cf3806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_407f30e20adf9259e6b30f8cf27f5d156434b6a4ccc2f6c6d7c59ff00929c567->leave($__internal_407f30e20adf9259e6b30f8cf27f5d156434b6a4ccc2f6c6d7c59ff00929c567_prof);

        
        $__internal_7763f8515384ede8f7dc8f13fd703b627d34b7aa3a0f90805cc2637a10cf3806->leave($__internal_7763f8515384ede8f7dc8f13fd703b627d34b7aa3a0f90805cc2637a10cf3806_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
