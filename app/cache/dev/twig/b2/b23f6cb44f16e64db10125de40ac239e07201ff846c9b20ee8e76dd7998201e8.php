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
        $__internal_ebb76c53421d477b83b685dc5ef52f523ed31f28c4adb81d446dff611bcd4352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb76c53421d477b83b685dc5ef52f523ed31f28c4adb81d446dff611bcd4352->enter($__internal_ebb76c53421d477b83b685dc5ef52f523ed31f28c4adb81d446dff611bcd4352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testMovemberBundle:testmovember:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebb76c53421d477b83b685dc5ef52f523ed31f28c4adb81d446dff611bcd4352->leave($__internal_ebb76c53421d477b83b685dc5ef52f523ed31f28c4adb81d446dff611bcd4352_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9de385f093bba8d73ce09202baa7e0572302c737b16dd2967c2ef212f7bf763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9de385f093bba8d73ce09202baa7e0572302c737b16dd2967c2ef212f7bf763->enter($__internal_a9de385f093bba8d73ce09202baa7e0572302c737b16dd2967c2ef212f7bf763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:index.html.twig"));

        // line 4
        echo "    <h1>Testmovembers list</h1>

    ";
        // line 7
        echo "    <div id=\"map\" style=\"width: 900px; height: 750px;\"></div>
";
        
        $__internal_a9de385f093bba8d73ce09202baa7e0572302c737b16dd2967c2ef212f7bf763->leave($__internal_a9de385f093bba8d73ce09202baa7e0572302c737b16dd2967c2ef212f7bf763_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d70f881fef3b15ab3cdc6489c8d274fb22cc0561161ed6019c61893c91687233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70f881fef3b15ab3cdc6489c8d274fb22cc0561161ed6019c61893c91687233->enter($__internal_d70f881fef3b15ab3cdc6489c8d274fb22cc0561161ed6019c61893c91687233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "testMovemberBundle:testmovember:index.html.twig"));

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
        
        $__internal_d70f881fef3b15ab3cdc6489c8d274fb22cc0561161ed6019c61893c91687233->leave($__internal_d70f881fef3b15ab3cdc6489c8d274fb22cc0561161ed6019c61893c91687233_prof);

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

", "testMovemberBundle:testmovember:index.html.twig", "/var/www/html/MapMovember/src/testMovemberBundle/Resources/views/testmovember/index.html.twig");
    }
}
