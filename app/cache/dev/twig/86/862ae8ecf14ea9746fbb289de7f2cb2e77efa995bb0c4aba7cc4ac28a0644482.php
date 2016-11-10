<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc96c31ceabb208f16e1c608066aa2dc171d9f8311248bced21db28b35730ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382ce540babdbf6a66db366e69aac5dbe012bdd2421c7638836ce0bdacc0b545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382ce540babdbf6a66db366e69aac5dbe012bdd2421c7638836ce0bdacc0b545->enter($__internal_382ce540babdbf6a66db366e69aac5dbe012bdd2421c7638836ce0bdacc0b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382ce540babdbf6a66db366e69aac5dbe012bdd2421c7638836ce0bdacc0b545->leave($__internal_382ce540babdbf6a66db366e69aac5dbe012bdd2421c7638836ce0bdacc0b545_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d6e2acd50ea94e3e21ba6854d6c91d3700c8ccc2df958e95b01a69bad73e43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6e2acd50ea94e3e21ba6854d6c91d3700c8ccc2df958e95b01a69bad73e43c->enter($__internal_7d6e2acd50ea94e3e21ba6854d6c91d3700c8ccc2df958e95b01a69bad73e43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_7d6e2acd50ea94e3e21ba6854d6c91d3700c8ccc2df958e95b01a69bad73e43c->leave($__internal_7d6e2acd50ea94e3e21ba6854d6c91d3700c8ccc2df958e95b01a69bad73e43c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4ffe59b4ede1c746ffce302457be98fb7a39ceb19560fcf7478128a8e3df0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ffe59b4ede1c746ffce302457be98fb7a39ceb19560fcf7478128a8e3df0a7->enter($__internal_b4ffe59b4ede1c746ffce302457be98fb7a39ceb19560fcf7478128a8e3df0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4ffe59b4ede1c746ffce302457be98fb7a39ceb19560fcf7478128a8e3df0a7->leave($__internal_b4ffe59b4ede1c746ffce302457be98fb7a39ceb19560fcf7478128a8e3df0a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d03bf51b87358f0980a712d53bc553aa28c2582ae956c464ab6751a5c5ca041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d03bf51b87358f0980a712d53bc553aa28c2582ae956c464ab6751a5c5ca041->enter($__internal_8d03bf51b87358f0980a712d53bc553aa28c2582ae956c464ab6751a5c5ca041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d03bf51b87358f0980a712d53bc553aa28c2582ae956c464ab6751a5c5ca041->leave($__internal_8d03bf51b87358f0980a712d53bc553aa28c2582ae956c464ab6751a5c5ca041_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
