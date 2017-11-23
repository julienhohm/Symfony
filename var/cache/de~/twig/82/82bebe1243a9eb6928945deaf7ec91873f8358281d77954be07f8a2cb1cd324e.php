<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6b5d21bafd407f8a334eb150075375b336f8d3c379ee177afb763c047f8c7022 extends Twig_Template
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
        $__internal_b9d2984fae7cad856869685ff28e40e17b384ffb5dccd22e1df4a2baf4cec2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d2984fae7cad856869685ff28e40e17b384ffb5dccd22e1df4a2baf4cec2cf->enter($__internal_b9d2984fae7cad856869685ff28e40e17b384ffb5dccd22e1df4a2baf4cec2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4c068726a1f8ce17619c0bc5bcda66d80eebcdecd0c406b08176ff7ccfb4aa7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c068726a1f8ce17619c0bc5bcda66d80eebcdecd0c406b08176ff7ccfb4aa7f->enter($__internal_4c068726a1f8ce17619c0bc5bcda66d80eebcdecd0c406b08176ff7ccfb4aa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b9d2984fae7cad856869685ff28e40e17b384ffb5dccd22e1df4a2baf4cec2cf->leave($__internal_b9d2984fae7cad856869685ff28e40e17b384ffb5dccd22e1df4a2baf4cec2cf_prof);

        
        $__internal_4c068726a1f8ce17619c0bc5bcda66d80eebcdecd0c406b08176ff7ccfb4aa7f->leave($__internal_4c068726a1f8ce17619c0bc5bcda66d80eebcdecd0c406b08176ff7ccfb4aa7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
