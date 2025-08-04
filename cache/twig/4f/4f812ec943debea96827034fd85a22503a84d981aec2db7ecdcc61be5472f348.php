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

/* partials/navigation.html.twig */
class __TwigTemplate_f324384c681fa7b521e8f310285a8fdb7716ed67a653fd79d8708df8114d9a77 extends \Twig\Template
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
        // line 2
        $context["content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []);
        // line 3
        $context["home"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method");
        // line 4
        echo "



<nav class=\"bg-dark text-white p-4 vh-100 d-flex flex-column align-items-center position-fixed\" style=\"width: 250px;\">

";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["home"] ?? null), "media", []), "profile.jpg", [], "array")) {
            // line 11
            echo "
  <div>
    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["home"] ?? null), "media", []), "profile.jpg", [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"Profile\" class=\"rounded-circle mb-3 profile\" style=\"width: 120px; height: 120px; object-fit: cover;\">
  </div>

  ";
        }
        // line 17
        echo "  <h5 class=\"mb-4 text-white fs-6\">MD SAROWER JAHAN</h5>
  <ul class=\"nav flex-column w-100\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 20
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link text-white px-3 ";
            // line 21
            if (($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) {
                echo "fw-bold";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\" style=\"font-weight: normal;\">
          ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
        </a>
      </li>
      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </ul>
  <style>
    .nav-link:hover {
      font-weight: bold;
    }
  </style>
</nav>
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
        return array (  85 => 27,  74 => 22,  66 => 21,  63 => 20,  59 => 19,  55 => 17,  48 => 13,  44 => 11,  42 => 10,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# templates/partials/navbar.html.twig #}
{% set content = page.header.content %}
{% set home = page.find('/home') %}




<nav class=\"bg-dark text-white p-4 vh-100 d-flex flex-column align-items-center position-fixed\" style=\"width: 250px;\">

{% if home.media['profile.jpg'] %}

  <div>
    <img src=\"{{ home.media['profile.jpg'].url }}\" alt=\"Profile\" class=\"rounded-circle mb-3 profile\" style=\"width: 120px; height: 120px; object-fit: cover;\">
  </div>

  {% endif %}
  <h5 class=\"mb-4 text-white fs-6\">MD SAROWER JAHAN</h5>
  <ul class=\"nav flex-column w-100\">
    {% for page in pages.children.visible %}
      <li class=\"nav-item\">
        <a class=\"nav-link text-white px-3 {% if page.active or page.activeChild %}fw-bold{% endif %}\" href=\"{{ page.url }}\" style=\"font-weight: normal;\">
          {{ page.menu }}
        </a>
      </li>
      
    {% endfor %}
  </ul>
  <style>
    .nav-link:hover {
      font-weight: bold;
    }
  </style>
</nav>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\gravcms\\grav-portfolio1\\user\\themes\\theme4\\templates\\partials\\navigation.html.twig");
    }
}
