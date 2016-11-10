<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3ccf69cf6c062c6e9d39bcb919e158c300fba7c35cf596dc96094c47f48b5b01 extends Twig_Template
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
        $__internal_69e6f273e080e9ff8907d68c5133668974cc395c99007a7f9f20f7339d4e87fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e6f273e080e9ff8907d68c5133668974cc395c99007a7f9f20f7339d4e87fe->enter($__internal_69e6f273e080e9ff8907d68c5133668974cc395c99007a7f9f20f7339d4e87fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_69e6f273e080e9ff8907d68c5133668974cc395c99007a7f9f20f7339d4e87fe->leave($__internal_69e6f273e080e9ff8907d68c5133668974cc395c99007a7f9f20f7339d4e87fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
