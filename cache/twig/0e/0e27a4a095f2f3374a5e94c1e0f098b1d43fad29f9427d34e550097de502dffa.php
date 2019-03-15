<?php

/* partials/navigation.html.twig */
class __TwigTemplate_d366d388717bd5e7457d45204aff397cbe5c28d6627bdac212a660689b0ef873 extends Twig_Template
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
        echo "<section id=\"navigation\">

    <nav class=\"main-nav\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "            ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
            // line 6
            echo "            <a class=\"";
            echo ($context["current_page"] ?? null);
            echo "\" href=\"";
            echo $this->getAttribute($context["page"], "url", []);
            echo "\">
                ";
            // line 7
            if ($this->getAttribute($context["page"], "home", [])) {
                echo "<span class=\"arrow\">←</span> ";
            }
            // line 8
            echo "                ";
            if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                echo "\"></i>";
            }
            // line 9
            echo "                ";
            echo $this->getAttribute($context["page"], "menu", []);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 13
            echo "            <a class=\"cta\" href=\"";
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/blog"], "method"), "rawRoute", []);
            echo ".rss\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SUBSCRIBE");
            echo "</a>
        ";
        }
        // line 15
        echo "    </nav>
    ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 17
            echo "        ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/navigation.html.twig", 17)->display($context);
            // line 18
            echo "    ";
        }
        // line 19
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  79 => 18,  76 => 17,  74 => 16,  71 => 15,  62 => 13,  59 => 12,  49 => 9,  42 => 8,  38 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navigation\">

    <nav class=\"main-nav\">
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <a class=\"{{ current_page }}\" href=\"{{ page.url }}\">
                {% if page.home %}<span class=\"arrow\">←</span> {% endif %}
                {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                {{ page.menu }}
            </a>
        {% endfor %}
        {% if config.plugins.feed.enabled %}
            <a class=\"cta\" href=\"{{ base_url }}{{ pages.find('/blog').rawRoute }}.rss\">{{ 'SUBSCRIBE'|t }}</a>
        {% endif %}
    </nav>
    {% if config.plugins.langswitcher.enabled %}
        {% include 'partials/langswitcher.html.twig' %}
    {% endif %}
</section>
", "partials/navigation.html.twig", "/var/www/html/user/themes/cacti/templates/partials/navigation.html.twig");
    }
}
