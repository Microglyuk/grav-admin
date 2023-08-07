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

/* partials/base.html.twig */
class __TwigTemplate_3d8085ac434d48c81b36fe78909d1bf5e729c2f53a7d16b7fd7c19c531990a13 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        ob_start();
        // line 2
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 3
        $context["favicon"] = "";
        // line 4
        $context["logo"] = "";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", [])) > 0)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "favicon", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                $context["favicon"] = $this->getAttribute($context["item"], "name", []);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "logo", [])) > 0)) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "logo", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "        ";
                $context["logo"] = $this->getAttribute($context["item"], "name", []);
                // line 13
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 16
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 20
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
        ";
        // line 21
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 21)->display($context);
        // line 22
        echo "        <meta name=\"viewport\" content=\"width=device-width initial-scale=1.0\">

        ";
        // line 24
        if (($context["favicon"] ?? null)) {
            // line 25
            echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/" . ($context["favicon"] ?? null))), "html", null, true);
            echo "\" />
        ";
        }
        // line 27
        echo "
        <link rel=\"canonical\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />

        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    </head>

    <body>
        <div class=\"se-pre-con\">
            <div class=\"box loading\"></div>
        </div>

        <header>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
";
        // line 56
        echo "
                        <nav class=\"nav-collapse\">
                            ";
        // line 58
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "                        </nav>
                    </div>
                </div>
            </div>
        </header>

        ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-md-6\">
                        ";
        // line 73
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute(($context["theme_config"] ?? null), "left_footer", []));
        echo "
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-md-6\">
                        <div class=\"rightside\">";
        // line 76
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute(($context["theme_config"] ?? null), "right_footer", []));
        echo "</div>
                    </div>
                </div>
            </div>
        </footer>

        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        // line 90
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    </body>
</html>
";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 31
        echo "            <link href='https://fonts.googleapis.com/css?family=Lato:100,400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
            ";
        // line 32
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/grid.css"], "method");
        // line 33
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 34
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/menu.css"], "method");
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/jquery.bxslider.css"], "method");
        // line 36
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/responsive.css"], "method");
        // line 37
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.css"], "method");
        // line 38
        echo "        ";
    }

    // line 65
    public function block_content($context, array $blocks = [])
    {
        // line 66
        echo "            ";
        echo ($context["content"] ?? null);
        echo "
        ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        // line 83
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 84
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.bxslider.min.js"], "method");
        // line 85
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/script.js"], "method");
        // line 86
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/fixed-responsive-nav.js"], "method");
        // line 87
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.waypoints.min.js"], "method");
        // line 88
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 88,  235 => 87,  232 => 86,  229 => 85,  226 => 84,  223 => 83,  220 => 82,  213 => 66,  210 => 65,  206 => 38,  203 => 37,  200 => 36,  197 => 35,  194 => 34,  191 => 33,  189 => 32,  186 => 31,  183 => 30,  175 => 90,  170 => 89,  168 => 82,  159 => 76,  153 => 73,  146 => 68,  144 => 65,  136 => 59,  134 => 58,  130 => 56,  114 => 39,  112 => 30,  107 => 28,  104 => 27,  98 => 25,  96 => 24,  92 => 22,  90 => 21,  82 => 20,  76 => 16,  68 => 13,  65 => 12,  60 => 11,  58 => 10,  51 => 8,  48 => 7,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set favicon = '' %}
{% set logo = '' %}
{% if theme_config.favicon|length > 0 %}
    {% for item in theme_config.favicon %}
        {% set favicon = item.name %}
    {% endfor %}
{% endif %}
{% if theme_config.logo|length > 0 %}
    {% for item in theme_config.logo %}
        {% set logo = item.name %}
    {% endfor %}
{% endif %}
{% endspaceless %}
<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width initial-scale=1.0\">

        {% if favicon %}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/' ~ favicon) }}\" />
        {% endif %}

        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

        {% block stylesheets %}
            <link href='https://fonts.googleapis.com/css?family=Lato:100,400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
            {% do assets.addCss('theme://css/grid.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/menu.css') %}
            {% do assets.addCss('theme://css/jquery.bxslider.css') %}
            {% do assets.addCss('theme://css/responsive.css') %}
            {% do assets.addCss('theme://css/animate.css') %}
        {% endblock %}
        {{ assets.css()|raw }}
    </head>

    <body>
        <div class=\"se-pre-con\">
            <div class=\"box loading\"></div>
        </div>

        <header>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
{#                        <div class=\"logo\">#}
{#                            {% if logo %}#}
{#                            <a href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ url('theme://images/' ~ logo) }}\" alt=\"{{ config.site.title|e('html') }}\"/></a>#}
{#                            {% endif %}#}
{#                        </div>#}

                        <nav class=\"nav-collapse\">
                            {% include 'partials/navigation.html.twig' %}
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        {% block content %}
            {{ content|raw }}
        {% endblock %}

        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-md-6\">
                        {{ theme_config.left_footer|markdown }}
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-md-6\">
                        <div class=\"rightside\">{{ theme_config.right_footer|markdown }}</div>
                    </div>
                </div>
            </div>
        </footer>

        {% block javascripts %}
            {% do assets.addJs('jquery', 101) %}
            {% do assets.addJs('theme://js/jquery.bxslider.min.js') %}
            {% do assets.addJs('theme://js/script.js') %}
            {% do assets.addJs('theme://js/fixed-responsive-nav.js') %}
            {% do assets.addJs('theme://js/jquery.waypoints.min.js') %}
        {% endblock %}
        {{ assets.js()|raw }}
        {{ assets.js('bottom')|raw }}
    </body>
</html>
", "partials/base.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\partials\\base.html.twig");
    }
}
