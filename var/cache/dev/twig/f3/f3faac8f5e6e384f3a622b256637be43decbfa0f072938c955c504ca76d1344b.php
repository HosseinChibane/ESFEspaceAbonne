<?php

/* @ESFEspaceAbonne/back/mesDemandes.html.twig */
class __TwigTemplate_2bcbc990381047aab07168b2873a2133ad2234cedc6e481c47067b79ecb0090c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesDemandes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2fe6a167fa0ca1114a990529207ff0c7a619da662822bc43ef664635bc9ca12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fe6a167fa0ca1114a990529207ff0c7a619da662822bc43ef664635bc9ca12->enter($__internal_d2fe6a167fa0ca1114a990529207ff0c7a619da662822bc43ef664635bc9ca12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $__internal_fc79d445cfb131eeab234f7028f0f7e96418bfe4c1497fddbf1d1dba6691b713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc79d445cfb131eeab234f7028f0f7e96418bfe4c1497fddbf1d1dba6691b713->enter($__internal_fc79d445cfb131eeab234f7028f0f7e96418bfe4c1497fddbf1d1dba6691b713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2fe6a167fa0ca1114a990529207ff0c7a619da662822bc43ef664635bc9ca12->leave($__internal_d2fe6a167fa0ca1114a990529207ff0c7a619da662822bc43ef664635bc9ca12_prof);

        
        $__internal_fc79d445cfb131eeab234f7028f0f7e96418bfe4c1497fddbf1d1dba6691b713->leave($__internal_fc79d445cfb131eeab234f7028f0f7e96418bfe4c1497fddbf1d1dba6691b713_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f07ec86a649bf70aef23f5c23aa7192c1e4ad7f9ae758e9b41d986a079edf72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f07ec86a649bf70aef23f5c23aa7192c1e4ad7f9ae758e9b41d986a079edf72->enter($__internal_1f07ec86a649bf70aef23f5c23aa7192c1e4ad7f9ae758e9b41d986a079edf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff21678d05c06b95aeecec98efb39e0e53a9c7a34e7d23e5a987b402f1e7100f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff21678d05c06b95aeecec98efb39e0e53a9c7a34e7d23e5a987b402f1e7100f->enter($__internal_ff21678d05c06b95aeecec98efb39e0e53a9c7a34e7d23e5a987b402f1e7100f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ff21678d05c06b95aeecec98efb39e0e53a9c7a34e7d23e5a987b402f1e7100f->leave($__internal_ff21678d05c06b95aeecec98efb39e0e53a9c7a34e7d23e5a987b402f1e7100f_prof);

        
        $__internal_1f07ec86a649bf70aef23f5c23aa7192c1e4ad7f9ae758e9b41d986a079edf72->leave($__internal_1f07ec86a649bf70aef23f5c23aa7192c1e4ad7f9ae758e9b41d986a079edf72_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_89c719e4d91fc06449aafbc4f6177bd879a10a0dc183ffb2fff5528f4e2d3f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c719e4d91fc06449aafbc4f6177bd879a10a0dc183ffb2fff5528f4e2d3f1b->enter($__internal_89c719e4d91fc06449aafbc4f6177bd879a10a0dc183ffb2fff5528f4e2d3f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_f8a9c4d890428a6e1860dc64d4ee0908be2321c309c40484cce46396d97a246d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a9c4d890428a6e1860dc64d4ee0908be2321c309c40484cce46396d97a246d->enter($__internal_f8a9c4d890428a6e1860dc64d4ee0908be2321c309c40484cce46396d97a246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_f8a9c4d890428a6e1860dc64d4ee0908be2321c309c40484cce46396d97a246d->leave($__internal_f8a9c4d890428a6e1860dc64d4ee0908be2321c309c40484cce46396d97a246d_prof);

        
        $__internal_89c719e4d91fc06449aafbc4f6177bd879a10a0dc183ffb2fff5528f4e2d3f1b->leave($__internal_89c719e4d91fc06449aafbc4f6177bd879a10a0dc183ffb2fff5528f4e2d3f1b_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_92adc6908a4ed4ab5c5fbf8b77417afa8ae946f9860e0e997f55f5e37b60097a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92adc6908a4ed4ab5c5fbf8b77417afa8ae946f9860e0e997f55f5e37b60097a->enter($__internal_92adc6908a4ed4ab5c5fbf8b77417afa8ae946f9860e0e997f55f5e37b60097a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5b1cd51648f34de6b9e3357ea7c52ef96a989e170705eca47dbd09293712e63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1cd51648f34de6b9e3357ea7c52ef96a989e170705eca47dbd09293712e63a->enter($__internal_5b1cd51648f34de6b9e3357ea7c52ef96a989e170705eca47dbd09293712e63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        if (array_key_exists("listDemandeInscription", $context)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listDemandeInscription"] ?? $this->getContext($context, "listDemandeInscription")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowDemande"]) {
                // line 29
                echo "                        <tr>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "type", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "etat", array()), "html", null, true);
                echo "</td>
                            <td>           
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_detailsDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowDemande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                ";
        }
        // line 44
        echo "            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
";
        
        $__internal_5b1cd51648f34de6b9e3357ea7c52ef96a989e170705eca47dbd09293712e63a->leave($__internal_5b1cd51648f34de6b9e3357ea7c52ef96a989e170705eca47dbd09293712e63a_prof);

        
        $__internal_92adc6908a4ed4ab5c5fbf8b77417afa8ae946f9860e0e997f55f5e37b60097a->leave($__internal_92adc6908a4ed4ab5c5fbf8b77417afa8ae946f9860e0e997f55f5e37b60097a_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  154 => 43,  142 => 37,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Mes Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% if listDemandeInscription is defined %}
                    {% for rowDemande in listDemandeInscription %}
                        <tr>
                            <td>{{rowDemande.id}}</td>
                            <td>{{rowDemande.type}}</td>
                            <td>{{rowDemande.etat}}</td>
                            <td>           
                                <a href=\"{{ path('esf_espace_abonne_detailsDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
{% endblock %}", "@ESFEspaceAbonne/back/mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesDemandes.html.twig");
    }
}
