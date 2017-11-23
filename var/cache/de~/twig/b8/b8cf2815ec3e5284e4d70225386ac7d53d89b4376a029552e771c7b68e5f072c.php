<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b60c8463566e2be5e09097f3595b0f9e7e853d2c2ecd5693383cf26df9e43075 extends Twig_Template
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
        $__internal_e4425ebccf4ee4b756a14b92f7da18e52da4c7b11942a1d8cf10666330fcd76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4425ebccf4ee4b756a14b92f7da18e52da4c7b11942a1d8cf10666330fcd76e->enter($__internal_e4425ebccf4ee4b756a14b92f7da18e52da4c7b11942a1d8cf10666330fcd76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0e459647b79bdefadc128162660ae49431bc62cf3fad789733bfa128723300bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e459647b79bdefadc128162660ae49431bc62cf3fad789733bfa128723300bb->enter($__internal_0e459647b79bdefadc128162660ae49431bc62cf3fad789733bfa128723300bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e4425ebccf4ee4b756a14b92f7da18e52da4c7b11942a1d8cf10666330fcd76e->leave($__internal_e4425ebccf4ee4b756a14b92f7da18e52da4c7b11942a1d8cf10666330fcd76e_prof);

        
        $__internal_0e459647b79bdefadc128162660ae49431bc62cf3fad789733bfa128723300bb->leave($__internal_0e459647b79bdefadc128162660ae49431bc62cf3fad789733bfa128723300bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
