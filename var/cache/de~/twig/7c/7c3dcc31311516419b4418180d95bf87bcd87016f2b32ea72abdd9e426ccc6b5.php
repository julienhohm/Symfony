<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_186b8f17570cb156f5db5df09e4a85ca0e9c8b01eda52dec9034733426ae64a7 extends Twig_Template
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
        $__internal_e9e2ee5603a291c5043003ea2bedb5857ae4039c6d84e506976a204b3ca14a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e2ee5603a291c5043003ea2bedb5857ae4039c6d84e506976a204b3ca14a4f->enter($__internal_e9e2ee5603a291c5043003ea2bedb5857ae4039c6d84e506976a204b3ca14a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2d59a5282c7a9de3d7f70d25838b6f5b75d1f69fcc7b400d9067528d75f85000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d59a5282c7a9de3d7f70d25838b6f5b75d1f69fcc7b400d9067528d75f85000->enter($__internal_2d59a5282c7a9de3d7f70d25838b6f5b75d1f69fcc7b400d9067528d75f85000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e9e2ee5603a291c5043003ea2bedb5857ae4039c6d84e506976a204b3ca14a4f->leave($__internal_e9e2ee5603a291c5043003ea2bedb5857ae4039c6d84e506976a204b3ca14a4f_prof);

        
        $__internal_2d59a5282c7a9de3d7f70d25838b6f5b75d1f69fcc7b400d9067528d75f85000->leave($__internal_2d59a5282c7a9de3d7f70d25838b6f5b75d1f69fcc7b400d9067528d75f85000_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
