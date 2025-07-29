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
class __TwigTemplate_d7886cf523f31c09f65b5845c3d322237474655eaa52cd4dbdb26fb9f11088e5 extends \Twig\Template
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
        echo "<nav class=\"bg-dark text-white p-4 vh-100 d-flex flex-column align-items-center position-fixed\" style=\"width: 250px;\">
  <div>
    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/profile.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle mb-3 profile\" style=\"width: 120px; height: 120px; object-fit: cover;\">
  </div>
  <h5 class=\"mb-4 text-white fs-6\">MD SAROWER JAHAN</h5>
  <ul class=\"nav flex-column w-100\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link text-white px-3 ";
            // line 10
            if (($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) {
                echo "fw-bold";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\" style=\"font-weight: normal;\">
          ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
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
        return array (  66 => 15,  56 => 11,  48 => 10,  45 => 9,  41 => 8,  34 => 4,  30 => 2,);
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
<nav class=\"bg-dark text-white p-4 vh-100 d-flex flex-column align-items-center position-fixed\" style=\"width: 250px;\">
  <div>
    <img src=\"{{ url('theme://images/profile.jpg') }}\" alt=\"Profile\" class=\"rounded-circle mb-3 profile\" style=\"width: 120px; height: 120px; object-fit: cover;\">
  </div>
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
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav-develop\\Project_3\\user\\themes\\theme99\\templates\\partials\\navigation.html.twig");
    }
}
