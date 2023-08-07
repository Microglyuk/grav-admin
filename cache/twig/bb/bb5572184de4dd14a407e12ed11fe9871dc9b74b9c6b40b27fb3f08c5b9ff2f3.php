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

/* forms/form.html.twig */
class __TwigTemplate_57e117e682d5044e3d78713ecfed74162fcb5330e928a94258a76e90a692b43e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
DO NOT MODIFY!

Default layout can be found in form plugin or your theme:

templates/forms/layouts/form/default-form.html.twig
templates/forms/layouts/field/default-field.html.twig
templates/forms/layouts/button/default-button.html.twig

If you want to use multiple different layouts in your site, you can do:

```
form:
  name: my-form
  layout: tailwind
```

and copy the above files to:

templates/forms/layouts/form/tailwind-form.html.twig
templates/forms/layouts/field/tailwind-field.html.twig
templates/forms/layouts/button/tailwind-button.html.twig

You can also override individual fields by copying (using text field as an example):

templates/forms/fields/text/text.html.twig -> templates/forms/fields/text/tailwind-text.html.twig

#}
{% extends \"forms/default/form.html.twig\" %}
", "forms/form.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\plugins\\form\\templates\\forms\\form.html.twig");
    }
}
