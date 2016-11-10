<?php

/* testMovemberBundle:testmovember:index.html.twig */
class __TwigTemplate_b405831e04826b5b6360d64a235ee6a30121b5ff9853fd8daf5828d8909870f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testMovemberBundle:testmovember:index.html.twig", 1);
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
        $__internal_97357bf7119154c47138541d4bab387dff945250a535c11626a78ddf52139ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97357bf7119154c47138541d4bab387dff945250a535c11626a78ddf52139ca7->enter($__internal_97357bf7119154c47138541d4bab387dff945250a535c11626a78ddf52139ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:testmovember:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97357bf7119154c47138541d4bab387dff945250a535c11626a78ddf52139ca7->leave($__internal_97357bf7119154c47138541d4bab387dff945250a535c11626a78ddf52139ca7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0070c18a3a2186bd06ba0c66f77447d992851f26d625dd7834426b467b6613f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0070c18a3a2186bd06ba0c66f77447d992851f26d625dd7834426b467b6613f->enter($__internal_e0070c18a3a2186bd06ba0c66f77447d992851f26d625dd7834426b467b6613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:index.html.twig"));

        // line 4
        echo "    <h1>Testmovembers list</h1>

    ";
        // line 7
        echo "    <div id=\"map\" style=\"width: 900px; height: 750px;\"></div>
";
        
        $__internal_e0070c18a3a2186bd06ba0c66f77447d992851f26d625dd7834426b467b6613f->leave($__internal_e0070c18a3a2186bd06ba0c66f77447d992851f26d625dd7834426b467b6613f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81a6d87cc6040b994eab8e2933b3bed5662665e030b15111f161f2ec2a8cddea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a6d87cc6040b994eab8e2933b3bed5662665e030b15111f161f2ec2a8cddea->enter($__internal_81a6d87cc6040b994eab8e2933b3bed5662665e030b15111f161f2ec2a8cddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:index.html.twig"));

        // line 12
        echo "
    <script src=\"http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBSFjZGurwwEtOnMOg1mKgJgS3WcP8ucrk\" type=\"text/javascript\"></script>

    <script>
        ";
        // line 19
        echo "        var locations = [
            ['Loulappe', 48.439171, 1.283147, 1],
            ['Lyon',45.764043 ,4.835658999999964 , 2],
            ['', , , ],
            ['', , , ],
            ['', , , ]
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
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
        
        $__internal_81a6d87cc6040b994eab8e2933b3bed5662665e030b15111f161f2ec2a8cddea->leave($__internal_81a6d87cc6040b994eab8e2933b3bed5662665e030b15111f161f2ec2a8cddea_prof);

    }

    public function getTemplateName()
    {
        return "testMovemberBundle:testmovember:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  59 => 12,  53 => 11,  45 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    <h1>Testmovembers list</h1>

    {#<input type =\"text\" name =\"adresse\"/>#}
    <div id=\"map\" style=\"width: 900px; height: 750px;\"></div>
{% endblock %}

{#############################################API de merde#############################}
{% block javascripts %}

    <script src=\"http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBSFjZGurwwEtOnMOg1mKgJgS3WcP8ucrk\" type=\"text/javascript\"></script>

    <script>
        {#
        var adresse = '<?= \$adresse ?>';
        console.log(adresse);  var_dump en JS#}
        var locations = [
            ['Loulappe', 48.439171, 1.283147, 1],
            ['Lyon',45.764043 ,4.835658999999964 , 2],
            ['', , , ],
            ['', , , ],
            ['', , , ]
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
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
{############################################# finAPI de merde#############################}


    {#<ul>
        <li>
            <a href=\"{{ path('testmovember_new') }}\">Create a new testMovember</a>
        </li>
    </ul>#}

", "testMovemberBundle:testmovember:index.html.twig", "/var/www/html/testMovember/src/testMovemberBundle/Resources/views/testmovember/index.html.twig");
    }
}
