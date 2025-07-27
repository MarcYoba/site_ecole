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

/* produit/produit.html.twig */
class __TwigTemplate_e2285727168bbeab4a68a817a808be10a34c104247d6ffd2939e0d381c965109 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/produit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello ProduitController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste de produits</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .product-card {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
            align-items: flex-start;
        }

        .product-image {
            width: 100px;
            height: 100px;
            background: #e9ecef;
            border-radius: 4px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 12px;
        }

        .product-info {
            flex-grow: 1;
        }

        .product-title {
            font-weight: 600;
            color: #212529;
            margin-bottom: 4px;
            font-size: 16px;
        }

        .product-brand {
            color: #495057;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .product-price {
            font-weight: bold;
            color: #e60000;
            font-size: 16px;
        }

        .link-indicator {
            color: #0d6efd;
            font-size: 12px;
            margin-top: 5px;
        }

        .product-card:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"form-group row\">
                <div class=\"col-sm-12\">
                    <div class=\"product-card\">
                    <div class=\"product-image\">Image</div>
                    <div class=\"product-info\">
                        <div class=\"product-title\">Service de creation de carte scolaire au enfant</div>
                        <div class=\"product-brand\">carte informatique de controle de presence</div>
                        <div class=\"product-price\">Rs 2599</div>
                        <div class=\"link-indicator\"> Evolution continue </div>
                    </div>
                </div>
            </div>
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
        return "produit/produit.html.twig";
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
        return array (  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProduitController!{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste de produits</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .product-card {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
            align-items: flex-start;
        }

        .product-image {
            width: 100px;
            height: 100px;
            background: #e9ecef;
            border-radius: 4px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 12px;
        }

        .product-info {
            flex-grow: 1;
        }

        .product-title {
            font-weight: 600;
            color: #212529;
            margin-bottom: 4px;
            font-size: 16px;
        }

        .product-brand {
            color: #495057;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .product-price {
            font-weight: bold;
            color: #e60000;
            font-size: 16px;
        }

        .link-indicator {
            color: #0d6efd;
            font-size: 12px;
            margin-top: 5px;
        }

        .product-card:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"form-group row\">
                <div class=\"col-sm-12\">
                    <div class=\"product-card\">
                    <div class=\"product-image\">Image</div>
                    <div class=\"product-info\">
                        <div class=\"product-title\">Service de creation de carte scolaire au enfant</div>
                        <div class=\"product-brand\">carte informatique de controle de presence</div>
                        <div class=\"product-price\">Rs 2599</div>
                        <div class=\"link-indicator\"> Evolution continue </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
{% endblock %}
", "produit/produit.html.twig", "E:\\site_ecole\\templates\\produit\\produit.html.twig");
    }
}
