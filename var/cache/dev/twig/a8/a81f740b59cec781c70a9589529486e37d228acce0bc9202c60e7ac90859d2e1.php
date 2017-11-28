<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_001dfefbf4a91265b7da5b3f001e8b0304159ee276031ffdcba4de2e2c68dc48 extends Twig_Template
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
        $__internal_dab06d70d7a18482bc977db3f9f4e7ede80a597eeaa31f456dadc7b9bdacd3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab06d70d7a18482bc977db3f9f4e7ede80a597eeaa31f456dadc7b9bdacd3b8->enter($__internal_dab06d70d7a18482bc977db3f9f4e7ede80a597eeaa31f456dadc7b9bdacd3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_dab06d70d7a18482bc977db3f9f4e7ede80a597eeaa31f456dadc7b9bdacd3b8->leave($__internal_dab06d70d7a18482bc977db3f9f4e7ede80a597eeaa31f456dadc7b9bdacd3b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
