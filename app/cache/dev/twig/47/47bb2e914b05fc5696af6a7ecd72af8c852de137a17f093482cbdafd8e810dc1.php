<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7ecbaa699cf141484740623b0b629d0cc03673e153610aecb9606163fb0a17d2 extends Twig_Template
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
        $__internal_aba538ed409b1013ea86b9ebf78eb7c8ece19baa7aeb4dc2e990841a4bdfbeca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba538ed409b1013ea86b9ebf78eb7c8ece19baa7aeb4dc2e990841a4bdfbeca->enter($__internal_aba538ed409b1013ea86b9ebf78eb7c8ece19baa7aeb4dc2e990841a4bdfbeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_aba538ed409b1013ea86b9ebf78eb7c8ece19baa7aeb4dc2e990841a4bdfbeca->leave($__internal_aba538ed409b1013ea86b9ebf78eb7c8ece19baa7aeb4dc2e990841a4bdfbeca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
