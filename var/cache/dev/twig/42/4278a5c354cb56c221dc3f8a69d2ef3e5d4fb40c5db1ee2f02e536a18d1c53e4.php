<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_537ef37a2eb9eafccfb354b6216474c15fcd3d198a402e0e61cce8de988eca86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537ef37a2eb9eafccfb354b6216474c15fcd3d198a402e0e61cce8de988eca86->enter($__internal_537ef37a2eb9eafccfb354b6216474c15fcd3d198a402e0e61cce8de988eca86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2fd615ac36fc56852f7812aedf94d718f3f9c173f92d7cb9fc1f7b0d75a20c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd615ac36fc56852f7812aedf94d718f3f9c173f92d7cb9fc1f7b0d75a20c93->enter($__internal_2fd615ac36fc56852f7812aedf94d718f3f9c173f92d7cb9fc1f7b0d75a20c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_537ef37a2eb9eafccfb354b6216474c15fcd3d198a402e0e61cce8de988eca86->leave($__internal_537ef37a2eb9eafccfb354b6216474c15fcd3d198a402e0e61cce8de988eca86_prof);

        
        $__internal_2fd615ac36fc56852f7812aedf94d718f3f9c173f92d7cb9fc1f7b0d75a20c93->leave($__internal_2fd615ac36fc56852f7812aedf94d718f3f9c173f92d7cb9fc1f7b0d75a20c93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bbfa2035d9aa9d738b79602723084543755be6d839dfb1c66f7915633635f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbfa2035d9aa9d738b79602723084543755be6d839dfb1c66f7915633635f06->enter($__internal_3bbfa2035d9aa9d738b79602723084543755be6d839dfb1c66f7915633635f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa60d79670cbaa507d43f82d118057ea4126026cfe7dff65f2053d1818775654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa60d79670cbaa507d43f82d118057ea4126026cfe7dff65f2053d1818775654->enter($__internal_aa60d79670cbaa507d43f82d118057ea4126026cfe7dff65f2053d1818775654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_aa60d79670cbaa507d43f82d118057ea4126026cfe7dff65f2053d1818775654->leave($__internal_aa60d79670cbaa507d43f82d118057ea4126026cfe7dff65f2053d1818775654_prof);

        
        $__internal_3bbfa2035d9aa9d738b79602723084543755be6d839dfb1c66f7915633635f06->leave($__internal_3bbfa2035d9aa9d738b79602723084543755be6d839dfb1c66f7915633635f06_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_445c890c11309011efabe2d3fe689af64867a76d4bb2fa9bbe196e8b8ff1eb3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445c890c11309011efabe2d3fe689af64867a76d4bb2fa9bbe196e8b8ff1eb3f->enter($__internal_445c890c11309011efabe2d3fe689af64867a76d4bb2fa9bbe196e8b8ff1eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a606b6c11ce2ccdb0789402683e673d295506dbf805d3379990aa955a410b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a606b6c11ce2ccdb0789402683e673d295506dbf805d3379990aa955a410b40->enter($__internal_3a606b6c11ce2ccdb0789402683e673d295506dbf805d3379990aa955a410b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3a606b6c11ce2ccdb0789402683e673d295506dbf805d3379990aa955a410b40->leave($__internal_3a606b6c11ce2ccdb0789402683e673d295506dbf805d3379990aa955a410b40_prof);

        
        $__internal_445c890c11309011efabe2d3fe689af64867a76d4bb2fa9bbe196e8b8ff1eb3f->leave($__internal_445c890c11309011efabe2d3fe689af64867a76d4bb2fa9bbe196e8b8ff1eb3f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae6c6672c32724ab136da22500cc1824da5288da8e9e8223957629b00f903ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6c6672c32724ab136da22500cc1824da5288da8e9e8223957629b00f903ad9->enter($__internal_ae6c6672c32724ab136da22500cc1824da5288da8e9e8223957629b00f903ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2acea1ab147f20e9802545d3c472b2975f795d1c2d647f7493cec5bbb4e6a4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acea1ab147f20e9802545d3c472b2975f795d1c2d647f7493cec5bbb4e6a4c9->enter($__internal_2acea1ab147f20e9802545d3c472b2975f795d1c2d647f7493cec5bbb4e6a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2acea1ab147f20e9802545d3c472b2975f795d1c2d647f7493cec5bbb4e6a4c9->leave($__internal_2acea1ab147f20e9802545d3c472b2975f795d1c2d647f7493cec5bbb4e6a4c9_prof);

        
        $__internal_ae6c6672c32724ab136da22500cc1824da5288da8e9e8223957629b00f903ad9->leave($__internal_ae6c6672c32724ab136da22500cc1824da5288da8e9e8223957629b00f903ad9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
