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

/* modular/about.html.twig */
class __TwigTemplate_facd06cffdffa53d7f59d146f39a0ea64754fe0a3960127393a619f15915c7b9 extends \Twig\Template
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
        echo "<div class=\"video\">
    <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-sm-6 col-md-6\">
                <h2 class=\"os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.3s\">";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
                <span class=\"line os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\"></span>
                <div class=\"os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">";
        // line 7
        echo ($context["content"] ?? null);
        echo "</div>
                ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", [])) {
            // line 9
            echo "                    <div class=\"button-container\">
                        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", []), "html", null, true);
            echo "\" class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.5s\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_label", []), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        // line 13
        echo "            </div>
        </div>
    </div>
    ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "right_image", [])) {
            // line 17
            echo "    <div class=\"laptop os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">
        ";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "right_image", []), [], "array"), "cache", []), "html", [0 => "", 1 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "right_image_alt", [])], "method");
            echo "
    </div>
    ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  68 => 18,  65 => 17,  63 => 16,  58 => 13,  50 => 10,  47 => 9,  45 => 8,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"video\">
    <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-sm-6 col-md-6\">
                <h2 class=\"os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.3s\">{{ page.title|raw }}</h2>
                <span class=\"line os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\"></span>
                <div class=\"os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">{{ content|raw }}</div>
                {% if page.header.button_url %}
                    <div class=\"button-container\">
                        <a href=\"{{ page.header.button_url }}\" class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.5s\">{{ page.header.button_label }}</a>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
    {% if page.header.right_image %}
    <div class=\"laptop os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">
        {{ page.media.images[page.header.right_image].cache.html('', page.header.right_image_alt)|raw }}
    </div>
    {% endif %}
</div>
", "modular/about.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\about.html.twig");
    }
}
