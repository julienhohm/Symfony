<?php

/* ::base.html.twig */
class __TwigTemplate_5805df0db325f5de6f620f4aa04b6fab6802e47b2fad44ada320d32fa2b4b629 extends Twig_Template
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
        $__internal_812baf3294f7c37a16a67e5bdbaa57356309c5f20c5d521abc7f0120963d09be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812baf3294f7c37a16a67e5bdbaa57356309c5f20c5d521abc7f0120963d09be->enter($__internal_812baf3294f7c37a16a67e5bdbaa57356309c5f20c5d521abc7f0120963d09be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_812baf3294f7c37a16a67e5bdbaa57356309c5f20c5d521abc7f0120963d09be->leave($__internal_812baf3294f7c37a16a67e5bdbaa57356309c5f20c5d521abc7f0120963d09be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_edb7f0347a2d68857298d813ff9dcbc4a5a13b5c14c9e9a71f72dadacd4c2c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb7f0347a2d68857298d813ff9dcbc4a5a13b5c14c9e9a71f72dadacd4c2c96->enter($__internal_edb7f0347a2d68857298d813ff9dcbc4a5a13b5c14c9e9a71f72dadacd4c2c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_edb7f0347a2d68857298d813ff9dcbc4a5a13b5c14c9e9a71f72dadacd4c2c96->leave($__internal_edb7f0347a2d68857298d813ff9dcbc4a5a13b5c14c9e9a71f72dadacd4c2c96_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92b161f4ba38ac5e59d5a17e389b50d5913a96072340ff0f6a37f513a62dd796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b161f4ba38ac5e59d5a17e389b50d5913a96072340ff0f6a37f513a62dd796->enter($__internal_92b161f4ba38ac5e59d5a17e389b50d5913a96072340ff0f6a37f513a62dd796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92b161f4ba38ac5e59d5a17e389b50d5913a96072340ff0f6a37f513a62dd796->leave($__internal_92b161f4ba38ac5e59d5a17e389b50d5913a96072340ff0f6a37f513a62dd796_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0e77835238bd085e17ad462f1b929d4ab5b8ff6790fae4526a0b58411d66eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e77835238bd085e17ad462f1b929d4ab5b8ff6790fae4526a0b58411d66eed->enter($__internal_a0e77835238bd085e17ad462f1b929d4ab5b8ff6790fae4526a0b58411d66eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a0e77835238bd085e17ad462f1b929d4ab5b8ff6790fae4526a0b58411d66eed->leave($__internal_a0e77835238bd085e17ad462f1b929d4ab5b8ff6790fae4526a0b58411d66eed_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb7b4362c43071f59f8f63f4acec3011de35202d654b68618bde65b7878f6753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7b4362c43071f59f8f63f4acec3011de35202d654b68618bde65b7878f6753->enter($__internal_bb7b4362c43071f59f8f63f4acec3011de35202d654b68618bde65b7878f6753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bb7b4362c43071f59f8f63f4acec3011de35202d654b68618bde65b7878f6753->leave($__internal_bb7b4362c43071f59f8f63f4acec3011de35202d654b68618bde65b7878f6753_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
