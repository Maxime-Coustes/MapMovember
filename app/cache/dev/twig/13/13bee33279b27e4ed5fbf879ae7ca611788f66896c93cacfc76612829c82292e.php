<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_485e3b3b0b13722129c8bfcd304e72e7392826c6b806a1750e91a710831a52ca extends Twig_Template
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
        $__internal_94b3e630072cf803a1fd1cbc01a12d4a00e6a991dcd7ab7b5b94a980a9833798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b3e630072cf803a1fd1cbc01a12d4a00e6a991dcd7ab7b5b94a980a9833798->enter($__internal_94b3e630072cf803a1fd1cbc01a12d4a00e6a991dcd7ab7b5b94a980a9833798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_94b3e630072cf803a1fd1cbc01a12d4a00e6a991dcd7ab7b5b94a980a9833798->leave($__internal_94b3e630072cf803a1fd1cbc01a12d4a00e6a991dcd7ab7b5b94a980a9833798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
