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

/* modular/features.html.twig */
class __TwigTemplate_dd05b2c1cc87b175ae1da214ab662d2e194d6b99dd800850bd0023fc64e73d0c extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", [])) {
            // line 2
            echo "<section class=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 6
                echo "            <div class=\"col-lg-4 col-sm-4 col-md-4 os-animation\" data-os-animation=\"bounceIn\" data-os-animation-delay=\"0.3s\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-4 col-md-4\">
                        ";
                // line 9
                if ($this->getAttribute($context["feature"], "icon", [])) {
                    // line 10
                    echo "                        ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["feature"], "icon", []), [], "array"), "cache", []), "html", []);
                    echo "
                        ";
                }
                // line 12
                echo "                    </div>
                    <div class=\"col-lg-9 col-sm-8 col-md-8\">
                        <h3>";
                // line 14
                echo $this->getAttribute($context["feature"], "title", []);
                echo "</h3>
                        <p>";
                // line 15
                echo $this->getAttribute($context["feature"], "description", []);
                echo "</p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  62 => 15,  58 => 14,  54 => 12,  48 => 10,  46 => 9,  41 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.features %}
<section class=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            {% for feature in page.header.features %}
            <div class=\"col-lg-4 col-sm-4 col-md-4 os-animation\" data-os-animation=\"bounceIn\" data-os-animation-delay=\"0.3s\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-4 col-md-4\">
                        {% if feature.icon %}
                        {{ page.media.images[feature.icon].cache.html|raw }}
                        {% endif %}
                    </div>
                    <div class=\"col-lg-9 col-sm-8 col-md-8\">
                        <h3>{{ feature.title|raw }}</h3>
                        <p>{{ feature.description|raw }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endif %}
", "modular/features.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\features.html.twig");
    }
}
