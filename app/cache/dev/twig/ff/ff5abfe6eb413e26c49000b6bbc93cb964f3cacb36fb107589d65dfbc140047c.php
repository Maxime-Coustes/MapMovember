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
        $__internal_552a2dbe721ab2729ecee6d43b6ed67d8c8f4cf83d1206a804ad6ae354df2846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552a2dbe721ab2729ecee6d43b6ed67d8c8f4cf83d1206a804ad6ae354df2846->enter($__internal_552a2dbe721ab2729ecee6d43b6ed67d8c8f4cf83d1206a804ad6ae354df2846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_552a2dbe721ab2729ecee6d43b6ed67d8c8f4cf83d1206a804ad6ae354df2846->leave($__internal_552a2dbe721ab2729ecee6d43b6ed67d8c8f4cf83d1206a804ad6ae354df2846_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e583dff399bb708ac7781d81a58b19ed7c6303d2ba163b8df179878e15fd538b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e583dff399bb708ac7781d81a58b19ed7c6303d2ba163b8df179878e15fd538b->enter($__internal_e583dff399bb708ac7781d81a58b19ed7c6303d2ba163b8df179878e15fd538b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_e583dff399bb708ac7781d81a58b19ed7c6303d2ba163b8df179878e15fd538b->leave($__internal_e583dff399bb708ac7781d81a58b19ed7c6303d2ba163b8df179878e15fd538b_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/testMovember/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
