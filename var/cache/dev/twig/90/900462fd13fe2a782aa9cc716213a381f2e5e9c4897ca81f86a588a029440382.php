<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a0101072286096cd49d356127a35e50be9fb2c6bf9f1d947efe00afdfbd91f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_88130458d80d71fccec1a610562d98b66d90073d3aafa11b6e5872f5d3d361b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88130458d80d71fccec1a610562d98b66d90073d3aafa11b6e5872f5d3d361b3->enter($__internal_88130458d80d71fccec1a610562d98b66d90073d3aafa11b6e5872f5d3d361b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_db6ee0199bc63c8aa3e2884f8febeba4c92632186368f67d884d16555ddb5bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6ee0199bc63c8aa3e2884f8febeba4c92632186368f67d884d16555ddb5bde->enter($__internal_db6ee0199bc63c8aa3e2884f8febeba4c92632186368f67d884d16555ddb5bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88130458d80d71fccec1a610562d98b66d90073d3aafa11b6e5872f5d3d361b3->leave($__internal_88130458d80d71fccec1a610562d98b66d90073d3aafa11b6e5872f5d3d361b3_prof);

        
        $__internal_db6ee0199bc63c8aa3e2884f8febeba4c92632186368f67d884d16555ddb5bde->leave($__internal_db6ee0199bc63c8aa3e2884f8febeba4c92632186368f67d884d16555ddb5bde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5086835e6f7290ef48fecdbee58dc1c97f7c516d8820a5f934637da761923455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5086835e6f7290ef48fecdbee58dc1c97f7c516d8820a5f934637da761923455->enter($__internal_5086835e6f7290ef48fecdbee58dc1c97f7c516d8820a5f934637da761923455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f9b79bfddfae224a2d98b94f2340fc36a800b0cfa5d81bc68c465a8ec352b26c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b79bfddfae224a2d98b94f2340fc36a800b0cfa5d81bc68c465a8ec352b26c->enter($__internal_f9b79bfddfae224a2d98b94f2340fc36a800b0cfa5d81bc68c465a8ec352b26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f9b79bfddfae224a2d98b94f2340fc36a800b0cfa5d81bc68c465a8ec352b26c->leave($__internal_f9b79bfddfae224a2d98b94f2340fc36a800b0cfa5d81bc68c465a8ec352b26c_prof);

        
        $__internal_5086835e6f7290ef48fecdbee58dc1c97f7c516d8820a5f934637da761923455->leave($__internal_5086835e6f7290ef48fecdbee58dc1c97f7c516d8820a5f934637da761923455_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb854fbd583ea89f79a07c7de2d8aee7b6464e14b2723c356ce26fbc31949f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb854fbd583ea89f79a07c7de2d8aee7b6464e14b2723c356ce26fbc31949f50->enter($__internal_eb854fbd583ea89f79a07c7de2d8aee7b6464e14b2723c356ce26fbc31949f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a888b7a93bdc39d6c8a8fdfa078727974b556e6d9ae83620efce5d135b27fbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a888b7a93bdc39d6c8a8fdfa078727974b556e6d9ae83620efce5d135b27fbb3->enter($__internal_a888b7a93bdc39d6c8a8fdfa078727974b556e6d9ae83620efce5d135b27fbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a888b7a93bdc39d6c8a8fdfa078727974b556e6d9ae83620efce5d135b27fbb3->leave($__internal_a888b7a93bdc39d6c8a8fdfa078727974b556e6d9ae83620efce5d135b27fbb3_prof);

        
        $__internal_eb854fbd583ea89f79a07c7de2d8aee7b6464e14b2723c356ce26fbc31949f50->leave($__internal_eb854fbd583ea89f79a07c7de2d8aee7b6464e14b2723c356ce26fbc31949f50_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39efe19bf043b9096090d41adba3db8137274943829144ca6534aa29ab1fc5d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39efe19bf043b9096090d41adba3db8137274943829144ca6534aa29ab1fc5d2->enter($__internal_39efe19bf043b9096090d41adba3db8137274943829144ca6534aa29ab1fc5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_363dfd97e4aa98b2c9cb3438c9cf55a80cf9456174ec40d348c6868e9a0af14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363dfd97e4aa98b2c9cb3438c9cf55a80cf9456174ec40d348c6868e9a0af14b->enter($__internal_363dfd97e4aa98b2c9cb3438c9cf55a80cf9456174ec40d348c6868e9a0af14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_363dfd97e4aa98b2c9cb3438c9cf55a80cf9456174ec40d348c6868e9a0af14b->leave($__internal_363dfd97e4aa98b2c9cb3438c9cf55a80cf9456174ec40d348c6868e9a0af14b_prof);

        
        $__internal_39efe19bf043b9096090d41adba3db8137274943829144ca6534aa29ab1fc5d2->leave($__internal_39efe19bf043b9096090d41adba3db8137274943829144ca6534aa29ab1fc5d2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
