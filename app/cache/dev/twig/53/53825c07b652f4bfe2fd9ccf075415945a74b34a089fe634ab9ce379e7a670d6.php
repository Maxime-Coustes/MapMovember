<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4d2582d12d53fe2721dd85f23288d8241719432653ae06f5cb801483f3e133d4 extends Twig_Template
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
        $__internal_9ee0fc9fd58889c8813fc0af87bef9d878833eac02a0e09c9a6c346bf66ec995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee0fc9fd58889c8813fc0af87bef9d878833eac02a0e09c9a6c346bf66ec995->enter($__internal_9ee0fc9fd58889c8813fc0af87bef9d878833eac02a0e09c9a6c346bf66ec995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9ee0fc9fd58889c8813fc0af87bef9d878833eac02a0e09c9a6c346bf66ec995->leave($__internal_9ee0fc9fd58889c8813fc0af87bef9d878833eac02a0e09c9a6c346bf66ec995_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
