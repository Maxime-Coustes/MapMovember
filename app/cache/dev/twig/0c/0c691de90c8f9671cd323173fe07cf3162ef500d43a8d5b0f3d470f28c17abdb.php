<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_25d499ab940fd371f39724338d9c2ebd4f93ebf771835ab4bedfa981205391e7 extends Twig_Template
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
        $__internal_c7f75bb7eb38ac7c423fd9887f1a9f50a94c38a41b1d5299fe0f407fa60e106f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f75bb7eb38ac7c423fd9887f1a9f50a94c38a41b1d5299fe0f407fa60e106f->enter($__internal_c7f75bb7eb38ac7c423fd9887f1a9f50a94c38a41b1d5299fe0f407fa60e106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c7f75bb7eb38ac7c423fd9887f1a9f50a94c38a41b1d5299fe0f407fa60e106f->leave($__internal_c7f75bb7eb38ac7c423fd9887f1a9f50a94c38a41b1d5299fe0f407fa60e106f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
