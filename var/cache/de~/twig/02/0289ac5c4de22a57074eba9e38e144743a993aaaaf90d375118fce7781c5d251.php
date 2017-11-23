<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da3d9b132af2a40e907a65e172b4f955099b807077400b069492c335ce2f3d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb83b6d67152f1d1d91d546b8e9a43335826d76bc54a66a0da8a3c3059ad7a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb83b6d67152f1d1d91d546b8e9a43335826d76bc54a66a0da8a3c3059ad7a7a->enter($__internal_cb83b6d67152f1d1d91d546b8e9a43335826d76bc54a66a0da8a3c3059ad7a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_282ade84eea1a7604d482d9627c153e6678d9e8ea542c862da78d2b3871e0e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282ade84eea1a7604d482d9627c153e6678d9e8ea542c862da78d2b3871e0e20->enter($__internal_282ade84eea1a7604d482d9627c153e6678d9e8ea542c862da78d2b3871e0e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cb83b6d67152f1d1d91d546b8e9a43335826d76bc54a66a0da8a3c3059ad7a7a->leave($__internal_cb83b6d67152f1d1d91d546b8e9a43335826d76bc54a66a0da8a3c3059ad7a7a_prof);

        
        $__internal_282ade84eea1a7604d482d9627c153e6678d9e8ea542c862da78d2b3871e0e20->leave($__internal_282ade84eea1a7604d482d9627c153e6678d9e8ea542c862da78d2b3871e0e20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
