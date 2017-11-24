<?php

/* ::base.html.twig */
class __TwigTemplate_d8adfa9850bfec8e291ce4ea3ebe73a551d37a2fd71e81b00584a94726427558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4a8cf04b706cb0720e7ccea4fa228db47d3cf8a3b7e65c3ff9bfcd5e345ea5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a8cf04b706cb0720e7ccea4fa228db47d3cf8a3b7e65c3ff9bfcd5e345ea5e->enter($__internal_a4a8cf04b706cb0720e7ccea4fa228db47d3cf8a3b7e65c3ff9bfcd5e345ea5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b21a9a859978ffb64689efef2632cf09ee02fe5e780132d2d660a9d5ed1376ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21a9a859978ffb64689efef2632cf09ee02fe5e780132d2d660a9d5ed1376ee->enter($__internal_b21a9a859978ffb64689efef2632cf09ee02fe5e780132d2d660a9d5ed1376ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a4a8cf04b706cb0720e7ccea4fa228db47d3cf8a3b7e65c3ff9bfcd5e345ea5e->leave($__internal_a4a8cf04b706cb0720e7ccea4fa228db47d3cf8a3b7e65c3ff9bfcd5e345ea5e_prof);

        
        $__internal_b21a9a859978ffb64689efef2632cf09ee02fe5e780132d2d660a9d5ed1376ee->leave($__internal_b21a9a859978ffb64689efef2632cf09ee02fe5e780132d2d660a9d5ed1376ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8bb672af3d88436b9a79ffe5d7cf3545fd309c42dad9ad04635e39e37dbd16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bb672af3d88436b9a79ffe5d7cf3545fd309c42dad9ad04635e39e37dbd16b->enter($__internal_d8bb672af3d88436b9a79ffe5d7cf3545fd309c42dad9ad04635e39e37dbd16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c79ad441f00bfabf51e1bc608601103c67b8ea3ae2590c422c4dc524e5475a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79ad441f00bfabf51e1bc608601103c67b8ea3ae2590c422c4dc524e5475a28->enter($__internal_c79ad441f00bfabf51e1bc608601103c67b8ea3ae2590c422c4dc524e5475a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c79ad441f00bfabf51e1bc608601103c67b8ea3ae2590c422c4dc524e5475a28->leave($__internal_c79ad441f00bfabf51e1bc608601103c67b8ea3ae2590c422c4dc524e5475a28_prof);

        
        $__internal_d8bb672af3d88436b9a79ffe5d7cf3545fd309c42dad9ad04635e39e37dbd16b->leave($__internal_d8bb672af3d88436b9a79ffe5d7cf3545fd309c42dad9ad04635e39e37dbd16b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e9dbfe55b19a78e110810e026cbb0adecde06c2d02a9edc4d40b9858a361738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9dbfe55b19a78e110810e026cbb0adecde06c2d02a9edc4d40b9858a361738->enter($__internal_9e9dbfe55b19a78e110810e026cbb0adecde06c2d02a9edc4d40b9858a361738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e8b256685d726e8fc35fa11db1336cd763a6d96608e49591f0208981d6eb187f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b256685d726e8fc35fa11db1336cd763a6d96608e49591f0208981d6eb187f->enter($__internal_e8b256685d726e8fc35fa11db1336cd763a6d96608e49591f0208981d6eb187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8b256685d726e8fc35fa11db1336cd763a6d96608e49591f0208981d6eb187f->leave($__internal_e8b256685d726e8fc35fa11db1336cd763a6d96608e49591f0208981d6eb187f_prof);

        
        $__internal_9e9dbfe55b19a78e110810e026cbb0adecde06c2d02a9edc4d40b9858a361738->leave($__internal_9e9dbfe55b19a78e110810e026cbb0adecde06c2d02a9edc4d40b9858a361738_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8651d6df4b878e4a155d1c46690735e63c149e6cd73da33c9a38d615bec30d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8651d6df4b878e4a155d1c46690735e63c149e6cd73da33c9a38d615bec30d98->enter($__internal_8651d6df4b878e4a155d1c46690735e63c149e6cd73da33c9a38d615bec30d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_447f4f2ee162ec3bea3252f65cb176d4c428c63ab2963ab8e9757ab4b8b3bf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447f4f2ee162ec3bea3252f65cb176d4c428c63ab2963ab8e9757ab4b8b3bf5a->enter($__internal_447f4f2ee162ec3bea3252f65cb176d4c428c63ab2963ab8e9757ab4b8b3bf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_447f4f2ee162ec3bea3252f65cb176d4c428c63ab2963ab8e9757ab4b8b3bf5a->leave($__internal_447f4f2ee162ec3bea3252f65cb176d4c428c63ab2963ab8e9757ab4b8b3bf5a_prof);

        
        $__internal_8651d6df4b878e4a155d1c46690735e63c149e6cd73da33c9a38d615bec30d98->leave($__internal_8651d6df4b878e4a155d1c46690735e63c149e6cd73da33c9a38d615bec30d98_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_282932591d103995fff99dc1ec64353c15dc447707074f181939e4f3e7088430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282932591d103995fff99dc1ec64353c15dc447707074f181939e4f3e7088430->enter($__internal_282932591d103995fff99dc1ec64353c15dc447707074f181939e4f3e7088430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b2e097781eb1f26e0e7f50049fa53002b4667619efe13375113c3ad09d902aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e097781eb1f26e0e7f50049fa53002b4667619efe13375113c3ad09d902aa1->enter($__internal_b2e097781eb1f26e0e7f50049fa53002b4667619efe13375113c3ad09d902aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b2e097781eb1f26e0e7f50049fa53002b4667619efe13375113c3ad09d902aa1->leave($__internal_b2e097781eb1f26e0e7f50049fa53002b4667619efe13375113c3ad09d902aa1_prof);

        
        $__internal_282932591d103995fff99dc1ec64353c15dc447707074f181939e4f3e7088430->leave($__internal_282932591d103995fff99dc1ec64353c15dc447707074f181939e4f3e7088430_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
