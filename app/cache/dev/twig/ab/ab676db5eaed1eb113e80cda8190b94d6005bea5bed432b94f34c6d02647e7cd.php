<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_64eaf26e3aff30578dd60541006f25e7d88cfa18f197f023be3c826c4ae24adf extends Twig_Template
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
        $__internal_76bfc3e1544bf30f2d7b3bf0183e0b73012b479bf720aeea6c951db1a68030e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bfc3e1544bf30f2d7b3bf0183e0b73012b479bf720aeea6c951db1a68030e9->enter($__internal_76bfc3e1544bf30f2d7b3bf0183e0b73012b479bf720aeea6c951db1a68030e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_76bfc3e1544bf30f2d7b3bf0183e0b73012b479bf720aeea6c951db1a68030e9->leave($__internal_76bfc3e1544bf30f2d7b3bf0183e0b73012b479bf720aeea6c951db1a68030e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
