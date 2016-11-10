<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3005dcda492eb279516c5adf76c99031a0dbdd45154806f0f16b5b28a7296107 extends Twig_Template
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
        $__internal_4b826bbb00bec2e5decb838b960297737e0f67a18f9993ec06e2ec79f0dd9b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b826bbb00bec2e5decb838b960297737e0f67a18f9993ec06e2ec79f0dd9b4c->enter($__internal_4b826bbb00bec2e5decb838b960297737e0f67a18f9993ec06e2ec79f0dd9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4b826bbb00bec2e5decb838b960297737e0f67a18f9993ec06e2ec79f0dd9b4c->leave($__internal_4b826bbb00bec2e5decb838b960297737e0f67a18f9993ec06e2ec79f0dd9b4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
