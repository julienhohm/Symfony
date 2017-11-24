<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5617e637abbc5907a44f7f726adec1dbeceeb0872bc5d3f5d4b0ac330afbcc53 extends Twig_Template
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
        $__internal_942cab09b613d98dd152c061ed582f713383b68436664492b1c1571250faf99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942cab09b613d98dd152c061ed582f713383b68436664492b1c1571250faf99e->enter($__internal_942cab09b613d98dd152c061ed582f713383b68436664492b1c1571250faf99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4921e88aa0a04cc8382c9e6ce52b3d54ba7ba6107cda1ef584179401f7732de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4921e88aa0a04cc8382c9e6ce52b3d54ba7ba6107cda1ef584179401f7732de0->enter($__internal_4921e88aa0a04cc8382c9e6ce52b3d54ba7ba6107cda1ef584179401f7732de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_942cab09b613d98dd152c061ed582f713383b68436664492b1c1571250faf99e->leave($__internal_942cab09b613d98dd152c061ed582f713383b68436664492b1c1571250faf99e_prof);

        
        $__internal_4921e88aa0a04cc8382c9e6ce52b3d54ba7ba6107cda1ef584179401f7732de0->leave($__internal_4921e88aa0a04cc8382c9e6ce52b3d54ba7ba6107cda1ef584179401f7732de0_prof);

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
