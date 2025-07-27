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

/* ecole/index.html.twig */
class __TwigTemplate_75cd73e4b80cc41835053601920146df238b489541d837e7c1bd65300ab8676f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ecole/index.html.twig", 1);
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

        yield "Hello EcoleController!";
        
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
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>enregisterer ecole</title>
</head>
<body class=\"bg-indigo\">  
<section class=\"h-100 h-custom gradient-custom-2\">
  <div class=\"container py-5 h-100\">
    <h1 class=\"text-center text-white mb-5\">Enregistrer une école</h1>
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12\">
        <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-0\">
            <div class=\"row g-0\">
              <div class=\"col-lg-6\">
                ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        yield "
                
                <div class=\"p-5\">
                  <h3 class=\"fw-normal mb-5\" style=\"color: #4835d4;\">Identité administrative</h3>

                  <div class=\"row\">
                    <div class=\"col-md-12 mb-4 pb-2\">
                      <div data-mdb-input-init class=\"form-outline\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'widget');
        yield "
                        <label class=\"form-label\" for=\"form3Examplev2\">Entrez le nom de l'école</label>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-md-12\">
                      <div data-mdb-input-init class=\"form-outline\">
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "directeur", [], "any", false, false, false, 39), 'widget');
        yield "
                        <label class=\"form-label\" for=\"form3Examplev5\">Entrez le nom du directeur</label>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-md-6 mb-4 pb-2\">
                      <div data-mdb-input-init class=\"form-outline\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "sigle", [], "any", false, false, false, 47), 'widget');
        yield "
                        <label class=\"form-label\" for=\"form3Examplev3\">Entrez le sigle de l'école</label>
                      </div>
                    </div> 
                    <div class=\"col-md-6 mb-4 pb-2\">
                      <div data-mdb-input-init class=\"form-outline\">
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53), 'widget');
        yield "
                        <label class=\"form-label\" for=\"form3Examplev2\">Entrez le type de l'école</label>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    
                    <div class=\"col-md-6 mb-4 pb-2\">

                      <div data-mdb-input-init class=\"form-outline\">
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "code", [], "any", false, false, false, 63), 'widget');
        yield "
                        <label class=\"form-label\" for=\"form3Examplev3\">Entrez le code de l'école</label>
                      </div>

                    </div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-md-6 mb-4 pb-2 mb-md-0 pb-md-0\">

                      <div data-mdb-input-init class=\"form-outline\">
                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "createAt", [], "any", false, false, false, 74), 'widget');
        yield "
                        <label class=\"form-label\" for=\"form3Examplev5\">Date de création</label>
                      </div>
                    </div>
                    
                  </div>

                </div>
              </div>
            <div class=\"col-lg-6 bg-primary text-white\">
                <div class=\"p-5\">
                  <h3 class=\"fw-normal mb-5\">Localisation & Contacts</h3>

                  <div class=\"mb-4 pb-2\">
                    <div data-mdb-input-init class=\"form-outline form-white\">
                       ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "adresses", [], "any", false, false, false, 89), 'widget');
        yield "
                      <label class=\"form-label\" for=\"form3Examplea2\">Entrez l'adresse de l'école</label>
                    </div>
                  </div>

                  <div class=\"mb-4 pb-2\">
                    <div data-mdb-input-init class=\"form-outline form-white\">
                      ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "telephone", [], "any", false, false, false, 96), 'widget');
        yield "
                      <label class=\"form-label\" for=\"form3Examplea3\">Entrez le numéro de téléphone</label>
                    </div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-md-5 mb-4 pb-2\">
                      <div data-mdb-input-init class=\"form-outline form-white\">
                        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "departement", [], "any", false, false, false, 104), 'widget');
        yield "
                        <label class=\"form-label\" for=\"form3Examplea4\">Entrez le département</label>
                      </div>

                    </div>
                    <div class=\"col-md-7 mb-4 pb-2\">

                      <div data-mdb-input-init class=\"form-outline form-white\">
                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "region", [], "any", false, false, false, 112), 'widget');
        yield "
                        <label class=\"form-label\" for=\"form3Examplea5\">Entrez la région</label>
                      </div>

                    </div>
                  </div>

                  <button  type=\"submit\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-light btn-lg\"
                    data-mdb-ripple-color=\"dark\">Enregistrer</button>

                </div>
                ";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
        yield "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class=\"text-center text-white mt-5\">
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © YOBS PRODUCTIONS ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - Tous droits réservés
  </div>
