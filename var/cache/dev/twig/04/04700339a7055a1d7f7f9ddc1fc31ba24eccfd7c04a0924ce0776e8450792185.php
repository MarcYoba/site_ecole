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

/* home/index.html.twig */
class __TwigTemplate_3747b514a8e0249e1a2821a9cb4d220bc1ac378f42446b5e36b98a80f57d4895 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "YOBS";
        
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
    <!-- <link rel=\"stylesheet\" href=\"/style.css\"> -->
    <title>YOBS </title>
    <!-- favicon -->
    
    <!-- slider links -->
    <!-- <script src=\"http://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script> -->
    <script src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jQuery3.4.1.js"), "html", null, true);
        yield "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/content.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/header.css"), "html", null, true);
        yield "\">
    <style>
        body
        {
            margin: 0;
        }
        #containerSlider
        {
            margin: auto;
            width: 90%;
            text-align: center;
            padding-top: 100px;
            box-sizing: border-box;
        }
        #containerSlider img
        {
            width: 100%;
            height: 140%;
            text-align: center;
            align-content: center;
        }
        @media(max-width: 732px)
        {
            #containerSlider img
            {
                height: 12em;
            }
        }
        @media(max-width: 500px)
        {
            #containerSlider img
            {
                height: 10em;
            }
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header>
        <section>
            <!-- MAIN CONTAINER -->
            <div id=\"container\">
                <!-- SHOP NAME -->
                <div id=\"shopName\"><a href=\"login\"> <b>YOBS </b></a></div>
                    <!-- COLLCETIONS ON WEBSITE -->
                    <nav id=\"collection\" style=\"display: flex; gap: 2rem; align-items: center; margin-left: 2rem;\">
                        <div id=\"clothing\">
                            <a href=\"#\" style=\"text-decoration: none; color: inherit; font-weight: bold;\">NOS SERVICES</a>
                        </div>
                        <div id=\"accessories\">
                            <a href=\"#\" style=\"text-decoration: none; color: inherit; font-weight: bold;\">ACCESSORIES</a>
                        </div>
                        <div id=\"entreprise\">
                            <a href=\"login\" style=\"text-decoration: none; color: inherit; font-weight: bold;\">SCHOOL</a>
                        </div>
                    </nav>
                    <!-- SEARCH SECTION -->
                    <div id=\"search\">
                        <i class=\"fas fa-search search\"></i>
                        <input type=\"text\" id=\"input\" name=\"searchBox\" placeholder=\"Search for Clothing and Accessories\">
                    </div>
                    <!-- USER SECTION (CART AND USER ICON) -->
                    <div id=\"user\">
                        <a href=\"#\"> <i class=\"fas fa-user-circle userIcon\"></i> </a>
                    </div>
            </div>

        </section>
    </header>
    <!-- SLIDER -->
    <div id=\"3\"></div>
    <section>
            <div id=\"containerSlider\">
                <div id=\"slidingImage\">
                    <img src=\"img/img1.jpg\" alt=\"image1\" style=\"width: 100%; height: 300px; object-fit: cover;\">
                </div>
                <div id=\"slidingImage\">
                     <img src=\"img/img2.jpg\" alt=\"image2\" style=\"width: 100%; height: 300px; object-fit: cover;\">
                </div>
                <div id=\"slidingImage\"> 
                    <img src=\"img/img3.png\" alt=\"image3\" style=\"width: 100%; height: 300px; object-fit: cover;\"> 
                </div>
                <div id=\"slidingImage\"> 
                    <img src=\"img/img4.png\" alt=\"image4\" style=\"width: 100%; height: 300px; object-fit: cover;\"> 
                </div>
            </div>
    </section>

    <!-- CONTENT SECTION -->
    <h1 class=\"text-center \">Bienvenue sur YOBS</h1>
    <h2 class=\"text-center\">Votre plateforme de création de carte pour élève en ligne</h2>
    <h3 class=\"text-center\">
        <button class=\"btn btn-primary\" style=\"margin: 20px; padding: 10px 20px; font-size: 16px;\">
            <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" style=\"color: white; text-decoration: none;\">Commencer</a>
    </h3>
    <div id=\"3\"></div>
    ";
        // line 119
        yield from $this->loadTemplate("produit/produit.html.twig", "home/index.html.twig", 119)->unwrap()->yield($context);
        // line 120
        yield "
    <!-- FOOTER -->
    <div id=\"4\"></div>
    <footer>
        <section>    
            <div id=\"containerFooter\">
                
                <div id=\"webFooter\">
                    <h3> online SCHOOL </h3>
                </div>
                <div id=\"webFooter\">
                    <p> contact : 620 666 792</p>
                </div>
                <div id=\"webFooter\">
                    <h3> partners </h3>
                </div>
                <div id=\"webFooter\">
                    <p> Yaounde </p>
                </div>
            </div>
            <div id=\"credit\"> © YOBS  Production ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " tous droits réservés</div>
        </section>

    </footer>



<!-- slider JS START -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
<script>
    \$(document).ready(function()
    {
    \$('#containerSlider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        });
    });
</script>
<!-- slider JS ENDS -->

<!-- content JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
    <script>
        \$(document).ready(function()
        {
        \$('#containerSlider').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            });
        });
    </script>
