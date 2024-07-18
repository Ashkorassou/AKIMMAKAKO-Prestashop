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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig */
class __TwigTemplate_d58f01af581bcb37496b30ce6c74c01f1ac80b7920f904c8f68119b10d637c2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig"));

        // line 25
        echo "
<div class=\"card customer-private-note-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">visibility_off</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body clearfix\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This note will be displayed to all employees but not to customers.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
      </p>
    </div>

    ";
        // line 38
        if ( !(null === (isset($context["privateNoteForm"]) || array_key_exists("privateNoteForm", $context) ? $context["privateNoteForm"] : (function () { throw new RuntimeError('Variable "privateNoteForm" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "      ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["privateNoteForm"]) || array_key_exists("privateNoteForm", $context) ? $context["privateNoteForm"] : (function () { throw new RuntimeError('Variable "privateNoteForm" does not exist.', 39, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_set_private_note", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 39, $this->source); })()), "customerId", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39)])]);
            echo "
        ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["privateNoteForm"]) || array_key_exists("privateNoteForm", $context) ? $context["privateNoteForm"] : (function () { throw new RuntimeError('Variable "privateNoteForm" does not exist.', 40, $this->source); })()), "note", [], "any", false, false, false, 40), 'widget');
            echo "

        <button class=\"btn btn-primary float-right mt-3\" id=\"save-private-note\" type=\"submit\">
          ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["privateNoteForm"]) || array_key_exists("privateNoteForm", $context) ? $context["privateNoteForm"] : (function () { throw new RuntimeError('Variable "privateNoteForm" does not exist.', 45, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 47
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 47,  82 => 45,  77 => 43,  71 => 40,  66 => 39,  64 => 38,  57 => 34,  49 => 29,  43 => 25,);
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

<div class=\"card customer-private-note-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">visibility_off</i>
    {{ 'Add a private note'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body clearfix\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'This note will be displayed to all employees but not to customers.'|trans({}, 'Admin.Orderscustomers.Help') }}
      </p>
    </div>

    {% if privateNoteForm is not null %}
      {{ form_start(privateNoteForm, {'action': path('admin_customers_set_private_note', {'customerId': customerInformation.customerId.value})}) }}
        {{ form_widget(privateNoteForm.note) }}

        <button class=\"btn btn-primary float-right mt-3\" id=\"save-private-note\" type=\"submit\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      {{ form_end(privateNoteForm) }}
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig", "C:\\wamp64\\www\\prestashop2\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\Blocks\\View\\private_note.html.twig");
    }
}
