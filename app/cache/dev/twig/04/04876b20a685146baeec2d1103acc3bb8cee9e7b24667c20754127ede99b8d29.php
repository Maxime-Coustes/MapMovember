<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d7d52a4cf2a2a06186ce79572ee3a8c5982370e7249f3c561c4c620a83d19880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1e005f9594bb146d4764fd1987b2ae2e3c9ea2c2e5e527ed21e3c7da78d4e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e005f9594bb146d4764fd1987b2ae2e3c9ea2c2e5e527ed21e3c7da78d4e40->enter($__internal_a1e005f9594bb146d4764fd1987b2ae2e3c9ea2c2e5e527ed21e3c7da78d4e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a1e005f9594bb146d4764fd1987b2ae2e3c9ea2c2e5e527ed21e3c7da78d4e40->leave($__internal_a1e005f9594bb146d4764fd1987b2ae2e3c9ea2c2e5e527ed21e3c7da78d4e40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
