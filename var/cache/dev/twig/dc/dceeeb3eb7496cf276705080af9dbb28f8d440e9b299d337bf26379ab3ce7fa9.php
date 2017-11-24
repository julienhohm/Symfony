<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
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
        $__internal_2b8263d2e0b65ebe56abfea349050a92bd4b450672c45a406184c6d11353e9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8263d2e0b65ebe56abfea349050a92bd4b450672c45a406184c6d11353e9a8->enter($__internal_2b8263d2e0b65ebe56abfea349050a92bd4b450672c45a406184c6d11353e9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e7766537c218254bcf38213a953732c114515455e021e06a61fc47d7c9cbb12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7766537c218254bcf38213a953732c114515455e021e06a61fc47d7c9cbb12a->enter($__internal_e7766537c218254bcf38213a953732c114515455e021e06a61fc47d7c9cbb12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2b8263d2e0b65ebe56abfea349050a92bd4b450672c45a406184c6d11353e9a8->leave($__internal_2b8263d2e0b65ebe56abfea349050a92bd4b450672c45a406184c6d11353e9a8_prof);

        
        $__internal_e7766537c218254bcf38213a953732c114515455e021e06a61fc47d7c9cbb12a->leave($__internal_e7766537c218254bcf38213a953732c114515455e021e06a61fc47d7c9cbb12a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7825f70d104a651adf6fc6a5c2ebeabe7cd575b18b2556e7487ef5dff1e711d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7825f70d104a651adf6fc6a5c2ebeabe7cd575b18b2556e7487ef5dff1e711d0->enter($__internal_7825f70d104a651adf6fc6a5c2ebeabe7cd575b18b2556e7487ef5dff1e711d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db6a03ca87b42392ecec2404ac964b52c2dc62b3a40ceeb5f685e2c3f0a6f98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6a03ca87b42392ecec2404ac964b52c2dc62b3a40ceeb5f685e2c3f0a6f98f->enter($__internal_db6a03ca87b42392ecec2404ac964b52c2dc62b3a40ceeb5f685e2c3f0a6f98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_db6a03ca87b42392ecec2404ac964b52c2dc62b3a40ceeb5f685e2c3f0a6f98f->leave($__internal_db6a03ca87b42392ecec2404ac964b52c2dc62b3a40ceeb5f685e2c3f0a6f98f_prof);

        
        $__internal_7825f70d104a651adf6fc6a5c2ebeabe7cd575b18b2556e7487ef5dff1e711d0->leave($__internal_7825f70d104a651adf6fc6a5c2ebeabe7cd575b18b2556e7487ef5dff1e711d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4eb988400a27a3a550620efa3ec678c31185ced5159147b0dd310c54fb6e2b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb988400a27a3a550620efa3ec678c31185ced5159147b0dd310c54fb6e2b5e->enter($__internal_4eb988400a27a3a550620efa3ec678c31185ced5159147b0dd310c54fb6e2b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b55c41c5cc6e2391f183bb720b3c09a901c6150bd30a76f1e6247ed7c962bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b55c41c5cc6e2391f183bb720b3c09a901c6150bd30a76f1e6247ed7c962bbe->enter($__internal_0b55c41c5cc6e2391f183bb720b3c09a901c6150bd30a76f1e6247ed7c962bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b55c41c5cc6e2391f183bb720b3c09a901c6150bd30a76f1e6247ed7c962bbe->leave($__internal_0b55c41c5cc6e2391f183bb720b3c09a901c6150bd30a76f1e6247ed7c962bbe_prof);

        
        $__internal_4eb988400a27a3a550620efa3ec678c31185ced5159147b0dd310c54fb6e2b5e->leave($__internal_4eb988400a27a3a550620efa3ec678c31185ced5159147b0dd310c54fb6e2b5e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_052524e8dea8027764de5aa340280ff3b193ed062e5c16895977a0b5ce3825cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052524e8dea8027764de5aa340280ff3b193ed062e5c16895977a0b5ce3825cf->enter($__internal_052524e8dea8027764de5aa340280ff3b193ed062e5c16895977a0b5ce3825cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0a38acdaa698d8bde82c058121ab91fd5c2a49a3351aee3877b3f1b6a386016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a38acdaa698d8bde82c058121ab91fd5c2a49a3351aee3877b3f1b6a386016->enter($__internal_b0a38acdaa698d8bde82c058121ab91fd5c2a49a3351aee3877b3f1b6a386016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0a38acdaa698d8bde82c058121ab91fd5c2a49a3351aee3877b3f1b6a386016->leave($__internal_b0a38acdaa698d8bde82c058121ab91fd5c2a49a3351aee3877b3f1b6a386016_prof);

        
        $__internal_052524e8dea8027764de5aa340280ff3b193ed062e5c16895977a0b5ce3825cf->leave($__internal_052524e8dea8027764de5aa340280ff3b193ed062e5c16895977a0b5ce3825cf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_066204c441516a383d1d53d0f35c85532c1cea09936be6a62fc6d64c3ecd4034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066204c441516a383d1d53d0f35c85532c1cea09936be6a62fc6d64c3ecd4034->enter($__internal_066204c441516a383d1d53d0f35c85532c1cea09936be6a62fc6d64c3ecd4034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0686073b7b7e67b2932f229eb82218985b3c119ab025fd85c80e2ce2a908174a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0686073b7b7e67b2932f229eb82218985b3c119ab025fd85c80e2ce2a908174a->enter($__internal_0686073b7b7e67b2932f229eb82218985b3c119ab025fd85c80e2ce2a908174a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0686073b7b7e67b2932f229eb82218985b3c119ab025fd85c80e2ce2a908174a->leave($__internal_0686073b7b7e67b2932f229eb82218985b3c119ab025fd85c80e2ce2a908174a_prof);

        
        $__internal_066204c441516a383d1d53d0f35c85532c1cea09936be6a62fc6d64c3ecd4034->leave($__internal_066204c441516a383d1d53d0f35c85532c1cea09936be6a62fc6d64c3ecd4034_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
