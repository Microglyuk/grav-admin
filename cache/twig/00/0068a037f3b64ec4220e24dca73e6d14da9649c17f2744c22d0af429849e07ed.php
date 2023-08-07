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

/* modular/cta1.html.twig */
class __TwigTemplate_cd19e6ac8684a3379ff412edee1d31fce71794bdbdfa6123ffee9acbda399ce2 extends \Twig\Template
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
        echo "<div class=\"joinnow\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">
                <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "heading", []);
        echo "</h2> <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_label", []), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/cta1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"joinnow\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">
                <h2>{{ page.header.heading|raw }}</h2> <a href=\"{{ page.header.button_url}}\">{{ page.header.button_label }}</a>
            </div>
        </div>
    </div>
</div>
", "modular/cta1.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\themes\\mache\\templates\\modular\\cta1.html.twig");
    }
}
