<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_558c438045ee82f5694f00a333010243eada38c1a46d581f2132d5bd0dcc2a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7351e65c0bce1ffd578e88d5993fe0ea552341f79ce14bb256a54bdacbd66a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7351e65c0bce1ffd578e88d5993fe0ea552341f79ce14bb256a54bdacbd66a5->enter($__internal_b7351e65c0bce1ffd578e88d5993fe0ea552341f79ce14bb256a54bdacbd66a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7351e65c0bce1ffd578e88d5993fe0ea552341f79ce14bb256a54bdacbd66a5->leave($__internal_b7351e65c0bce1ffd578e88d5993fe0ea552341f79ce14bb256a54bdacbd66a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a6f7c1fda78a34a4e6f1f131e421ec4b4f0fba875ac73a6f9baa1ce06986d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6f7c1fda78a34a4e6f1f131e421ec4b4f0fba875ac73a6f9baa1ce06986d62->enter($__internal_0a6f7c1fda78a34a4e6f1f131e421ec4b4f0fba875ac73a6f9baa1ce06986d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_0a6f7c1fda78a34a4e6f1f131e421ec4b4f0fba875ac73a6f9baa1ce06986d62->leave($__internal_0a6f7c1fda78a34a4e6f1f131e421ec4b4f0fba875ac73a6f9baa1ce06986d62_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3530a99a281116feaa20458cc2de3ee392bce7c04b33fb50edcebb44ea5cba24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3530a99a281116feaa20458cc2de3ee392bce7c04b33fb50edcebb44ea5cba24->enter($__internal_3530a99a281116feaa20458cc2de3ee392bce7c04b33fb50edcebb44ea5cba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3530a99a281116feaa20458cc2de3ee392bce7c04b33fb50edcebb44ea5cba24->leave($__internal_3530a99a281116feaa20458cc2de3ee392bce7c04b33fb50edcebb44ea5cba24_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
