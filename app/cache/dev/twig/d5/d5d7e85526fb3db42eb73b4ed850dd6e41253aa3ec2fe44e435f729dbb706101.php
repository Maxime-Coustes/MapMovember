<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bc8fe0818902e96881cf8e07810c5711f748eb7a4d3d632307fbc8a589baa91e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6bc32af6a69f031d27d6abcd255b7f703438fd45136d90ee47cddaa2e0ce1053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc32af6a69f031d27d6abcd255b7f703438fd45136d90ee47cddaa2e0ce1053->enter($__internal_6bc32af6a69f031d27d6abcd255b7f703438fd45136d90ee47cddaa2e0ce1053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc32af6a69f031d27d6abcd255b7f703438fd45136d90ee47cddaa2e0ce1053->leave($__internal_6bc32af6a69f031d27d6abcd255b7f703438fd45136d90ee47cddaa2e0ce1053_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bbed5a12f12dd72f3a88814f5aac09fb3a82c19f7c801c2cc5bc1f2e337ce32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbed5a12f12dd72f3a88814f5aac09fb3a82c19f7c801c2cc5bc1f2e337ce32->enter($__internal_8bbed5a12f12dd72f3a88814f5aac09fb3a82c19f7c801c2cc5bc1f2e337ce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8bbed5a12f12dd72f3a88814f5aac09fb3a82c19f7c801c2cc5bc1f2e337ce32->leave($__internal_8bbed5a12f12dd72f3a88814f5aac09fb3a82c19f7c801c2cc5bc1f2e337ce32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_42070d7426980af87ff1bcedc2c1dc1872d6a2068c7a0da4616eaddea886071b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42070d7426980af87ff1bcedc2c1dc1872d6a2068c7a0da4616eaddea886071b->enter($__internal_42070d7426980af87ff1bcedc2c1dc1872d6a2068c7a0da4616eaddea886071b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_42070d7426980af87ff1bcedc2c1dc1872d6a2068c7a0da4616eaddea886071b->leave($__internal_42070d7426980af87ff1bcedc2c1dc1872d6a2068c7a0da4616eaddea886071b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f29a4b33416288f85e53b953affeaee1294115aac46085049904dec2275a5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f29a4b33416288f85e53b953affeaee1294115aac46085049904dec2275a5fd->enter($__internal_9f29a4b33416288f85e53b953affeaee1294115aac46085049904dec2275a5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9f29a4b33416288f85e53b953affeaee1294115aac46085049904dec2275a5fd->leave($__internal_9f29a4b33416288f85e53b953affeaee1294115aac46085049904dec2275a5fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
