<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4978887af319973fc04cf88a0a410f3c3c7a26b174de8739764038b16233f9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae9a62f802c3f775e5aa6ab0d0648904fe51363b99e600a8644e413706c81e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9a62f802c3f775e5aa6ab0d0648904fe51363b99e600a8644e413706c81e0b->enter($__internal_ae9a62f802c3f775e5aa6ab0d0648904fe51363b99e600a8644e413706c81e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ae9a62f802c3f775e5aa6ab0d0648904fe51363b99e600a8644e413706c81e0b->leave($__internal_ae9a62f802c3f775e5aa6ab0d0648904fe51363b99e600a8644e413706c81e0b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_687f709f8f84c048663a672b1d944d222d5e591c6085571ccc471aa6d1d1e20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687f709f8f84c048663a672b1d944d222d5e591c6085571ccc471aa6d1d1e20f->enter($__internal_687f709f8f84c048663a672b1d944d222d5e591c6085571ccc471aa6d1d1e20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_687f709f8f84c048663a672b1d944d222d5e591c6085571ccc471aa6d1d1e20f->leave($__internal_687f709f8f84c048663a672b1d944d222d5e591c6085571ccc471aa6d1d1e20f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/MapMovember/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
