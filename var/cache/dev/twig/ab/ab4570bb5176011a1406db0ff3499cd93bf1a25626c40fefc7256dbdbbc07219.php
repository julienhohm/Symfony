<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_58690f590812b4f9c2376e9316c80ffa5a52b581024eff1504ec1a97c0dee717 extends Twig_Template
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
        $__internal_1e9cc89337ead656ad6f424a250555cc6e2d6ef4753e9eb1ca6f04638dae6dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9cc89337ead656ad6f424a250555cc6e2d6ef4753e9eb1ca6f04638dae6dc4->enter($__internal_1e9cc89337ead656ad6f424a250555cc6e2d6ef4753e9eb1ca6f04638dae6dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1e9cc89337ead656ad6f424a250555cc6e2d6ef4753e9eb1ca6f04638dae6dc4->leave($__internal_1e9cc89337ead656ad6f424a250555cc6e2d6ef4753e9eb1ca6f04638dae6dc4_prof);

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
        return new Twig_Source("", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
