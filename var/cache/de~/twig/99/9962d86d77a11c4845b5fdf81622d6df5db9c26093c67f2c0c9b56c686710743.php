<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5cea255f8ac967820ec3d0e6610a9ec3448d674780fda4d97fa5bf78ff08ef74 extends Twig_Template
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
        $__internal_ed4db7d878bfce8716cd50d4892c145c9c447ba5735238d20a5d8bb418692f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4db7d878bfce8716cd50d4892c145c9c447ba5735238d20a5d8bb418692f74->enter($__internal_ed4db7d878bfce8716cd50d4892c145c9c447ba5735238d20a5d8bb418692f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_44bbda061874b768b203d497980d7dd241edf20b107271ced7f966174cd7c0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bbda061874b768b203d497980d7dd241edf20b107271ced7f966174cd7c0be->enter($__internal_44bbda061874b768b203d497980d7dd241edf20b107271ced7f966174cd7c0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ed4db7d878bfce8716cd50d4892c145c9c447ba5735238d20a5d8bb418692f74->leave($__internal_ed4db7d878bfce8716cd50d4892c145c9c447ba5735238d20a5d8bb418692f74_prof);

        
        $__internal_44bbda061874b768b203d497980d7dd241edf20b107271ced7f966174cd7c0be->leave($__internal_44bbda061874b768b203d497980d7dd241edf20b107271ced7f966174cd7c0be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
