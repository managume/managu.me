<?php

/* partials/base.html.twig */
class __TwigTemplate_9fc23844209eadebe6c1a1f4b2a9de9c28e499f95f77801b16144e412fc72c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        $context["avatar_url"] = (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/about"], "method"), "media", []), "images", [])), "url", [])) ? ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/about"], "method"), "media", []), "images", [])), "url", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/avatar.png")));
        // line 3
        $context["dates"] = $this->loadTemplate("macros/dates.twig", "partials/base.html.twig", 3);
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 11
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
  <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"My Blog\" href=\"/rss.xml\">
  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

  ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
</head>
<body>

    ";
        // line 28
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 28)->display($context);
        // line 29
        echo "
    <section id=\"wrapper\">
        ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
        <div class=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
        ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "        </div>

        ";
        // line 41
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "    </section>

    ";
        // line 46
        if ($this->getAttribute(($context["site"] ?? null), "analytics", [])) {
            // line 47
            echo "    ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 47)->display($context);
            // line 48
            echo "    ";
        }
        // line 49
        echo "</body>
</html>
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css", 1 => 100], "method");
        // line 16
        echo "  ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        // line 20
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 21
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => 100], "method");
        // line 22
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.jscroll.min.js"], "method");
        // line 23
        echo "  ";
    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        // line 32
        echo "            ";
        if (( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header", []) === false) && $this->getAttribute(($context["theme_config"] ?? null), "title_header", []))) {
            // line 33
            echo "                ";
            $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 33)->display($context);
            // line 34
            echo "            ";
        }
        // line 35
        echo "        ";
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
    }

    // line 41
    public function block_footer($context, array $blocks = [])
    {
        // line 42
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 42)->display($context);
        // line 43
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
        return array (  167 => 43,  164 => 42,  161 => 41,  156 => 38,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  140 => 31,  136 => 23,  133 => 22,  130 => 21,  127 => 20,  124 => 19,  120 => 16,  117 => 15,  114 => 14,  108 => 49,  105 => 48,  102 => 47,  100 => 46,  96 => 44,  94 => 41,  90 => 39,  88 => 38,  84 => 37,  81 => 36,  79 => 31,  75 => 29,  73 => 28,  65 => 24,  63 => 19,  57 => 17,  55 => 14,  50 => 12,  42 => 11,  33 => 5,  30 => 4,  28 => 3,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set avatar_url = pages.find('/about').media.images|first.url ?: url('theme://images/avatar.png') %}
{% import 'macros/dates.twig' as dates %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>
  <link rel=\"shortcut icon\" href=\"{{ url('theme://images/favicon.ico') }}\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"My Blog\" href=\"/rss.xml\">
  {% block stylesheets %}
    {% do assets.addCss('theme://css/style.css',100) %}
  {% endblock %}
  {{ assets.css() }}

  {% block javascripts %}
      {% do assets.addJs('jquery',101) %}
      {% do assets.addJs('theme://js/main.js',100) %}
      {% do assets.addJs('theme://js/jquery.jscroll.min.js') %}
  {% endblock %}
  {{ assets.js() }}
</head>
<body>

    {% include 'partials/navigation.html.twig' %}

    <section id=\"wrapper\">
        {% block header %}
            {% if page.header.header is not same as(false) and theme_config.title_header %}
                {% include 'partials/header.html.twig' %}
            {% endif %}
        {% endblock %}

        <div class=\"{{ page.header.class }}\">
        {% block content %}{% endblock %}
        </div>

        {% block footer %}
        {% include 'partials/footer.html.twig' %}
        {% endblock %}
    </section>

    {% if site.analytics %}
    {% include 'partials/analytics.html.twig' %}
    {% endif %}
</body>
</html>
", "partials/base.html.twig", "/var/www/html/user/themes/cacti/templates/partials/base.html.twig");
    }
}
