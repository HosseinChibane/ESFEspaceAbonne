<?php

/* ESFEspaceAbonneBundle:back:logementTwo.html.twig */
class __TwigTemplate_afc8b9850067f836f39eaac058e4830924d8e43990ed5fce7203d07679321e3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:logementTwo.html.twig", 1);
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
        $__internal_82675618702d8831ffbb3f018a2c888ce68866c11ad58c65d10bddbd888532b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82675618702d8831ffbb3f018a2c888ce68866c11ad58c65d10bddbd888532b8->enter($__internal_82675618702d8831ffbb3f018a2c888ce68866c11ad58c65d10bddbd888532b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementTwo.html.twig"));

        $__internal_0501bdac07da167f27d1ec9989a33d1eab421bd73f1476022aa746a1e0fac2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0501bdac07da167f27d1ec9989a33d1eab421bd73f1476022aa746a1e0fac2e5->enter($__internal_0501bdac07da167f27d1ec9989a33d1eab421bd73f1476022aa746a1e0fac2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82675618702d8831ffbb3f018a2c888ce68866c11ad58c65d10bddbd888532b8->leave($__internal_82675618702d8831ffbb3f018a2c888ce68866c11ad58c65d10bddbd888532b8_prof);

        
        $__internal_0501bdac07da167f27d1ec9989a33d1eab421bd73f1476022aa746a1e0fac2e5->leave($__internal_0501bdac07da167f27d1ec9989a33d1eab421bd73f1476022aa746a1e0fac2e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce7495d722cefbb793eed8f6a251512d9169cdabdaa020df726337e10f57e5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7495d722cefbb793eed8f6a251512d9169cdabdaa020df726337e10f57e5c6->enter($__internal_ce7495d722cefbb793eed8f6a251512d9169cdabdaa020df726337e10f57e5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ff5fbe6ba65e3e684f3a965d52064f873b57a86280c5604ec22ad37307daef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff5fbe6ba65e3e684f3a965d52064f873b57a86280c5604ec22ad37307daef7->enter($__internal_2ff5fbe6ba65e3e684f3a965d52064f873b57a86280c5604ec22ad37307daef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ff5fbe6ba65e3e684f3a965d52064f873b57a86280c5604ec22ad37307daef7->leave($__internal_2ff5fbe6ba65e3e684f3a965d52064f873b57a86280c5604ec22ad37307daef7_prof);

        
        $__internal_ce7495d722cefbb793eed8f6a251512d9169cdabdaa020df726337e10f57e5c6->leave($__internal_ce7495d722cefbb793eed8f6a251512d9169cdabdaa020df726337e10f57e5c6_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f4ba633d6759760121d80274deb2fd68cc5ee488b07707bc5b4b8cde23376aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ba633d6759760121d80274deb2fd68cc5ee488b07707bc5b4b8cde23376aa4->enter($__internal_f4ba633d6759760121d80274deb2fd68cc5ee488b07707bc5b4b8cde23376aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b47ccaff20ce03dece9d70d9731813eb393255f09767f6c0d91722b7b6f46cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47ccaff20ce03dece9d70d9731813eb393255f09767f6c0d91722b7b6f46cb2->enter($__internal_b47ccaff20ce03dece9d70d9731813eb393255f09767f6c0d91722b7b6f46cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_b47ccaff20ce03dece9d70d9731813eb393255f09767f6c0d91722b7b6f46cb2->leave($__internal_b47ccaff20ce03dece9d70d9731813eb393255f09767f6c0d91722b7b6f46cb2_prof);

        
        $__internal_f4ba633d6759760121d80274deb2fd68cc5ee488b07707bc5b4b8cde23376aa4->leave($__internal_f4ba633d6759760121d80274deb2fd68cc5ee488b07707bc5b4b8cde23376aa4_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:logementTwo.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:logementTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/logementTwo.html.twig");
    }
}