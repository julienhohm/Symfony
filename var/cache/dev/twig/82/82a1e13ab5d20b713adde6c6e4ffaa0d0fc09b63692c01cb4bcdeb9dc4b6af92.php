<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d9f391dd7630d5637374597ee56d9abc85da9c03f1f0f03a8097c833e7f77fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9f391dd7630d5637374597ee56d9abc85da9c03f1f0f03a8097c833e7f77fe->enter($__internal_5d9f391dd7630d5637374597ee56d9abc85da9c03f1f0f03a8097c833e7f77fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9cdfe4e01cb92af09b1f26ff193f1334ab2692972c07f0ac581d1f14f36d9923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdfe4e01cb92af09b1f26ff193f1334ab2692972c07f0ac581d1f14f36d9923->enter($__internal_9cdfe4e01cb92af09b1f26ff193f1334ab2692972c07f0ac581d1f14f36d9923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d9f391dd7630d5637374597ee56d9abc85da9c03f1f0f03a8097c833e7f77fe->leave($__internal_5d9f391dd7630d5637374597ee56d9abc85da9c03f1f0f03a8097c833e7f77fe_prof);

        
        $__internal_9cdfe4e01cb92af09b1f26ff193f1334ab2692972c07f0ac581d1f14f36d9923->leave($__internal_9cdfe4e01cb92af09b1f26ff193f1334ab2692972c07f0ac581d1f14f36d9923_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25dd4f7f49c8f9adb0d4cb01e1344bfcd12452d2b3869f6781b094bd33649fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25dd4f7f49c8f9adb0d4cb01e1344bfcd12452d2b3869f6781b094bd33649fac->enter($__internal_25dd4f7f49c8f9adb0d4cb01e1344bfcd12452d2b3869f6781b094bd33649fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_044c9ced1c29c43580e9364d389cd613fe165fde74d528a478ad18c736613a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044c9ced1c29c43580e9364d389cd613fe165fde74d528a478ad18c736613a46->enter($__internal_044c9ced1c29c43580e9364d389cd613fe165fde74d528a478ad18c736613a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_044c9ced1c29c43580e9364d389cd613fe165fde74d528a478ad18c736613a46->leave($__internal_044c9ced1c29c43580e9364d389cd613fe165fde74d528a478ad18c736613a46_prof);

        
        $__internal_25dd4f7f49c8f9adb0d4cb01e1344bfcd12452d2b3869f6781b094bd33649fac->leave($__internal_25dd4f7f49c8f9adb0d4cb01e1344bfcd12452d2b3869f6781b094bd33649fac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0831ef52ef1f09a6bac238d6c0b708e71fe3dcb57e2734284877926a817267d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0831ef52ef1f09a6bac238d6c0b708e71fe3dcb57e2734284877926a817267d->enter($__internal_c0831ef52ef1f09a6bac238d6c0b708e71fe3dcb57e2734284877926a817267d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_395e118794d42fd446b8b742aa8b5e780123e955955548aacc2cba140847687c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395e118794d42fd446b8b742aa8b5e780123e955955548aacc2cba140847687c->enter($__internal_395e118794d42fd446b8b742aa8b5e780123e955955548aacc2cba140847687c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_395e118794d42fd446b8b742aa8b5e780123e955955548aacc2cba140847687c->leave($__internal_395e118794d42fd446b8b742aa8b5e780123e955955548aacc2cba140847687c_prof);

        
        $__internal_c0831ef52ef1f09a6bac238d6c0b708e71fe3dcb57e2734284877926a817267d->leave($__internal_c0831ef52ef1f09a6bac238d6c0b708e71fe3dcb57e2734284877926a817267d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_baa575ddc3ed76f08d769cb6d333e6654613e422828e3dd82281d2e1a000d823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa575ddc3ed76f08d769cb6d333e6654613e422828e3dd82281d2e1a000d823->enter($__internal_baa575ddc3ed76f08d769cb6d333e6654613e422828e3dd82281d2e1a000d823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd58bca52eeea0880c97985918d997f9d2b68ccab41636c9835a420e6101d3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd58bca52eeea0880c97985918d997f9d2b68ccab41636c9835a420e6101d3db->enter($__internal_bd58bca52eeea0880c97985918d997f9d2b68ccab41636c9835a420e6101d3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bd58bca52eeea0880c97985918d997f9d2b68ccab41636c9835a420e6101d3db->leave($__internal_bd58bca52eeea0880c97985918d997f9d2b68ccab41636c9835a420e6101d3db_prof);

        
        $__internal_baa575ddc3ed76f08d769cb6d333e6654613e422828e3dd82281d2e1a000d823->leave($__internal_baa575ddc3ed76f08d769cb6d333e6654613e422828e3dd82281d2e1a000d823_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
