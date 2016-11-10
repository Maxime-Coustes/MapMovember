<?php

/* testMovemberBundle:Default:index.html.twig */
class __TwigTemplate_b05084155d7b6d65660f635f9d1f231ef91b6867245277f92a11e444196f5dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "testMovemberBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48f6fa5c221d1159a54289bad7c713f1350a93687e260ba23406ad35095d5328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f6fa5c221d1159a54289bad7c713f1350a93687e260ba23406ad35095d5328->enter($__internal_48f6fa5c221d1159a54289bad7c713f1350a93687e260ba23406ad35095d5328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f6fa5c221d1159a54289bad7c713f1350a93687e260ba23406ad35095d5328->leave($__internal_48f6fa5c221d1159a54289bad7c713f1350a93687e260ba23406ad35095d5328_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebd1516ff1344818f3962773a67794a9bb358d8952f10d7db31cc058ba7da113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd1516ff1344818f3962773a67794a9bb358d8952f10d7db31cc058ba7da113->enter($__internal_ebd1516ff1344818f3962773a67794a9bb358d8952f10d7db31cc058ba7da113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:Default:index.html.twig"));

        // line 6
        echo "    <div id=\"map\" style=\"width: 900px; height: 750px;\"></div>
";
        
        $__internal_ebd1516ff1344818f3962773a67794a9bb358d8952f10d7db31cc058ba7da113->leave($__internal_ebd1516ff1344818f3962773a67794a9bb358d8952f10d7db31cc058ba7da113_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c471942b778d9ce33acac5379e9eb861a6a79208f48bc746c349bd9dad3d7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c471942b778d9ce33acac5379e9eb861a6a79208f48bc746c349bd9dad3d7f1->enter($__internal_0c471942b778d9ce33acac5379e9eb861a6a79208f48bc746c349bd9dad3d7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:Default:index.html.twig"));

        // line 11
        echo "
    <script src=\"http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBSFjZGurwwEtOnMOg1mKgJgS3WcP8ucrk\" type=\"text/javascript\"></script>

        <script>

    var locations = [
        ['Loulappe', 48.439171, 1.283147, 4],
        ['', , , ],
        ['', , , ],
        ['', , , ],
        ['', , , ]
    ];
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: new google.maps.LatLng(48.862725, 12.287592),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
</script>
";
        
        $__internal_0c471942b778d9ce33acac5379e9eb861a6a79208f48bc746c349bd9dad3d7f1->leave($__internal_0c471942b778d9ce33acac5379e9eb861a6a79208f48bc746c349bd9dad3d7f1_prof);

    }

    public function getTemplateName()
    {
        return "testMovemberBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 10,  41 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{# ##################################### début map #######################################################}
{% block body %}
{#<input type =\"text\" name =\"adresse\"/>#}
    <div id=\"map\" style=\"width: 900px; height: 750px;\"></div>
{% endblock %}


{% block javascripts %}

    <script src=\"http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBSFjZGurwwEtOnMOg1mKgJgS3WcP8ucrk\" type=\"text/javascript\"></script>

        <script>

    var locations = [
        ['Loulappe', 48.439171, 1.283147, 4],
        ['', , , ],
        ['', , , ],
        ['', , , ],
        ['', , , ]
    ];
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: new google.maps.LatLng(48.862725, 12.287592),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
</script>
{% endblock %}
{# ###################################################### fin map ###############################################}
", "testMovemberBundle:Default:index.html.twig", "/var/www/html/testMovember/src/testMovemberBundle/Resources/views/Default/index.html.twig");
    }
}
