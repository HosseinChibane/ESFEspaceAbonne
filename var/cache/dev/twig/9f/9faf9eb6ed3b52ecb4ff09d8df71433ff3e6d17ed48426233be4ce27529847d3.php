<?php

/* ESFEspaceAbonneBundle:Default:logementTwo.html.twig */
class __TwigTemplate_c60ed22b51681fb333f0558d4ac55d98fbf6c5b427c28673f1eb0fd35b743ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:logementTwo.html.twig", 1);
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
        $__internal_c7294261ead214864ba563b8cc381b8ecf90aae0f167c7d0c94ef9cf006e3738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7294261ead214864ba563b8cc381b8ecf90aae0f167c7d0c94ef9cf006e3738->enter($__internal_c7294261ead214864ba563b8cc381b8ecf90aae0f167c7d0c94ef9cf006e3738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:logementTwo.html.twig"));

        $__internal_ab4ee428f3d227a844e9e7d7cc1020b1f562c6205d34cdfba97c6b0d6ccb3c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4ee428f3d227a844e9e7d7cc1020b1f562c6205d34cdfba97c6b0d6ccb3c83->enter($__internal_ab4ee428f3d227a844e9e7d7cc1020b1f562c6205d34cdfba97c6b0d6ccb3c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:logementTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7294261ead214864ba563b8cc381b8ecf90aae0f167c7d0c94ef9cf006e3738->leave($__internal_c7294261ead214864ba563b8cc381b8ecf90aae0f167c7d0c94ef9cf006e3738_prof);

        
        $__internal_ab4ee428f3d227a844e9e7d7cc1020b1f562c6205d34cdfba97c6b0d6ccb3c83->leave($__internal_ab4ee428f3d227a844e9e7d7cc1020b1f562c6205d34cdfba97c6b0d6ccb3c83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4d68af5f952da49d5a71e34a61eb24626f925be18355fd187f10e27c3623889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d68af5f952da49d5a71e34a61eb24626f925be18355fd187f10e27c3623889->enter($__internal_b4d68af5f952da49d5a71e34a61eb24626f925be18355fd187f10e27c3623889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23d817586ecb63aa2445a9ef74360cb5292192de57286e8d05dce035af52ac00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d817586ecb63aa2445a9ef74360cb5292192de57286e8d05dce035af52ac00->enter($__internal_23d817586ecb63aa2445a9ef74360cb5292192de57286e8d05dce035af52ac00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_23d817586ecb63aa2445a9ef74360cb5292192de57286e8d05dce035af52ac00->leave($__internal_23d817586ecb63aa2445a9ef74360cb5292192de57286e8d05dce035af52ac00_prof);

        
        $__internal_b4d68af5f952da49d5a71e34a61eb24626f925be18355fd187f10e27c3623889->leave($__internal_b4d68af5f952da49d5a71e34a61eb24626f925be18355fd187f10e27c3623889_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_697c4f3339736240d61734c0261597e3b3d10a08f3c92e00d9812947f655c9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697c4f3339736240d61734c0261597e3b3d10a08f3c92e00d9812947f655c9af->enter($__internal_697c4f3339736240d61734c0261597e3b3d10a08f3c92e00d9812947f655c9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_750c46b2dea7acf61dccf39a8b666ff6ddf8ada71d6c6a23f160f177128567cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750c46b2dea7acf61dccf39a8b666ff6ddf8ada71d6c6a23f160f177128567cc->enter($__internal_750c46b2dea7acf61dccf39a8b666ff6ddf8ada71d6c6a23f160f177128567cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_750c46b2dea7acf61dccf39a8b666ff6ddf8ada71d6c6a23f160f177128567cc->leave($__internal_750c46b2dea7acf61dccf39a8b666ff6ddf8ada71d6c6a23f160f177128567cc_prof);

        
        $__internal_697c4f3339736240d61734c0261597e3b3d10a08f3c92e00d9812947f655c9af->leave($__internal_697c4f3339736240d61734c0261597e3b3d10a08f3c92e00d9812947f655c9af_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:logementTwo.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Default:logementTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/logementTwo.html.twig");
    }
}
