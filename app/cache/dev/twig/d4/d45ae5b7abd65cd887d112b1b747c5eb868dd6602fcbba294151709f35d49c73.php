<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8fe95165a3f8c7eb4d5a4d09c0de310f5766a71e0b8f6ec8a514f0f37451f5b8 extends Twig_Template
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
        $__internal_1d0f1b06eb6dda81d3c5b82c3e8bc66157d1f25dc0ceb4f8e32f4d19a7c89902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0f1b06eb6dda81d3c5b82c3e8bc66157d1f25dc0ceb4f8e32f4d19a7c89902->enter($__internal_1d0f1b06eb6dda81d3c5b82c3e8bc66157d1f25dc0ceb4f8e32f4d19a7c89902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d0f1b06eb6dda81d3c5b82c3e8bc66157d1f25dc0ceb4f8e32f4d19a7c89902->leave($__internal_1d0f1b06eb6dda81d3c5b82c3e8bc66157d1f25dc0ceb4f8e32f4d19a7c89902_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
