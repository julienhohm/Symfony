<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_78c03d7aa14b8e33d83484233321ef3d7a8622dca05166fff8249a99f88ede44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb7acc0a47bd16979a9257f7bb7702f92fd80a6f146b128c2729df79cc7d18f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7acc0a47bd16979a9257f7bb7702f92fd80a6f146b128c2729df79cc7d18f6->enter($__internal_cb7acc0a47bd16979a9257f7bb7702f92fd80a6f146b128c2729df79cc7d18f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_bfbf52b90ce3dde9fc4ff2dfef0ac1e258ed7821da97acce5d25f2fcaeea2534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbf52b90ce3dde9fc4ff2dfef0ac1e258ed7821da97acce5d25f2fcaeea2534->enter($__internal_bfbf52b90ce3dde9fc4ff2dfef0ac1e258ed7821da97acce5d25f2fcaeea2534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_cb7acc0a47bd16979a9257f7bb7702f92fd80a6f146b128c2729df79cc7d18f6->leave($__internal_cb7acc0a47bd16979a9257f7bb7702f92fd80a6f146b128c2729df79cc7d18f6_prof);

        
        $__internal_bfbf52b90ce3dde9fc4ff2dfef0ac1e258ed7821da97acce5d25f2fcaeea2534->leave($__internal_bfbf52b90ce3dde9fc4ff2dfef0ac1e258ed7821da97acce5d25f2fcaeea2534_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a719c5f472300448dc579547f68184dfad95f961a931bdc3c444f4652ce5d51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a719c5f472300448dc579547f68184dfad95f961a931bdc3c444f4652ce5d51a->enter($__internal_a719c5f472300448dc579547f68184dfad95f961a931bdc3c444f4652ce5d51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_69107275bf30a9ef18c4cb8a2e1f37e76e16d3a42a5c09e5f8fa251c0a1a9553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69107275bf30a9ef18c4cb8a2e1f37e76e16d3a42a5c09e5f8fa251c0a1a9553->enter($__internal_69107275bf30a9ef18c4cb8a2e1f37e76e16d3a42a5c09e5f8fa251c0a1a9553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_69107275bf30a9ef18c4cb8a2e1f37e76e16d3a42a5c09e5f8fa251c0a1a9553->leave($__internal_69107275bf30a9ef18c4cb8a2e1f37e76e16d3a42a5c09e5f8fa251c0a1a9553_prof);

        
        $__internal_a719c5f472300448dc579547f68184dfad95f961a931bdc3c444f4652ce5d51a->leave($__internal_a719c5f472300448dc579547f68184dfad95f961a931bdc3c444f4652ce5d51a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_672edfcecee18277cb35c198e84032cc13e2608ebce78885a480cebe51835c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672edfcecee18277cb35c198e84032cc13e2608ebce78885a480cebe51835c54->enter($__internal_672edfcecee18277cb35c198e84032cc13e2608ebce78885a480cebe51835c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ee0994a59244130227e55606356b453cd1f7bac21a55a2ae605e71f3136b2400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0994a59244130227e55606356b453cd1f7bac21a55a2ae605e71f3136b2400->enter($__internal_ee0994a59244130227e55606356b453cd1f7bac21a55a2ae605e71f3136b2400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ee0994a59244130227e55606356b453cd1f7bac21a55a2ae605e71f3136b2400->leave($__internal_ee0994a59244130227e55606356b453cd1f7bac21a55a2ae605e71f3136b2400_prof);

        
        $__internal_672edfcecee18277cb35c198e84032cc13e2608ebce78885a480cebe51835c54->leave($__internal_672edfcecee18277cb35c198e84032cc13e2608ebce78885a480cebe51835c54_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b5225467bbd6b22203ebe648d3cf425c1fbba3b70c37500b788d08cd12c4b128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5225467bbd6b22203ebe648d3cf425c1fbba3b70c37500b788d08cd12c4b128->enter($__internal_b5225467bbd6b22203ebe648d3cf425c1fbba3b70c37500b788d08cd12c4b128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_caae53dd512ddde7f93e81828a0acbacab2066752ac091ad14ba8689bc428d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caae53dd512ddde7f93e81828a0acbacab2066752ac091ad14ba8689bc428d9c->enter($__internal_caae53dd512ddde7f93e81828a0acbacab2066752ac091ad14ba8689bc428d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_caae53dd512ddde7f93e81828a0acbacab2066752ac091ad14ba8689bc428d9c->leave($__internal_caae53dd512ddde7f93e81828a0acbacab2066752ac091ad14ba8689bc428d9c_prof);

        
        $__internal_b5225467bbd6b22203ebe648d3cf425c1fbba3b70c37500b788d08cd12c4b128->leave($__internal_b5225467bbd6b22203ebe648d3cf425c1fbba3b70c37500b788d08cd12c4b128_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_25f9c873938060e3006fb320190a1d15617e4e3efb649dbe47e349c1c0710c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f9c873938060e3006fb320190a1d15617e4e3efb649dbe47e349c1c0710c38->enter($__internal_25f9c873938060e3006fb320190a1d15617e4e3efb649dbe47e349c1c0710c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8b4b0ee0251a46b4509b89b8c1e64fe9a1bde871f05f4c3d9e949c68bfdb6f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4b0ee0251a46b4509b89b8c1e64fe9a1bde871f05f4c3d9e949c68bfdb6f5c->enter($__internal_8b4b0ee0251a46b4509b89b8c1e64fe9a1bde871f05f4c3d9e949c68bfdb6f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_8b4b0ee0251a46b4509b89b8c1e64fe9a1bde871f05f4c3d9e949c68bfdb6f5c->leave($__internal_8b4b0ee0251a46b4509b89b8c1e64fe9a1bde871f05f4c3d9e949c68bfdb6f5c_prof);

        
        $__internal_25f9c873938060e3006fb320190a1d15617e4e3efb649dbe47e349c1c0710c38->leave($__internal_25f9c873938060e3006fb320190a1d15617e4e3efb649dbe47e349c1c0710c38_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_eccd88aa01345b90b6b16cd5a7b5991194ec78657f42403d58cc7b6de4ed508e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccd88aa01345b90b6b16cd5a7b5991194ec78657f42403d58cc7b6de4ed508e->enter($__internal_eccd88aa01345b90b6b16cd5a7b5991194ec78657f42403d58cc7b6de4ed508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_46327b662a1ade425f3d6ed3cfd25e96d5e6dd3c1c5b45d650d00b1d8a41af5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46327b662a1ade425f3d6ed3cfd25e96d5e6dd3c1c5b45d650d00b1d8a41af5f->enter($__internal_46327b662a1ade425f3d6ed3cfd25e96d5e6dd3c1c5b45d650d00b1d8a41af5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_46327b662a1ade425f3d6ed3cfd25e96d5e6dd3c1c5b45d650d00b1d8a41af5f->leave($__internal_46327b662a1ade425f3d6ed3cfd25e96d5e6dd3c1c5b45d650d00b1d8a41af5f_prof);

        
        $__internal_eccd88aa01345b90b6b16cd5a7b5991194ec78657f42403d58cc7b6de4ed508e->leave($__internal_eccd88aa01345b90b6b16cd5a7b5991194ec78657f42403d58cc7b6de4ed508e_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_eacf8089b7d4fd1dd5c70ace236b0d3ffc6d1c50bf7a39a5ed5e3671e5d6fa99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eacf8089b7d4fd1dd5c70ace236b0d3ffc6d1c50bf7a39a5ed5e3671e5d6fa99->enter($__internal_eacf8089b7d4fd1dd5c70ace236b0d3ffc6d1c50bf7a39a5ed5e3671e5d6fa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ae96ce6827f5b9bfaecc01b41bf20b180036c71755306f2104e7a7308d4fce09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae96ce6827f5b9bfaecc01b41bf20b180036c71755306f2104e7a7308d4fce09->enter($__internal_ae96ce6827f5b9bfaecc01b41bf20b180036c71755306f2104e7a7308d4fce09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ae96ce6827f5b9bfaecc01b41bf20b180036c71755306f2104e7a7308d4fce09->leave($__internal_ae96ce6827f5b9bfaecc01b41bf20b180036c71755306f2104e7a7308d4fce09_prof);

        
        $__internal_eacf8089b7d4fd1dd5c70ace236b0d3ffc6d1c50bf7a39a5ed5e3671e5d6fa99->leave($__internal_eacf8089b7d4fd1dd5c70ace236b0d3ffc6d1c50bf7a39a5ed5e3671e5d6fa99_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_b3270780501fcfc965386b01754d457ec57283eab01356c1035986f81006cedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3270780501fcfc965386b01754d457ec57283eab01356c1035986f81006cedb->enter($__internal_b3270780501fcfc965386b01754d457ec57283eab01356c1035986f81006cedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_6e031e4977c1e3ce65b43f5986529a825a9208c8b6bcef5109aefd8308d09e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e031e4977c1e3ce65b43f5986529a825a9208c8b6bcef5109aefd8308d09e8a->enter($__internal_6e031e4977c1e3ce65b43f5986529a825a9208c8b6bcef5109aefd8308d09e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e031e4977c1e3ce65b43f5986529a825a9208c8b6bcef5109aefd8308d09e8a->leave($__internal_6e031e4977c1e3ce65b43f5986529a825a9208c8b6bcef5109aefd8308d09e8a_prof);

        
        $__internal_b3270780501fcfc965386b01754d457ec57283eab01356c1035986f81006cedb->leave($__internal_b3270780501fcfc965386b01754d457ec57283eab01356c1035986f81006cedb_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_87461a5c99f8e940339d0adabf79db1a60e06508b7a1948b4fe65c7590325a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87461a5c99f8e940339d0adabf79db1a60e06508b7a1948b4fe65c7590325a5c->enter($__internal_87461a5c99f8e940339d0adabf79db1a60e06508b7a1948b4fe65c7590325a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_74bacd1144818470410c24cfda64cf5b0d58a2d9be339c03175f7709e7a9d835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bacd1144818470410c24cfda64cf5b0d58a2d9be339c03175f7709e7a9d835->enter($__internal_74bacd1144818470410c24cfda64cf5b0d58a2d9be339c03175f7709e7a9d835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_74bacd1144818470410c24cfda64cf5b0d58a2d9be339c03175f7709e7a9d835->leave($__internal_74bacd1144818470410c24cfda64cf5b0d58a2d9be339c03175f7709e7a9d835_prof);

        
        $__internal_87461a5c99f8e940339d0adabf79db1a60e06508b7a1948b4fe65c7590325a5c->leave($__internal_87461a5c99f8e940339d0adabf79db1a60e06508b7a1948b4fe65c7590325a5c_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d20d19b6f1ab7c88fe63abd77aa938dbfdc15b54d130e1bd50b30fb88366beab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20d19b6f1ab7c88fe63abd77aa938dbfdc15b54d130e1bd50b30fb88366beab->enter($__internal_d20d19b6f1ab7c88fe63abd77aa938dbfdc15b54d130e1bd50b30fb88366beab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d98f59ffa7d629f91d87d657a0bd0b7ec4044869ee11a503da79d7c91eb22c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98f59ffa7d629f91d87d657a0bd0b7ec4044869ee11a503da79d7c91eb22c95->enter($__internal_d98f59ffa7d629f91d87d657a0bd0b7ec4044869ee11a503da79d7c91eb22c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d98f59ffa7d629f91d87d657a0bd0b7ec4044869ee11a503da79d7c91eb22c95->leave($__internal_d98f59ffa7d629f91d87d657a0bd0b7ec4044869ee11a503da79d7c91eb22c95_prof);

        
        $__internal_d20d19b6f1ab7c88fe63abd77aa938dbfdc15b54d130e1bd50b30fb88366beab->leave($__internal_d20d19b6f1ab7c88fe63abd77aa938dbfdc15b54d130e1bd50b30fb88366beab_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3dda54b31ae8bf877391665f7553c750eebc2f0e8909ea7224a46a26deec32c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dda54b31ae8bf877391665f7553c750eebc2f0e8909ea7224a46a26deec32c1->enter($__internal_3dda54b31ae8bf877391665f7553c750eebc2f0e8909ea7224a46a26deec32c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_88e71f9b9c8e450c9944a2bb26b87f4304200a879be27944eedf8cf25092f04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e71f9b9c8e450c9944a2bb26b87f4304200a879be27944eedf8cf25092f04e->enter($__internal_88e71f9b9c8e450c9944a2bb26b87f4304200a879be27944eedf8cf25092f04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_88e71f9b9c8e450c9944a2bb26b87f4304200a879be27944eedf8cf25092f04e->leave($__internal_88e71f9b9c8e450c9944a2bb26b87f4304200a879be27944eedf8cf25092f04e_prof);

        
        $__internal_3dda54b31ae8bf877391665f7553c750eebc2f0e8909ea7224a46a26deec32c1->leave($__internal_3dda54b31ae8bf877391665f7553c750eebc2f0e8909ea7224a46a26deec32c1_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
