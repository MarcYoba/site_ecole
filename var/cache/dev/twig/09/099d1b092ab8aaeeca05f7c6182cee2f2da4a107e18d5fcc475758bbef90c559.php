<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user/list.html.twig */
class __TwigTemplate_2250b71a5160021a0fa559bd4c611977f689a8198e5b9dcacb1023b9f27c63fd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "User List";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User List</title>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
</head>
<body>
<div class=\"container\">
<div class=\"row\">
\t<div class=\"col-lg-12\">
        <h1 class=\"page-header\">Liste des utilisateurs</h1>
\t\t<div class=\"main-box clearfix\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table user-list\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><span>Utilisateur</span></th>
\t\t\t\t\t\t\t<th><span>Créé</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span>Statut</span></th>
\t\t\t\t\t\t\t<th><span>Email</span></th>
\t\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 32
            yield "                            <tr>
                                <td>
                                    <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"\" style=\"width: 50px; height: 50px;\">
                                    <a href=\"#\" class=\"user-link\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 35), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 35), "html", null, true);
            yield "</a>
                                    <span class=\"user-subhead\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 36), ", "), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    2013/08/08
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"label label-default\">Inactive</span>
                                </td>
                                <td>
                                    <a href=\"#\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 45), "html", null, true);
            yield "</a>
                                </td>
                                <td style=\"width: 20%;\">
                                    <a href=\"#\" class=\"table-link\">
                                        <span class=\"fa-stack\">
                                            <i class=\"fa fa-square fa-stack-2x\"></i>
                                            <i class=\"fa fa-search-plus fa-stack-1x fa-inverse\"></i>
                                        </span>
                                    </a>
                                    <a href=\"#\" class=\"table-link\">
                                        <span class=\"fa-stack\">
                                            <i class=\"fa fa-square fa-stack-2x\"></i>
                                            <i class=\"fa fa-pencil fa-stack-1x fa-inverse\"></i>
                                        </span>
                                    </a>
                                    <a href=\"#\" class=\"table-link danger\">
                                        <span class=\"fa-stack\">
                                            <i class=\"fa fa-square fa-stack-2x\"></i>
                                            <i class=\"fa fa-trash-o fa-stack-1x fa-inverse\"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<ul class=\"pagination pull-right\">
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-chevron-left\"></i></a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i></a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
</div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  173 => 69,  143 => 45,  131 => 36,  125 => 35,  120 => 32,  116 => 31,  93 => 11,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}User List{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User List</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
</head>
<body>
<div class=\"container\">
<div class=\"row\">
\t<div class=\"col-lg-12\">
        <h1 class=\"page-header\">Liste des utilisateurs</h1>
\t\t<div class=\"main-box clearfix\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table user-list\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><span>Utilisateur</span></th>
\t\t\t\t\t\t\t<th><span>Créé</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span>Statut</span></th>
\t\t\t\t\t\t\t<th><span>Email</span></th>
\t\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
                        {% for user in users %}
                            <tr>
                                <td>
                                    <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"\" style=\"width: 50px; height: 50px;\">
                                    <a href=\"#\" class=\"user-link\">{{ user.nom }} {{ user.prenom }}</a>
                                    <span class=\"user-subhead\">{{ user.roles|join(', ') }}</span>
                                </td>
                                <td>
                                    2013/08/08
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"label label-default\">Inactive</span>
                                </td>
                                <td>
                                    <a href=\"#\">{{ user.email }}</a>
                                </td>
                                <td style=\"width: 20%;\">
                                    <a href=\"#\" class=\"table-link\">
                                        <span class=\"fa-stack\">
                                            <i class=\"fa fa-square fa-stack-2x\"></i>
                                            <i class=\"fa fa-search-plus fa-stack-1x fa-inverse\"></i>
                                        </span>
                                    </a>
                                    <a href=\"#\" class=\"table-link\">
                                        <span class=\"fa-stack\">
                                            <i class=\"fa fa-square fa-stack-2x\"></i>
                                            <i class=\"fa fa-pencil fa-stack-1x fa-inverse\"></i>
                                        </span>
                                    </a>
                                    <a href=\"#\" class=\"table-link danger\">
                                        <span class=\"fa-stack\">
                                            <i class=\"fa fa-square fa-stack-2x\"></i>
                                            <i class=\"fa fa-trash-o fa-stack-1x fa-inverse\"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<ul class=\"pagination pull-right\">
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-chevron-left\"></i></a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i></a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
</div>
</body>
</html>
{% endblock %}
", "user/list.html.twig", "E:\\site_ecole\\templates\\user\\list.html.twig");
    }
}
