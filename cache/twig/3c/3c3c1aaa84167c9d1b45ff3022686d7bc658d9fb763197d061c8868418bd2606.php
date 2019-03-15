<?php

/* partials/footer.html.twig */
class __TwigTemplate_f3a18a0a839cae220be835ad1ffdf2821286e655eec380424d6d9178269f136b extends Twig_Template
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
        echo "<footer id=\"footer\">
    <p class=\"small\">";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.COPYRIGHT", twig_date_format_filter($this->env, "now", "Y"));
        echo "</p>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\">
    <p class=\"small\">{{ 'SITE.COPYRIGHT'|t(\"now\"|date('Y')) }}</p>
</footer>
", "partials/footer.html.twig", "/var/www/html/user/themes/cacti/templates/partials/footer.html.twig");
    }
}
