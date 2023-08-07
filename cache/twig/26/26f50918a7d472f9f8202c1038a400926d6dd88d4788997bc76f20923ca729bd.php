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

/* modular/updates.html.twig */
class __TwigTemplate_afac53ce08476df58b470aca9c1c608e5b9a7202e2b1316769719bff2ca6fb2b extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "blog_route", [])) {
            // line 2
            echo "    ";
            $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "blog_route", [])], "method");
            // line 3
            echo "
    ";
            // line 4
            if (($context["blog"] ?? null)) {
                // line 5
                echo "        ";
                $context["quantity"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "blog_post_quantity", []), 6);
                // line 6
                echo "        ";
                $context["collection"] = $this->getAttribute(($context["blog"] ?? null), "collection", [0 => ["items" => "@self.children", "limit" => ($context["quantity"] ?? null), "order" => ["by" => "date", "dir" => "desc"]]], "method");
                // line 7
                echo "        ";
                $context["image_width"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["theme_config"] ?? null), "blog_thumbnail_width", []), 600);
                // line 8
                echo "        ";
                $context["image_height"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["theme_config"] ?? null), "blog_thumbnail_height", []), 450);
                // line 9
                echo "        <section class=\"updates\">
            <div class=\"container blog-list\">
                <div class=\"row\">
                    <div class=\"col-lg-12 os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
                        <h2>";
                // line 13
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
                echo "</h2>
                        <span class=\"line\"></span>
                        <div class=\"top\">";
                // line 15
                echo ($context["content"] ?? null);
                echo "</div>
                    </div>
                </div>
                <div class=\"row\">
                    ";
                // line 19
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
                    // line 20
                    echo "                        ";
                    $this->loadTemplate("partials/blog_item.html.twig", "modular/updates.html.twig", 20)->display(twig_array_merge($context, ["p" => $context["child"], "image_width" => ($context["image_width"] ?? null), "image_height" => ($context["image_height"] ?? null)]));
                    // line 21
                    echo "                    ";
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
                // line 22
                echo "                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "blog_route", []), "html", null, true);
                echo "\" class=\"showmore\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_more_label", []), "html", null, true);
                echo "</a>
                    </div>
                </div>
            </div>
        </section>
        ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modular/updates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  104 => 22,  90 => 21,  87 => 20,  70 => 19,  63 => 15,  58 => 13,  52 => 9,  49 => 8,  46 => 7,  43 => 6,  40 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.blog_route %}
    {% set blog = page.find(page.header.blog_route) %}

    {% if blog %}
        {% set quantity = page.header.blog_post_quantity|defined(6) %}
        {% set collection = blog.collection({items: '@self.children', 'limit': quantity, 'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% set image_width = theme_config.blog_thumbnail_width|defined(600) %}
        {% set image_height = theme_config.blog_thumbnail_height|defined(450) %}
        <section class=\"updates\">
            <div class=\"container blog-list\">
                <div class=\"row\">
                    <div class=\"col-lg-12 os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
                        <h2>{{ page.header.title|raw }}</h2>
                        <span class=\"line\"></span>
                        <div class=\"top\">{{ content|raw }}</div>
                    </div>
                </div>
                <div class=\"row\">
                    {% for child in collection %}
                        {% include 'partials/blog_item.html.twig' with ({'p': child, 'image_width': image_width, 'image_height': image_height}) %}
                    {% endfor %}
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <a href=\"{{ page.header.blog_route }}\" class=\"showmore\">{{ page.header.show_more_label }}</a>
                    </div>
                </div>
            </div>
        </section>
        {% endif %}
{% endif %}
", "modular/updates.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\updates.html.twig");
    }
}
