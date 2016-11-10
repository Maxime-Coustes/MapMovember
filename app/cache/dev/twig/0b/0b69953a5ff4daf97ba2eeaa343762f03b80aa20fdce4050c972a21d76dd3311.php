<?php

/* base.html.twig */
class __TwigTemplate_db600c9cfe3a29995c1262c612d9146a05a7f40d4dfb35111b1e3d31cb3d932e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e18bc4426071823d8f4f64be8aed01b6a01402bb31e9dffd22420e95ca308d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e18bc4426071823d8f4f64be8aed01b6a01402bb31e9dffd22420e95ca308d8->enter($__internal_9e18bc4426071823d8f4f64be8aed01b6a01402bb31e9dffd22420e95ca308d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">


    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_9e18bc4426071823d8f4f64be8aed01b6a01402bb31e9dffd22420e95ca308d8->leave($__internal_9e18bc4426071823d8f4f64be8aed01b6a01402bb31e9dffd22420e95ca308d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_795c9a5f2608ca169a82904780e64522322a4bb8e0ee2a01ac5bb3c258a9e83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795c9a5f2608ca169a82904780e64522322a4bb8e0ee2a01ac5bb3c258a9e83b->enter($__internal_795c9a5f2608ca169a82904780e64522322a4bb8e0ee2a01ac5bb3c258a9e83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_795c9a5f2608ca169a82904780e64522322a4bb8e0ee2a01ac5bb3c258a9e83b->leave($__internal_795c9a5f2608ca169a82904780e64522322a4bb8e0ee2a01ac5bb3c258a9e83b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98db705d139e0a94e982e907da80430c8a254a0c1aec29b14ff55ed85c5faac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98db705d139e0a94e982e907da80430c8a254a0c1aec29b14ff55ed85c5faac1->enter($__internal_98db705d139e0a94e982e907da80430c8a254a0c1aec29b14ff55ed85c5faac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_98db705d139e0a94e982e907da80430c8a254a0c1aec29b14ff55ed85c5faac1->leave($__internal_98db705d139e0a94e982e907da80430c8a254a0c1aec29b14ff55ed85c5faac1_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_2462ac217b62cda6abc84cd0b95f530fdc2c0229a1d641ff5f628683ba3c567c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2462ac217b62cda6abc84cd0b95f530fdc2c0229a1d641ff5f628683ba3c567c->enter($__internal_2462ac217b62cda6abc84cd0b95f530fdc2c0229a1d641ff5f628683ba3c567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_2462ac217b62cda6abc84cd0b95f530fdc2c0229a1d641ff5f628683ba3c567c->leave($__internal_2462ac217b62cda6abc84cd0b95f530fdc2c0229a1d641ff5f628683ba3c567c_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8919bebf0b8e1e374c134348c3d84b6d997feafc446160c546deb850cc08bfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8919bebf0b8e1e374c134348c3d84b6d997feafc446160c546deb850cc08bfb7->enter($__internal_8919bebf0b8e1e374c134348c3d84b6d997feafc446160c546deb850cc08bfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 15
        echo "
            <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_8919bebf0b8e1e374c134348c3d84b6d997feafc446160c546deb850cc08bfb7->leave($__internal_8919bebf0b8e1e374c134348c3d84b6d997feafc446160c546deb850cc08bfb7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 15,  96 => 14,  85 => 13,  74 => 6,  62 => 5,  53 => 20,  50 => 14,  48 => 13,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">


    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}

            <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/testMovember/app/Resources/views/base.html.twig");
    }
}
