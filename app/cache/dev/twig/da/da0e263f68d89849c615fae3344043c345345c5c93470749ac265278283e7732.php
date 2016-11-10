<?php

/* testMovemberBundle:testmovember:edit.html.twig */
class __TwigTemplate_2946903ec17376ab682c89821bcf1fa920aa067aa5cb528a35d81a5a00e4476f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testMovemberBundle:testmovember:edit.html.twig", 1);
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
        $__internal_33207dc0b1a1c0be8e4d9efa4519ba254fe67e7f5c05b0959517ed1228825ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33207dc0b1a1c0be8e4d9efa4519ba254fe67e7f5c05b0959517ed1228825ea9->enter($__internal_33207dc0b1a1c0be8e4d9efa4519ba254fe67e7f5c05b0959517ed1228825ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:testmovember:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33207dc0b1a1c0be8e4d9efa4519ba254fe67e7f5c05b0959517ed1228825ea9->leave($__internal_33207dc0b1a1c0be8e4d9efa4519ba254fe67e7f5c05b0959517ed1228825ea9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aef4bb7ad0746502a85f3e1ca79d95bac667cc29d320c79ca17d27a9ee7b18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aef4bb7ad0746502a85f3e1ca79d95bac667cc29d320c79ca17d27a9ee7b18c->enter($__internal_6aef4bb7ad0746502a85f3e1ca79d95bac667cc29d320c79ca17d27a9ee7b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:edit.html.twig"));

        // line 4
        echo "    <h1>Testmovember edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testmovember_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6aef4bb7ad0746502a85f3e1ca79d95bac667cc29d320c79ca17d27a9ee7b18c->leave($__internal_6aef4bb7ad0746502a85f3e1ca79d95bac667cc29d320c79ca17d27a9ee7b18c_prof);

    }

    public function getTemplateName()
    {
        return "testMovemberBundle:testmovember:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Testmovember edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('testmovember_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "testMovemberBundle:testmovember:edit.html.twig", "/var/www/html/testMovember/src/testMovemberBundle/Resources/views/testmovember/edit.html.twig");
    }
}
