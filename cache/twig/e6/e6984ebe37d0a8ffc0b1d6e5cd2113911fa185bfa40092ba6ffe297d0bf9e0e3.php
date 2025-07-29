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
class __TwigTemplate_28381996589f83861bcd9e07f37ccc1440761771cc1b1e823d4964829d89453f extends \Twig\Template
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
        echo "<div class=\"d-flex\">
  <!-- Sidebar -->
  <nav class=\"bg-dark text-white p-4 vh-100 d-flex flex-column align-items-center\" style=\"width: 250px;\">
    <!-- Profile image -->
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/profile.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle mb-3\" style=\"width: 100px; height: 100px; object-fit: cover;\">

    <!-- Owner Name -->
    <h5 class=\"mb-4\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "name", []), "html", null, true);
        echo "</h5>  ";
        // line 9
        echo "
    <!-- Navigation -->
    <ul class=\"nav flex-column w-100\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 13
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link text-white px-3 ";
            // line 14
            if (($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) {
                echo "fw-bold";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\" style=\"font-weight: normal;\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
          </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>

    <style>
      .nav-link:hover {
        font-weight: bold;
      }
    </style>
  </nav>
  <!-- Main Content / Banner -->
  <div class=\"flex-grow-1 p-5 text-white d-flex align-items-center justify-content-start\" style=\"background: url('";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/banner.png"), "html", null, true);
        echo "') center/cover no-repeat; min-height: 100vh;\">
    <div class=\"text-center text-white\">
      <h1>MD SAROWER JAHAN</h1>
      <h3> I'm a <span id=\"rotating-text\">  Developer</span> </h3>
    </div>
  </div>
</div>

<script>
  // JavaScript for rotating professions
  const professions = [\"Developer\", \"Designer\", \"Photographer\"];
  let index = 0;
  setInterval(() => {
    index = (index + 1) % professions.length;
    document.getElementById(\"rotating-text\").textContent = professions[index];
  }, 2000);
</script>
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
        return array (  86 => 28,  75 => 19,  65 => 15,  57 => 14,  54 => 13,  50 => 12,  45 => 9,  42 => 8,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex\">
  <!-- Sidebar -->
  <nav class=\"bg-dark text-white p-4 vh-100 d-flex flex-column align-items-center\" style=\"width: 250px;\">
    <!-- Profile image -->
    <img src=\"{{ url('theme://images/profile.jpg') }}\" alt=\"Profile\" class=\"rounded-circle mb-3\" style=\"width: 100px; height: 100px; object-fit: cover;\">

    <!-- Owner Name -->
    <h5 class=\"mb-4\">{{ site.owner.name }}</h5>  {# You can hardcode or pull from site.yaml #}

    <!-- Navigation -->
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
  <!-- Main Content / Banner -->
  <div class=\"flex-grow-1 p-5 text-white d-flex align-items-center justify-content-start\" style=\"background: url('{{ url('theme://images/banner.png') }}') center/cover no-repeat; min-height: 100vh;\">
    <div class=\"text-center text-white\">
      <h1>MD SAROWER JAHAN</h1>
      <h3> I'm a <span id=\"rotating-text\">  Developer</span> </h3>
    </div>
  </div>
</div>

<script>
  // JavaScript for rotating professions
  const professions = [\"Developer\", \"Designer\", \"Photographer\"];
  let index = 0;
  setInterval(() => {
    index = (index + 1) % professions.length;
    document.getElementById(\"rotating-text\").textContent = professions[index];
  }, 2000);
</script>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav-develop\\Project_3\\user\\themes\\saroTheme\\templates\\partials\\navigation.html.twig");
    }
}
