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

/* item.html.twig */
class __TwigTemplate_631c4c6fec8dff3cdea2563ad1ecd6ee3a190e866e4e339531fe1b990c66d133 extends \Twig\Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "288335510")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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

{% if page.header.image and page.media.images[page.header.image]%}
    {% set image = page.header.image %}
{% elseif page.media.images|length > 0 %}
    {% set image = page.media.images|first.filename %}
{% endif %}

{% block content %}
<div class=\"banner banner-alt\"{% if image %} style=\"background-image: url({{ page.media.images[image].cache.url }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">{{ page.header.title|raw }}</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"blog-list\">
    <div class=\"container\">
        <div class=\"row content\">
            {{ content|raw }}
        </div>
    </div>

    {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <div class=\"related-posts\">
        <h2>{{ 'THEME_MACHE.RELATED_POSTS'|t }}</h2>
        {% include 'partials/relatedpages.html.twig' %}
    </div>
    {% endif %}

    {% if config.plugins.jscomments.enabled %}
    <div class=\"container\">
        <div class=\"row\">
            {{ jscomments()|raw }}
        </div>
    </div>
    {% endif %}
</div>
{% endblock %}

{% endembed %}
", "item.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_631c4c6fec8dff3cdea2563ad1ecd6ee3a190e866e4e339531fe1b990c66d133___288335510 extends \Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"))) {
            // line 4
            $context["image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []);
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 5
($context["page"] ?? null), "media", []), "images", [])) > 0)) {
            // line 6
            $context["image"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "filename", []);
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
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
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"blog-list\">
    <div class=\"container\">
        <div class=\"row content\">
            ";
        // line 24
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>

    ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 29
            echo "    <div class=\"related-posts\">
        <h2>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_MACHE.RELATED_POSTS"), "html", null, true);
            echo "</h2>
        ";
            // line 31
            $this->loadTemplate("partials/relatedpages.html.twig", "item.html.twig", 31)->display($context);
            // line 32
            echo "    </div>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "enabled", [])) {
            // line 36
            echo "    <div class=\"container\">
        <div class=\"row\">
            ";
            // line 38
            echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), []);
            echo "
        </div>
    </div>
    ";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 42,  196 => 38,  192 => 36,  190 => 35,  187 => 34,  183 => 32,  181 => 31,  177 => 30,  174 => 29,  172 => 28,  165 => 24,  152 => 14,  140 => 10,  137 => 9,  132 => 1,  129 => 6,  127 => 5,  125 => 4,  123 => 3,  30 => 1,);
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

{% if page.header.image and page.media.images[page.header.image]%}
    {% set image = page.header.image %}
{% elseif page.media.images|length > 0 %}
    {% set image = page.media.images|first.filename %}
{% endif %}

{% block content %}
<div class=\"banner banner-alt\"{% if image %} style=\"background-image: url({{ page.media.images[image].cache.url }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">{{ page.header.title|raw }}</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"blog-list\">
    <div class=\"container\">
        <div class=\"row content\">
            {{ content|raw }}
        </div>
    </div>

    {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <div class=\"related-posts\">
        <h2>{{ 'THEME_MACHE.RELATED_POSTS'|t }}</h2>
        {% include 'partials/relatedpages.html.twig' %}
    </div>
    {% endif %}

    {% if config.plugins.jscomments.enabled %}
    <div class=\"container\">
        <div class=\"row\">
            {{ jscomments()|raw }}
        </div>
    </div>
    {% endif %}
</div>
{% endblock %}

{% endembed %}
", "item.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\item.html.twig");
    }
}
