<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3b720ad5a78ee950d77f8afe647fbefbbcac94e4dc42bdea0ada3fe970d57725 extends Twig_Template
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
        $__internal_ffa4e609efc97e445d9e998201b028c1e9195462972856e0e838a2baf9405c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa4e609efc97e445d9e998201b028c1e9195462972856e0e838a2baf9405c21->enter($__internal_ffa4e609efc97e445d9e998201b028c1e9195462972856e0e838a2baf9405c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4b5e2c286b8515e2514416a770296916eca7e388248bb190c166de392cfe7e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5e2c286b8515e2514416a770296916eca7e388248bb190c166de392cfe7e26->enter($__internal_4b5e2c286b8515e2514416a770296916eca7e388248bb190c166de392cfe7e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ffa4e609efc97e445d9e998201b028c1e9195462972856e0e838a2baf9405c21->leave($__internal_ffa4e609efc97e445d9e998201b028c1e9195462972856e0e838a2baf9405c21_prof);

        
        $__internal_4b5e2c286b8515e2514416a770296916eca7e388248bb190c166de392cfe7e26->leave($__internal_4b5e2c286b8515e2514416a770296916eca7e388248bb190c166de392cfe7e26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
