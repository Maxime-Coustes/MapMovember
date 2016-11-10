<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ced8ead91144f695e33b64dcf6cdd0022668c84d9a9943020bcd37f9dbd9dc76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5178846ad6bb42ccd729c241c816150d579c29f5eff9a81ebdb94057158a8b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5178846ad6bb42ccd729c241c816150d579c29f5eff9a81ebdb94057158a8b9a->enter($__internal_5178846ad6bb42ccd729c241c816150d579c29f5eff9a81ebdb94057158a8b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5178846ad6bb42ccd729c241c816150d579c29f5eff9a81ebdb94057158a8b9a->leave($__internal_5178846ad6bb42ccd729c241c816150d579c29f5eff9a81ebdb94057158a8b9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d397dc521f6d6d5266825225707672124dc58048a6769aed8fbe67c67f1e26ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d397dc521f6d6d5266825225707672124dc58048a6769aed8fbe67c67f1e26ff->enter($__internal_d397dc521f6d6d5266825225707672124dc58048a6769aed8fbe67c67f1e26ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d397dc521f6d6d5266825225707672124dc58048a6769aed8fbe67c67f1e26ff->leave($__internal_d397dc521f6d6d5266825225707672124dc58048a6769aed8fbe67c67f1e26ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fb41ef22cb1bb775d39420ade32cc35d0d8635c7378bc85fd0d3138210bc5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb41ef22cb1bb775d39420ade32cc35d0d8635c7378bc85fd0d3138210bc5f4->enter($__internal_4fb41ef22cb1bb775d39420ade32cc35d0d8635c7378bc85fd0d3138210bc5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4fb41ef22cb1bb775d39420ade32cc35d0d8635c7378bc85fd0d3138210bc5f4->leave($__internal_4fb41ef22cb1bb775d39420ade32cc35d0d8635c7378bc85fd0d3138210bc5f4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_29e29e0748f0c69018bb251e15fef19e34bef07a483df62f3ca8624e1ceb5d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e29e0748f0c69018bb251e15fef19e34bef07a483df62f3ca8624e1ceb5d7b->enter($__internal_29e29e0748f0c69018bb251e15fef19e34bef07a483df62f3ca8624e1ceb5d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_29e29e0748f0c69018bb251e15fef19e34bef07a483df62f3ca8624e1ceb5d7b->leave($__internal_29e29e0748f0c69018bb251e15fef19e34bef07a483df62f3ca8624e1ceb5d7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
