<?php

/* @ESFEspaceAbonne/Default/logementTwo.html.twig */
class __TwigTemplate_75e80d858fe1019f633a9b756f5e18688d3b2e6ce62d04152ec3363adb877be2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/logementTwo.html.twig", 1);
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
        $__internal_07f843ac3d23d920395e06e38b845c050d48f11cb203b2fd1a63bf32dfd30fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f843ac3d23d920395e06e38b845c050d48f11cb203b2fd1a63bf32dfd30fc8->enter($__internal_07f843ac3d23d920395e06e38b845c050d48f11cb203b2fd1a63bf32dfd30fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/logementTwo.html.twig"));

        $__internal_7f13a9f55ca32c35772489530b69726e6f56ab1b16db86852d11e2e4cca0f199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f13a9f55ca32c35772489530b69726e6f56ab1b16db86852d11e2e4cca0f199->enter($__internal_7f13a9f55ca32c35772489530b69726e6f56ab1b16db86852d11e2e4cca0f199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/logementTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f843ac3d23d920395e06e38b845c050d48f11cb203b2fd1a63bf32dfd30fc8->leave($__internal_07f843ac3d23d920395e06e38b845c050d48f11cb203b2fd1a63bf32dfd30fc8_prof);

        
        $__internal_7f13a9f55ca32c35772489530b69726e6f56ab1b16db86852d11e2e4cca0f199->leave($__internal_7f13a9f55ca32c35772489530b69726e6f56ab1b16db86852d11e2e4cca0f199_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2fae63089332995009a0b08bb7826333c4e2457adba76c150c87908d74b645e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fae63089332995009a0b08bb7826333c4e2457adba76c150c87908d74b645e->enter($__internal_a2fae63089332995009a0b08bb7826333c4e2457adba76c150c87908d74b645e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9354d367c81853a3fb805ae7c65f7d8f7ce618eb17a34ef37fefb825e99c7fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9354d367c81853a3fb805ae7c65f7d8f7ce618eb17a34ef37fefb825e99c7fad->enter($__internal_9354d367c81853a3fb805ae7c65f7d8f7ce618eb17a34ef37fefb825e99c7fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9354d367c81853a3fb805ae7c65f7d8f7ce618eb17a34ef37fefb825e99c7fad->leave($__internal_9354d367c81853a3fb805ae7c65f7d8f7ce618eb17a34ef37fefb825e99c7fad_prof);

        
        $__internal_a2fae63089332995009a0b08bb7826333c4e2457adba76c150c87908d74b645e->leave($__internal_a2fae63089332995009a0b08bb7826333c4e2457adba76c150c87908d74b645e_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_5dcc6e7724b008e1f00e6e0295c96fe13c734fd1821854a3982c833a20ee602e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcc6e7724b008e1f00e6e0295c96fe13c734fd1821854a3982c833a20ee602e->enter($__internal_5dcc6e7724b008e1f00e6e0295c96fe13c734fd1821854a3982c833a20ee602e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_eb1a212e2987c3de4950e2f234f7b86d5eea4308ea0d7975bcab4a5d2c028c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1a212e2987c3de4950e2f234f7b86d5eea4308ea0d7975bcab4a5d2c028c07->enter($__internal_eb1a212e2987c3de4950e2f234f7b86d5eea4308ea0d7975bcab4a5d2c028c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_eb1a212e2987c3de4950e2f234f7b86d5eea4308ea0d7975bcab4a5d2c028c07->leave($__internal_eb1a212e2987c3de4950e2f234f7b86d5eea4308ea0d7975bcab4a5d2c028c07_prof);

        
        $__internal_5dcc6e7724b008e1f00e6e0295c96fe13c734fd1821854a3982c833a20ee602e->leave($__internal_5dcc6e7724b008e1f00e6e0295c96fe13c734fd1821854a3982c833a20ee602e_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/logementTwo.html.twig";
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
{% endblock %}", "@ESFEspaceAbonne/Default/logementTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\logementTwo.html.twig");
    }
}
