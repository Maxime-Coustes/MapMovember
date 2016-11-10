<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4f247dd0d87eb58aa4e822f3e8a44ed877a58a49a4e0a6496e80c5db684c7695 extends Twig_Template
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
        $__internal_fa87c34ed2aeea215eab9d89e1e27be1b5db2a2d5d0ddad2ab5fd5728babe7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa87c34ed2aeea215eab9d89e1e27be1b5db2a2d5d0ddad2ab5fd5728babe7c3->enter($__internal_fa87c34ed2aeea215eab9d89e1e27be1b5db2a2d5d0ddad2ab5fd5728babe7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fa87c34ed2aeea215eab9d89e1e27be1b5db2a2d5d0ddad2ab5fd5728babe7c3->leave($__internal_fa87c34ed2aeea215eab9d89e1e27be1b5db2a2d5d0ddad2ab5fd5728babe7c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
