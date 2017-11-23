<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bc2ba740510748bea3a6202e82bc5395c7a8eeb64fd11c17b8056e58c36b6209 extends Twig_Template
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
        $__internal_af71cc0733b81660ede0efdc70e4c45891e3f6c156a0a41acc822e41eb0ea73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af71cc0733b81660ede0efdc70e4c45891e3f6c156a0a41acc822e41eb0ea73a->enter($__internal_af71cc0733b81660ede0efdc70e4c45891e3f6c156a0a41acc822e41eb0ea73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_af71cc0733b81660ede0efdc70e4c45891e3f6c156a0a41acc822e41eb0ea73a->leave($__internal_af71cc0733b81660ede0efdc70e4c45891e3f6c156a0a41acc822e41eb0ea73a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
