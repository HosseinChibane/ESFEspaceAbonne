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
        $__internal_363194c1a2e6f5597f76079f439ad6a23162c7c61d410276e0ef0d9ec7a6bb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363194c1a2e6f5597f76079f439ad6a23162c7c61d410276e0ef0d9ec7a6bb30->enter($__internal_363194c1a2e6f5597f76079f439ad6a23162c7c61d410276e0ef0d9ec7a6bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementTwo.html.twig"));

        $__internal_c612336c18dcc616dab21e2f5834f820174b9346f42c398e1aee1fabdd817850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c612336c18dcc616dab21e2f5834f820174b9346f42c398e1aee1fabdd817850->enter($__internal_c612336c18dcc616dab21e2f5834f820174b9346f42c398e1aee1fabdd817850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_363194c1a2e6f5597f76079f439ad6a23162c7c61d410276e0ef0d9ec7a6bb30->leave($__internal_363194c1a2e6f5597f76079f439ad6a23162c7c61d410276e0ef0d9ec7a6bb30_prof);

        
        $__internal_c612336c18dcc616dab21e2f5834f820174b9346f42c398e1aee1fabdd817850->leave($__internal_c612336c18dcc616dab21e2f5834f820174b9346f42c398e1aee1fabdd817850_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05204cfe434754525e1191693044cb8b166b33f84fc54f888ba9b9e311e16a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05204cfe434754525e1191693044cb8b166b33f84fc54f888ba9b9e311e16a46->enter($__internal_05204cfe434754525e1191693044cb8b166b33f84fc54f888ba9b9e311e16a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8913cd900a076afa9add772e248a15324cd31a4bd9eb64da802c970d0081fdb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8913cd900a076afa9add772e248a15324cd31a4bd9eb64da802c970d0081fdb1->enter($__internal_8913cd900a076afa9add772e248a15324cd31a4bd9eb64da802c970d0081fdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8913cd900a076afa9add772e248a15324cd31a4bd9eb64da802c970d0081fdb1->leave($__internal_8913cd900a076afa9add772e248a15324cd31a4bd9eb64da802c970d0081fdb1_prof);

        
        $__internal_05204cfe434754525e1191693044cb8b166b33f84fc54f888ba9b9e311e16a46->leave($__internal_05204cfe434754525e1191693044cb8b166b33f84fc54f888ba9b9e311e16a46_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c852ec565fc69a461d54e42438a20c5ff8f55d1fe34c1a880b5b46252eaa49be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c852ec565fc69a461d54e42438a20c5ff8f55d1fe34c1a880b5b46252eaa49be->enter($__internal_c852ec565fc69a461d54e42438a20c5ff8f55d1fe34c1a880b5b46252eaa49be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_7a878a0065ee405ce1cf350c8f459f1a5b44c7ccf7a953681818847e11f58aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a878a0065ee405ce1cf350c8f459f1a5b44c7ccf7a953681818847e11f58aea->enter($__internal_7a878a0065ee405ce1cf350c8f459f1a5b44c7ccf7a953681818847e11f58aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_7a878a0065ee405ce1cf350c8f459f1a5b44c7ccf7a953681818847e11f58aea->leave($__internal_7a878a0065ee405ce1cf350c8f459f1a5b44c7ccf7a953681818847e11f58aea_prof);

        
        $__internal_c852ec565fc69a461d54e42438a20c5ff8f55d1fe34c1a880b5b46252eaa49be->leave($__internal_c852ec565fc69a461d54e42438a20c5ff8f55d1fe34c1a880b5b46252eaa49be_prof);

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
