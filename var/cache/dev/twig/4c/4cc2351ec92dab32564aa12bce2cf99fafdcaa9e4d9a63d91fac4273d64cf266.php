<?php

/* front/home.html.twig */
class __TwigTemplate_d5dccadd35aa501d5e1f66748bad28d102095325dad55d9f7dfcf584b7296f26 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.front.html.twig", "front/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des circuits programmés</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Description</th>
            <th>Date</th>
            <th>Nbr voyageurs</th>
            <th>Depart</th>
            <th>Arrivee</th>
            <th>Duree (jours)</th>
            <th>Prix (€)</th>
            <th>Favoris</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuitsP"]) || array_key_exists("circuitsP", $context) ? $context["circuitsP"] : (function () { throw new Twig_Error_Runtime('Variable "circuitsP" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["circuitP"]) {
            // line 21
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_circuit_show", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "description", array()), "html", null, true);
            echo "</a>
                </td>
                <td>
                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getDateDepart", array(), "method"), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getNombrePersonnes", array(), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getPaysDepart", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getVilleDepart", array(), "method"), "html", null, true);
            echo " </td>
                <td>
                    ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getPaysArrivee", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getVilleArrivee", array(), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getCircuit", array(), "method"), "getDureeCircuit", array(), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitP"], "getPrix", array(), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_circuit_like", array("id" => twig_get_attribute($this->env, $this->source, $context["circuitP"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 44
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["circuitP"], "id", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "session", array()), "get", array(0 => "likes"), "method"))) {
                // line 45
                echo "                            unlike
                        ";
            } else {
                // line 47
                echo "                            like
                        ";
            }
            // line 49
            echo "                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"2\">no circuits found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuitP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    ";
        // line 60
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "        <h1> [admin] Liste des circuits non-programmés </h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th>Description</th>
                <th>Depart</th>
                <th>Arrivee</th>
                <th>Duree (jours)</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["circuitsNP"]) || array_key_exists("circuitsNP", $context) ? $context["circuitsNP"] : (function () { throw new Twig_Error_Runtime('Variable "circuitsNP" does not exist.', 72, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["circuitNP"]) {
                // line 73
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_circuit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["circuitNP"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "description", array()), "html", null, true);
                echo "</a>
                    </td>
                    <td>
                        ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getPaysDepart", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getVilleDepart", array(), "method"), "html", null, true);
                echo " </td>
                    <td>
                        ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getPaysArrivee", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getVilleArrivee", array(), "method"), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuitNP"], "getDureeCircuit", array(), "method"), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 87
                echo "                <tr>
                    <td colspan=\"2\">no circuits found</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuitNP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            </tbody>
        </table>
    ";
        }
        // line 94
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 94,  228 => 91,  219 => 87,  210 => 83,  202 => 80,  195 => 78,  187 => 75,  183 => 73,  178 => 72,  165 => 61,  163 => 60,  158 => 57,  149 => 53,  141 => 49,  137 => 47,  133 => 45,  131 => 44,  127 => 43,  121 => 40,  115 => 37,  107 => 34,  100 => 32,  94 => 29,  88 => 26,  80 => 23,  76 => 21,  71 => 20,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.front.html.twig' %}

{% block body %}
    <h1>Liste des circuits programmés</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Description</th>
            <th>Date</th>
            <th>Nbr voyageurs</th>
            <th>Depart</th>
            <th>Arrivee</th>
            <th>Duree (jours)</th>
            <th>Prix (€)</th>
            <th>Favoris</th>
        </tr>
        </thead>
        <tbody>
        {% for circuitP in circuitsP %}
            <tr>
                <td>
                    <a href=\"{{ path('front_circuit_show', {id: circuitP.getCircuit().id}) }}\">{{ circuitP.getCircuit().description }}</a>
                </td>
                <td>
                    {{ circuitP.getDateDepart().format(\"d-m-Y\") }}
                </td>
                <td>
                    {{ circuitP.getNombrePersonnes() }}
                </td>
                <td>
                    {{ circuitP.getCircuit().getPaysDepart() }}/{{ circuitP.getCircuit().getVilleDepart() }} </td>
                <td>
                    {{ circuitP.getCircuit().getPaysArrivee() }}/{{ circuitP.getCircuit().getVilleArrivee() }}
                </td>
                <td>
                    {{ circuitP.getCircuit().getDureeCircuit() }}
                </td>
                <td>
                    {{ circuitP.getPrix() }}
                </td>
                <td>
                    <a href=\"{{ path('front_circuit_like',{id: circuitP.id }) }}\">
                        {% if  circuitP.id in app.session.get('likes') %}
                            unlike
                        {% else %}
                            like
                        {% endif %}
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">no circuits found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {% if is_granted('ROLE_ADMIN') %}
        <h1> [admin] Liste des circuits non-programmés </h1>
        <table class=\"table\">
            <thead>
            <tr>
                <th>Description</th>
                <th>Depart</th>
                <th>Arrivee</th>
                <th>Duree (jours)</th>
            </tr>
            </thead>
            <tbody>
            {% for circuitNP in circuitsNP %}
                <tr>
                    <td>
                        <a href=\"{{ path('front_circuit_show', {id: circuitNP.id}) }}\">{{ circuitNP.description }}</a>
                    </td>
                    <td>
                        {{ circuitNP.getPaysDepart() }}/{{ circuitNP.getVilleDepart() }} </td>
                    <td>
                        {{ circuitNP.getPaysArrivee() }}/{{ circuitNP.getVilleArrivee() }}
                    </td>
                    <td>
                        {{ circuitNP.getDureeCircuit() }}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"2\">no circuits found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}


{% endblock %} {# body #}
", "front/home.html.twig", "/home/asphox/Documents/TSP/CSC4101/project-agvoy/agvoy-app-03/templates/front/home.html.twig");
    }
}
