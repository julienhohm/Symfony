<?php

/* JHTourismeBundle:Tourisme:home.html.twig */
class __TwigTemplate_d0a3d577b63c33692a10a3457a1c08f2ee37d79bcc755e0b4356eb7db536ae86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "JHTourismeBundle:Tourisme:home.html.twig", 1);
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
        $__internal_29c2f8476034ec97b5fd57a562ade6d7eea17b58cc321898f78d2416b2d0c67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c2f8476034ec97b5fd57a562ade6d7eea17b58cc321898f78d2416b2d0c67b->enter($__internal_29c2f8476034ec97b5fd57a562ade6d7eea17b58cc321898f78d2416b2d0c67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c2f8476034ec97b5fd57a562ade6d7eea17b58cc321898f78d2416b2d0c67b->leave($__internal_29c2f8476034ec97b5fd57a562ade6d7eea17b58cc321898f78d2416b2d0c67b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_095a795f192931815e23e7d23db6612ec5d134da4fce57e5e275a24599558267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095a795f192931815e23e7d23db6612ec5d134da4fce57e5e275a24599558267->enter($__internal_095a795f192931815e23e7d23db6612ec5d134da4fce57e5e275a24599558267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_095a795f192931815e23e7d23db6612ec5d134da4fce57e5e275a24599558267->leave($__internal_095a795f192931815e23e7d23db6612ec5d134da4fce57e5e275a24599558267_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle:Tourisme:home.html.twig";
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
        return new Twig_Source("", "JHTourismeBundle:Tourisme:home.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/Tourisme/home.html.twig");
    }
}
