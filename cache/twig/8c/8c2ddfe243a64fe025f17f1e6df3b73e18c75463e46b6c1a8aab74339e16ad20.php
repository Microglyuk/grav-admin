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

/* error.html.twig */
class __TwigTemplate_387ab1b19016dba286bad384ce1abe75fd41d41016eb8bb8eca9d55536f3c0b6 extends \Twig\Template
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
        $this->loadTemplate("error.html.twig", "error.html.twig", 1, "2011275555")->display($context);
    }

    public function getTemplateName()
    {
        return "error.html.twig";
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

{% block content %}
{% set image = '' %}
{% if theme_config.default_background_image|length > 0 %}
    {% for item in theme_config.default_background_image %}
        {% set image = item.name %}
    {% endfor %}
{% endif %}

<div class=\"banner\"{% if image %} style=\"background-image: url({{ url('theme://images/' ~ image) }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h1>
                <span class=\"line\"></span>
                <p class=\"top\">{{ page.content|raw }}</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% endembed %}
", "error.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\error.html.twig");
    }
}


/* error.html.twig */
class __TwigTemplate_387ab1b19016dba286bad384ce1abe75fd41d41016eb8bb8eca9d55536f3c0b6___2011275555 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $context["image"] = "";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "default_background_image", [])) > 0)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "default_background_image", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                $context["image"] = $this->getAttribute($context["item"], "name", []);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        echo "
<div class=\"banner\"";
        // line 11
        if (($context["image"] ?? null)) {
            echo " style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/" . ($context["image"] ?? null))), "html", null, true);
            echo ")\"";
        }
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "ERROR"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []), "html", null, true);
        echo "</h1>
                <span class=\"line\"></span>
                <p class=\"top\">";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 17,  142 => 15,  131 => 11,  128 => 10,  121 => 8,  118 => 7,  113 => 6,  111 => 5,  109 => 4,  106 => 3,  30 => 1,);
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

{% block content %}
{% set image = '' %}
{% if theme_config.default_background_image|length > 0 %}
    {% for item in theme_config.default_background_image %}
        {% set image = item.name %}
    {% endfor %}
{% endif %}

<div class=\"banner\"{% if image %} style=\"background-image: url({{ url('theme://images/' ~ image) }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h1>
                <span class=\"line\"></span>
                <p class=\"top\">{{ page.content|raw }}</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% endembed %}
", "error.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\error.html.twig");
    }
}
