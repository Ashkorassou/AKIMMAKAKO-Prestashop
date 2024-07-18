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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig */
class __TwigTemplate_8fe1ee48c7258839a5c17f192ba39ad7d978ef1bbeda6c9078c9b1b7f1cc30d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig"));

        // line 25
        echo "
<div class=\"card customer-discounts-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">loyalty</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 30, $this->source); })()), "discountsInformation", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerDiscountGrid"]) || array_key_exists("customerDiscountGrid", $context) ? $context["customerDiscountGrid"] : (function () { throw new RuntimeError('Variable "customerDiscountGrid" does not exist.', 33, $this->source); })()), "data", [], "any", false, false, false, 33), "records_total", [], "any", false, false, false, 33), 0))) {
            // line 34
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", 34)->display(twig_array_merge($context, ["grid" => (isset($context["customerDiscountGrid"]) || array_key_exists("customerDiscountGrid", $context) ? $context["customerDiscountGrid"] : (function () { throw new RuntimeError('Variable "customerDiscountGrid" does not exist.', 34, $this->source); })())]));
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%firstname% %lastname% has no discount vouchers", ["%firstname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 37, $this->source); })()), "personalInformation", [], "any", false, false, false, 37), "firstName", [], "any", false, false, false, 37), "%lastname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 37, $this->source); })()), "personalInformation", [], "any", false, false, false, 37), "lastName", [], "any", false, false, false, 37)], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 40
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 40,  70 => 37,  67 => 36,  64 => 35,  61 => 34,  59 => 33,  53 => 30,  49 => 29,  43 => 25,);
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

<div class=\"card customer-discounts-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">loyalty</i>
    {{ 'Vouchers'|trans({}, 'Admin.Orderscustomers.Feature') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.discountsInformation|length }}</span>
  </h3>
  <div class=\"card-body\">
    {% if customerDiscountGrid.data.records_total > 0 %}
      {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': customerDiscountGrid} %}
    {% else %}
      <p class=\"text-muted text-center mb-0\">
        {{ '%firstname% %lastname% has no discount vouchers'|trans({'%firstname%': customerInformation.personalInformation.firstName, '%lastname%': customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", "C:\\wamp64\\www\\prestashop2\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\discounts.html.twig");
    }
}
