<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_1659eb24729b6f0624aec5f3fd2d4755364695bbebf6b1b805d6e59a29a28e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1659eb24729b6f0624aec5f3fd2d4755364695bbebf6b1b805d6e59a29a28e45->enter($__internal_1659eb24729b6f0624aec5f3fd2d4755364695bbebf6b1b805d6e59a29a28e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_883462ae92f588312a74efe86a3ec265f1d802030a6fad7694300741b5c34fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883462ae92f588312a74efe86a3ec265f1d802030a6fad7694300741b5c34fca->enter($__internal_883462ae92f588312a74efe86a3ec265f1d802030a6fad7694300741b5c34fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1659eb24729b6f0624aec5f3fd2d4755364695bbebf6b1b805d6e59a29a28e45->leave($__internal_1659eb24729b6f0624aec5f3fd2d4755364695bbebf6b1b805d6e59a29a28e45_prof);

        
        $__internal_883462ae92f588312a74efe86a3ec265f1d802030a6fad7694300741b5c34fca->leave($__internal_883462ae92f588312a74efe86a3ec265f1d802030a6fad7694300741b5c34fca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07298b56243749494c9d1916e9007f27f229be366ba838f3fffa5b5bf0321677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07298b56243749494c9d1916e9007f27f229be366ba838f3fffa5b5bf0321677->enter($__internal_07298b56243749494c9d1916e9007f27f229be366ba838f3fffa5b5bf0321677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c67f68e6e2e5c6d4496910a6fac701efd512a01e5a8c3c86ba470c8513899de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67f68e6e2e5c6d4496910a6fac701efd512a01e5a8c3c86ba470c8513899de3->enter($__internal_c67f68e6e2e5c6d4496910a6fac701efd512a01e5a8c3c86ba470c8513899de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c67f68e6e2e5c6d4496910a6fac701efd512a01e5a8c3c86ba470c8513899de3->leave($__internal_c67f68e6e2e5c6d4496910a6fac701efd512a01e5a8c3c86ba470c8513899de3_prof);

        
        $__internal_07298b56243749494c9d1916e9007f27f229be366ba838f3fffa5b5bf0321677->leave($__internal_07298b56243749494c9d1916e9007f27f229be366ba838f3fffa5b5bf0321677_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10e9b15d189eb8bb2832171405a445cf20b632c1bc3405ccc1606f86aa97e93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e9b15d189eb8bb2832171405a445cf20b632c1bc3405ccc1606f86aa97e93a->enter($__internal_10e9b15d189eb8bb2832171405a445cf20b632c1bc3405ccc1606f86aa97e93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b40c9ecd8e610d06f0e433bab302b9e03715531aba9bfb57fce7aa560a4074a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b40c9ecd8e610d06f0e433bab302b9e03715531aba9bfb57fce7aa560a4074a->enter($__internal_0b40c9ecd8e610d06f0e433bab302b9e03715531aba9bfb57fce7aa560a4074a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b40c9ecd8e610d06f0e433bab302b9e03715531aba9bfb57fce7aa560a4074a->leave($__internal_0b40c9ecd8e610d06f0e433bab302b9e03715531aba9bfb57fce7aa560a4074a_prof);

        
        $__internal_10e9b15d189eb8bb2832171405a445cf20b632c1bc3405ccc1606f86aa97e93a->leave($__internal_10e9b15d189eb8bb2832171405a445cf20b632c1bc3405ccc1606f86aa97e93a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_435ebc5c38fd454897b41cddee647c4511a18a778dccc45a4e83248d4590405a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435ebc5c38fd454897b41cddee647c4511a18a778dccc45a4e83248d4590405a->enter($__internal_435ebc5c38fd454897b41cddee647c4511a18a778dccc45a4e83248d4590405a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fa5dbe2f9ead82ad9d98292679bd8081843253cba98982a16479614e636c341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa5dbe2f9ead82ad9d98292679bd8081843253cba98982a16479614e636c341->enter($__internal_9fa5dbe2f9ead82ad9d98292679bd8081843253cba98982a16479614e636c341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9fa5dbe2f9ead82ad9d98292679bd8081843253cba98982a16479614e636c341->leave($__internal_9fa5dbe2f9ead82ad9d98292679bd8081843253cba98982a16479614e636c341_prof);

        
        $__internal_435ebc5c38fd454897b41cddee647c4511a18a778dccc45a4e83248d4590405a->leave($__internal_435ebc5c38fd454897b41cddee647c4511a18a778dccc45a4e83248d4590405a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbaafeacb41e55c4f58f8bbb2ad93fe64e8ded268200fb1f27d50cabc2ba1958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaafeacb41e55c4f58f8bbb2ad93fe64e8ded268200fb1f27d50cabc2ba1958->enter($__internal_fbaafeacb41e55c4f58f8bbb2ad93fe64e8ded268200fb1f27d50cabc2ba1958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3acb3c5aeb83b2d519044fa52002be9bf5ea167ce10172773c503ddf485855eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acb3c5aeb83b2d519044fa52002be9bf5ea167ce10172773c503ddf485855eb->enter($__internal_3acb3c5aeb83b2d519044fa52002be9bf5ea167ce10172773c503ddf485855eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3acb3c5aeb83b2d519044fa52002be9bf5ea167ce10172773c503ddf485855eb->leave($__internal_3acb3c5aeb83b2d519044fa52002be9bf5ea167ce10172773c503ddf485855eb_prof);

        
        $__internal_fbaafeacb41e55c4f58f8bbb2ad93fe64e8ded268200fb1f27d50cabc2ba1958->leave($__internal_fbaafeacb41e55c4f58f8bbb2ad93fe64e8ded268200fb1f27d50cabc2ba1958_prof);

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
