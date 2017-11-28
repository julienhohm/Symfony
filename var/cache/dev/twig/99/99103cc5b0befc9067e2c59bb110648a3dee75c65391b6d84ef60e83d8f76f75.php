<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_94e4fba8105a24df5ec9eed5ed5c03d07e3cff2bbc8f33073f68fd96dcc3f92b extends Twig_Template
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
        $__internal_7d9599a74850461c9462c8f3d26286ca05eb5e0375869ddef52cdb2c7a4c4fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9599a74850461c9462c8f3d26286ca05eb5e0375869ddef52cdb2c7a4c4fd0->enter($__internal_7d9599a74850461c9462c8f3d26286ca05eb5e0375869ddef52cdb2c7a4c4fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d9599a74850461c9462c8f3d26286ca05eb5e0375869ddef52cdb2c7a4c4fd0->leave($__internal_7d9599a74850461c9462c8f3d26286ca05eb5e0375869ddef52cdb2c7a4c4fd0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78b6fcc2c738f2b4a08aae39a39c1a8d2d17b37097e46f5dd26775f0f559f083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b6fcc2c738f2b4a08aae39a39c1a8d2d17b37097e46f5dd26775f0f559f083->enter($__internal_78b6fcc2c738f2b4a08aae39a39c1a8d2d17b37097e46f5dd26775f0f559f083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_78b6fcc2c738f2b4a08aae39a39c1a8d2d17b37097e46f5dd26775f0f559f083->leave($__internal_78b6fcc2c738f2b4a08aae39a39c1a8d2d17b37097e46f5dd26775f0f559f083_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_072ee95de2a786a08ab0e911edc19c391886075a8d308d86531e407027849a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072ee95de2a786a08ab0e911edc19c391886075a8d308d86531e407027849a9d->enter($__internal_072ee95de2a786a08ab0e911edc19c391886075a8d308d86531e407027849a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_072ee95de2a786a08ab0e911edc19c391886075a8d308d86531e407027849a9d->leave($__internal_072ee95de2a786a08ab0e911edc19c391886075a8d308d86531e407027849a9d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ba3ce5275bb2d51ad86105231af29367d1ac25ac4fcf1e2d7fd14a61564ae56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba3ce5275bb2d51ad86105231af29367d1ac25ac4fcf1e2d7fd14a61564ae56->enter($__internal_9ba3ce5275bb2d51ad86105231af29367d1ac25ac4fcf1e2d7fd14a61564ae56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_9ba3ce5275bb2d51ad86105231af29367d1ac25ac4fcf1e2d7fd14a61564ae56->leave($__internal_9ba3ce5275bb2d51ad86105231af29367d1ac25ac4fcf1e2d7fd14a61564ae56_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
