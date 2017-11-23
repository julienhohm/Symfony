<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a91a3b4322fa2e54aa441d59497315d55bbdf3dda35f906aa3ab94fbb1781251 extends Twig_Template
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
        $__internal_aec311d0d81dd7f20ff9807fae39ec52ef7763711468028b2b4574308ed8b78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec311d0d81dd7f20ff9807fae39ec52ef7763711468028b2b4574308ed8b78f->enter($__internal_aec311d0d81dd7f20ff9807fae39ec52ef7763711468028b2b4574308ed8b78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_26210d1ea402394aca33258184bc167f5f62cfa0e1fe2072a87a1ff98c0e675a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26210d1ea402394aca33258184bc167f5f62cfa0e1fe2072a87a1ff98c0e675a->enter($__internal_26210d1ea402394aca33258184bc167f5f62cfa0e1fe2072a87a1ff98c0e675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_aec311d0d81dd7f20ff9807fae39ec52ef7763711468028b2b4574308ed8b78f->leave($__internal_aec311d0d81dd7f20ff9807fae39ec52ef7763711468028b2b4574308ed8b78f_prof);

        
        $__internal_26210d1ea402394aca33258184bc167f5f62cfa0e1fe2072a87a1ff98c0e675a->leave($__internal_26210d1ea402394aca33258184bc167f5f62cfa0e1fe2072a87a1ff98c0e675a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
