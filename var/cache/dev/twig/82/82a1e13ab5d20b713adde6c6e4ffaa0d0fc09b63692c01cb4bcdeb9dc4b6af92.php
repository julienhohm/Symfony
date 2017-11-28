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
        $__internal_8f579b0574ce2665fa0278c54fdf4183643748d700855f071a6b1f779b08ab6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f579b0574ce2665fa0278c54fdf4183643748d700855f071a6b1f779b08ab6c->enter($__internal_8f579b0574ce2665fa0278c54fdf4183643748d700855f071a6b1f779b08ab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8f3a4e60743761b6d986d45665965e4a2a98317723e5d47d2b1beab33a8c1e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3a4e60743761b6d986d45665965e4a2a98317723e5d47d2b1beab33a8c1e04->enter($__internal_8f3a4e60743761b6d986d45665965e4a2a98317723e5d47d2b1beab33a8c1e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f579b0574ce2665fa0278c54fdf4183643748d700855f071a6b1f779b08ab6c->leave($__internal_8f579b0574ce2665fa0278c54fdf4183643748d700855f071a6b1f779b08ab6c_prof);

        
        $__internal_8f3a4e60743761b6d986d45665965e4a2a98317723e5d47d2b1beab33a8c1e04->leave($__internal_8f3a4e60743761b6d986d45665965e4a2a98317723e5d47d2b1beab33a8c1e04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61d20eb72d0fa5f0866792a25efe17254656f2d3d620f038932a6b438295c891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d20eb72d0fa5f0866792a25efe17254656f2d3d620f038932a6b438295c891->enter($__internal_61d20eb72d0fa5f0866792a25efe17254656f2d3d620f038932a6b438295c891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dbe4fed5ce2c96e1933a213d89a1eafd0ad07e99098b73c0df96ae29b3defd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe4fed5ce2c96e1933a213d89a1eafd0ad07e99098b73c0df96ae29b3defd2e->enter($__internal_dbe4fed5ce2c96e1933a213d89a1eafd0ad07e99098b73c0df96ae29b3defd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dbe4fed5ce2c96e1933a213d89a1eafd0ad07e99098b73c0df96ae29b3defd2e->leave($__internal_dbe4fed5ce2c96e1933a213d89a1eafd0ad07e99098b73c0df96ae29b3defd2e_prof);

        
        $__internal_61d20eb72d0fa5f0866792a25efe17254656f2d3d620f038932a6b438295c891->leave($__internal_61d20eb72d0fa5f0866792a25efe17254656f2d3d620f038932a6b438295c891_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c8bd1fa405db43703698bfb5576d610850513c71a43c046c089ad2749032af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8bd1fa405db43703698bfb5576d610850513c71a43c046c089ad2749032af0->enter($__internal_7c8bd1fa405db43703698bfb5576d610850513c71a43c046c089ad2749032af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eab7fbadb9eaf3078683fc834859976476468771cafc4b8bc00e288e7760ecc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab7fbadb9eaf3078683fc834859976476468771cafc4b8bc00e288e7760ecc5->enter($__internal_eab7fbadb9eaf3078683fc834859976476468771cafc4b8bc00e288e7760ecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_eab7fbadb9eaf3078683fc834859976476468771cafc4b8bc00e288e7760ecc5->leave($__internal_eab7fbadb9eaf3078683fc834859976476468771cafc4b8bc00e288e7760ecc5_prof);

        
        $__internal_7c8bd1fa405db43703698bfb5576d610850513c71a43c046c089ad2749032af0->leave($__internal_7c8bd1fa405db43703698bfb5576d610850513c71a43c046c089ad2749032af0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf21443b88e67edb696acb22b563a5b3f379a130d860d47de44790622ca95a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf21443b88e67edb696acb22b563a5b3f379a130d860d47de44790622ca95a41->enter($__internal_cf21443b88e67edb696acb22b563a5b3f379a130d860d47de44790622ca95a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b3092f22e948762fc0f0589dd3daebf21f06abe76e21702ccdeb39deb327c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3092f22e948762fc0f0589dd3daebf21f06abe76e21702ccdeb39deb327c40->enter($__internal_7b3092f22e948762fc0f0589dd3daebf21f06abe76e21702ccdeb39deb327c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7b3092f22e948762fc0f0589dd3daebf21f06abe76e21702ccdeb39deb327c40->leave($__internal_7b3092f22e948762fc0f0589dd3daebf21f06abe76e21702ccdeb39deb327c40_prof);

        
        $__internal_cf21443b88e67edb696acb22b563a5b3f379a130d860d47de44790622ca95a41->leave($__internal_cf21443b88e67edb696acb22b563a5b3f379a130d860d47de44790622ca95a41_prof);

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
