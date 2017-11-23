<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2c6051287dec7240518ff24fd973bb0bbe6429f52ab90508fb4aa3532856899 extends Twig_Template
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
        $__internal_0820e508cd38a17d4ab60f7443f0affdf6cbabbc3e3d68f150b1f342f5349b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0820e508cd38a17d4ab60f7443f0affdf6cbabbc3e3d68f150b1f342f5349b7d->enter($__internal_0820e508cd38a17d4ab60f7443f0affdf6cbabbc3e3d68f150b1f342f5349b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5162911863203deb0d0e8b72361c2e4384c62ac46e04d04a5269fb721f61c720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5162911863203deb0d0e8b72361c2e4384c62ac46e04d04a5269fb721f61c720->enter($__internal_5162911863203deb0d0e8b72361c2e4384c62ac46e04d04a5269fb721f61c720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0820e508cd38a17d4ab60f7443f0affdf6cbabbc3e3d68f150b1f342f5349b7d->leave($__internal_0820e508cd38a17d4ab60f7443f0affdf6cbabbc3e3d68f150b1f342f5349b7d_prof);

        
        $__internal_5162911863203deb0d0e8b72361c2e4384c62ac46e04d04a5269fb721f61c720->leave($__internal_5162911863203deb0d0e8b72361c2e4384c62ac46e04d04a5269fb721f61c720_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
