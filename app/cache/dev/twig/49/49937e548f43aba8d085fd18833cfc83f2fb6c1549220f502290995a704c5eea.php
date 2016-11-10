<?php

/* base.html.twig */
class __TwigTemplate_8880b15dc410115129ed6fc4a463b7bee919673c045c190d8333171eb78e07bf extends Twig_Template
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
        $__internal_c78739597e37134284e5eef7b0d668f98144aef59de73c42473895efd72177f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78739597e37134284e5eef7b0d668f98144aef59de73c42473895efd72177f8->enter($__internal_c78739597e37134284e5eef7b0d668f98144aef59de73c42473895efd72177f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c78739597e37134284e5eef7b0d668f98144aef59de73c42473895efd72177f8->leave($__internal_c78739597e37134284e5eef7b0d668f98144aef59de73c42473895efd72177f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb147540c3b40cdffc42991de071b46f5e9ae2f94dae88d7ea0fd657de29fbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb147540c3b40cdffc42991de071b46f5e9ae2f94dae88d7ea0fd657de29fbd3->enter($__internal_cb147540c3b40cdffc42991de071b46f5e9ae2f94dae88d7ea0fd657de29fbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_cb147540c3b40cdffc42991de071b46f5e9ae2f94dae88d7ea0fd657de29fbd3->leave($__internal_cb147540c3b40cdffc42991de071b46f5e9ae2f94dae88d7ea0fd657de29fbd3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02fb58e0d6b3f6e4d75ab01f6f2725077dd5e0112226c5a8ce6fed514449e665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fb58e0d6b3f6e4d75ab01f6f2725077dd5e0112226c5a8ce6fed514449e665->enter($__internal_02fb58e0d6b3f6e4d75ab01f6f2725077dd5e0112226c5a8ce6fed514449e665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_02fb58e0d6b3f6e4d75ab01f6f2725077dd5e0112226c5a8ce6fed514449e665->leave($__internal_02fb58e0d6b3f6e4d75ab01f6f2725077dd5e0112226c5a8ce6fed514449e665_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_02a1815b1a5303e5d55cbf47806f668d5997e3a905ad4395a886ea089145881f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a1815b1a5303e5d55cbf47806f668d5997e3a905ad4395a886ea089145881f->enter($__internal_02a1815b1a5303e5d55cbf47806f668d5997e3a905ad4395a886ea089145881f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_02a1815b1a5303e5d55cbf47806f668d5997e3a905ad4395a886ea089145881f->leave($__internal_02a1815b1a5303e5d55cbf47806f668d5997e3a905ad4395a886ea089145881f_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efe512405a4bd1678b8a00b241473923e7ced975b610ebb09f6a680113c16268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe512405a4bd1678b8a00b241473923e7ced975b610ebb09f6a680113c16268->enter($__internal_efe512405a4bd1678b8a00b241473923e7ced975b610ebb09f6a680113c16268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 15
        echo "
            <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_efe512405a4bd1678b8a00b241473923e7ced975b610ebb09f6a680113c16268->leave($__internal_efe512405a4bd1678b8a00b241473923e7ced975b610ebb09f6a680113c16268_prof);

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
