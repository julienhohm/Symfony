<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e6388d989031f1b34174fa2d5edba9bd3a8afbf42f8c35b66c4eb200b61e1f67 extends Twig_Template
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
        $__internal_1e3e92ec7c2c1d00eb92f5129ff6159419f003e33a5592ab9ac2bea6889268ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3e92ec7c2c1d00eb92f5129ff6159419f003e33a5592ab9ac2bea6889268ba->enter($__internal_1e3e92ec7c2c1d00eb92f5129ff6159419f003e33a5592ab9ac2bea6889268ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d6535e48e289e3c803a95b91c787cbab284340d7ae83117bb919777e1a09ba52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6535e48e289e3c803a95b91c787cbab284340d7ae83117bb919777e1a09ba52->enter($__internal_d6535e48e289e3c803a95b91c787cbab284340d7ae83117bb919777e1a09ba52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1e3e92ec7c2c1d00eb92f5129ff6159419f003e33a5592ab9ac2bea6889268ba->leave($__internal_1e3e92ec7c2c1d00eb92f5129ff6159419f003e33a5592ab9ac2bea6889268ba_prof);

        
        $__internal_d6535e48e289e3c803a95b91c787cbab284340d7ae83117bb919777e1a09ba52->leave($__internal_d6535e48e289e3c803a95b91c787cbab284340d7ae83117bb919777e1a09ba52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
