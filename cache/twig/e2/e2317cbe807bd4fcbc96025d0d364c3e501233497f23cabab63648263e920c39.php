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

/* partials/navigation.html.twig */
class __TwigTemplate_6873c4725f2b3c9b5acbddcf5f88351a450ddbf26d14da97e13350a86a40b444 extends \Twig\Template
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
        echo "<ul>
";
        // line 2
        if (($this->getAttribute(($context["page"] ?? null), "template", []) == "modular")) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                if ($this->getAttribute($this->getAttribute($context["module"], "header", []), "menu", [])) {
                    // line 4
                    echo "    <li class=\"menu-item";
                    if (($this->getAttribute($context["loop"], "index", []) == 1)) {
                        echo " active";
                    }
                    echo "\">
        <a href=\"#";
                    // line 5
                    echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($context["module"], "folder", []), "_"), "html", null, true);
                    echo "\" data-scroll>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "header", []), "menu", []), "html", null, true);
                    echo "</a>
    </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 10
                echo "    ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? (" active") : (""));
                // line 11
                echo "    <li class=\"menu-item";
                echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                echo "\">
        <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 16,  83 => 12,  78 => 11,  75 => 10,  70 => 9,  54 => 5,  47 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul>
{% if page.template == 'modular' %}
    {% for module in page.collection() if module.header.menu %}
    <li class=\"menu-item{% if loop.index == 1 %} active{% endif %}\">
        <a href=\"#{{ module.folder|trim('_') }}\" data-scroll>{{ module.header.menu }}</a>
    </li>
    {% endfor %}
{% else %}
    {% for p in pages.children.visible %}
    {% set current_page = (p.active or p.activeChild) ? ' active' : '' %}
    <li class=\"menu-item{{ current_page }}\">
        <a href=\"{{ p.url }}\">{{ p.menu }}</a>
    </li>
    {% endfor %}
{% endif %}
</ul>
", "partials/navigation.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\partials\\navigation.html.twig");
    }
}
