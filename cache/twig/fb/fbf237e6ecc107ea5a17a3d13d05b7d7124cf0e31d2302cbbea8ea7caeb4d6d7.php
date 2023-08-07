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

/* blog.html.twig */
class __TwigTemplate_f029919f0b536800c19ef6316af074a9f4e9a37b8811d287560f7025d7da7da7 extends \Twig\Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1699386059")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set image_width = theme_config.blog_thumbnail_width|defined(600) %}
{% set image_height = theme_config.blog_thumbnail_height|defined(450) %}

{% block content %}
{% if page.header.image and page.media.images[page.header.image]%}
    {% set image = page.header.image %}
{% elseif page.media.images|length > 0 %}
    {% set image = page.media.images|first.filename %}
{% endif %}
{% set image_width = theme_config.blog_thumbnail_width|defined(600) %}
{% set image_height = theme_config.blog_thumbnail_height|defined(450) %}
<div class=\"banner banner-alt\"{% if image %} style=\"background-image: url({{ page.media.images[image].cache.url }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">{{ page.header.title|raw }}</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
                {% if content is not empty %}
                <div class=\"top\">{{ content|raw }}</div>
                {% endif %}
            </div>
        </div>
    </div>
</div>

<section class=\"blog\">
    <div class=\"container\">
        {% if config.plugins.simplesearch.enabled %}
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                {% include 'partials/simplesearch_searchbox.html.twig' %}
            </div>
        </div>
        {% endif %}
        <div class=\"blog-container\">
            <div class=\"row\">
                {% for child in collection %}
                    {% include 'partials/blog_item.html.twig' with ({'p': child, 'image_width': image_width, 'image_height': image_height}) %}
                {% endfor %}
            </div>

            {% if config.plugins.pagination.enabled and collection.params.pagination %}
                {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
            {% endif %}
        </div>
    </div>
</section>
{% endblock %}

{% endembed %}
", "blog.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_f029919f0b536800c19ef6316af074a9f4e9a37b8811d287560f7025d7da7da7___1699386059 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["image_width"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["theme_config"] ?? null), "blog_thumbnail_width", []), 600);
        // line 5
        $context["image_height"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["theme_config"] ?? null), "blog_thumbnail_height", []), 450);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"))) {
            // line 9
            echo "    ";
            $context["image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []);
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 10
($context["page"] ?? null), "media", []), "images", [])) > 0)) {
            // line 11
            echo "    ";
            $context["image"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "filename", []);
        }
        // line 13
        $context["image_width"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["theme_config"] ?? null), "blog_thumbnail_width", []), 600);
        // line 14
        $context["image_height"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["theme_config"] ?? null), "blog_thumbnail_height", []), 450);
        // line 15
        echo "<div class=\"banner banner-alt\"";
        if (($context["image"] ?? null)) {
            echo " style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["image"] ?? null), [], "array"), "cache", []), "url", []), "html", null, true);
            echo ")\"";
        }
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">";
        // line 19
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
                ";
        // line 21
        if ( !twig_test_empty(($context["content"] ?? null))) {
            // line 22
            echo "                <div class=\"top\">";
            echo ($context["content"] ?? null);
            echo "</div>
                ";
        }
        // line 24
        echo "            </div>
        </div>
    </div>
</div>

<section class=\"blog\">
    <div class=\"container\">
        ";
        // line 31
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 32
            echo "        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                ";
            // line 34
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "blog.html.twig", 34)->display($context);
            // line 35
            echo "            </div>
        </div>
        ";
        }
        // line 38
        echo "        <div class=\"blog-container\">
            <div class=\"row\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 41
            echo "                    ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 41)->display(twig_array_merge($context, ["p" => $context["child"], "image_width" => ($context["image_width"] ?? null), "image_height" => ($context["image_height"] ?? null)]));
            // line 42
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>

            ";
        // line 45
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 46
            echo "                ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 46)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 47
            echo "            ";
        }
        // line 48
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 48,  254 => 47,  251 => 46,  249 => 45,  245 => 43,  231 => 42,  228 => 41,  211 => 40,  207 => 38,  202 => 35,  200 => 34,  196 => 32,  194 => 31,  185 => 24,  179 => 22,  177 => 21,  172 => 19,  160 => 15,  158 => 14,  156 => 13,  152 => 11,  150 => 10,  147 => 9,  145 => 8,  142 => 7,  137 => 1,  135 => 5,  133 => 4,  131 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set image_width = theme_config.blog_thumbnail_width|defined(600) %}
{% set image_height = theme_config.blog_thumbnail_height|defined(450) %}

{% block content %}
{% if page.header.image and page.media.images[page.header.image]%}
    {% set image = page.header.image %}
{% elseif page.media.images|length > 0 %}
    {% set image = page.media.images|first.filename %}
{% endif %}
{% set image_width = theme_config.blog_thumbnail_width|defined(600) %}
{% set image_height = theme_config.blog_thumbnail_height|defined(450) %}
<div class=\"banner banner-alt\"{% if image %} style=\"background-image: url({{ page.media.images[image].cache.url }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">{{ page.header.title|raw }}</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
                {% if content is not empty %}
                <div class=\"top\">{{ content|raw }}</div>
                {% endif %}
            </div>
        </div>
    </div>
</div>

<section class=\"blog\">
    <div class=\"container\">
        {% if config.plugins.simplesearch.enabled %}
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                {% include 'partials/simplesearch_searchbox.html.twig' %}
            </div>
        </div>
        {% endif %}
        <div class=\"blog-container\">
            <div class=\"row\">
                {% for child in collection %}
                    {% include 'partials/blog_item.html.twig' with ({'p': child, 'image_width': image_width, 'image_height': image_height}) %}
                {% endfor %}
            </div>

            {% if config.plugins.pagination.enabled and collection.params.pagination %}
                {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
            {% endif %}
        </div>
    </div>
</section>
{% endblock %}

{% endembed %}
", "blog.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\blog.html.twig");
    }
}
