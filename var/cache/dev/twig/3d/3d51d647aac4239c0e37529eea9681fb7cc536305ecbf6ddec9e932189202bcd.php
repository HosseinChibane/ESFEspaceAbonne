<?php

/* ESFEspaceAbonneBundle:back:universiteTwo.html.twig */
class __TwigTemplate_11348eb3a26d5431126e4d84307ac27a7bcaf6bdd28dc9d6a820b323a86f470d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:universiteTwo.html.twig", 1);
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
        $__internal_723bdb9df30d144937fcc9a570cf14828bce47fb91e122c89273d0f689e58e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723bdb9df30d144937fcc9a570cf14828bce47fb91e122c89273d0f689e58e30->enter($__internal_723bdb9df30d144937fcc9a570cf14828bce47fb91e122c89273d0f689e58e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteTwo.html.twig"));

        $__internal_d0d9dd2e0a5e0413380a38fc620f90a5504a4286a13bc2b3496e84143c1b6e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d9dd2e0a5e0413380a38fc620f90a5504a4286a13bc2b3496e84143c1b6e0b->enter($__internal_d0d9dd2e0a5e0413380a38fc620f90a5504a4286a13bc2b3496e84143c1b6e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723bdb9df30d144937fcc9a570cf14828bce47fb91e122c89273d0f689e58e30->leave($__internal_723bdb9df30d144937fcc9a570cf14828bce47fb91e122c89273d0f689e58e30_prof);

        
        $__internal_d0d9dd2e0a5e0413380a38fc620f90a5504a4286a13bc2b3496e84143c1b6e0b->leave($__internal_d0d9dd2e0a5e0413380a38fc620f90a5504a4286a13bc2b3496e84143c1b6e0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bff5ac56567dac0d58db478f19b38769216e25418b2aed70cc3d494dd121d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bff5ac56567dac0d58db478f19b38769216e25418b2aed70cc3d494dd121d7c->enter($__internal_3bff5ac56567dac0d58db478f19b38769216e25418b2aed70cc3d494dd121d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92d06121341b5ecfccac73b96fe3813ccedbd130e10424c49313db74ed3117c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d06121341b5ecfccac73b96fe3813ccedbd130e10424c49313db74ed3117c3->enter($__internal_92d06121341b5ecfccac73b96fe3813ccedbd130e10424c49313db74ed3117c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_92d06121341b5ecfccac73b96fe3813ccedbd130e10424c49313db74ed3117c3->leave($__internal_92d06121341b5ecfccac73b96fe3813ccedbd130e10424c49313db74ed3117c3_prof);

        
        $__internal_3bff5ac56567dac0d58db478f19b38769216e25418b2aed70cc3d494dd121d7c->leave($__internal_3bff5ac56567dac0d58db478f19b38769216e25418b2aed70cc3d494dd121d7c_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b1a2fcfc8fbaf91c4b28054c3e540838b82883b870c558454b9ccc27a218ce79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a2fcfc8fbaf91c4b28054c3e540838b82883b870c558454b9ccc27a218ce79->enter($__internal_b1a2fcfc8fbaf91c4b28054c3e540838b82883b870c558454b9ccc27a218ce79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_343d9773f89f6f053aade6384f00812834eea4b215ec1ed93b4b57000dc8ee21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343d9773f89f6f053aade6384f00812834eea4b215ec1ed93b4b57000dc8ee21->enter($__internal_343d9773f89f6f053aade6384f00812834eea4b215ec1ed93b4b57000dc8ee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_343d9773f89f6f053aade6384f00812834eea4b215ec1ed93b4b57000dc8ee21->leave($__internal_343d9773f89f6f053aade6384f00812834eea4b215ec1ed93b4b57000dc8ee21_prof);

        
        $__internal_b1a2fcfc8fbaf91c4b28054c3e540838b82883b870c558454b9ccc27a218ce79->leave($__internal_b1a2fcfc8fbaf91c4b28054c3e540838b82883b870c558454b9ccc27a218ce79_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:universiteTwo.html.twig";
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
#}", "ESFEspaceAbonneBundle:back:universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteTwo.html.twig");
    }
}
