<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_812fda249a1ae067c02a609acac1e7d9f2d3b1f6a0ff7e073e43c35af81fa916 extends Twig_Template
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
        $__internal_c1ee3528b4fc95e7b79ea0b5fff8f25a34e3c2f3c82e9ecf2a8aa2d4681bbdc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ee3528b4fc95e7b79ea0b5fff8f25a34e3c2f3c82e9ecf2a8aa2d4681bbdc4->enter($__internal_c1ee3528b4fc95e7b79ea0b5fff8f25a34e3c2f3c82e9ecf2a8aa2d4681bbdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "css", null, true);
        echo "

*/
";
        
        $__internal_c1ee3528b4fc95e7b79ea0b5fff8f25a34e3c2f3c82e9ecf2a8aa2d4681bbdc4->leave($__internal_c1ee3528b4fc95e7b79ea0b5fff8f25a34e3c2f3c82e9ecf2a8aa2d4681bbdc4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
