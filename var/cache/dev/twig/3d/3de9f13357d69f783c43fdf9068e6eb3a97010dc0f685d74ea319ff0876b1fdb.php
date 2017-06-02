<?php

/* @ESFEspaceAbonne/back/logementTwo.html.twig */
class __TwigTemplate_73fce54b202ced7f7d8ac206880c64ab830b6efa6c20573c84e4f4c19f5f5a73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/logementTwo.html.twig", 1);
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
        $__internal_d473b4abebbde9f223529e0d5354615786b62c82a06b6e6b413651bbecb5cd52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d473b4abebbde9f223529e0d5354615786b62c82a06b6e6b413651bbecb5cd52->enter($__internal_d473b4abebbde9f223529e0d5354615786b62c82a06b6e6b413651bbecb5cd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementTwo.html.twig"));

        $__internal_989441cd86657c3d4ab15f07d3b6c9f138d3587767771e66edb97a86c33dbabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989441cd86657c3d4ab15f07d3b6c9f138d3587767771e66edb97a86c33dbabc->enter($__internal_989441cd86657c3d4ab15f07d3b6c9f138d3587767771e66edb97a86c33dbabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d473b4abebbde9f223529e0d5354615786b62c82a06b6e6b413651bbecb5cd52->leave($__internal_d473b4abebbde9f223529e0d5354615786b62c82a06b6e6b413651bbecb5cd52_prof);

        
        $__internal_989441cd86657c3d4ab15f07d3b6c9f138d3587767771e66edb97a86c33dbabc->leave($__internal_989441cd86657c3d4ab15f07d3b6c9f138d3587767771e66edb97a86c33dbabc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0b5ade2e6f9619f0975d4d30eb3a638d6783ae5edc0639be650d371f0c17079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b5ade2e6f9619f0975d4d30eb3a638d6783ae5edc0639be650d371f0c17079->enter($__internal_b0b5ade2e6f9619f0975d4d30eb3a638d6783ae5edc0639be650d371f0c17079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_163dda10ac28b6a7131aa5aeba46c8777a598c2466f94ff0189867d2d5e798d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163dda10ac28b6a7131aa5aeba46c8777a598c2466f94ff0189867d2d5e798d1->enter($__internal_163dda10ac28b6a7131aa5aeba46c8777a598c2466f94ff0189867d2d5e798d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_163dda10ac28b6a7131aa5aeba46c8777a598c2466f94ff0189867d2d5e798d1->leave($__internal_163dda10ac28b6a7131aa5aeba46c8777a598c2466f94ff0189867d2d5e798d1_prof);

        
        $__internal_b0b5ade2e6f9619f0975d4d30eb3a638d6783ae5edc0639be650d371f0c17079->leave($__internal_b0b5ade2e6f9619f0975d4d30eb3a638d6783ae5edc0639be650d371f0c17079_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ca81a7c66daf1a01ff51b2f8ccada3e5ce539ffeece44751c7573ae52eef39a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca81a7c66daf1a01ff51b2f8ccada3e5ce539ffeece44751c7573ae52eef39a8->enter($__internal_ca81a7c66daf1a01ff51b2f8ccada3e5ce539ffeece44751c7573ae52eef39a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5394b1929638e3f2fd857d3803560b75a45b696fcdeb343ab3288547f0d1b0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5394b1929638e3f2fd857d3803560b75a45b696fcdeb343ab3288547f0d1b0cf->enter($__internal_5394b1929638e3f2fd857d3803560b75a45b696fcdeb343ab3288547f0d1b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
\t\t\t\t<h2>Etape 2</h2>
\t\t\t\t<p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
\t\t\t\t<table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom du document</th>
\t\t\t\t\t\t\t<th>Lien de téléchargement</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary view-pdf\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>    
\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_logementStepsOne");
            echo "\">Precedent</a>
\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_logementStepsTwo");
            echo "\">Suivant</a>
\t\t\t";
        }
        // line 34
        echo "\t\t</div>
\t</div>

\t<script type=\"text/javascript\" class=\"init\">
\t\t\$(document).ready(function() {
\t\t\tvar table = \$('#documentInsciption').DataTable( {
\t\t\t\tpaging: true,
\t\t\t\tresponsive: true,
\t\t\t\tsearching: false,
\t\t\t\t\"lengthChange\": false
\t\t\t} );
\t\t\tnew \$.fn.dataTable.FixedHeader( table );
\t\t} );
\t</script>
";
        
        $__internal_5394b1929638e3f2fd857d3803560b75a45b696fcdeb343ab3288547f0d1b0cf->leave($__internal_5394b1929638e3f2fd857d3803560b75a45b696fcdeb343ab3288547f0d1b0cf_prof);

        
        $__internal_ca81a7c66daf1a01ff51b2f8ccada3e5ce539ffeece44751c7573ae52eef39a8->leave($__internal_ca81a7c66daf1a01ff51b2f8ccada3e5ce539ffeece44751c7573ae52eef39a8_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/logementTwo.html.twig";
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
\tInscription logement - {{ parent() }}
{% endblock %}

{% block Content %} 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t{% if document is defined %}        
\t\t\t\t<h2>Etape 2</h2>
\t\t\t\t<p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
\t\t\t\t<table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom du document</th>
\t\t\t\t\t\t\t<th>Lien de téléchargement</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for item in document %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ item.pdfName }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary view-pdf\" href=\"{{ asset('universites/pdf/' ~ item.pdfName ~ \".pdf\") }}\" target=\"_blank\">Télécharger</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>    
\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_logementStepsOne') }}\">Precedent</a>
\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_logementStepsTwo') }}\">Suivant</a>
\t\t\t{% endif %}
\t\t</div>
\t</div>

\t<script type=\"text/javascript\" class=\"init\">
\t\t\$(document).ready(function() {
\t\t\tvar table = \$('#documentInsciption').DataTable( {
\t\t\t\tpaging: true,
\t\t\t\tresponsive: true,
\t\t\t\tsearching: false,
\t\t\t\t\"lengthChange\": false
\t\t\t} );
\t\t\tnew \$.fn.dataTable.FixedHeader( table );
\t\t} );
\t</script>
{% endblock %}", "@ESFEspaceAbonne/back/logementTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\logementTwo.html.twig");
    }
}
