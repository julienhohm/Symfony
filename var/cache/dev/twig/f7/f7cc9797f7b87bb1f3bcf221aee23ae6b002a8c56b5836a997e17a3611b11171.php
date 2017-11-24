<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4f95640733a68d5cf799195a18aa10f3ae8e03e2fbe796501a17a52a6e9d6770 extends Twig_Template
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
        $__internal_3adc69ffb2169401791099bd66d27fe25a40159bdfca67cc010975c0f4659f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adc69ffb2169401791099bd66d27fe25a40159bdfca67cc010975c0f4659f5e->enter($__internal_3adc69ffb2169401791099bd66d27fe25a40159bdfca67cc010975c0f4659f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_c15fb5556c14a16394e1eb9867b65e1b3c5d8b09461a426c94f3fa14915b12a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15fb5556c14a16394e1eb9867b65e1b3c5d8b09461a426c94f3fa14915b12a4->enter($__internal_c15fb5556c14a16394e1eb9867b65e1b3c5d8b09461a426c94f3fa14915b12a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3adc69ffb2169401791099bd66d27fe25a40159bdfca67cc010975c0f4659f5e->leave($__internal_3adc69ffb2169401791099bd66d27fe25a40159bdfca67cc010975c0f4659f5e_prof);

        
        $__internal_c15fb5556c14a16394e1eb9867b65e1b3c5d8b09461a426c94f3fa14915b12a4->leave($__internal_c15fb5556c14a16394e1eb9867b65e1b3c5d8b09461a426c94f3fa14915b12a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
