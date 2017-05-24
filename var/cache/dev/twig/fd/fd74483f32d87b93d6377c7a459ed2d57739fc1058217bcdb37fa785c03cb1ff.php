<?php

/* ESFEspaceAbonneBundle:Default:universiteTwo.html.twig */
class __TwigTemplate_69d0792830e2dbf32a1083b2d3fe055f7d17e10ae7c1e170c3a914e574f469ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18c991a7401190723e0f6679f50e41ec596871350c7fd50ed71ecb00d1d8275d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c991a7401190723e0f6679f50e41ec596871350c7fd50ed71ecb00d1d8275d->enter($__internal_18c991a7401190723e0f6679f50e41ec596871350c7fd50ed71ecb00d1d8275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig"));

        $__internal_af75eb56bb41756a997aa3e98c731d686bf26b12ffecee4fd8f82fcda2052f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af75eb56bb41756a997aa3e98c731d686bf26b12ffecee4fd8f82fcda2052f43->enter($__internal_af75eb56bb41756a997aa3e98c731d686bf26b12ffecee4fd8f82fcda2052f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18c991a7401190723e0f6679f50e41ec596871350c7fd50ed71ecb00d1d8275d->leave($__internal_18c991a7401190723e0f6679f50e41ec596871350c7fd50ed71ecb00d1d8275d_prof);

        
        $__internal_af75eb56bb41756a997aa3e98c731d686bf26b12ffecee4fd8f82fcda2052f43->leave($__internal_af75eb56bb41756a997aa3e98c731d686bf26b12ffecee4fd8f82fcda2052f43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_992fbaf3013c60ae811538aee450d4a25bb7b01d1178b0724d30670e6d508596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992fbaf3013c60ae811538aee450d4a25bb7b01d1178b0724d30670e6d508596->enter($__internal_992fbaf3013c60ae811538aee450d4a25bb7b01d1178b0724d30670e6d508596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f268a8d0fd8860d2cda089187d2a3013353958326d8617c10e43089a55952318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f268a8d0fd8860d2cda089187d2a3013353958326d8617c10e43089a55952318->enter($__internal_f268a8d0fd8860d2cda089187d2a3013353958326d8617c10e43089a55952318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f268a8d0fd8860d2cda089187d2a3013353958326d8617c10e43089a55952318->leave($__internal_f268a8d0fd8860d2cda089187d2a3013353958326d8617c10e43089a55952318_prof);

        
        $__internal_992fbaf3013c60ae811538aee450d4a25bb7b01d1178b0724d30670e6d508596->leave($__internal_992fbaf3013c60ae811538aee450d4a25bb7b01d1178b0724d30670e6d508596_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0df0755a5ca99ea214421ff7b8e181837e7a4fe3cfa22a778b5dde3d893baf7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df0755a5ca99ea214421ff7b8e181837e7a4fe3cfa22a778b5dde3d893baf7c->enter($__internal_0df0755a5ca99ea214421ff7b8e181837e7a4fe3cfa22a778b5dde3d893baf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c5e6a55ab1c2233f24152122b6e06ec01d790549752c440c2504f3049bdf2b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e6a55ab1c2233f24152122b6e06ec01d790549752c440c2504f3049bdf2b86->enter($__internal_c5e6a55ab1c2233f24152122b6e06ec01d790549752c440c2504f3049bdf2b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            <tr>
                                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsTwo");
            echo "\">Suivant</a>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
";
        
        $__internal_c5e6a55ab1c2233f24152122b6e06ec01d790549752c440c2504f3049bdf2b86->leave($__internal_c5e6a55ab1c2233f24152122b6e06ec01d790549752c440c2504f3049bdf2b86_prof);

        
        $__internal_0df0755a5ca99ea214421ff7b8e181837e7a4fe3cfa22a778b5dde3d893baf7c->leave($__internal_0df0755a5ca99ea214421ff7b8e181837e7a4fe3cfa22a778b5dde3d893baf7c_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  120 => 32,  116 => 31,  112 => 29,  102 => 25,  97 => 23,  94 => 22,  90 => 21,  76 => 10,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Inscription Université - {{ parent() }}
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if document is defined %}        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in document %}
                            <tr>
                                <td>{{ item.pdfName }}</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"{{ asset('universites/pdf/' ~ item.pdfName ~ \".pdf\") }}\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_universiteStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_universiteStepsTwo') }}\">Suivant</a>
            {% endif %}
        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
{% endblock %}

{#                OK mais moche                
<img src=\"{{ vich_uploader_asset(item, 'pdfFile') }}\" alt=\"{{ item.pdfName }}\" />
#}", "ESFEspaceAbonneBundle:Default:universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\universiteTwo.html.twig");
    }
}
