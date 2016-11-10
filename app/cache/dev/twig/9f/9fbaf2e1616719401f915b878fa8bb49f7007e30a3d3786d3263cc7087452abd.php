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
        $__internal_1f2c04bb20b6e853a32c7b8a944208ce7ec04b07e907bdfb5fcda3dd2d895d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2c04bb20b6e853a32c7b8a944208ce7ec04b07e907bdfb5fcda3dd2d895d8b->enter($__internal_1f2c04bb20b6e853a32c7b8a944208ce7ec04b07e907bdfb5fcda3dd2d895d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f2c04bb20b6e853a32c7b8a944208ce7ec04b07e907bdfb5fcda3dd2d895d8b->leave($__internal_1f2c04bb20b6e853a32c7b8a944208ce7ec04b07e907bdfb5fcda3dd2d895d8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0a345cbb8e057c5ec5d63b3a1ac71175bc3b24455e85253c3934da9016ef43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a345cbb8e057c5ec5d63b3a1ac71175bc3b24455e85253c3934da9016ef43b->enter($__internal_e0a345cbb8e057c5ec5d63b3a1ac71175bc3b24455e85253c3934da9016ef43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_e0a345cbb8e057c5ec5d63b3a1ac71175bc3b24455e85253c3934da9016ef43b->leave($__internal_e0a345cbb8e057c5ec5d63b3a1ac71175bc3b24455e85253c3934da9016ef43b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d72e5b5ef0484b76c544ebeb8855c8cddccb983bea27900c01cf5d009485487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d72e5b5ef0484b76c544ebeb8855c8cddccb983bea27900c01cf5d009485487->enter($__internal_1d72e5b5ef0484b76c544ebeb8855c8cddccb983bea27900c01cf5d009485487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_1d72e5b5ef0484b76c544ebeb8855c8cddccb983bea27900c01cf5d009485487->leave($__internal_1d72e5b5ef0484b76c544ebeb8855c8cddccb983bea27900c01cf5d009485487_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
