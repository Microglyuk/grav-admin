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

/* forms/field.html.twig */
class __TwigTemplate_80f4e1cf898b6ba15a069ec35607df5de21334ad22ae05983c4e6664d27e5e6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'outer_field_classes' => [$this, 'block_outer_field_classes'],
            'contents' => [$this, 'block_contents'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", []) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", []) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", [])) . "-") . $this->getAttribute(($context["field"] ?? null), "name", []));
        // line 6
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->getCookie(($context["cookie_name"] ?? null))))) : (($context["value"] ?? null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", []), $this->getAttribute(($context["field"] ?? null), "name", []));
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        // line 10
        echo "    <div class=\"";
        ((($context["form_field_outer_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_outer_classes"] ?? null), "html", null, true))) : (print ("form-field")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "outerclasses", []), "html", null, true);
        echo " ";
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 11
        $this->displayBlock('contents', $context, $blocks);
        // line 68
        echo "    </div>
";
    }

    // line 10
    public function block_outer_field_classes($context, array $blocks = [])
    {
    }

    // line 11
    public function block_contents($context, array $blocks = [])
    {
        // line 12
        echo "            <div class=\"";
        ((($context["form_field_outer_data_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_outer_data_classes"] ?? null), "html", null, true))) : (print ("form-data")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "dataclasses", []), "html", null, true);
        echo "\"
                ";
        // line 13
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 18
        echo "            >
                ";
        // line 19
        $this->displayBlock('group', $context, $blocks);
        // line 60
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 61
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
                        <span class=\"form-description\">";
            // line 62
            echo $this->getAttribute(($context["field"] ?? null), "description", []);
            echo "</span>
                    </div>
                ";
        }
        // line 65
        echo "
            </div>
        ";
    }

    // line 13
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 14
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 15
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
    }

    // line 19
    public function block_group($context, array $blocks = [])
    {
        // line 20
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 59
        echo "                ";
    }

    // line 20
    public function block_input($context, array $blocks = [])
    {
        // line 21
        echo "                        <div class=\"";
        ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-input-wrapper")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
                            ";
        // line 22
        $this->displayBlock('prepend', $context, $blocks);
        // line 23
        echo "                            <input
                                ";
        // line 25
        echo "                                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
                                value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 28
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 48
        echo "                            />
                            ";
        // line 49
        $this->displayBlock('append', $context, $blocks);
        // line 50
        echo "                            ";
        if (($this->getAttribute(($context["form"] ?? null), "inline_errors", []) && ($context["errors"] ?? null))) {
            // line 51
            echo "                                <div class=\"";
            ((($context["form_errors_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_errors_classes"] ?? null), "html", null, true))) : (print ("form-errors")));
            echo "\">
                                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 53
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                </div>
                            ";
        }
        // line 57
        echo "                        </div>
                    ";
    }

    // line 22
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 28
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 29
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 30
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 31
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 32
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 33
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 34
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 35
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 36
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 37
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 38
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "attributes", [], "any", true, true)) {
            // line 39
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 40
                echo "                                          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                    ";
        }
        // line 43
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 44
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []));
            echo "\"";
        }
        // line 45
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 46
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])));
            echo "\" ";
        }
        // line 47
        echo "                                ";
    }

    // line 49
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 49,  328 => 47,  322 => 46,  315 => 45,  308 => 44,  303 => 43,  300 => 42,  289 => 40,  284 => 39,  281 => 38,  274 => 37,  269 => 36,  264 => 35,  259 => 34,  252 => 33,  247 => 32,  240 => 31,  233 => 30,  226 => 29,  223 => 28,  218 => 22,  213 => 57,  209 => 55,  200 => 53,  196 => 52,  191 => 51,  188 => 50,  186 => 49,  183 => 48,  180 => 28,  176 => 26,  171 => 25,  168 => 23,  166 => 22,  157 => 21,  154 => 20,  150 => 59,  147 => 20,  144 => 19,  138 => 16,  134 => 15,  129 => 14,  126 => 13,  120 => 65,  114 => 62,  107 => 61,  104 => 60,  102 => 19,  99 => 18,  97 => 13,  90 => 12,  87 => 11,  82 => 10,  77 => 68,  75 => 11,  62 => 10,  56 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
{% set value = (is_object(value) or value is null ? (get_cookie(cookie_name) is null ? field.default : get_cookie(cookie_name)) : value) %}
{% set errors = attribute(form.messages, field.name) %}

{% block field %}
    <div class=\"{{ form_field_outer_classes ?: 'form-field' }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            <div class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if form.inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                    {% for error in errors %}
                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">{{ field.description|raw }}</span>
                    </div>
                {% endif %}

            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/field.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\forms\\field.html.twig");
    }
}
