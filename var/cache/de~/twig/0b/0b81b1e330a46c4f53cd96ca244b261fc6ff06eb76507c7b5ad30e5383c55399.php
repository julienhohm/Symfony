<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
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
        $__internal_6c4c37a3cc8ddc4e716c65a2932c146d821987c219173068bf42715f9ed75379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4c37a3cc8ddc4e716c65a2932c146d821987c219173068bf42715f9ed75379->enter($__internal_6c4c37a3cc8ddc4e716c65a2932c146d821987c219173068bf42715f9ed75379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_020503f4685fb6e4b1f35ac2b33f0ec03002af2efe5370190c29e4668178ff2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020503f4685fb6e4b1f35ac2b33f0ec03002af2efe5370190c29e4668178ff2f->enter($__internal_020503f4685fb6e4b1f35ac2b33f0ec03002af2efe5370190c29e4668178ff2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6c4c37a3cc8ddc4e716c65a2932c146d821987c219173068bf42715f9ed75379->leave($__internal_6c4c37a3cc8ddc4e716c65a2932c146d821987c219173068bf42715f9ed75379_prof);

        
        $__internal_020503f4685fb6e4b1f35ac2b33f0ec03002af2efe5370190c29e4668178ff2f->leave($__internal_020503f4685fb6e4b1f35ac2b33f0ec03002af2efe5370190c29e4668178ff2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c854fca2ea7e4c425c7d45600f3a2ec9cba5a06c4a82596b98dbf774338a8b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c854fca2ea7e4c425c7d45600f3a2ec9cba5a06c4a82596b98dbf774338a8b7c->enter($__internal_c854fca2ea7e4c425c7d45600f3a2ec9cba5a06c4a82596b98dbf774338a8b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7005d82978f4924e4bbc96a84071b1b69f7dd5d1a9c5c2aea5feede8edf78db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7005d82978f4924e4bbc96a84071b1b69f7dd5d1a9c5c2aea5feede8edf78db->enter($__internal_c7005d82978f4924e4bbc96a84071b1b69f7dd5d1a9c5c2aea5feede8edf78db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c7005d82978f4924e4bbc96a84071b1b69f7dd5d1a9c5c2aea5feede8edf78db->leave($__internal_c7005d82978f4924e4bbc96a84071b1b69f7dd5d1a9c5c2aea5feede8edf78db_prof);

        
        $__internal_c854fca2ea7e4c425c7d45600f3a2ec9cba5a06c4a82596b98dbf774338a8b7c->leave($__internal_c854fca2ea7e4c425c7d45600f3a2ec9cba5a06c4a82596b98dbf774338a8b7c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_565cba324e2101a3d6b4c29ae77412a0903fc5ed30e2163b2a9cb599f05c50b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565cba324e2101a3d6b4c29ae77412a0903fc5ed30e2163b2a9cb599f05c50b1->enter($__internal_565cba324e2101a3d6b4c29ae77412a0903fc5ed30e2163b2a9cb599f05c50b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e8e5f44df755a5e8cf631fcd1b4dd859bac3b476ddf5656c092b941e78277eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e5f44df755a5e8cf631fcd1b4dd859bac3b476ddf5656c092b941e78277eca->enter($__internal_e8e5f44df755a5e8cf631fcd1b4dd859bac3b476ddf5656c092b941e78277eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8e5f44df755a5e8cf631fcd1b4dd859bac3b476ddf5656c092b941e78277eca->leave($__internal_e8e5f44df755a5e8cf631fcd1b4dd859bac3b476ddf5656c092b941e78277eca_prof);

        
        $__internal_565cba324e2101a3d6b4c29ae77412a0903fc5ed30e2163b2a9cb599f05c50b1->leave($__internal_565cba324e2101a3d6b4c29ae77412a0903fc5ed30e2163b2a9cb599f05c50b1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_53a049c90f8c37e6a7738d620aad5c8bd1901ea9332f4276d8afab823685e245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a049c90f8c37e6a7738d620aad5c8bd1901ea9332f4276d8afab823685e245->enter($__internal_53a049c90f8c37e6a7738d620aad5c8bd1901ea9332f4276d8afab823685e245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a9d63921b9fb3f33063afada8830344df9eea63fbf20844a54af064d0197957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9d63921b9fb3f33063afada8830344df9eea63fbf20844a54af064d0197957->enter($__internal_4a9d63921b9fb3f33063afada8830344df9eea63fbf20844a54af064d0197957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a9d63921b9fb3f33063afada8830344df9eea63fbf20844a54af064d0197957->leave($__internal_4a9d63921b9fb3f33063afada8830344df9eea63fbf20844a54af064d0197957_prof);

        
        $__internal_53a049c90f8c37e6a7738d620aad5c8bd1901ea9332f4276d8afab823685e245->leave($__internal_53a049c90f8c37e6a7738d620aad5c8bd1901ea9332f4276d8afab823685e245_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e73253efe0a96fe543dcab7f16ba61094f6a1ca40a6332faed3e25baac5cbd57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73253efe0a96fe543dcab7f16ba61094f6a1ca40a6332faed3e25baac5cbd57->enter($__internal_e73253efe0a96fe543dcab7f16ba61094f6a1ca40a6332faed3e25baac5cbd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d333304cb283ddfc86dea3b0c6505d57665c244eaeb651e0f6404cb7fcecb56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d333304cb283ddfc86dea3b0c6505d57665c244eaeb651e0f6404cb7fcecb56e->enter($__internal_d333304cb283ddfc86dea3b0c6505d57665c244eaeb651e0f6404cb7fcecb56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d333304cb283ddfc86dea3b0c6505d57665c244eaeb651e0f6404cb7fcecb56e->leave($__internal_d333304cb283ddfc86dea3b0c6505d57665c244eaeb651e0f6404cb7fcecb56e_prof);

        
        $__internal_e73253efe0a96fe543dcab7f16ba61094f6a1ca40a6332faed3e25baac5cbd57->leave($__internal_e73253efe0a96fe543dcab7f16ba61094f6a1ca40a6332faed3e25baac5cbd57_prof);

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
