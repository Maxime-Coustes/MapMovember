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
        $__internal_c83f50f16fe5e49566d28509bbdbf4540955b99d572da8b3a8b7bd9e174386a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83f50f16fe5e49566d28509bbdbf4540955b99d572da8b3a8b7bd9e174386a7->enter($__internal_c83f50f16fe5e49566d28509bbdbf4540955b99d572da8b3a8b7bd9e174386a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c83f50f16fe5e49566d28509bbdbf4540955b99d572da8b3a8b7bd9e174386a7->leave($__internal_c83f50f16fe5e49566d28509bbdbf4540955b99d572da8b3a8b7bd9e174386a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_548d5389acc0b4b60242eecb56d79f9ca39ffc37d767a746665a38746deb8cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548d5389acc0b4b60242eecb56d79f9ca39ffc37d767a746665a38746deb8cf4->enter($__internal_548d5389acc0b4b60242eecb56d79f9ca39ffc37d767a746665a38746deb8cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_548d5389acc0b4b60242eecb56d79f9ca39ffc37d767a746665a38746deb8cf4->leave($__internal_548d5389acc0b4b60242eecb56d79f9ca39ffc37d767a746665a38746deb8cf4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aff51409ec8a0613c9088ef04f397fd61fdc9fb8c34b43f54be254dbc4155374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff51409ec8a0613c9088ef04f397fd61fdc9fb8c34b43f54be254dbc4155374->enter($__internal_aff51409ec8a0613c9088ef04f397fd61fdc9fb8c34b43f54be254dbc4155374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aff51409ec8a0613c9088ef04f397fd61fdc9fb8c34b43f54be254dbc4155374->leave($__internal_aff51409ec8a0613c9088ef04f397fd61fdc9fb8c34b43f54be254dbc4155374_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4c0fe3e2fab212c54ba39e48f78fbd02d2215fb31a0bde0214ce46271e93bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c0fe3e2fab212c54ba39e48f78fbd02d2215fb31a0bde0214ce46271e93bfe->enter($__internal_f4c0fe3e2fab212c54ba39e48f78fbd02d2215fb31a0bde0214ce46271e93bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4c0fe3e2fab212c54ba39e48f78fbd02d2215fb31a0bde0214ce46271e93bfe->leave($__internal_f4c0fe3e2fab212c54ba39e48f78fbd02d2215fb31a0bde0214ce46271e93bfe_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
