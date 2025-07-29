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
class __TwigTemplate_273d423e6b21dc99536da6e1749082e0ba47d3f76c88058224be38f19043e783 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container menu_nav\">
      
    <!-- Left: Logo -->
          <div class=\"d-flex align-items-center flex-grow-1\">
            <a class=\"navbar-brand\" href=\"#\">
              <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/logo.png\" alt=\"Logo\" />
            </a>
          </div>

          <!-- Center: Menu -->
          <div class=\"collapse navbar-collapse justify-content-center flex-grow-1 main-nav \" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav\">
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 15
            echo "                <li class=\"nav-item ";
            if (($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) {
                echo " active";
            }
            echo "\">
                  <a class=\" menu\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "</a>
                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
          </div>

          <!-- Right: Download CV -->
          <div class=\"d-flex justify-content-end align-items-center flex-grow-1 menu-button\">
            <a href=\"#\" class=\"btn btn-outline-primary\">Download CV</a>
          </div>

          <!-- Toggler (should be at top-level for mobile) -->
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

  </div>
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
        return array (  70 => 19,  59 => 16,  52 => 15,  48 => 14,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container menu_nav\">
      
    <!-- Left: Logo -->
          <div class=\"d-flex align-items-center flex-grow-1\">
            <a class=\"navbar-brand\" href=\"#\">
              <img src=\"{{ theme_url }}/images/logo.png\" alt=\"Logo\" />
            </a>
          </div>

          <!-- Center: Menu -->
          <div class=\"collapse navbar-collapse justify-content-center flex-grow-1 main-nav \" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav\">
              {% for page in pages.children.visible %}
                <li class=\"nav-item {% if page.active or page.activeChild %} active{% endif %}\">
                  <a class=\" menu\" href=\"{{ page.url }}\">{{ page.menu }}</a>
                </li>
              {% endfor %}
            </ul>
          </div>

          <!-- Right: Download CV -->
          <div class=\"d-flex justify-content-end align-items-center flex-grow-1 menu-button\">
            <a href=\"#\" class=\"btn btn-outline-primary\">Download CV</a>
          </div>

          <!-- Toggler (should be at top-level for mobile) -->
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

  </div>
</nav>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav-develop\\Project_3\\user\\themes\\bullet\\templates\\partials\\navigation.html.twig");
    }
}
