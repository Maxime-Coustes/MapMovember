<?php

/* testMovemberBundle:testmovember:new.html.twig */
class __TwigTemplate_f9647415a31ad5d8f854eb7225353432e7a2a621830df9bf3f0e48651ce7e02e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testMovemberBundle:testmovember:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac321f8230ac490cbbc1fc511c1f5fd9f5d818498a4954b27002272942f39367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac321f8230ac490cbbc1fc511c1f5fd9f5d818498a4954b27002272942f39367->enter($__internal_ac321f8230ac490cbbc1fc511c1f5fd9f5d818498a4954b27002272942f39367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:testmovember:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac321f8230ac490cbbc1fc511c1f5fd9f5d818498a4954b27002272942f39367->leave($__internal_ac321f8230ac490cbbc1fc511c1f5fd9f5d818498a4954b27002272942f39367_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acbc48b8475d14233434e2aae80109f21005150382b01af6cbd074a5a67315f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbc48b8475d14233434e2aae80109f21005150382b01af6cbd074a5a67315f5->enter($__internal_acbc48b8475d14233434e2aae80109f21005150382b01af6cbd074a5a67315f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:new.html.twig"));

        // line 4
        echo "    <h1>Testmovember creation</h1>
";
        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testmovember_adresse");
        echo "\" method=\"post\">


        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("name" => "adresse")));
        echo "


        <input type=\"submit\" value=\"Create\" />

        ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </form>


    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testmovember_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    ";
        // line 25
        echo "
";
        
        $__internal_acbc48b8475d14233434e2aae80109f21005150382b01af6cbd074a5a67315f5->leave($__internal_acbc48b8475d14233434e2aae80109f21005150382b01af6cbd074a5a67315f5_prof);

    }

    public function getTemplateName()
    {
        return "testMovemberBundle:testmovember:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  71 => 21,  62 => 15,  54 => 10,  48 => 7,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Testmovember creation</h1>
{########################formmulaire###############################}
    {{ form_start(form) }}
    <form action=\"{{ path('testmovember_adresse') }}\" method=\"post\">


        {{ form_widget(form.adresse,  {'attr': {'name':'adresse'}}) }}


        <input type=\"submit\" value=\"Create\" />

        {{ form_end(form) }}
    </form>


    <ul>
        <li>
            <a href=\"{{ path('testmovember_index') }}\">Back to the list</a>
        </li>
    </ul>
    {######################## fin formmulaire###############################}

{% endblock %}
", "testMovemberBundle:testmovember:new.html.twig", "/var/www/html/testMovember/src/testMovemberBundle/Resources/views/testmovember/new.html.twig");
    }
}
