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
        $__internal_f713cae70fc7646592f50e97794527b694a63d4e1692f1d40374987fc13c6ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f713cae70fc7646592f50e97794527b694a63d4e1692f1d40374987fc13c6ec3->enter($__internal_f713cae70fc7646592f50e97794527b694a63d4e1692f1d40374987fc13c6ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f713cae70fc7646592f50e97794527b694a63d4e1692f1d40374987fc13c6ec3->leave($__internal_f713cae70fc7646592f50e97794527b694a63d4e1692f1d40374987fc13c6ec3_prof);

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
", "@Framework/Form/form_enctype.html.php", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
