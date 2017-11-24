<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6f055778700a1ed6fb9e2a124b07e0dc01e053e951c5634cabd2b5e00f8ac966 extends Twig_Template
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
        $__internal_a5ed1a55ab399bc57faee92dff30a2b9e7e47eb1163541835d436ee3b5e86e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ed1a55ab399bc57faee92dff30a2b9e7e47eb1163541835d436ee3b5e86e1a->enter($__internal_a5ed1a55ab399bc57faee92dff30a2b9e7e47eb1163541835d436ee3b5e86e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9a45aaa9bdef20dbd56ca319c552eae7914445141061ee3db4946801d87c35a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a45aaa9bdef20dbd56ca319c552eae7914445141061ee3db4946801d87c35a8->enter($__internal_9a45aaa9bdef20dbd56ca319c552eae7914445141061ee3db4946801d87c35a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a5ed1a55ab399bc57faee92dff30a2b9e7e47eb1163541835d436ee3b5e86e1a->leave($__internal_a5ed1a55ab399bc57faee92dff30a2b9e7e47eb1163541835d436ee3b5e86e1a_prof);

        
        $__internal_9a45aaa9bdef20dbd56ca319c552eae7914445141061ee3db4946801d87c35a8->leave($__internal_9a45aaa9bdef20dbd56ca319c552eae7914445141061ee3db4946801d87c35a8_prof);

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