<script src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/content.js"), "html", null, true);
        yield "\"></script>
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
        return "home/index.html.twig";
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
        return array (  281 => 179,  239 => 140,  217 => 120,  215 => 119,  209 => 116,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}YOBS{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <!-- <link rel=\"stylesheet\" href=\"/style.css\"> -->
    <title>YOBS </title>
    <!-- favicon -->
    
    <!-- slider links -->
    <!-- <script src=\"http://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script> -->
    <script src=\"{{ asset('js/jQuery3.4.1.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('css/content.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/header.css') }}\">
    <style>
        body
        {
            margin: 0;
        }
        #containerSlider
        {
            margin: auto;
            width: 90%;
            text-align: center;
            padding-top: 100px;
            box-sizing: border-box;
        }
        #containerSlider img
        {
            width: 100%;
            height: 140%;
            text-align: center;
            align-content: center;
        }
        @media(max-width: 732px)
        {
            #containerSlider img
            {
                height: 12em;
            }
        }
        @media(max-width: 500px)
        {
            #containerSlider img
            {
                height: 10em;
            }
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header>
        <section>
            <!-- MAIN CONTAINER -->
            <div id=\"container\">
                <!-- SHOP NAME -->
                <div id=\"shopName\"><a href=\"login\"> <b>YOBS </b></a></div>
                    <!-- COLLCETIONS ON WEBSITE -->
                    <nav id=\"collection\" style=\"display: flex; gap: 2rem; align-items: center; margin-left: 2rem;\">
                        <div id=\"clothing\">
                            <a href=\"#\" style=\"text-decoration: none; color: inherit; font-weight: bold;\">NOS SERVICES</a>
                        </div>
                        <div id=\"accessories\">
                            <a href=\"#\" style=\"text-decoration: none; color: inherit; font-weight: bold;\">ACCESSORIES</a>
                        </div>
                        <div id=\"entreprise\">
                            <a href=\"login\" style=\"text-decoration: none; color: inherit; font-weight: bold;\">SCHOOL</a>
                        </div>
                    </nav>
                    <!-- SEARCH SECTION -->
                    <div id=\"search\">
                        <i class=\"fas fa-search search\"></i>
                        <input type=\"text\" id=\"input\" name=\"searchBox\" placeholder=\"Search for Clothing and Accessories\">
                    </div>
                    <!-- USER SECTION (CART AND USER ICON) -->
                    <div id=\"user\">
                        <a href=\"#\"> <i class=\"fas fa-user-circle userIcon\"></i> </a>
                    </div>
            </div>

        </section>
    </header>
    <!-- SLIDER -->
    <div id=\"3\"></div>
    <section>
            <div id=\"containerSlider\">
                <div id=\"slidingImage\">
                    <img src=\"img/img1.jpg\" alt=\"image1\" style=\"width: 100%; height: 300px; object-fit: cover;\">
                </div>
                <div id=\"slidingImage\">
                     <img src=\"img/img2.jpg\" alt=\"image2\" style=\"width: 100%; height: 300px; object-fit: cover;\">
                </div>
                <div id=\"slidingImage\"> 
                    <img src=\"img/img3.png\" alt=\"image3\" style=\"width: 100%; height: 300px; object-fit: cover;\"> 
                </div>
                <div id=\"slidingImage\"> 
                    <img src=\"img/img4.png\" alt=\"image4\" style=\"width: 100%; height: 300px; object-fit: cover;\"> 
                </div>
            </div>
    </section>

    <!-- CONTENT SECTION -->
    <h1 class=\"text-center \">Bienvenue sur YOBS</h1>
    <h2 class=\"text-center\">Votre plateforme de création de carte pour élève en ligne</h2>
    <h3 class=\"text-center\">
        <button class=\"btn btn-primary\" style=\"margin: 20px; padding: 10px 20px; font-size: 16px;\">
            <a href=\"{{ path('app_login') }}\" style=\"color: white; text-decoration: none;\">Commencer</a>
    </h3>
    <div id=\"3\"></div>
    {% include \"produit/produit.html.twig\" %}

    <!-- FOOTER -->
    <div id=\"4\"></div>
    <footer>
        <section>    
            <div id=\"containerFooter\">
                
                <div id=\"webFooter\">
                    <h3> online SCHOOL </h3>
                </div>
                <div id=\"webFooter\">
                    <p> contact : 620 666 792</p>
                </div>
                <div id=\"webFooter\">
                    <h3> partners </h3>
                </div>
                <div id=\"webFooter\">
                    <p> Yaounde </p>
                </div>
            </div>
            <div id=\"credit\"> © YOBS  Production {{ 'now'|date('Y') }} tous droits réservés</div>
        </section>

    </footer>



<!-- slider JS START -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
<script>
    \$(document).ready(function()
    {
    \$('#containerSlider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        });
    });
</script>
<!-- slider JS ENDS -->

<!-- content JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js\"></script>
    <script>
        \$(document).ready(function()
        {
        \$('#containerSlider').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            });
        });
    </script>
<script src=\"{{ asset('js/content.js') }}\"></script>
</body>
</html>
{% endblock %}
", "home/index.html.twig", "E:\\site_ecole\\templates\\home\\index.html.twig");
    }
}
