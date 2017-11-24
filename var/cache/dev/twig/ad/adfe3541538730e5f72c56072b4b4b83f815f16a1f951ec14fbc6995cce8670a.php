<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_c7d75b6f4c6a3185de22070a8b91f0125e4017136424cce0144ba3fa94ddc06f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_668cae4f4f901b21d7fd142f662ea1ab756650cb2ec227bd8f36db650d40e7f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668cae4f4f901b21d7fd142f662ea1ab756650cb2ec227bd8f36db650d40e7f5->enter($__internal_668cae4f4f901b21d7fd142f662ea1ab756650cb2ec227bd8f36db650d40e7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_c4887d05c54211a4bd6dacf5976d5626b874b3042b5352ca983508a9d0c82461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4887d05c54211a4bd6dacf5976d5626b874b3042b5352ca983508a9d0c82461->enter($__internal_c4887d05c54211a4bd6dacf5976d5626b874b3042b5352ca983508a9d0c82461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668cae4f4f901b21d7fd142f662ea1ab756650cb2ec227bd8f36db650d40e7f5->leave($__internal_668cae4f4f901b21d7fd142f662ea1ab756650cb2ec227bd8f36db650d40e7f5_prof);

        
        $__internal_c4887d05c54211a4bd6dacf5976d5626b874b3042b5352ca983508a9d0c82461->leave($__internal_c4887d05c54211a4bd6dacf5976d5626b874b3042b5352ca983508a9d0c82461_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6c81c8be922bc683a737957da2c03bb25784ad5ec76dc731e5894d5f298e8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c81c8be922bc683a737957da2c03bb25784ad5ec76dc731e5894d5f298e8ee->enter($__internal_c6c81c8be922bc683a737957da2c03bb25784ad5ec76dc731e5894d5f298e8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60b904186410bce35d0c1153b84fbeccdd3434a60cb0c11ab53888cd46922aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b904186410bce35d0c1153b84fbeccdd3434a60cb0c11ab53888cd46922aff->enter($__internal_60b904186410bce35d0c1153b84fbeccdd3434a60cb0c11ab53888cd46922aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_60b904186410bce35d0c1153b84fbeccdd3434a60cb0c11ab53888cd46922aff->leave($__internal_60b904186410bce35d0c1153b84fbeccdd3434a60cb0c11ab53888cd46922aff_prof);

        
        $__internal_c6c81c8be922bc683a737957da2c03bb25784ad5ec76dc731e5894d5f298e8ee->leave($__internal_c6c81c8be922bc683a737957da2c03bb25784ad5ec76dc731e5894d5f298e8ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
