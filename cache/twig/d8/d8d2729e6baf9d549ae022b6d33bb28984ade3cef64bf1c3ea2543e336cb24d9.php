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

/* forms/fields/captcha/captcha.html.twig */
class __TwigTemplate_61f33c72d5e5fa345c343780d0a06644315100b679062650a1cd0a8a67ad63b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'label' => [$this, 'block_label'],
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
        // line 3
        $context["config"] = $this->getAttribute(($context["grav"] ?? null), "config", []);
        // line 4
        $context["site_key"] = ((($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", []) && ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", []) != "ENTER_YOUR_CAPTCHA_SITE_KEY"))) ? ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "recaptcha", []), "site_key", [])));
        // line 5
        $context["action"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("underscor", ((twig_trim_filter($this->getAttribute(($context["page"] ?? null), "route", []), "/") . "-") . $this->getAttribute(($context["form"] ?? null), "name", [])));
        // line 6
        $context["formName"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("underscor", $this->getAttribute(($context["form"] ?? null), "name", []));
        // line 7
        $context["theme"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "recaptcha", [], "any", false, true), "theme", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "recaptcha", [], "any", false, true), "theme", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "recaptcha", [], "any", false, true), "theme", [])) : ("light"));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/captcha/captcha.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_label($context, array $blocks = [])
    {
    }

    // line 11
    public function block_input($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        if ( !($context["site_key"] ?? null)) {
            // line 13
            echo "      <script type=\"application/javascript\">console && console.error('site_key was not defined for form \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "name", []), "html", null, true);
            echo "\" (Grav Form Plugin)')</script>
  ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
($context["config"] ?? null), "plugins", []), "form", []), "recaptcha", []), "version", []) == 3)) {
            // line 15
            echo "      ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => ((("https://www.google.com/recaptcha/api.js?render=" . ($context["site_key"] ?? null)) . "&theme=") . ($context["theme"] ?? null))], "method");
            // line 16
            echo "      ";
            // line 17
            echo "      <script type=\"application/javascript\">
          window.gRecaptchaInstances = window.gRecaptchaInstances || {};
          window.gRecaptchaInstances['";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "'] = {
              element: document.querySelector('form#";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "'),
              submit: function (event) {
                  event.preventDefault();
                  grecaptcha.ready(function () {
                      grecaptcha.execute('";
            // line 24
            echo twig_escape_filter($this->env, ($context["site_key"] ?? null), "html", null, true);
            echo "', {action: '";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "'}).then(function (token) {
                          var tokenElement = document.createElement('input');
                          tokenElement.setAttribute('type', 'hidden');
                          tokenElement.setAttribute('name', 'data[token]');
                          tokenElement.setAttribute('value', token);

                          var actionElement = document.createElement('input');
                          actionElement.setAttribute('type', 'hidden');
                          actionElement.setAttribute('name', 'data[action]');
                          actionElement.setAttribute('value', '";
            // line 33
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "');

                          const form = window.gRecaptchaInstances['";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "'].element;
                          const submit = window.gRecaptchaInstances['";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "'].submit;
                          form.insertBefore(tokenElement, form.firstChild);
                          form.insertBefore(actionElement, form.firstChild);
                          form.removeEventListener('submit', submit);
                          form.submit();
                      });
                  });
              }
          };

          window.gRecaptchaInstances['";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "'].element.addEventListener('submit', window.gRecaptchaInstances['";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "'].submit);
      </script>
  ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 48
($context["config"] ?? null), "plugins", []), "form", []), "recaptcha", []), "version", []) == "2-invisible")) {
            // line 49
            echo "      <script type=\"application/javascript\">
          function captchaOnloadCallback_";
            // line 50
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "() {
              var form = document.querySelector('form#";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "');
              var submits = form.querySelectorAll('[type=\"submit\"]') || [];
              submits.forEach(function(submit) {
                  submit.addEventListener('click', function(event) {
                      event.preventDefault();
                      var captchaElement = form.querySelector('#g-recaptcha-";
            // line 56
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "');

                      if (captchaElement) {
                          captchaElement.remove();
                      }

                      captchaElement = document.createElement('div');
                      captchaElement.setAttribute('id', 'g-recaptcha-";
            // line 63
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "');
                      form.appendChild(captchaElement);

                      var widgetReference = grecaptcha.render('g-recaptcha-";
            // line 66
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "', {
                          sitekey: '";
            // line 67
            echo twig_escape_filter($this->env, ($context["site_key"] ?? null), "html", null, true);
            echo "', size: 'invisible',
                          callback: function(/* token */) {
                              form.submit();
                          }
                      });

                      grecaptcha.execute(widgetReference);
                  });
              });
          }
      </script>

      <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_";
            // line 79
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "&hl=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "language", []), "html", null, true);
            echo "&theme=";
            echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
            echo "\"
              async defer></script>
  ";
        } else {
            // line 82
            echo "    <script type=\"application/javascript\">
        var captchaOnloadCallback_";
            // line 83
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo " = function captchaOnloadCallback_";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "() {
            grecaptcha.render('g-recaptcha-";
            // line 84
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "', {
                'sitekey': \"";
            // line 85
            echo twig_escape_filter($this->env, ($context["site_key"] ?? null), "html", null, true);
            echo "\",
                'callback': captchaValidatedCallback_";
            // line 86
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo ",
                'expired-callback': captchaExpiredCallback_";
            // line 87
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "
            });
        };

        var captchaValidatedCallback_";
            // line 91
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo " = function captchaValidatedCallback_";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "() {};
        var captchaExpiredCallback_";
            // line 92
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo " = function captchaExpiredCallback_";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "() {
            grecaptcha.reset();
        };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_";
            // line 96
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "&render=explicit&hl=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "language", []), "html", null, true);
            echo "&theme=";
            echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
            echo " \"
        async defer></script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha-";
            // line 98
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" data-theme=\"";
            echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
            echo "\"></div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/captcha/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 98,  237 => 96,  228 => 92,  222 => 91,  215 => 87,  211 => 86,  207 => 85,  203 => 84,  197 => 83,  194 => 82,  184 => 79,  169 => 67,  165 => 66,  159 => 63,  149 => 56,  141 => 51,  137 => 50,  134 => 49,  132 => 48,  125 => 46,  112 => 36,  108 => 35,  103 => 33,  89 => 24,  82 => 20,  78 => 19,  74 => 17,  72 => 16,  69 => 15,  67 => 14,  62 => 13,  59 => 12,  56 => 11,  51 => 9,  46 => 1,  44 => 7,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
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

