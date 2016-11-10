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
        $__internal_07eb51b015528218a151e1bc91ee1c8eb501bfb744fa307943598b277134dded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eb51b015528218a151e1bc91ee1c8eb501bfb744fa307943598b277134dded->enter($__internal_07eb51b015528218a151e1bc91ee1c8eb501bfb744fa307943598b277134dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_07eb51b015528218a151e1bc91ee1c8eb501bfb744fa307943598b277134dded->leave($__internal_07eb51b015528218a151e1bc91ee1c8eb501bfb744fa307943598b277134dded_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_613502e11eb4efda3236a75b96c7e79391c8458864f676e279343633fd5bb677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613502e11eb4efda3236a75b96c7e79391c8458864f676e279343633fd5bb677->enter($__internal_613502e11eb4efda3236a75b96c7e79391c8458864f676e279343633fd5bb677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_613502e11eb4efda3236a75b96c7e79391c8458864f676e279343633fd5bb677->leave($__internal_613502e11eb4efda3236a75b96c7e79391c8458864f676e279343633fd5bb677_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96357749c503cb03fe3ee4ef1347433c009e2ed46d71f1c62b4cc84ca5961e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96357749c503cb03fe3ee4ef1347433c009e2ed46d71f1c62b4cc84ca5961e7f->enter($__internal_96357749c503cb03fe3ee4ef1347433c009e2ed46d71f1c62b4cc84ca5961e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_96357749c503cb03fe3ee4ef1347433c009e2ed46d71f1c62b4cc84ca5961e7f->leave($__internal_96357749c503cb03fe3ee4ef1347433c009e2ed46d71f1c62b4cc84ca5961e7f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e76fa437c2358a83f17c1a9ff92b7f292e3c6a6b863be83863dc4b61c80d0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e76fa437c2358a83f17c1a9ff92b7f292e3c6a6b863be83863dc4b61c80d0cc->enter($__internal_3e76fa437c2358a83f17c1a9ff92b7f292e3c6a6b863be83863dc4b61c80d0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3e76fa437c2358a83f17c1a9ff92b7f292e3c6a6b863be83863dc4b61c80d0cc->leave($__internal_3e76fa437c2358a83f17c1a9ff92b7f292e3c6a6b863be83863dc4b61c80d0cc_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edeb98a2481034a99766dd1e416fcd87116040de18e2af2ab33801f0e8f14e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edeb98a2481034a99766dd1e416fcd87116040de18e2af2ab33801f0e8f14e39->enter($__internal_edeb98a2481034a99766dd1e416fcd87116040de18e2af2ab33801f0e8f14e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 15
        echo "
            <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_edeb98a2481034a99766dd1e416fcd87116040de18e2af2ab33801f0e8f14e39->leave($__internal_edeb98a2481034a99766dd1e416fcd87116040de18e2af2ab33801f0e8f14e39_prof);

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
", "base.html.twig", "/var/www/html/MapMovember/app/Resources/views/base.html.twig");
    }
}
