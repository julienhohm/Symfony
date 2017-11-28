<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d72212c86825e032a7ad360669774262a651fcc5e608cea241f4ed31faa6fa35 extends Twig_Template
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
        $__internal_b903eeda79ac7aa8b3f2d3a7674ac0a205a3e6b62cd027e15bd238b01121bfcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b903eeda79ac7aa8b3f2d3a7674ac0a205a3e6b62cd027e15bd238b01121bfcb->enter($__internal_b903eeda79ac7aa8b3f2d3a7674ac0a205a3e6b62cd027e15bd238b01121bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null))));
        echo "
";
        
        $__internal_b903eeda79ac7aa8b3f2d3a7674ac0a205a3e6b62cd027e15bd238b01121bfcb->leave($__internal_b903eeda79ac7aa8b3f2d3a7674ac0a205a3e6b62cd027e15bd238b01121bfcb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
