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

/* modular/cta3.html.twig */
class __TwigTemplate_070e11eb93cfd36007d82015c424084a530fa2b96c969b42405069a2f9f58580 extends \Twig\Template
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
        echo "<section class=\"cta3\">
    <div class=\"container\">
          <div class=\"row\">
             ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            // line 5
            echo "            <div class=\"col-lg-6 col-sm-6 col-md-6\">&nbsp;</div>
            <div class=\"col-lg-6 col-sm-6 col-md-6 os-animation\" data-os-animation=\"fadeInRight\" data-os-animation-delay=\"0.4s\">
            ";
        } else {
            // line 8
            echo "            <div class=\"os-animation\" data-os-animation=\"fadeInRight\" data-os-animation-delay=\"0.4s\">
            ";
        }
        // line 10
        echo "                <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h2>
                <span class=\"line\"></span>
                ";
        // line 12
        echo ($context["content"] ?? null);
        echo "
                ";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", [])) {
            // line 14
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_label", []), "html", null, true);
            echo "</a>
                ";
        }
        // line 16
        echo "            </div>
        </div>
    </div>
    ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            // line 20
            echo "    <div class=\"safariimg os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">
        ";
            // line 21
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "cache", []), "html", []);
            echo "
    </div>
    ";
        }
        // line 24
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/cta3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  76 => 21,  73 => 20,  71 => 19,  66 => 16,  58 => 14,  56 => 13,  52 => 12,  46 => 10,  42 => 8,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"cta3\">
    <div class=\"container\">
          <div class=\"row\">
             {% if page.header.image %}
            <div class=\"col-lg-6 col-sm-6 col-md-6\">&nbsp;</div>
            <div class=\"col-lg-6 col-sm-6 col-md-6 os-animation\" data-os-animation=\"fadeInRight\" data-os-animation-delay=\"0.4s\">
            {% else %}
            <div class=\"os-animation\" data-os-animation=\"fadeInRight\" data-os-animation-delay=\"0.4s\">
            {% endif %}
                <h2>{{ page.header.title }}</h2>
                <span class=\"line\"></span>
                {{ content|raw }}
                {% if page.header.button_url %}
                <a href=\"{{ page.header.button_url }}\">{{ page.header.button_label }}</a>
                {% endif %}
            </div>
        </div>
    </div>
    {% if page.header.image %}
    <div class=\"safariimg os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">
        {{ page.media.images[page.header.image].cache.html|raw }}
    </div>
    {% endif %}
</section>
", "modular/cta3.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\cta3.html.twig");
    }
}
