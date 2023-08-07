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

/* modular/cta2.html.twig */
class __TwigTemplate_209a6ef44d503ff975c1dd5c36f6609a07992edaadf5eedb75c218b837680c9a extends \Twig\Template
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
        echo "<div class=\"cta2\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", [])) {
            echo " style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", []), [], "array"), "cache", []), "url", []), "html", null, true);
            echo ")\"";
        }
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">
                <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h2>
                <span class=\"line\"></span>
                ";
        // line 7
        echo ($context["content"] ?? null);
        echo "
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_label", []), "html", null, true);
        echo "</a>
            </div>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/cta2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  47 => 7,  42 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"cta2\"{% if page.header.background_image %} style=\"background-image: url({{ page.media.images[page.header.background_image].cache.url }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">
                <h2>{{ page.header.title }}</h2>
                <span class=\"line\"></span>
                {{ content|raw }}
                <a href=\"{{ page.header.button_url }}\">{{ page.header.button_label }}</a>
            </div>
        </div>

    </div>
</div>
", "modular/cta2.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\cta2.html.twig");
    }
}
