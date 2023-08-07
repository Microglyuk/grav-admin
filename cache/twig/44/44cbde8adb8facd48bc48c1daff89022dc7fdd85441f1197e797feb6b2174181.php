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

/* modular/contact.html.twig */
class __TwigTemplate_1e753dfd1c9d9ea719fa0dc2a34eb9f4efd8e823c219dd5aa60277ff6df3bba7 extends \Twig\Template
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
        echo "<div class=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
                <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
                <span class=\"line\"></span>
                <div class=\"top\">";
        // line 7
        echo ($context["content"] ?? null);
        echo "</div>
            </div>
        </div>
        <div class=\"row os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
            ";
        // line 11
        $context["form_button_outer_classes"] = "form-field form-group col-md-12";
        // line 12
        echo "            ";
        $this->loadTemplate("forms/form.html.twig", "modular/contact.html.twig", 12)->display(twig_array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), ["contact"])]));
        // line 13
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  50 => 12,  48 => 11,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
                <h2>{{ page.header.title|raw }}</h2>
                <span class=\"line\"></span>
                <div class=\"top\">{{ content|raw }}</div>
            </div>
        </div>
        <div class=\"row os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\">
            {% set form_button_outer_classes = 'form-field form-group col-md-12' %}
            {% include \"forms/form.html.twig\" with {'form': forms('contact')} %}
        </div>
    </div>
</div>
", "modular/contact.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\contact.html.twig");
    }
}
