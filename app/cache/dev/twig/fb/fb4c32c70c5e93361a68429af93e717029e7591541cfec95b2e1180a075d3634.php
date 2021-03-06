<?php

/* testMovemberBundle:Default:index.html.twig */
class __TwigTemplate_85819e5b27bcfdcd838db3a0b7130f47c4769d0815ef397f0406ee03f96ec997 extends Twig_Template
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
        $__internal_ab39928f72fc79687ed9fb93af1527134b075f6a44820abac86c52138b5a0222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab39928f72fc79687ed9fb93af1527134b075f6a44820abac86c52138b5a0222->enter($__internal_ab39928f72fc79687ed9fb93af1527134b075f6a44820abac86c52138b5a0222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab39928f72fc79687ed9fb93af1527134b075f6a44820abac86c52138b5a0222->leave($__internal_ab39928f72fc79687ed9fb93af1527134b075f6a44820abac86c52138b5a0222_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8efeceee36a8953a384eeed2a9cb243d2cb1ef5e87ba8a1f530228d5a5352b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efeceee36a8953a384eeed2a9cb243d2cb1ef5e87ba8a1f530228d5a5352b4a->enter($__internal_8efeceee36a8953a384eeed2a9cb243d2cb1ef5e87ba8a1f530228d5a5352b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:Default:index.html.twig"));

        // line 6
        echo "    <div id=\"map\" style=\"width: 900px; height: 750px;\"></div>
";
        
        $__internal_8efeceee36a8953a384eeed2a9cb243d2cb1ef5e87ba8a1f530228d5a5352b4a->leave($__internal_8efeceee36a8953a384eeed2a9cb243d2cb1ef5e87ba8a1f530228d5a5352b4a_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e336a268939d357a0064009041b416b0ef09607eb54c34ce9bbff9a2e937f4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e336a268939d357a0064009041b416b0ef09607eb54c34ce9bbff9a2e937f4f3->enter($__internal_e336a268939d357a0064009041b416b0ef09607eb54c34ce9bbff9a2e937f4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:Default:index.html.twig"));

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
        
        $__internal_e336a268939d357a0064009041b416b0ef09607eb54c34ce9bbff9a2e937f4f3->leave($__internal_e336a268939d357a0064009041b416b0ef09607eb54c34ce9bbff9a2e937f4f3_prof);

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
", "testMovemberBundle:Default:index.html.twig", "/var/www/html/MapMovember/src/testMovemberBundle/Resources/views/Default/index.html.twig");
    }
}
