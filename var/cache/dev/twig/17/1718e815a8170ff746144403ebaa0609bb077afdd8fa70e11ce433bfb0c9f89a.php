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

/* security/login.html.twig */
class __TwigTemplate_686b20753a90ba6666024eb79060d27a83bedebbabaa20fb1a2264e46125b85a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Log in!";
        
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Login</title>
     
</head>
<body>
    <section class=\"vh-100\">
  <div class=\"container-fluid h-custom\">
    <div class=\"d-flex justify-content-center align-items-center h-100\">
        <div class=\"col-md-6 col-lg-6 col-xl-5\">
            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/img4.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Sample image\" style=\"width: 100%; height: 300px; object-fit: cover;\">
        </div>
        <div class=\"col-md-6 col-lg-6 col-xl-4 offset-xl-1\">
            <form method=\"post\">
                 ";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            yield "                    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageKey", [], "any", false, false, false, 25), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageData", [], "any", false, false, false, 25), "security"), "html", null, true);
            yield "</div>
                ";
        }
        // line 27
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            yield "                    <div class=\"mb-3\">
                        Vous êtes connecté en tant que ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "userIdentifier", [], "any", false, false, false, 29), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                    </div>
                ";
        }
        // line 32
        yield "                <div class=\"d-flex flex-row align-items-center justify-content-center justify-content-lg-start\">
                    <p class=\"lead fw-normal mb-0 me-3\">Sign in with</p>
                    <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-primary btn-floating mx-1\">
                    <i class=\"fas fa-facebook-f\"></i>
                    </button>
                    <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-primary btn-floating mx-1\">
                    <i class=\"fas fa-twitter\"></i>
                    </button>
                    <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-primary btn-floating mx-1\">
                    <i class=\"fas fa-linkedin-in\"></i>
                    </button>
                </div>
                <div class=\"divider d-flex align-items-center my-4\">
                    <p class=\"text-center fw-bold mx-3 mb-0\">Or</p>
                </div>
                <!-- Email input -->
                <div data-mdb-input-init class=\"form-outline mb-4\">
                    <label for=\"inputEmail\">Email</label>
                    <input type=\"email\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 50, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                    <label class=\"form-label\" for=\"inputEmail\">Email address</label>
                </div>
                <!-- Password input -->
                <div data-mdb-input-init class=\"form-outline mb-3\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                    <label class=\"form-label\" for=\"inputPassword\">Password</label>
                </div>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Checkbox -->
                    <div class=\"form-check mb-0\">
                    <input type=\"hidden\" name=\"_csrf_token\"
                                    value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                                >
                    </div>
                    <a href=\"#!\" class=\"text-body\">Forgot password?</a>
                </div>
                <div class=\"text-center text-lg-start mt-4 pt-2\">
                    <button class=\"btn btn-lg btn-primary w-100\" type=\"submit\">
                        Connexion
                    </button>
                    <p class=\"small fw-bold mt-2 pt-1 mb-0\">Vous n'avez pas de compte ? <a href=\"register\"
                        class=\"link-danger\">Inscrivez-vous</a></p>
                </div>
            </form>
            </div>
        </div>
    </div>
  <div
    class=\"d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary\">
    <!-- Copyright -->
    <div class=\"text-white mb-3 mb-md-0 text-center text-md-start\">
      Production © ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ". 
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href=\"#!\" class=\"text-white me-4\">
        <i class=\"fas fa-facebook-f\"></i>
      </a>
      <a href=\"#!\" class=\"text-white me-4\">
        <i class=\"fas fa-twitter\"></i>
      </a>
      <a href=\"#!\" class=\"text-white me-4\">
        <i class=\"fas fa-google\"></i>
      </a>
      <a href=\"#!\" class=\"text-white\">
        <i class=\"fas fa-linkedin-in\"></i>
      </a>
    </div>
    <!-- Right -->
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
        return "security/login.html.twig";
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
        return array (  188 => 82,  165 => 62,  150 => 50,  130 => 32,  122 => 29,  119 => 28,  116 => 27,  110 => 25,  108 => 24,  101 => 20,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Login</title>
     
</head>
<body>
    <section class=\"vh-100\">
  <div class=\"container-fluid h-custom\">
    <div class=\"d-flex justify-content-center align-items-center h-100\">
        <div class=\"col-md-6 col-lg-6 col-xl-5\">
            <img src=\"{{ asset('img/img4.png') }}\" class=\"img-fluid\" alt=\"Sample image\" style=\"width: 100%; height: 300px; object-fit: cover;\">
        </div>
        <div class=\"col-md-6 col-lg-6 col-xl-4 offset-xl-1\">
            <form method=\"post\">
                 {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                {% if app.user %}
                    <div class=\"mb-3\">
                        Vous êtes connecté en tant que {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                    </div>
                {% endif %}
                <div class=\"d-flex flex-row align-items-center justify-content-center justify-content-lg-start\">
                    <p class=\"lead fw-normal mb-0 me-3\">Sign in with</p>
                    <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-primary btn-floating mx-1\">
                    <i class=\"fas fa-facebook-f\"></i>
                    </button>
                    <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-primary btn-floating mx-1\">
                    <i class=\"fas fa-twitter\"></i>
                    </button>
                    <button  type=\"button\" data-mdb-button-init data-mdb-ripple-init class=\"btn btn-primary btn-floating mx-1\">
                    <i class=\"fas fa-linkedin-in\"></i>
                    </button>
                </div>
                <div class=\"divider d-flex align-items-center my-4\">
                    <p class=\"text-center fw-bold mx-3 mb-0\">Or</p>
                </div>
                <!-- Email input -->
                <div data-mdb-input-init class=\"form-outline mb-4\">
                    <label for=\"inputEmail\">Email</label>
                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                    <label class=\"form-label\" for=\"inputEmail\">Email address</label>
                </div>
                <!-- Password input -->
                <div data-mdb-input-init class=\"form-outline mb-3\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                    <label class=\"form-label\" for=\"inputPassword\">Password</label>
                </div>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Checkbox -->
                    <div class=\"form-check mb-0\">
                    <input type=\"hidden\" name=\"_csrf_token\"
                                    value=\"{{ csrf_token('authenticate') }}\"
                                >
                    </div>
                    <a href=\"#!\" class=\"text-body\">Forgot password?</a>
                </div>
                <div class=\"text-center text-lg-start mt-4 pt-2\">
                    <button class=\"btn btn-lg btn-primary w-100\" type=\"submit\">
                        Connexion
                    </button>
                    <p class=\"small fw-bold mt-2 pt-1 mb-0\">Vous n'avez pas de compte ? <a href=\"register\"
                        class=\"link-danger\">Inscrivez-vous</a></p>
                </div>
            </form>
            </div>
        </div>
    </div>
  <div
    class=\"d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary\">
    <!-- Copyright -->
    <div class=\"text-white mb-3 mb-md-0 text-center text-md-start\">
      Production © {{ \"now\"|date(\"Y\") }}. 
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href=\"#!\" class=\"text-white me-4\">
        <i class=\"fas fa-facebook-f\"></i>
      </a>
      <a href=\"#!\" class=\"text-white me-4\">
        <i class=\"fas fa-twitter\"></i>
      </a>
      <a href=\"#!\" class=\"text-white me-4\">
        <i class=\"fas fa-google\"></i>
      </a>
      <a href=\"#!\" class=\"text-white\">
        <i class=\"fas fa-linkedin-in\"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
</body>
</html>
{% endblock %}
", "security/login.html.twig", "E:\\site_ecole\\templates\\security\\login.html.twig");
    }
}
