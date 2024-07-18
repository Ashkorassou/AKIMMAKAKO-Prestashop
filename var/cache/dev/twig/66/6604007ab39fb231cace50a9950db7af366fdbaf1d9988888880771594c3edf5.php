<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig */
class __TwigTemplate_58c3a4c8288dabb5b21461950a3d00e046feddbca02facf4179e035d2b1de480 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 26, $this->source); })()), "lastConnectionsInformation", [], "any", false, false, false, 26))) {
            // line 27
            echo "  <div class=\"card customer-last-connections-card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">access_time</i>
      ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last connections", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      <span class=\"badge badge-primary rounded\">";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 31, $this->source); })()), "lastConnectionsInformation", [], "any", false, false, false, 31)), "html", null, true);
            echo "</span>
    </h3>
    <div class=\"card-body\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pages viewed", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total time", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Origin", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IP Address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 46, $this->source); })()), "lastConnectionsInformation", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["connection"]) {
                // line 47
                echo "          <tr class=\"customer-last-connection\">
            <td class=\"customer-last-connection-id\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "connectionId", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-date\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "connectionDate", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-pages-viewed\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "pagesViewed", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-total-time\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "totalTime", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-origin\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "httpReferer", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
            <td class=\"customer-last-connection-ip-address\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["connection"], "ipAddress", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['connection'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </tbody>
      </table>
    </div>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 56,  120 => 53,  116 => 52,  112 => 51,  108 => 50,  104 => 49,  100 => 48,  97 => 47,  93 => 46,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  66 => 37,  57 => 31,  53 => 30,  48 => 27,  46 => 26,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% if customerInformation.lastConnectionsInformation is not empty %}
  <div class=\"card customer-last-connections-card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">access_time</i>
      {{ 'Last connections'|trans({}, 'Admin.Orderscustomers.Feature') }}
      <span class=\"badge badge-primary rounded\">{{ customerInformation.lastConnectionsInformation|length }}</span>
    </h3>
    <div class=\"card-body\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Pages viewed'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th>{{ 'Total time'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th>{{ 'Origin'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th>{{ 'IP Address'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
        </tr>
        </thead>
        <tbody>
        {% for connection in customerInformation.lastConnectionsInformation %}
          <tr class=\"customer-last-connection\">
            <td class=\"customer-last-connection-id\">{{ connection.connectionId }}</td>
            <td class=\"customer-last-connection-date\">{{ connection.connectionDate }}</td>
            <td class=\"customer-last-connection-pages-viewed\">{{ connection.pagesViewed }}</td>
            <td class=\"customer-last-connection-total-time\">{{ connection.totalTime }}</td>
            <td class=\"customer-last-connection-origin\">{{ connection.httpReferer }}</td>
            <td class=\"customer-last-connection-ip-address\">{{ connection.ipAddress }}</td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig", "C:\\wamp64\\www\\prestashop2\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\last_connections.html.twig");
    }
}
