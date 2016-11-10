<?php

/* testMovemberBundle:testmovember:index.html.twig */
class __TwigTemplate_3f0327f10259a63c364ca2f1656839097b4959a309787cfe847643b9cddf9ad6 extends Twig_Template
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
        $__internal_4e54527c9d0f43ca30ca24a11c9daa08e247ed818d9a1698315a70fb3e74dd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e54527c9d0f43ca30ca24a11c9daa08e247ed818d9a1698315a70fb3e74dd16->enter($__internal_4e54527c9d0f43ca30ca24a11c9daa08e247ed818d9a1698315a70fb3e74dd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:testmovember:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e54527c9d0f43ca30ca24a11c9daa08e247ed818d9a1698315a70fb3e74dd16->leave($__internal_4e54527c9d0f43ca30ca24a11c9daa08e247ed818d9a1698315a70fb3e74dd16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad0c321c6b909c3f642c17aab47bcbccbc54f7ebc85d879212d436103b5e012c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0c321c6b909c3f642c17aab47bcbccbc54f7ebc85d879212d436103b5e012c->enter($__internal_ad0c321c6b909c3f642c17aab47bcbccbc54f7ebc85d879212d436103b5e012c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:index.html.twig"));

        // line 4
        echo "    <h1>Testmovembers list</h1>

    ";
        // line 7
        echo "    <div id=\"map\" style=\"width: 900px; height: 750px;\"></div>
";
        
        $__internal_ad0c321c6b909c3f642c17aab47bcbccbc54f7ebc85d879212d436103b5e012c->leave($__internal_ad0c321c6b909c3f642c17aab47bcbccbc54f7ebc85d879212d436103b5e012c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b9c9a77e663641015121918717a7de61f257c3a2c2e7f1200d9d63c4e93b15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9c9a77e663641015121918717a7de61f257c3a2c2e7f1200d9d63c4e93b15c->enter($__internal_6b9c9a77e663641015121918717a7de61f257c3a2c2e7f1200d9d63c4e93b15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:index.html.twig"));

        // line 12
        echo "
    <script src=\"http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBSFjZGurwwEtOnMOg1mKgJgS3WcP8ucrk\" type=\"text/javascript\"></script>

    <script>
        ";
        // line 19
        echo "        var locations = [
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testMovembers"]) ? $context["testMovembers"] : $this->getContext($context, "testMovembers")));
        foreach ($context['_seq'] as $context["_key"] => $context["movember"]) {
            // line 21
            echo "            ['";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movember"], "Adresse", array()), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movember"], "lat", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movember"], "lgt", array()), "html", null, true);
            echo "],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
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
        
        $__internal_6b9c9a77e663641015121918717a7de61f257c3a2c2e7f1200d9d63c4e93b15c->leave($__internal_6b9c9a77e663641015121918717a7de61f257c3a2c2e7f1200d9d63c4e93b15c_prof);

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
        return array (  85 => 23,  72 => 21,  68 => 20,  65 => 19,  59 => 12,  53 => 11,  45 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
            {% for movember in testMovembers %}
            ['{{ movember.Adresse }}', {{ movember.lat }}, {{ movember.lgt }}],
            {% endfor %}

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
