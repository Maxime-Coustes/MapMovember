<?php

/* testMovemberBundle:testmovember:new.html.twig */
class __TwigTemplate_6c7377627b9808fd315d1fd79bcba001a572eccce56aec406a2779c4a9ac6ba4 extends Twig_Template
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
        $__internal_b9df2f6386800570a67b24007ab614afe88d7148e564331cf270694b3ad917e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9df2f6386800570a67b24007ab614afe88d7148e564331cf270694b3ad917e9->enter($__internal_b9df2f6386800570a67b24007ab614afe88d7148e564331cf270694b3ad917e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:testmovember:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9df2f6386800570a67b24007ab614afe88d7148e564331cf270694b3ad917e9->leave($__internal_b9df2f6386800570a67b24007ab614afe88d7148e564331cf270694b3ad917e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5a7b5e31aeb28a964cac43b35887e599e3f43c82e2b91e75d961d07e5f8bf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a7b5e31aeb28a964cac43b35887e599e3f43c82e2b91e75d961d07e5f8bf67->enter($__internal_f5a7b5e31aeb28a964cac43b35887e599e3f43c82e2b91e75d961d07e5f8bf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:new.html.twig"));

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
        
        $__internal_f5a7b5e31aeb28a964cac43b35887e599e3f43c82e2b91e75d961d07e5f8bf67->leave($__internal_f5a7b5e31aeb28a964cac43b35887e599e3f43c82e2b91e75d961d07e5f8bf67_prof);

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
", "testMovemberBundle:testmovember:new.html.twig", "/var/www/html/MapMovember/src/testMovemberBundle/Resources/views/testmovember/new.html.twig");
    }
}
