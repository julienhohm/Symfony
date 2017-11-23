<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
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
        $__internal_d847a2d9fd5f23a9ec1af50b25bac86933be4234566a235157493256c864de1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d847a2d9fd5f23a9ec1af50b25bac86933be4234566a235157493256c864de1f->enter($__internal_d847a2d9fd5f23a9ec1af50b25bac86933be4234566a235157493256c864de1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_53d50afc825c43f10214c7d01ead57b6aa84b3e996bd6c988461c7c46b0f025a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d50afc825c43f10214c7d01ead57b6aa84b3e996bd6c988461c7c46b0f025a->enter($__internal_53d50afc825c43f10214c7d01ead57b6aa84b3e996bd6c988461c7c46b0f025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d847a2d9fd5f23a9ec1af50b25bac86933be4234566a235157493256c864de1f->leave($__internal_d847a2d9fd5f23a9ec1af50b25bac86933be4234566a235157493256c864de1f_prof);

        
        $__internal_53d50afc825c43f10214c7d01ead57b6aa84b3e996bd6c988461c7c46b0f025a->leave($__internal_53d50afc825c43f10214c7d01ead57b6aa84b3e996bd6c988461c7c46b0f025a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbd24b5e56a6bfae685dcea118ff1543817efd864c5f4a3f8d2a474b2c77b3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd24b5e56a6bfae685dcea118ff1543817efd864c5f4a3f8d2a474b2c77b3b0->enter($__internal_bbd24b5e56a6bfae685dcea118ff1543817efd864c5f4a3f8d2a474b2c77b3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1832293f7d86cc3116e54f68938c4f64f6cc342dae7a4361f1a9783c95f43c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1832293f7d86cc3116e54f68938c4f64f6cc342dae7a4361f1a9783c95f43c40->enter($__internal_1832293f7d86cc3116e54f68938c4f64f6cc342dae7a4361f1a9783c95f43c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1832293f7d86cc3116e54f68938c4f64f6cc342dae7a4361f1a9783c95f43c40->leave($__internal_1832293f7d86cc3116e54f68938c4f64f6cc342dae7a4361f1a9783c95f43c40_prof);

        
        $__internal_bbd24b5e56a6bfae685dcea118ff1543817efd864c5f4a3f8d2a474b2c77b3b0->leave($__internal_bbd24b5e56a6bfae685dcea118ff1543817efd864c5f4a3f8d2a474b2c77b3b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d491cf8df31df19998b1f9fc737abcdae65bd67451a85a8752f79fedfca59522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d491cf8df31df19998b1f9fc737abcdae65bd67451a85a8752f79fedfca59522->enter($__internal_d491cf8df31df19998b1f9fc737abcdae65bd67451a85a8752f79fedfca59522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_64e60937e31a2bcdb174111a62de12699299a6d2da574f47cddb26e8e3003e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e60937e31a2bcdb174111a62de12699299a6d2da574f47cddb26e8e3003e7b->enter($__internal_64e60937e31a2bcdb174111a62de12699299a6d2da574f47cddb26e8e3003e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_64e60937e31a2bcdb174111a62de12699299a6d2da574f47cddb26e8e3003e7b->leave($__internal_64e60937e31a2bcdb174111a62de12699299a6d2da574f47cddb26e8e3003e7b_prof);

        
        $__internal_d491cf8df31df19998b1f9fc737abcdae65bd67451a85a8752f79fedfca59522->leave($__internal_d491cf8df31df19998b1f9fc737abcdae65bd67451a85a8752f79fedfca59522_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a926584c2fd162848f5b26d85688111ac88805ffb2c7337671a23597f9f35a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a926584c2fd162848f5b26d85688111ac88805ffb2c7337671a23597f9f35a62->enter($__internal_a926584c2fd162848f5b26d85688111ac88805ffb2c7337671a23597f9f35a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ec4c826492a0705314797d46b5dcc20699d90205f2500f3d438cbeebff4cf433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4c826492a0705314797d46b5dcc20699d90205f2500f3d438cbeebff4cf433->enter($__internal_ec4c826492a0705314797d46b5dcc20699d90205f2500f3d438cbeebff4cf433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ec4c826492a0705314797d46b5dcc20699d90205f2500f3d438cbeebff4cf433->leave($__internal_ec4c826492a0705314797d46b5dcc20699d90205f2500f3d438cbeebff4cf433_prof);

        
        $__internal_a926584c2fd162848f5b26d85688111ac88805ffb2c7337671a23597f9f35a62->leave($__internal_a926584c2fd162848f5b26d85688111ac88805ffb2c7337671a23597f9f35a62_prof);

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
