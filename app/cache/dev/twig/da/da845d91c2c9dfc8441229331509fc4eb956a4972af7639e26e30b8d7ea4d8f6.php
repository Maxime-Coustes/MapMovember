<?php

/* testMovemberBundle:testmovember:show.html.twig */
class __TwigTemplate_89a3f807be0841db94eea37efb8f696adecfe77e49c3ad0b2b2345ded6dc6f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testMovemberBundle:testmovember:show.html.twig", 1);
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
        $__internal_3f6c094554eb1d6e5c05bb5d16c397f5dddbb0edfbb7b257a7f101bde844f749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6c094554eb1d6e5c05bb5d16c397f5dddbb0edfbb7b257a7f101bde844f749->enter($__internal_3f6c094554eb1d6e5c05bb5d16c397f5dddbb0edfbb7b257a7f101bde844f749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:testmovember:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f6c094554eb1d6e5c05bb5d16c397f5dddbb0edfbb7b257a7f101bde844f749->leave($__internal_3f6c094554eb1d6e5c05bb5d16c397f5dddbb0edfbb7b257a7f101bde844f749_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53b58e2dc584fb2d5befcb68a168014321a8e742d7197be5eb812d1e3ada0a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b58e2dc584fb2d5befcb68a168014321a8e742d7197be5eb812d1e3ada0a97->enter($__internal_53b58e2dc584fb2d5befcb68a168014321a8e742d7197be5eb812d1e3ada0a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:show.html.twig"));

        // line 4
        echo "    <h1>Testmovember</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testMovember"]) ? $context["testMovember"] : $this->getContext($context, "testMovember")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testMovember"]) ? $context["testMovember"] : $this->getContext($context, "testMovember")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testmovember_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("testmovember_edit", array("id" => $this->getAttribute((isset($context["testMovember"]) ? $context["testMovember"] : $this->getContext($context, "testMovember")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_53b58e2dc584fb2d5befcb68a168014321a8e742d7197be5eb812d1e3ada0a97->leave($__internal_53b58e2dc584fb2d5befcb68a168014321a8e742d7197be5eb812d1e3ada0a97_prof);

    }

    public function getTemplateName()
    {
        return "testMovemberBundle:testmovember:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Testmovember</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ testMovember.id }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ testMovember.adresse }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('testmovember_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('testmovember_edit', { 'id': testMovember.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "testMovemberBundle:testmovember:show.html.twig", "/var/www/html/testMovember/src/testMovemberBundle/Resources/views/testmovember/show.html.twig");
    }
}
