<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b30c823462b383e5de0b753849d8c65af2aa25ed045ea5966984cd8a8bdb5673 extends Twig_Template
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
        $__internal_7b6e599c92ff66708f178460b9f7ca66d624dfa1c1a2fae3f8dcf62f81c2636d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6e599c92ff66708f178460b9f7ca66d624dfa1c1a2fae3f8dcf62f81c2636d->enter($__internal_7b6e599c92ff66708f178460b9f7ca66d624dfa1c1a2fae3f8dcf62f81c2636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_8d6b0f7e3ee91a3148f42b2fe1ef4852290aa3d077627facfb7e7534f1584487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6b0f7e3ee91a3148f42b2fe1ef4852290aa3d077627facfb7e7534f1584487->enter($__internal_8d6b0f7e3ee91a3148f42b2fe1ef4852290aa3d077627facfb7e7534f1584487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7b6e599c92ff66708f178460b9f7ca66d624dfa1c1a2fae3f8dcf62f81c2636d->leave($__internal_7b6e599c92ff66708f178460b9f7ca66d624dfa1c1a2fae3f8dcf62f81c2636d_prof);

        
        $__internal_8d6b0f7e3ee91a3148f42b2fe1ef4852290aa3d077627facfb7e7534f1584487->leave($__internal_8d6b0f7e3ee91a3148f42b2fe1ef4852290aa3d077627facfb7e7534f1584487_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
