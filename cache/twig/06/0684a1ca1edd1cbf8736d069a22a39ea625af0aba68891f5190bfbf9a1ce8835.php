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

/* partials/form-messages.html.twig */
class __TwigTemplate_4c584434d29a9d17c1524f2540eb8642a1dcef2efa45300dbda977999a3c7a9e extends \Twig\Template
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
        if ($this->getAttribute(($context["form"] ?? null), "message", [])) {
            // line 2
            echo "    ";
            $context["status_mapping"] = ["success" => "green", "error" => "red", "warning" => "yellow"];
            // line 3
            echo "    ";
            $context["message"] = ((($this->getAttribute(($context["form"] ?? null), "inline_errors", []) && $this->getAttribute(($context["form"] ?? null), "messages", []))) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FORM.VALIDATION_FAIL")) : ($this->getAttribute(($context["form"] ?? null), "message", [])));
            // line 4
            echo "    <div id=\"formMessage\" class=\"notices ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "status", []), "html", null, true);
            echo " ";
            (($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array")) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array"), "html", null, true))) : (print ("green")));
            echo "\"><p>";
            echo ($context["message"] ?? null);
            echo "</p></div>
";
            // line 5
            $context["js"] = ('' === $tmp = "\$(document).ready(function() {
    \$('html, body').animate({
        scrollTop: \$('#formMessage').offset().top - 100
    }, 2000);
})
") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["js"] ?? null), 1 => ["group" => "bottom"]], "method");
        }
    }

    public function getTemplateName()
    {
        return "partials/form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  47 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form.message %}
    {% set status_mapping = {'success':'green', 'error': 'red', 'warning': 'yellow'} %}
    {% set message = form.inline_errors and form.messages ? \"FORM.VALIDATION_FAIL\"|t : form.message %}
    <div id=\"formMessage\" class=\"notices {{ form.status }} {{ status_mapping[form.status] ?: 'green' }}\"><p>{{ message|raw }}</p></div>
{% set js %}
\$(document).ready(function() {
    \$('html, body').animate({
        scrollTop: \$('#formMessage').offset().top - 100
    }, 2000);
})
{% endset %}
{% do assets.addInlineJs(js, {'group': 'bottom'}) %}
{% endif %}
", "partials/form-messages.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\partials\\form-messages.html.twig");
    }
}
