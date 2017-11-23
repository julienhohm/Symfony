<?php

/* @JHTourisme/Tourisme/home.html.twig */
class __TwigTemplate_afa4a251b85e7f00e6a23a16afa720e3bf7b77464b84f763bfc35ad5c6253ac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "@JHTourisme/Tourisme/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JHTourismeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84e4b83810d15078f5f6fc22b27571db8854016159be9c26e7ec0d1c4582f8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e4b83810d15078f5f6fc22b27571db8854016159be9c26e7ec0d1c4582f8f1->enter($__internal_84e4b83810d15078f5f6fc22b27571db8854016159be9c26e7ec0d1c4582f8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/Tourisme/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e4b83810d15078f5f6fc22b27571db8854016159be9c26e7ec0d1c4582f8f1->leave($__internal_84e4b83810d15078f5f6fc22b27571db8854016159be9c26e7ec0d1c4582f8f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5bcfaf92b41d4b6a0a41286674c5d65fa01b08a845eaf8f5e6d9faaa1d4a41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bcfaf92b41d4b6a0a41286674c5d65fa01b08a845eaf8f5e6d9faaa1d4a41e->enter($__internal_d5bcfaf92b41d4b6a0a41286674c5d65fa01b08a845eaf8f5e6d9faaa1d4a41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"section\">
\t\t<div class=\"container has-text-centered\">
\t\t\t<div class=\"columns is-multiline\">
\t\t\t\t<div class=\"column is-12\">
\t\t\t\t\t<h1 class=\"title\">Mon titre</h1>
\t\t\t\t\t<h2 class=\"subtitle\">Mon soustitre</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
\t\t\t\t\t<div class=\"columns is-vcentered\">
\t\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t\t<div id=\"map\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores iure eveniet saepe quidem officia illum quos, explicabo atque sint.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa blanditiis cum ipsam voluptatem repellat, hic maxime nemo dolorum consequatur inventore!
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa blanditiis cum ipsam voluptatem repellat, hic maxime nemo dolorum consequatur inventore!
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>
\t</section>
";
        
        $__internal_d5bcfaf92b41d4b6a0a41286674c5d65fa01b08a845eaf8f5e6d9faaa1d4a41e->leave($__internal_d5bcfaf92b41d4b6a0a41286674c5d65fa01b08a845eaf8f5e6d9faaa1d4a41e_prof);

    }

    public function getTemplateName()
    {
        return "@JHTourisme/Tourisme/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JHTourisme/Tourisme/home.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\Tourisme\\home.html.twig");
    }
}
