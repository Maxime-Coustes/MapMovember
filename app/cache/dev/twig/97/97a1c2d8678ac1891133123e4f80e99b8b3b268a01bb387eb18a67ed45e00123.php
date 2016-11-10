<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_978e019150cae4dc8cc5a460aa332e4538e414be2485f9b82013e6b75a262c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f20d39cb5586f0712958041fceaa4ea8554a23f8730aab1517496dc9dae38f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20d39cb5586f0712958041fceaa4ea8554a23f8730aab1517496dc9dae38f10->enter($__internal_f20d39cb5586f0712958041fceaa4ea8554a23f8730aab1517496dc9dae38f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20d39cb5586f0712958041fceaa4ea8554a23f8730aab1517496dc9dae38f10->leave($__internal_f20d39cb5586f0712958041fceaa4ea8554a23f8730aab1517496dc9dae38f10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbf59dd521048803a032711e6bb17fc85fe3817309ba8d2e015ba0a091b40f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf59dd521048803a032711e6bb17fc85fe3817309ba8d2e015ba0a091b40f94->enter($__internal_bbf59dd521048803a032711e6bb17fc85fe3817309ba8d2e015ba0a091b40f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_bbf59dd521048803a032711e6bb17fc85fe3817309ba8d2e015ba0a091b40f94->leave($__internal_bbf59dd521048803a032711e6bb17fc85fe3817309ba8d2e015ba0a091b40f94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98cc060d66bb1cfce8ff5bb2199b571693054a8e02b30ccfb10596a52aea4818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cc060d66bb1cfce8ff5bb2199b571693054a8e02b30ccfb10596a52aea4818->enter($__internal_98cc060d66bb1cfce8ff5bb2199b571693054a8e02b30ccfb10596a52aea4818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98cc060d66bb1cfce8ff5bb2199b571693054a8e02b30ccfb10596a52aea4818->leave($__internal_98cc060d66bb1cfce8ff5bb2199b571693054a8e02b30ccfb10596a52aea4818_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_257f8d6b942fadf7fa9d5ef4b4b81ef7d582822056eff415afcfa39a0658fab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257f8d6b942fadf7fa9d5ef4b4b81ef7d582822056eff415afcfa39a0658fab5->enter($__internal_257f8d6b942fadf7fa9d5ef4b4b81ef7d582822056eff415afcfa39a0658fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_257f8d6b942fadf7fa9d5ef4b4b81ef7d582822056eff415afcfa39a0658fab5->leave($__internal_257f8d6b942fadf7fa9d5ef4b4b81ef7d582822056eff415afcfa39a0658fab5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
