<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_908e632314bd98e88933af47acc11842162e050af58df1d1a9ac4f5eb98c8700 extends Twig_Template
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
        $__internal_d604b77b1955df9b47f6a1d84f8f02ec873d97d4de1412ddd906c748aa78effa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d604b77b1955df9b47f6a1d84f8f02ec873d97d4de1412ddd906c748aa78effa->enter($__internal_d604b77b1955df9b47f6a1d84f8f02ec873d97d4de1412ddd906c748aa78effa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d604b77b1955df9b47f6a1d84f8f02ec873d97d4de1412ddd906c748aa78effa->leave($__internal_d604b77b1955df9b47f6a1d84f8f02ec873d97d4de1412ddd906c748aa78effa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
