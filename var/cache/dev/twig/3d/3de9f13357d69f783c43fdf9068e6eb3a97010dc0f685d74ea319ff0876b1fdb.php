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
        $__internal_d305676f311bd1d730f01e51c4e99a745e7e84b18449c739b7ec660cf00d1d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d305676f311bd1d730f01e51c4e99a745e7e84b18449c739b7ec660cf00d1d1b->enter($__internal_d305676f311bd1d730f01e51c4e99a745e7e84b18449c739b7ec660cf00d1d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementTwo.html.twig"));

        $__internal_a01b62cbc3442c1828e85a972a27732b39076c8d3f796031148487847e1aeee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01b62cbc3442c1828e85a972a27732b39076c8d3f796031148487847e1aeee4->enter($__internal_a01b62cbc3442c1828e85a972a27732b39076c8d3f796031148487847e1aeee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d305676f311bd1d730f01e51c4e99a745e7e84b18449c739b7ec660cf00d1d1b->leave($__internal_d305676f311bd1d730f01e51c4e99a745e7e84b18449c739b7ec660cf00d1d1b_prof);

        
        $__internal_a01b62cbc3442c1828e85a972a27732b39076c8d3f796031148487847e1aeee4->leave($__internal_a01b62cbc3442c1828e85a972a27732b39076c8d3f796031148487847e1aeee4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4536cb7ef4ff81883759769ffac7defd4d6c27d73fdaaa671a704578a76ba6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4536cb7ef4ff81883759769ffac7defd4d6c27d73fdaaa671a704578a76ba6c6->enter($__internal_4536cb7ef4ff81883759769ffac7defd4d6c27d73fdaaa671a704578a76ba6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ffdd2d6a3795fe26e854f6dbf898a152107f2f8f6d5a7b7818034189074bff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffdd2d6a3795fe26e854f6dbf898a152107f2f8f6d5a7b7818034189074bff2->enter($__internal_0ffdd2d6a3795fe26e854f6dbf898a152107f2f8f6d5a7b7818034189074bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0ffdd2d6a3795fe26e854f6dbf898a152107f2f8f6d5a7b7818034189074bff2->leave($__internal_0ffdd2d6a3795fe26e854f6dbf898a152107f2f8f6d5a7b7818034189074bff2_prof);

        
        $__internal_4536cb7ef4ff81883759769ffac7defd4d6c27d73fdaaa671a704578a76ba6c6->leave($__internal_4536cb7ef4ff81883759769ffac7defd4d6c27d73fdaaa671a704578a76ba6c6_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_576a4a22127c1982f7265abd2c01c5d52e7bd450d9eba59fccef9053d58eee46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576a4a22127c1982f7265abd2c01c5d52e7bd450d9eba59fccef9053d58eee46->enter($__internal_576a4a22127c1982f7265abd2c01c5d52e7bd450d9eba59fccef9053d58eee46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_18c634722dae7c5e6e8be8bc364e92858c935c17574c1afb93e28ece76cb81a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c634722dae7c5e6e8be8bc364e92858c935c17574c1afb93e28ece76cb81a8->enter($__internal_18c634722dae7c5e6e8be8bc364e92858c935c17574c1afb93e28ece76cb81a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_18c634722dae7c5e6e8be8bc364e92858c935c17574c1afb93e28ece76cb81a8->leave($__internal_18c634722dae7c5e6e8be8bc364e92858c935c17574c1afb93e28ece76cb81a8_prof);

        
        $__internal_576a4a22127c1982f7265abd2c01c5d52e7bd450d9eba59fccef9053d58eee46->leave($__internal_576a4a22127c1982f7265abd2c01c5d52e7bd450d9eba59fccef9053d58eee46_prof);

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