{% set config = grav.config %}
{% set site_key = field.recaptcha_site_key and field.recaptcha_site_key != 'ENTER_YOUR_CAPTCHA_SITE_KEY' ? field.recaptcha_site_key : config.plugins.form.recaptcha.site_key %}
{% set action = (page.route|trim('/') ~ '-' ~ form.name)|underscorize %}
{% set formName = form.name|underscorize %}
{% set theme = config.plugins.form.recaptcha.theme ?? 'light' %}

{% block label %}{% endblock %}

{% block input %}
  {% if not site_key %}
      <script type=\"application/javascript\">console && console.error('site_key was not defined for form \"{{ form.name }}\" (Grav Form Plugin)')</script>
  {% elseif config.plugins.form.recaptcha.version == 3 %}
      {% do assets.addJs('https://www.google.com/recaptcha/api.js?render='~site_key~'&theme=' ~ theme) %}
      {#<script src='https://www.google.com/recaptcha/api.js?render={{ site_key }}&theme={{ theme }}'></script>#}
      <script type=\"application/javascript\">
          window.gRecaptchaInstances = window.gRecaptchaInstances || {};
          window.gRecaptchaInstances['{{ form.id }}'] = {
              element: document.querySelector('form#{{ form.id }}'),
              submit: function (event) {
                  event.preventDefault();
                  grecaptcha.ready(function () {
                      grecaptcha.execute('{{ site_key }}', {action: '{{ action }}'}).then(function (token) {
                          var tokenElement = document.createElement('input');
                          tokenElement.setAttribute('type', 'hidden');
                          tokenElement.setAttribute('name', 'data[token]');
                          tokenElement.setAttribute('value', token);

                          var actionElement = document.createElement('input');
                          actionElement.setAttribute('type', 'hidden');
                          actionElement.setAttribute('name', 'data[action]');
                          actionElement.setAttribute('value', '{{ action }}');

                          const form = window.gRecaptchaInstances['{{ form.id }}'].element;
                          const submit = window.gRecaptchaInstances['{{ form.id }}'].submit;
                          form.insertBefore(tokenElement, form.firstChild);
                          form.insertBefore(actionElement, form.firstChild);
                          form.removeEventListener('submit', submit);
                          form.submit();
                      });
                  });
              }
          };

          window.gRecaptchaInstances['{{ form.id }}'].element.addEventListener('submit', window.gRecaptchaInstances['{{ form.id }}'].submit);
      </script>
  {% elseif config.plugins.form.recaptcha.version == '2-invisible' %}
      <script type=\"application/javascript\">
          function captchaOnloadCallback_{{ formName }}() {
              var form = document.querySelector('form#{{ form.id }}');
              var submits = form.querySelectorAll('[type=\"submit\"]') || [];
              submits.forEach(function(submit) {
                  submit.addEventListener('click', function(event) {
                      event.preventDefault();
                      var captchaElement = form.querySelector('#g-recaptcha-{{ formName }}');

                      if (captchaElement) {
                          captchaElement.remove();
                      }

                      captchaElement = document.createElement('div');
                      captchaElement.setAttribute('id', 'g-recaptcha-{{ formName }}');
                      form.appendChild(captchaElement);

                      var widgetReference = grecaptcha.render('g-recaptcha-{{ formName }}', {
                          sitekey: '{{ site_key }}', size: 'invisible',
                          callback: function(/* token */) {
                              form.submit();
                          }
                      });

                      grecaptcha.execute(widgetReference);
                  });
              });
          }
      </script>

      <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_{{ formName }}&hl={{ grav.language.language }}&theme={{ theme }}\"
              async defer></script>
  {% else %}
    <script type=\"application/javascript\">
        var captchaOnloadCallback_{{ formName }} = function captchaOnloadCallback_{{ formName }}() {
            grecaptcha.render('g-recaptcha-{{ formName }}', {
                'sitekey': \"{{ site_key }}\",
                'callback': captchaValidatedCallback_{{ formName }},
                'expired-callback': captchaExpiredCallback_{{ formName }}
            });
        };

        var captchaValidatedCallback_{{ formName }} = function captchaValidatedCallback_{{ formName }}() {};
        var captchaExpiredCallback_{{ formName }} = function captchaExpiredCallback_{{ formName }}() {
            grecaptcha.reset();
        };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_{{ formName }}&render=explicit&hl={{ grav.language.language }}&theme={{ theme }} \"
        async defer></script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha-{{ formName }}\" data-theme=\"{{ theme }}\"></div>
  {% endif %}
{% endblock %}
", "forms/fields/captcha/captcha.html.twig", "C:\\wamp64\\www\\git\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\captcha\\captcha.html.twig");
    }
}