</footer>
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
        return "ecole/index.html.twig";
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
        return array (  251 => 134,  237 => 123,  223 => 112,  212 => 104,  201 => 96,  191 => 89,  173 => 74,  159 => 63,  146 => 53,  137 => 47,  126 => 39,  115 => 31,  104 => 23,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EcoleController!{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>enregisterer ecole</title>
</head>
<body class=\"bg-indigo\">  
<section class=\"h-100 h-custom gradient-custom-2\">
  <div class=\"container py-5 h-100\">
    <h1 class=\"text-center text-white mb-5\">Enregistrer une école</h1>
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12\">
        <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-0\">
            <div class=\"row g-0\">
              <div class=\"col-lg-6\">
                {{ form_start(form) }}
                
                <div class=\"p-5\">
                  <h3 class=\"fw-normal mb-5\" style=\"color: #4835d4;\">Identité administrative</h3>

                  <div class=\"row\">
                    <div class=\"col-md-12 mb-4 pb-2\">
                      <div data-mdb-input-init class=\"form-outline\">
                        {{ form_widget(form.nom) }}
                        <label class=\"form-label\" for=\"form3Examplev2\">Entrez le nom de l'école</label>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-md-12\">
                      <div data-mdb-input-init class=\"form-outline\">
                        {{ form_widget(form.directeur) }}
                        <label class=\"form-label\" for=\"form3Examplev5\">Entrez le nom du directeur</label>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-md-6 mb-4 pb-2\">
                      <div data-mdb-input-init class=\"form-outline\">
                        {{ form_widget(form.sigle) }}
                        <label class=\"form-label\" for=\"form3Examplev3\">Entrez le sigle de l'école</label>
                      </div>
                    </div> 
                    <div class=\"col-md-6 mb-4 pb-2\">
                      <div data-mdb-input-init class=\"form-outline\">
                        {{ form_widget(form.type) }}
                        <label class=\"form-label\" for=\"form3Examplev2\">Entrez le type de l'école</label>
                      </div>
                    </div>
                  </div>
                  <div class=\"row\">
                    
                    <div class=\"col-md-6 mb-4 pb-2\">

                      <div data-mdb-input-init class=\"form-outline\">
                        {{ form_widget(form.code) }}
                        <label class=\"form-label\" for=\"form3Examplev3\">Entrez le code de l'école</label>
                      </div>

                    </div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-md-6 mb-4 pb-2 mb-md-0 pb-md-0\">

                      <div data-mdb-input-init class=\"form-outline\">
                        {{ form_widget(form.createAt) }}
                        <label class=\"form-label\" for=\"form3Examplev5\">Date de création</label>
                      </div>
                    </div>
                    
                  </div>

                </div>
              </div>
            <div class=\"col-lg-6 bg-primary text-white\">
                <div class=\"p-5\">
                  <h3 class=\"fw-normal mb-5\">Localisation & Contacts</h3>

                  <div class=\"mb-4 pb-2\">
                    <div data-mdb-input-init class=\"form-outline form-white\">
                       {{ form_widget(form.adresses) }}
                      <label class=\"form-label\" for=\"form3Examplea2\">Entrez l'adresse de l'école</label>
                    </div>
                  </div>

                  <div class=\"mb-4 pb-2\">
                    <div data-mdb-input-init class=\"form-outline form-white\">
                      {{ form_widget(form.telephone) }}
                      <label class=\"form-label\" for=\"form3Examplea3\">Entrez le numéro de téléphone</label>
                    </div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-md-5 mb-4 pb-2\">
                      <div data-mdb-input-init class=\"form-outline form-white\">
                        {{ form_widget(form.departement) }}
                        <label class=\"form-label\" for=\"form3Examplea4\">Entrez le département</label>
                      </div>

                    </div>
                    <div class=\"col-md-7 mb-4 pb-2\">

                      <div data-mdb-input-init class=\"form-outline form-white\">
                        {{ form_widget(form.region) }}
                        <label class=\"form-label\" for=\"form3Examplea5\">Entrez la région</label>
                      </div>

                    </div>
                  </div>

                  <button  type=\"submit\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-light btn-lg\"
                    data-mdb-ripple-color=\"dark\">Enregistrer</button>

                </div>
                {{ form_end(form) }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class=\"text-center text-white mt-5\">
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © YOBS PRODUCTIONS {{ 'now'|date('Y') }} - Tous droits réservés
  </div>
</footer>
</body>
</html>
{% endblock %}
", "ecole/index.html.twig", "E:\\site_ecole\\templates\\ecole\\index.html.twig");
    }
}
