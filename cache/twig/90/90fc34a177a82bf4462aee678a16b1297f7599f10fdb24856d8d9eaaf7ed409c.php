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

/* modular/services.html.twig */
class __TwigTemplate_7aae3d28324f58ff7793372eadc020b19cfba0171c0895fe62487b00fbd86b10 extends \Twig\Template
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
        echo "<div class=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.3s\">
            <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
            <span class=\"line\"></span>
            ";
        // line 7
        echo ($context["content"] ?? null);
        echo "
        ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", [])) {
            // line 9
            echo "        <div class=\"row\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 11
                echo "            <div class=\"col-lg-3 col-sm-6 col-md-3 os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">
                ";
                // line 12
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["service"], "icon", []), [], "array"), "cache", []), "html", [], "method");
                echo "
                <h3>";
                // line 13
                echo $this->getAttribute($context["service"], "title", []);
                echo "</h3>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
        ";
        }
        // line 18
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 16,  61 => 13,  57 => 12,  54 => 11,  50 => 10,  47 => 9,  45 => 8,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.3s\">
            <h2>{{ page.header.title|raw }}</h2>
            <span class=\"line\"></span>
            {{ content|raw }}
        {% if page.header.services %}
        <div class=\"row\">
            {% for service in page.header.services %}
            <div class=\"col-lg-3 col-sm-6 col-md-3 os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">
                {{ page.media.images[service.icon].cache.html()|raw }}
                <h3>{{ service.title|raw }}</h3>
            </div>
            {% endfor %}
        </div>
        {% endif %}
    </div>
</div>
", "modular/services.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\services.html.twig");
    }
}
