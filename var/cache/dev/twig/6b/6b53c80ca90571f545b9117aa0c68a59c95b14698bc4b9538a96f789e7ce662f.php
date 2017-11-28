<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b537a75657d0f804d2a7b67ffb58bfebd592098e96d8348f4d34b9f8663e3d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1e9eeaaa40d25c102457ab121b4f6232e4588872026c55b6fd279e0679b45913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9eeaaa40d25c102457ab121b4f6232e4588872026c55b6fd279e0679b45913->enter($__internal_1e9eeaaa40d25c102457ab121b4f6232e4588872026c55b6fd279e0679b45913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9eeaaa40d25c102457ab121b4f6232e4588872026c55b6fd279e0679b45913->leave($__internal_1e9eeaaa40d25c102457ab121b4f6232e4588872026c55b6fd279e0679b45913_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b965c10c4fb4d6d56952f4f55ace0a379198dd0ca8a0486cc0f63ad3f7325cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b965c10c4fb4d6d56952f4f55ace0a379198dd0ca8a0486cc0f63ad3f7325cf->enter($__internal_3b965c10c4fb4d6d56952f4f55ace0a379198dd0ca8a0486cc0f63ad3f7325cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b965c10c4fb4d6d56952f4f55ace0a379198dd0ca8a0486cc0f63ad3f7325cf->leave($__internal_3b965c10c4fb4d6d56952f4f55ace0a379198dd0ca8a0486cc0f63ad3f7325cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd2bde451ad86f9c73e383fa14727fd43fa667b905ed16d275020a83ad42c7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2bde451ad86f9c73e383fa14727fd43fa667b905ed16d275020a83ad42c7cc->enter($__internal_cd2bde451ad86f9c73e383fa14727fd43fa667b905ed16d275020a83ad42c7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cd2bde451ad86f9c73e383fa14727fd43fa667b905ed16d275020a83ad42c7cc->leave($__internal_cd2bde451ad86f9c73e383fa14727fd43fa667b905ed16d275020a83ad42c7cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bbc5e4e6a02f60dd63e8e16f871541092151f0a58964110fa541f8bb0b8a6675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc5e4e6a02f60dd63e8e16f871541092151f0a58964110fa541f8bb0b8a6675->enter($__internal_bbc5e4e6a02f60dd63e8e16f871541092151f0a58964110fa541f8bb0b8a6675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_bbc5e4e6a02f60dd63e8e16f871541092151f0a58964110fa541f8bb0b8a6675->leave($__internal_bbc5e4e6a02f60dd63e8e16f871541092151f0a58964110fa541f8bb0b8a6675_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
