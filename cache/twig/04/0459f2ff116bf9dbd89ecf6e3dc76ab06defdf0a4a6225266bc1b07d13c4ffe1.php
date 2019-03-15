<?php

/* post-list.html.twig */
class __TwigTemplate_b21d23dbea2832ba01cfcea22c174aa490d3b3ffc8f94b6ff394563a56d41564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("post-list.html.twig", "post-list.html.twig", 1, "1598236397")->display($context);
    }

    public function getTemplateName()
    {
        return "post-list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection %}
    {% set pagination = collection.params.pagination %}

    {% set jscroll_init %}
    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    {% endset %}

    {% block javascripts %}
        {{ parent() }}
        {% do assets.addInlineJs(jscroll_init) %}
    {% endblock %}

    {% block header %}
        {% if theme_config.home_profile %}
            {% include 'partials/profile.html.twig' %}
        {% else %}
            {{ parent() }}
        {% endif %}
    {% endblock %}

    {% block content %}
    <ul id=\"post-list\" class=\"infinite-scroll\">
        {% for post in collection %}
        {% include 'partials/post-item.html.twig' %}
        {% endfor %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/load-more.html.twig' %}
        {% endif %}
    </ul>

    {% endblock %}

{% endembed %}
", "post-list.html.twig", "/var/www/html/user/themes/cacti/templates/post-list.html.twig");
    }
}


/* post-list.html.twig */
class __TwigTemplate_b21d23dbea2832ba01cfcea22c174aa490d3b3ffc8f94b6ff394563a56d41564_1598236397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post-list.html.twig", 1);
        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", []);
        // line 4
        $context["pagination"] = $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []);
        // line 6
        $context["jscroll_init"] = ('' === $tmp = "    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        // line 16
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["jscroll_init"] ?? null)], "method");
        // line 18
        echo "    ";
    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        // line 21
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "home_profile", [])) {
            // line 22
            echo "            ";
            $this->loadTemplate("partials/profile.html.twig", "post-list.html.twig", 22)->display($context);
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
        ";
        }
        // line 26
        echo "    ";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "    <ul id=\"post-list\" class=\"infinite-scroll\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 31
            echo "        ";
            $this->loadTemplate("partials/post-item.html.twig", "post-list.html.twig", 31)->display($context);
            // line 32
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 34
            echo "            ";
            $this->loadTemplate("partials/load-more.html.twig", "post-list.html.twig", 34)->display($context);
            // line 35
            echo "        ";
        }
        // line 36
        echo "    </ul>

    ";
    }

    public function getTemplateName()
    {
        return "post-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 36,  208 => 35,  205 => 34,  202 => 33,  188 => 32,  185 => 31,  168 => 30,  165 => 29,  162 => 28,  158 => 26,  152 => 24,  149 => 23,  146 => 22,  143 => 21,  140 => 20,  136 => 18,  134 => 17,  129 => 16,  126 => 15,  122 => 1,  114 => 6,  112 => 4,  110 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection %}
    {% set pagination = collection.params.pagination %}

    {% set jscroll_init %}
    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    {% endset %}

    {% block javascripts %}
        {{ parent() }}
        {% do assets.addInlineJs(jscroll_init) %}
    {% endblock %}

    {% block header %}
        {% if theme_config.home_profile %}
            {% include 'partials/profile.html.twig' %}
        {% else %}
            {{ parent() }}
        {% endif %}
    {% endblock %}

    {% block content %}
    <ul id=\"post-list\" class=\"infinite-scroll\">
        {% for post in collection %}
        {% include 'partials/post-item.html.twig' %}
        {% endfor %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/load-more.html.twig' %}
        {% endif %}
    </ul>

    {% endblock %}

{% endembed %}
", "post-list.html.twig", "/var/www/html/user/themes/cacti/templates/post-list.html.twig");
    }
}
