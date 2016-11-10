<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f6d635a170483df986e22c047d95f3e7e4bfb0806944e4199b80ba526be00e43 extends Twig_Template
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
        $__internal_757786ff7716c35bfc210b7aa3d192878a5d3552a54fdddf19bf1defc48127c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757786ff7716c35bfc210b7aa3d192878a5d3552a54fdddf19bf1defc48127c5->enter($__internal_757786ff7716c35bfc210b7aa3d192878a5d3552a54fdddf19bf1defc48127c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_757786ff7716c35bfc210b7aa3d192878a5d3552a54fdddf19bf1defc48127c5->leave($__internal_757786ff7716c35bfc210b7aa3d192878a5d3552a54fdddf19bf1defc48127c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
