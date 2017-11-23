<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_fa10caccd14d783da51d499414c86b1c3d818eb4b968e27d33d8564a79fb74ee extends Twig_Template
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
        $__internal_45fc257285f62cba42f4044d903528ed815e128e4d6aebe90329dbb6c9288971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fc257285f62cba42f4044d903528ed815e128e4d6aebe90329dbb6c9288971->enter($__internal_45fc257285f62cba42f4044d903528ed815e128e4d6aebe90329dbb6c9288971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_830078ad78cf02dba0dab73e6b4f260a93996a7a524ed67f2e07771695788a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830078ad78cf02dba0dab73e6b4f260a93996a7a524ed67f2e07771695788a30->enter($__internal_830078ad78cf02dba0dab73e6b4f260a93996a7a524ed67f2e07771695788a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_45fc257285f62cba42f4044d903528ed815e128e4d6aebe90329dbb6c9288971->leave($__internal_45fc257285f62cba42f4044d903528ed815e128e4d6aebe90329dbb6c9288971_prof);

        
        $__internal_830078ad78cf02dba0dab73e6b4f260a93996a7a524ed67f2e07771695788a30->leave($__internal_830078ad78cf02dba0dab73e6b4f260a93996a7a524ed67f2e07771695788a30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
