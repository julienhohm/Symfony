<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e3e437f82eea281c073078b9b0ec0f6cedb3180c52ec4623a0b3c9999ce8e568 extends Twig_Template
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
        $__internal_61d4f217a4b586ae3156498df06af1e0885631dcf3580d4771e22481fce3f666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d4f217a4b586ae3156498df06af1e0885631dcf3580d4771e22481fce3f666->enter($__internal_61d4f217a4b586ae3156498df06af1e0885631dcf3580d4771e22481fce3f666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray", array()))));
        echo "
";
        
        $__internal_61d4f217a4b586ae3156498df06af1e0885631dcf3580d4771e22481fce3f666->leave($__internal_61d4f217a4b586ae3156498df06af1e0885631dcf3580d4771e22481fce3f666_prof);

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
        return new Twig_Source("", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
