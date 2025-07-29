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

/* produit/create.html.twig */
class __TwigTemplate_450b6a26faa8e2ab43b3f81a0767f86987f43ac29eeb4b7909632f6be2e2dcbc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/create.html.twig", 1);
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
</head>
<body>
    <section class=\"vh-100 gradient-custom\">
  <div class=\"container py-5 h-100\">
    <div class=\"row justify-content-center align-items-center h-100\">
      <div class=\"col-12 col-lg-9 col-xl-7\">
        <div class=\"card shadow-2-strong card-registration\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-4 p-md-5\">
            <h3 class=\"mb-4 pb-2 pb-md-0 mb-md-5\">Enregistrer un produit</h3>
            <form method=\"post\">
                ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        yield "
              <div class=\"row\">
                <div class=\"col-md-6 mb-4\">

                  <div data-mdb-input-init class=\"form-outline\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        // line 29
        yield "
                    <label class=\"form-label\" for=\"firstName\">Nom</label>
                  </div>

                </div>
                <div class=\"col-md-6 mb-4\">

                  <div data-mdb-input-init class=\"form-outline\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "quantite", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        // line 39
        yield "
                    <label class=\"form-label\" for=\"lastName\">Quantite</label>
                  </div>

                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-md-6 mb-4 d-flex align-items-center\">

                  <div data-mdb-input-init class=\"form-outline datepicker w-100\">
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "prix", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        // line 52
        yield "
                    <label for=\"birthdayDate\" class=\"form-label\">Prix</label>
                  </div>

                </div>
                <div class=\"col-md-6 mb-4\">
                  <div data-mdb-input-init class=\"form-outline datepicker w-100\">
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "createAt", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control form-control-lg", "type" => "date"]]);
        // line 61
        yield "
                    <label for=\"birthdayDate\" class=\"form-label\">Date de création</label>
                  </div>

                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-md-6 mb-4 pb-2\">

                  <div data-mdb-input-init class=\"form-outline\">
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "caracterique", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        // line 74
        yield "
                    <label class=\"form-label\" for=\"emailAddress\">caracterique</label>
                  </div>

                </div>
                <div class=\"col-md-6 mb-4 pb-2\">

                  <div data-mdb-input-init class=\"form-outline\">
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        // line 84
        yield "
                    <label class=\"form-label\" for=\"phoneNumber\">description</label>
                  </div>

                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "image", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control form-control-lg", "type" => "file"]]);
        // line 95
        yield "
                </div>
              </div>

              <div class=\"mt-4 pt-2\">
                <input data-mdb-ripple-init class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Submit\" />
              </div>

            ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        yield "
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
        return "produit/create.html.twig";
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
        return array (  201 => 103,  191 => 95,  189 => 93,  178 => 84,  176 => 82,  166 => 74,  164 => 72,  151 => 61,  149 => 59,  140 => 52,  138 => 50,  125 => 39,  123 => 37,  113 => 29,  111 => 27,  103 => 22,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
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
</head>
<body>
    <section class=\"vh-100 gradient-custom\">
  <div class=\"container py-5 h-100\">
    <div class=\"row justify-content-center align-items-center h-100\">
      <div class=\"col-12 col-lg-9 col-xl-7\">
        <div class=\"card shadow-2-strong card-registration\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-4 p-md-5\">
            <h3 class=\"mb-4 pb-2 pb-md-0 mb-md-5\">Enregistrer un produit</h3>
            <form method=\"post\">
                {{ form_start(form) }}
              <div class=\"row\">
                <div class=\"col-md-6 mb-4\">

                  <div data-mdb-input-init class=\"form-outline\">
                    {{ form_widget(form.nom, {
                        'attr': {'class': 'form-control form-control-lg'}
                    }) }}
                    <label class=\"form-label\" for=\"firstName\">Nom</label>
                  </div>

                </div>
                <div class=\"col-md-6 mb-4\">

                  <div data-mdb-input-init class=\"form-outline\">
                    {{ form_widget(form.quantite,{
                        'attr': {'class': 'form-control form-control-lg'}
                    }) }}
                    <label class=\"form-label\" for=\"lastName\">Quantite</label>
                  </div>

                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-md-6 mb-4 d-flex align-items-center\">

                  <div data-mdb-input-init class=\"form-outline datepicker w-100\">
                    {{ form_widget(form.prix, {
                        'attr': {'class': 'form-control form-control-lg'}
                    }) }}
                    <label for=\"birthdayDate\" class=\"form-label\">Prix</label>
                  </div>

                </div>
                <div class=\"col-md-6 mb-4\">
                  <div data-mdb-input-init class=\"form-outline datepicker w-100\">
                    {{ form_widget(form.createAt, {
                        'attr': {'class': 'form-control form-control-lg', 'type': 'date'}
                    }) }}
                    <label for=\"birthdayDate\" class=\"form-label\">Date de création</label>
                  </div>

                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-md-6 mb-4 pb-2\">

                  <div data-mdb-input-init class=\"form-outline\">
                    {{ form_widget(form.caracterique, {
                        'attr': {'class': 'form-control form-control-lg'}
                    }) }}
                    <label class=\"form-label\" for=\"emailAddress\">caracterique</label>
                  </div>

                </div>
                <div class=\"col-md-6 mb-4 pb-2\">

                  <div data-mdb-input-init class=\"form-outline\">
                    {{ form_widget(form.description, {
                        'attr': {'class': 'form-control form-control-lg'}
                    }) }}
                    <label class=\"form-label\" for=\"phoneNumber\">description</label>
                  </div>

                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-12\">
                    {{ form_widget(form.image, {
                        'attr': {'class': 'form-control form-control-lg', 'type': 'file'}
                    }) }}
                </div>
              </div>

              <div class=\"mt-4 pt-2\">
                <input data-mdb-ripple-init class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Submit\" />
              </div>

            {{ form_end(form) }}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
{% endblock %}", "produit/create.html.twig", "E:\\site_ecole\\templates\\produit\\create.html.twig");
    }
}
