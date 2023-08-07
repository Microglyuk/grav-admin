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

/* forms/fields/select/select.html.twig */
class __TwigTemplate_870021c24999aecb1622f0c890e8b6000efdf64401bd4d517e02c01d1bcf5781 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/select/select.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 4
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "selectize", [])) : ([]))), "html_attr");
        echo "\"
    ";
        // line 5
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_input($context, array $blocks = [])
    {
        // line 9
        echo "    <div class=\"";
        ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-select-wrapper")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
        <select name=\"";
        // line 10
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . (($this->getAttribute(($context["field"] ?? null), "multiple", [])) ? ("[]") : (""))), "html", null, true);
        echo "\"
                class=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["form_field_select_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\"
                ";
        // line 12
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 13
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 17
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "multiple=\"multiple\"";
        }
        // line 19
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "tabindex", [])) {
            echo "tabindex=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "tabindex", []), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "form", [])) {
            echo "form=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "form", []), "html", null, true);
            echo "\"";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "key", [])) {
            // line 24
            echo "                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                ";
        }
        // line 26
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", [])) {
            // line 27
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", []));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 28
                echo "                        data-";
                echo twig_escape_filter($this->env, $context["datakey"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                ";
        }
        // line 31
        echo "                >
            ";
        // line 32
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "<option value=\"\" disabled selected>";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []));
            echo "</option>";
        }
        // line 33
        echo "
            ";
        // line 34
        $context["options"] = $this->getAttribute(($context["field"] ?? null), "options", []);
        // line 35
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", []), "create", []) && ($context["value"] ?? null))) {
            // line 36
            echo "              ";
            $context["custom_value"] = (($this->getAttribute(($context["field"] ?? null), "multiple", [])) ? (($context["value"] ?? null)) : ([($context["value"] ?? null) => ($context["value"] ?? null)]));
            // line 37
            echo "              ";
            $context["options"] = array_unique(twig_array_merge(($context["options"] ?? null), ((array_key_exists("custom_value", $context)) ? (_twig_default_filter(($context["custom_value"] ?? null), [])) : ([]))));
            // line 38
            echo "            ";
        }
        // line 39
        echo "
            ";
        // line 40
        $context["value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (($context["value"] ?? null)) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 41
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item_value"]) {
            // line 42
            echo "                ";
            if ((twig_test_iterable($context["item_value"]) && $this->getAttribute($context["item_value"], "value", []))) {
                // line 43
                echo "                    ";
                $context["akey"] = ((($this->getAttribute(($context["field"] ?? null), "selectize", []) && $this->getAttribute(($context["field"] ?? null), "multiple", []))) ? ($context["item_value"]) : ($context["key"]));
                // line 44
                echo "                    ";
                $context["avalue"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($context["item_value"], "value", []));
                // line 45
                echo "                    <option ";
                echo (($this->getAttribute($context["item_value"], "disabled", [])) ? ("disabled=\"disabled\"") : (""));
                echo "
                        ";
                // line 46
                echo ((($this->getAttribute($context["item_value"], "selected", []) || ($context["key"] == ($context["value"] ?? null)))) ? ("selected=\"selected\"") : (""));
                echo "
                        ";
                // line 47
                (($this->getAttribute($context["item_value"], "label", [])) ? (print (twig_escape_filter($this->env, ("label=" . $this->getAttribute($context["item_value"], "label", [])), "html", null, true))) : (print ("")));
                echo "
                        value=\"";
                // line 48
                echo twig_escape_filter($this->env, ($context["akey"] ?? null), "html", null, true);
                echo "\"
                    >
                        ";
                // line 50
                echo ($context["avalue"] ?? null);
                echo "
                    </option>
                ";
            } elseif (twig_test_iterable(            // line 52
$context["item_value"])) {
                // line 53
                echo "                    ";
                $context["optgroup_label"] = twig_first($this->env, twig_get_array_keys_filter($context["item_value"]));
                // line 54
                echo "                    <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["optgroup_label"] ?? null)), "html_attr");
                echo "\">
                      ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), $context["key"], [], "array"), ($context["optgroup_label"] ?? null), [], "array"));
                foreach ($context['_seq'] as $context["subkey"] => $context["suboption"]) {
                    // line 56
                    echo "                          ";
                    $context["subkey"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($context["subkey"]);
                    // line 57
                    echo "                          ";
                    $context["item_value"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(((($this->getAttribute(($context["field"] ?? null), "selectize", []) && $this->getAttribute(($context["field"] ?? null), "multiple", []))) ? ($context["suboption"]) : ($context["subkey"])));
                    // line 58
                    echo "                          ";
                    $context["selected"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter((($this->getAttribute(($context["field"] ?? null), "selectize", [])) ? ($context["suboption"]) : ($context["subkey"])));
                    // line 59
                    echo "                          <option ";
                    if ((($context["subkey"] === ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", []) && twig_in_filter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                        echo "selected=\"selected\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["subkey"], "html", null, true);
                    echo "\">
                            ";
                    // line 60
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $context["suboption"]);
                    echo "
                          </option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['suboption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                    </optgroup>
                ";
            } else {
                // line 65
                echo "                    ";
                $context["val"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(((($this->getAttribute(($context["field"] ?? null), "selectize", []) && $this->getAttribute(($context["field"] ?? null), "multiple", []))) ? ($context["item_value"]) : ($context["key"])));
                // line 66
                echo "                    ";
                $context["selected"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter((($this->getAttribute(($context["field"] ?? null), "selectize", [])) ? ($context["item_value"]) : ($context["key"])));
                // line 67
                echo "                    <option ";
                if (((($context["val"] ?? null) === ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", []) && twig_in_filter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                    echo "selected=\"selected\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, ($context["val"] ?? null), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $context["item_value"]);
                echo "</option>
                ";
            }
            // line 69
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/select/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 70,  304 => 69,  292 => 67,  289 => 66,  286 => 65,  282 => 63,  273 => 60,  264 => 59,  261 => 58,  258 => 57,  255 => 56,  251 => 55,  246 => 54,  243 => 53,  241 => 52,  236 => 50,  231 => 48,  227 => 47,  223 => 46,  218 => 45,  215 => 44,  212 => 43,  209 => 42,  204 => 41,  202 => 40,  199 => 39,  196 => 38,  193 => 37,  190 => 36,  187 => 35,  185 => 34,  182 => 33,  176 => 32,  173 => 31,  170 => 30,  159 => 28,  154 => 27,  151 => 26,  145 => 24,  142 => 23,  135 => 22,  128 => 21,  121 => 20,  116 => 19,  111 => 18,  106 => 17,  101 => 16,  96 => 15,  91 => 14,  84 => 13,  78 => 12,  70 => 11,  66 => 10,  57 => 9,  54 => 8,  48 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}\"
    {{ parent() }}
{% endblock %}

{% block input %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-select-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        <select name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                class=\"{{ form_field_select_classes }} {{ field.classes }} {{ field.size }}\"
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
                {% if field.form %}form=\"{{ field.form }}\"{% endif %}
                {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                {% if field.key %}
                    data-key-observe=\"{{ (scope ~ field.name)|fieldName }}\"
                {% endif %}
                {% if field.datasets %}
                    {% for datakey, datavalue in field.datasets %}
                        data-{{ datakey }}=\"{{ datavalue|e('html_attr') }}\"
                    {% endfor %}
                {% endif %}
                >
            {% if field.placeholder %}<option value=\"\" disabled selected>{{ field.placeholder|t|raw }}</option>{% endif %}

            {% set options = field.options %}
            {% if field.selectize.create and value %}
              {% set custom_value = field.multiple ? value : { (value): value } %}
              {% set options = options|merge(custom_value|default([]))|array_unique %}
            {% endif %}

            {% set value = value is iterable ? value : value|string %}
            {% for key, item_value in options %}
                {% if item_value is iterable and item_value.value %}
                    {% set akey = field.selectize and field.multiple ? item_value : key %}
                    {% set avalue = item_value.value|t %}
                    <option {{ item_value.disabled ? 'disabled=\"disabled\"' : '' }}
                        {{ item_value.selected or key == value ? 'selected=\"selected\"' : '' }}
                        {{ item_value.label    ? 'label=' ~ item_value.label : '' }}
                        value=\"{{ akey }}\"
                    >
                        {{ avalue|raw }}
                    </option>
                {% elseif item_value is iterable %}
                    {% set optgroup_label = item_value|keys|first %}
                    <optgroup label=\"{{ optgroup_label|t|e('html_attr') }}\">
                      {% for subkey, suboption in field.options[key][optgroup_label] %}
                          {% set subkey = subkey|string %}
                          {% set item_value = (field.selectize and field.multiple ? suboption : subkey)|string %}
                          {% set selected = (field.selectize ? suboption : subkey)|string %}
                          <option {% if subkey is same as (value) or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ subkey }}\">
                            {{ suboption|t|raw }}
                          </option>
                      {% endfor %}
                    </optgroup>
                {% else %}
                    {% set val = (field.selectize and field.multiple ? item_value : key)|string %}
                    {% set selected = (field.selectize ? item_value : key)|string %}
                    <option {% if val is same as (value) or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ val }}\">{{ item_value|t|raw }}</option>
                {% endif %}
            {% endfor %}

        </select>
    </div>
{% endblock %}
", "forms/fields/select/select.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\select\\select.html.twig");
    }
}
