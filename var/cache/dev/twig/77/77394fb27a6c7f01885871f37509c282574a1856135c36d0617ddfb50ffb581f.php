<?php

/* home.html.twig */
class __TwigTemplate_f3501268c722b2dde8036ee7880c19857478a5bacf6e35ad92bb918390d3efdb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 5
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 5);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Welcome";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "    <html lang=\"fr\">

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"Auteur\" content=\"Dylan Soton & Victor Védie\">

        <title>La Boule Magique</title>

        <!-- Bootstrap core CSS -->
        <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Quelques polices d'écritures plus jolies :) -->
        <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <!-- Un Css modifié :) -->
        <link href=\"css/accueil.css\" rel=\"stylesheet\">

    </head>

    <body id=\"page-top\">

    <!-- NavBar Menu -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
        <div class=\"container\">
            <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">La Boule de Lavage</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                Menu
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#nouscontacter\">Nous contacter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Haut de page -->
    <header class=\"masthead\">
        <div class=\"container d-flex h-100 align-items-center\">
            <div class=\"mx-auto text-center\">
                <h1 class=\"mx-auto my-0 text-uppercase\">La Boule Magique</h1>
                <h2 class=\"text-white-50 mx-auto mt-2 mb-5\">Une agence de qualité, pour des gens de qualité.</h2>
                <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\" class=\"btn btn-primary js-scroll-trigger\">Réserver mon Voyage !</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id=\"nouscontacter\" class=\"about-section text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto\">
                    <h2 class=\"text-white mb-4\">Nous contacter </h2>
                    <p class=\"text-white-50\">
                        <a href=\"http://club-intech.fr/\">INTech</a>. Retrouvez nous sur notre superbe autre site web qui n'est pas encore en ligne...</p>
                </div>
            </div>
            <img src=\"/img/intech_logo.svg\" class=\"img-fluid\" alt=\"\">
        </div>
    </section>

    <!-- Informations Utiles -->
    <section class=\"contact-section bg-black\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
                            <h4 class=\"text-uppercase m-0\">Adresse</h4>
                            <hr class=\"my-4\">
                            <div class=\"small text-black-50\">9 rue Charles Fourier, 91000 Evry</div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-envelope text-primary mb-2\"></i>
                            <h4 class=\"text-uppercase m-0\">Email</h4>
                            <hr class=\"my-4\">
                            <div class=\"small text-black-50\">
                                <a href=\"#\">intech@it-sudparis.eu</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
                            <h4 class=\"text-uppercase m-0\">Téléphone</h4>
                            <hr class=\"my-4\">
                            <div class=\"small text-black-50\">+33 7.60.78.33.32</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"social d-flex justify-content-center\">
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-github\"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- Petit CopyRight Inutile Donc Indispensable ! -->
    <footer class=\"bg-black small text-center text-white-50\">
        <div class=\"container\">
            Copyright &copy; Dylan Soton & Victor Védie
        </div>
    </footer>

    <!-- bootstrap.min & JavaScript -->
    <script src=\"/js/bootstrap.min.bundle.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>

    <script src=\"js/accueil.js\"></script>

    </body>

    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  73 => 10,  64 => 9,  45 => 7,  15 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/home.html.twig #}

{# Template de la page d'accueil de l'application #}

{% extends \"base.html.twig\" %}

{% block title %}{{ parent() }} - Welcome{% endblock %}

{% block main %}
    <html lang=\"fr\">

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"Auteur\" content=\"Dylan Soton & Victor Védie\">

        <title>La Boule Magique</title>

        <!-- Bootstrap core CSS -->
        <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Quelques polices d'écritures plus jolies :) -->
        <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <!-- Un Css modifié :) -->
        <link href=\"css/accueil.css\" rel=\"stylesheet\">

    </head>

    <body id=\"page-top\">

    <!-- NavBar Menu -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
        <div class=\"container\">
            <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">La Boule de Lavage</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                Menu
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#nouscontacter\">Nous contacter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Haut de page -->
    <header class=\"masthead\">
        <div class=\"container d-flex h-100 align-items-center\">
            <div class=\"mx-auto text-center\">
                <h1 class=\"mx-auto my-0 text-uppercase\">La Boule Magique</h1>
                <h2 class=\"text-white-50 mx-auto mt-2 mb-5\">Une agence de qualité, pour des gens de qualité.</h2>
                <a href=\"{{ path('front') }}\" class=\"btn btn-primary js-scroll-trigger\">Réserver mon Voyage !</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id=\"nouscontacter\" class=\"about-section text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto\">
                    <h2 class=\"text-white mb-4\">Nous contacter </h2>
                    <p class=\"text-white-50\">
                        <a href=\"http://club-intech.fr/\">INTech</a>. Retrouvez nous sur notre superbe autre site web qui n'est pas encore en ligne...</p>
                </div>
            </div>
            <img src=\"/img/intech_logo.svg\" class=\"img-fluid\" alt=\"\">
        </div>
    </section>

    <!-- Informations Utiles -->
    <section class=\"contact-section bg-black\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
                            <h4 class=\"text-uppercase m-0\">Adresse</h4>
                            <hr class=\"my-4\">
                            <div class=\"small text-black-50\">9 rue Charles Fourier, 91000 Evry</div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-envelope text-primary mb-2\"></i>
                            <h4 class=\"text-uppercase m-0\">Email</h4>
                            <hr class=\"my-4\">
                            <div class=\"small text-black-50\">
                                <a href=\"#\">intech@it-sudparis.eu</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
                            <h4 class=\"text-uppercase m-0\">Téléphone</h4>
                            <hr class=\"my-4\">
                            <div class=\"small text-black-50\">+33 7.60.78.33.32</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"social d-flex justify-content-center\">
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-github\"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- Petit CopyRight Inutile Donc Indispensable ! -->
    <footer class=\"bg-black small text-center text-white-50\">
        <div class=\"container\">
            Copyright &copy; Dylan Soton & Victor Védie
        </div>
    </footer>

    <!-- bootstrap.min & JavaScript -->
    <script src=\"/js/bootstrap.min.bundle.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>

    <script src=\"js/accueil.js\"></script>

    </body>

    </html>

{% endblock %} {# main #}

", "home.html.twig", "/home/victor/Documents/csc4101/AgenceVoyageTSP/templates/home.html.twig");
    }
}
