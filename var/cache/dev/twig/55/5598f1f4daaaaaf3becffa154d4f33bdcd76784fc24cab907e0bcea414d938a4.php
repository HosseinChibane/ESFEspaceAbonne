<?php

/* ESFEspaceAbonneBundle:back:mesDemandes.html.twig */
class __TwigTemplate_3f25f0c45b6adf79564611a7fe1f538dc0e7a7e2a38f1d2ef0f6cbf04c76f044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig", 1);
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
        $__internal_c66b5152424f5286a50db2707795fb414fe4c4f0cc3abbb3b1b363f62a38ab6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66b5152424f5286a50db2707795fb414fe4c4f0cc3abbb3b1b363f62a38ab6b->enter($__internal_c66b5152424f5286a50db2707795fb414fe4c4f0cc3abbb3b1b363f62a38ab6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $__internal_f869ddbf97ebf88e8fa02b43f47ad8fec9e927bf8b1347afbee91b9624b3d5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f869ddbf97ebf88e8fa02b43f47ad8fec9e927bf8b1347afbee91b9624b3d5b9->enter($__internal_f869ddbf97ebf88e8fa02b43f47ad8fec9e927bf8b1347afbee91b9624b3d5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c66b5152424f5286a50db2707795fb414fe4c4f0cc3abbb3b1b363f62a38ab6b->leave($__internal_c66b5152424f5286a50db2707795fb414fe4c4f0cc3abbb3b1b363f62a38ab6b_prof);

        
        $__internal_f869ddbf97ebf88e8fa02b43f47ad8fec9e927bf8b1347afbee91b9624b3d5b9->leave($__internal_f869ddbf97ebf88e8fa02b43f47ad8fec9e927bf8b1347afbee91b9624b3d5b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69b6a0b5e19ce0989604874d5a25e68fe2a815e73b6d05edfc1aa0d6d095d34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b6a0b5e19ce0989604874d5a25e68fe2a815e73b6d05edfc1aa0d6d095d34f->enter($__internal_69b6a0b5e19ce0989604874d5a25e68fe2a815e73b6d05edfc1aa0d6d095d34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc864dafe4d701bb3e4c928ca1e4280c88e2761a2e4f68951989a5a47e5f1625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc864dafe4d701bb3e4c928ca1e4280c88e2761a2e4f68951989a5a47e5f1625->enter($__internal_fc864dafe4d701bb3e4c928ca1e4280c88e2761a2e4f68951989a5a47e5f1625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fc864dafe4d701bb3e4c928ca1e4280c88e2761a2e4f68951989a5a47e5f1625->leave($__internal_fc864dafe4d701bb3e4c928ca1e4280c88e2761a2e4f68951989a5a47e5f1625_prof);

        
        $__internal_69b6a0b5e19ce0989604874d5a25e68fe2a815e73b6d05edfc1aa0d6d095d34f->leave($__internal_69b6a0b5e19ce0989604874d5a25e68fe2a815e73b6d05edfc1aa0d6d095d34f_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_93eba3cec1429437a6ca2bc6cfc5f86e9b303d2c7b0cb8e8d29d57dbec734fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93eba3cec1429437a6ca2bc6cfc5f86e9b303d2c7b0cb8e8d29d57dbec734fc8->enter($__internal_93eba3cec1429437a6ca2bc6cfc5f86e9b303d2c7b0cb8e8d29d57dbec734fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_063671491b06a14396e7f6c246ef0e5e2fd85c4eb3c6251f278232a5215ab884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063671491b06a14396e7f6c246ef0e5e2fd85c4eb3c6251f278232a5215ab884->enter($__internal_063671491b06a14396e7f6c246ef0e5e2fd85c4eb3c6251f278232a5215ab884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_063671491b06a14396e7f6c246ef0e5e2fd85c4eb3c6251f278232a5215ab884->leave($__internal_063671491b06a14396e7f6c246ef0e5e2fd85c4eb3c6251f278232a5215ab884_prof);

        
        $__internal_93eba3cec1429437a6ca2bc6cfc5f86e9b303d2c7b0cb8e8d29d57dbec734fc8->leave($__internal_93eba3cec1429437a6ca2bc6cfc5f86e9b303d2c7b0cb8e8d29d57dbec734fc8_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_8e7c97abcd555fa696a256114c632474075c060c290e817ef0a494b5d3b4c221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7c97abcd555fa696a256114c632474075c060c290e817ef0a494b5d3b4c221->enter($__internal_8e7c97abcd555fa696a256114c632474075c060c290e817ef0a494b5d3b4c221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b27c355e3be358e16261ec0fbcc8046b872a35c4cf417689b45b2c9690795adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27c355e3be358e16261ec0fbcc8046b872a35c4cf417689b45b2c9690795adc->enter($__internal_b27c355e3be358e16261ec0fbcc8046b872a35c4cf417689b45b2c9690795adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_b27c355e3be358e16261ec0fbcc8046b872a35c4cf417689b45b2c9690795adc->leave($__internal_b27c355e3be358e16261ec0fbcc8046b872a35c4cf417689b45b2c9690795adc_prof);

        
        $__internal_8e7c97abcd555fa696a256114c632474075c060c290e817ef0a494b5d3b4c221->leave($__internal_8e7c97abcd555fa696a256114c632474075c060c290e817ef0a494b5d3b4c221_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesDemandes.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesDemandes.html.twig");
    }
}
