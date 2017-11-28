<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ac6ad2b41326e7ad55a65fdc86c8c0cdf710fd7b91ee1924a3a94d7919b42fb1 extends Twig_Template
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
        $__internal_ce39d32f9cca2a9eada4d7a3ffc5303afd052d384d06204d6437cea287b3e8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce39d32f9cca2a9eada4d7a3ffc5303afd052d384d06204d6437cea287b3e8b7->enter($__internal_ce39d32f9cca2a9eada4d7a3ffc5303afd052d384d06204d6437cea287b3e8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ce39d32f9cca2a9eada4d7a3ffc5303afd052d384d06204d6437cea287b3e8b7->leave($__internal_ce39d32f9cca2a9eada4d7a3ffc5303afd052d384d06204d6437cea287b3e8b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
