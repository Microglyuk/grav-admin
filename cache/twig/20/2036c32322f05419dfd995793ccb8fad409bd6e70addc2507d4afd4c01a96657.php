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

/* modular/testimonials.html.twig */
class __TwigTemplate_1b09fd6f374f2fae95c32203ad6f4bea40c9748ea1264acb709a965d69b5a96e extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "testimonials", [])) {
            // line 2
            echo "<div class=\"testimonials\"";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", [])) {
                echo " style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", []), [], "array"), "cache", []), "url", [], "method"), "html", null, true);
                echo ")\"";
            }
            echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">
                <ul class=\"bxslider\">
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "testimonials", []));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 8
                echo "                    <li>
                        ";
                // line 9
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "opening_icon", [])) {
                    // line 10
                    echo "                            ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "opening_icon", []), [], "array"), "cache", []), "html", [], "method");
                    echo "
                        ";
                }
                // line 12
                echo "                        <p>";
                echo $this->getAttribute($context["testimonial"], "testimonial", []);
                echo "</p>
                        ";
                // line 13
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "closing_icon", [])) {
                    // line 14
                    echo "                            ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "closing_icon", []), [], "array"), "cache", []), "html", [], "method");
                    echo "
                        ";
                }
                // line 16
                echo "                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </ul>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  73 => 16,  67 => 14,  65 => 13,  60 => 12,  54 => 10,  52 => 9,  49 => 8,  45 => 7,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.testimonials %}
<div class=\"testimonials\"{%if page.header.background_image %} style=\"background-image: url({{ page.media.images[page.header.background_image].cache.url() }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">
                <ul class=\"bxslider\">
                    {% for testimonial in page.header.testimonials %}
                    <li>
                        {% if page.header.opening_icon %}
                            {{ page.media.images[page.header.opening_icon].cache.html()|raw }}
                        {% endif %}
                        <p>{{ testimonial.testimonial|raw }}</p>
                        {% if page.header.closing_icon %}
                            {{ page.media.images[page.header.closing_icon].cache.html()|raw }}
                        {% endif %}
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>
{% endif %}
", "modular/testimonials.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\testimonials.html.twig");
    }
}
