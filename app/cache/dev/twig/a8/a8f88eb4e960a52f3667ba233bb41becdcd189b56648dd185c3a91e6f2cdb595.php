<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d4d48325a6c2376b4d555714047a5e48ebb468f0d9e586f25ce4cbc10310882d extends Twig_Template
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
        $__internal_17c0a3db28b79a0d6fd2434dec7114f325882a2839fd74e26738b4d4c0de9e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c0a3db28b79a0d6fd2434dec7114f325882a2839fd74e26738b4d4c0de9e84->enter($__internal_17c0a3db28b79a0d6fd2434dec7114f325882a2839fd74e26738b4d4c0de9e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_17c0a3db28b79a0d6fd2434dec7114f325882a2839fd74e26738b4d4c0de9e84->leave($__internal_17c0a3db28b79a0d6fd2434dec7114f325882a2839fd74e26738b4d4c0de9e84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
