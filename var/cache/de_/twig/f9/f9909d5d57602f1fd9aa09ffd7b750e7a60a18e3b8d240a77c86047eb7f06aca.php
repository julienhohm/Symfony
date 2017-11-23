<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ed84e58abbd17155dd21a003daf4940e5607158811f1cf7dd52d355ab7f59f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d050a718a9c54ee5e765d07b9170fa7a1a9a58db1e51bbda33f9270613039c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d050a718a9c54ee5e765d07b9170fa7a1a9a58db1e51bbda33f9270613039c5->enter($__internal_5d050a718a9c54ee5e765d07b9170fa7a1a9a58db1e51bbda33f9270613039c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d050a718a9c54ee5e765d07b9170fa7a1a9a58db1e51bbda33f9270613039c5->leave($__internal_5d050a718a9c54ee5e765d07b9170fa7a1a9a58db1e51bbda33f9270613039c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9f176eb7e910f79999b8c8d929a591008fd21fd6e2b270fcf311509db35f2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f176eb7e910f79999b8c8d929a591008fd21fd6e2b270fcf311509db35f2f9->enter($__internal_c9f176eb7e910f79999b8c8d929a591008fd21fd6e2b270fcf311509db35f2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c9f176eb7e910f79999b8c8d929a591008fd21fd6e2b270fcf311509db35f2f9->leave($__internal_c9f176eb7e910f79999b8c8d929a591008fd21fd6e2b270fcf311509db35f2f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14f4d483f4d975c94f31d4335441ee679b3c606e3befbc27acaf14eec30741a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f4d483f4d975c94f31d4335441ee679b3c606e3befbc27acaf14eec30741a0->enter($__internal_14f4d483f4d975c94f31d4335441ee679b3c606e3befbc27acaf14eec30741a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_14f4d483f4d975c94f31d4335441ee679b3c606e3befbc27acaf14eec30741a0->leave($__internal_14f4d483f4d975c94f31d4335441ee679b3c606e3befbc27acaf14eec30741a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
