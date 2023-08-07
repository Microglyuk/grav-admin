<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/map.html.twig */
class __TwigTemplate_4e2bdf084fe34546f44f2ca25e460b92a0a2d44462c96b9a842b98159f4a5553 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"map-container\">
    <div id=\"googleMaps\"></div>
</div>

<script>
  function initMap() {
    var myLatLng = {lat: ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "latitude", []), 0), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "longitude", []), 0), "html", null, true);
        echo "};

    var map = new google.maps.Map(document.getElementById('googleMaps'), {
      zoom: ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "zoom", []), 10), "html", null, true);
        echo ",
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "marker_icon", [])) {
            // line 18
            echo "      icon: '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "marker_icon", []), [], "array"), "cache", []), "url", []), "html", null, true);
            echo "'
      ";
        }
        // line 20
        echo "    });
  }
</script>
<script src=\"https://maps.google.com/maps/api/js?key=";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "google_maps_api_key", []), "html", null, true);
        echo "&callback=initMap\"></script>
";
    }

    public function getTemplateName()
    {
        return "modular/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  64 => 20,  58 => 18,  56 => 17,  46 => 10,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"map-container\">
    <div id=\"googleMaps\"></div>
</div>

<script>
  function initMap() {
    var myLatLng = {lat: {{ page.header.latitude|defined(0) }}, lng: {{ page.header.longitude|defined(0) }}};

    var map = new google.maps.Map(document.getElementById('googleMaps'), {
      zoom: {{ page.header.zoom|defined(10) }},
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      {% if page.header.marker_icon %}
      icon: '{{ page.media.images[page.header.marker_icon].cache.url }}'
      {% endif %}
    });
  }
</script>
<script src=\"https://maps.google.com/maps/api/js?key={{ page.header.google_maps_api_key }}&callback=initMap\"></script>
", "modular/map.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\map.html.twig");
    }
}
