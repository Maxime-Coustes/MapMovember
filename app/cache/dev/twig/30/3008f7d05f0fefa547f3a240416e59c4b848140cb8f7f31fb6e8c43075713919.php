<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_830eb149529d6ae70f823a0953c45dd0b8c165bc80c610063ae09e18f838f840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_83ef4065b0c25bcfcc2f0115eb2aaada0f888ec85771be13aae4b205c7ec5d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ef4065b0c25bcfcc2f0115eb2aaada0f888ec85771be13aae4b205c7ec5d15->enter($__internal_83ef4065b0c25bcfcc2f0115eb2aaada0f888ec85771be13aae4b205c7ec5d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83ef4065b0c25bcfcc2f0115eb2aaada0f888ec85771be13aae4b205c7ec5d15->leave($__internal_83ef4065b0c25bcfcc2f0115eb2aaada0f888ec85771be13aae4b205c7ec5d15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8241c839abe79bf108124a8f89ea492c6fbc143fb4a7d4dbfa53f8bc94681950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8241c839abe79bf108124a8f89ea492c6fbc143fb4a7d4dbfa53f8bc94681950->enter($__internal_8241c839abe79bf108124a8f89ea492c6fbc143fb4a7d4dbfa53f8bc94681950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8241c839abe79bf108124a8f89ea492c6fbc143fb4a7d4dbfa53f8bc94681950->leave($__internal_8241c839abe79bf108124a8f89ea492c6fbc143fb4a7d4dbfa53f8bc94681950_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f3145ece4ec8f645ce154243ce0cdc81f562a5f4bc21664dda0956bfb2eb1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3145ece4ec8f645ce154243ce0cdc81f562a5f4bc21664dda0956bfb2eb1c1->enter($__internal_4f3145ece4ec8f645ce154243ce0cdc81f562a5f4bc21664dda0956bfb2eb1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4f3145ece4ec8f645ce154243ce0cdc81f562a5f4bc21664dda0956bfb2eb1c1->leave($__internal_4f3145ece4ec8f645ce154243ce0cdc81f562a5f4bc21664dda0956bfb2eb1c1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d978b14f20cf7d3037ba908b8db3c28574b17f5a0111574f95f512bc7b3ca57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d978b14f20cf7d3037ba908b8db3c28574b17f5a0111574f95f512bc7b3ca57->enter($__internal_2d978b14f20cf7d3037ba908b8db3c28574b17f5a0111574f95f512bc7b3ca57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2d978b14f20cf7d3037ba908b8db3c28574b17f5a0111574f95f512bc7b3ca57->leave($__internal_2d978b14f20cf7d3037ba908b8db3c28574b17f5a0111574f95f512bc7b3ca57_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
