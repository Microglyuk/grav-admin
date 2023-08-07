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

/* partials/blog_item.html.twig */
class __TwigTemplate_c25ffe608a15c574af55c659933d7f794c44b6cb43cb83fef2acad98032fb802 extends \Twig\Template
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
        echo "<div class=\"col-lg-4 col-sm-4 col-md-4 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">
    <article>
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "url", []), "html", null, true);
        echo "\">
            <div class=\"img\">
                ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", []), "image", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["p"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", []), "image", []), [], "array"))) {
            // line 6
            echo "                    ";
            $context["image"] = $this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", []), "image", []);
            // line 7
            echo "                ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["p"] ?? null), "media", []), "images", [])) > 0)) {
            // line 8
            echo "                    ";
            $context["image"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["p"] ?? null), "media", []), "images", [])), "filename", []);
            // line 9
            echo "                ";
        }
        // line 10
        echo "                ";
        if (($context["image"] ?? null)) {
            // line 11
            echo "                    ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["p"] ?? null), "media", []), "images", []), ($context["image"] ?? null), [], "array"), "cropZoom", [0 => ($context["image_width"] ?? null), 1 => ($context["image_height"] ?? null)], "method"), "html", [0 => "", 1 => $this->getAttribute(($context["p"] ?? null), "title", [])], "method");
            echo "
                    <div class=\"imgDescription2\">
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/search.png"), "html", null, true);
            echo "\"/>
                    </div>
                ";
        }
        // line 16
        echo "            </div>
        </a>
        <div class=\"content\">
            <h3><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "url", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "title", []), "html", null, true);
        echo "</a></h3>
            ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", []), "list_summary", [])) {
            // line 21
            echo "            <p>";
            echo $this->getAttribute($this->getAttribute(($context["p"] ?? null), "header", []), "list_summary", []);
            echo "</p>
            ";
        }
        // line 23
        echo "        </div>
    </article>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  81 => 21,  79 => 20,  73 => 19,  68 => 16,  62 => 13,  56 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-4 col-sm-4 col-md-4 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">
    <article>
        <a href=\"{{ p.url }}\">
            <div class=\"img\">
                {% if p.header.image and p.media.images[p.header.image]%}
                    {% set image = p.header.image %}
                {% elseif p.media.images|length > 0 %}
                    {% set image = p.media.images|first.filename %}
                {% endif %}
                {% if image %}
                    {{ p.media.images[image].cropZoom(image_width, image_height).html('', p.title)|raw }}
                    <div class=\"imgDescription2\">
                        <img src=\"{{ url('theme://images/search.png') }}\"/>
                    </div>
                {% endif %}
            </div>
        </a>
        <div class=\"content\">
            <h3><a href=\"{{ p.url }}\">{{ p. title }}</a></h3>
            {% if p.header.list_summary %}
            <p>{{ p.header.list_summary|raw }}</p>
            {% endif %}
        </div>
    </article>
</div>
", "partials/blog_item.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\partials\\blog_item.html.twig");
    }
}
