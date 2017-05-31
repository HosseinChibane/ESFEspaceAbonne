<?php

/* ESFEspaceAbonneBundle:Back:mesdemandes.html.twig */
class __TwigTemplate_f17629ee56c524760db8620cea1489f32163f0721db99c87c9eebf7122f5270e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig", 1);
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
        $__internal_3a00b1e350a05090c263c3a7918c5510831e08a5034625c9f4cbac125cbd0d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a00b1e350a05090c263c3a7918c5510831e08a5034625c9f4cbac125cbd0d99->enter($__internal_3a00b1e350a05090c263c3a7918c5510831e08a5034625c9f4cbac125cbd0d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig"));

        $__internal_b18176e571162e902d2f55ed6bc647bfe057664bde13a7c43a5a91245568f562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18176e571162e902d2f55ed6bc647bfe057664bde13a7c43a5a91245568f562->enter($__internal_b18176e571162e902d2f55ed6bc647bfe057664bde13a7c43a5a91245568f562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a00b1e350a05090c263c3a7918c5510831e08a5034625c9f4cbac125cbd0d99->leave($__internal_3a00b1e350a05090c263c3a7918c5510831e08a5034625c9f4cbac125cbd0d99_prof);

        
        $__internal_b18176e571162e902d2f55ed6bc647bfe057664bde13a7c43a5a91245568f562->leave($__internal_b18176e571162e902d2f55ed6bc647bfe057664bde13a7c43a5a91245568f562_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06489b674235abf6b99b633c73c113e669aa5db7ca05e0572604cfc8cf00385a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06489b674235abf6b99b633c73c113e669aa5db7ca05e0572604cfc8cf00385a->enter($__internal_06489b674235abf6b99b633c73c113e669aa5db7ca05e0572604cfc8cf00385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39c5cf7547f4866a969001b60a1b1af9003041ad5bed67c199ebe12e4079790e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c5cf7547f4866a969001b60a1b1af9003041ad5bed67c199ebe12e4079790e->enter($__internal_39c5cf7547f4866a969001b60a1b1af9003041ad5bed67c199ebe12e4079790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39c5cf7547f4866a969001b60a1b1af9003041ad5bed67c199ebe12e4079790e->leave($__internal_39c5cf7547f4866a969001b60a1b1af9003041ad5bed67c199ebe12e4079790e_prof);

        
        $__internal_06489b674235abf6b99b633c73c113e669aa5db7ca05e0572604cfc8cf00385a->leave($__internal_06489b674235abf6b99b633c73c113e669aa5db7ca05e0572604cfc8cf00385a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_cb381a27dad20c807d3a61e6b45fcc19b9517222d6f65452ddc607774b161e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb381a27dad20c807d3a61e6b45fcc19b9517222d6f65452ddc607774b161e14->enter($__internal_cb381a27dad20c807d3a61e6b45fcc19b9517222d6f65452ddc607774b161e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_da06dfff1fb794b5183c532cbc222bb10048654437aa53be023d483b731eabdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da06dfff1fb794b5183c532cbc222bb10048654437aa53be023d483b731eabdb->enter($__internal_da06dfff1fb794b5183c532cbc222bb10048654437aa53be023d483b731eabdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_da06dfff1fb794b5183c532cbc222bb10048654437aa53be023d483b731eabdb->leave($__internal_da06dfff1fb794b5183c532cbc222bb10048654437aa53be023d483b731eabdb_prof);

        
        $__internal_cb381a27dad20c807d3a61e6b45fcc19b9517222d6f65452ddc607774b161e14->leave($__internal_cb381a27dad20c807d3a61e6b45fcc19b9517222d6f65452ddc607774b161e14_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ac33626a264bc9b76961a559134a7e2c137eab3230e2179d76ef5cbd9f1048b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac33626a264bc9b76961a559134a7e2c137eab3230e2179d76ef5cbd9f1048b0->enter($__internal_ac33626a264bc9b76961a559134a7e2c137eab3230e2179d76ef5cbd9f1048b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_65c7571232e447b498663b98ac05912bf610bb5249b40f0ef445cb8a746ce4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c7571232e447b498663b98ac05912bf610bb5249b40f0ef445cb8a746ce4df->enter($__internal_65c7571232e447b498663b98ac05912bf610bb5249b40f0ef445cb8a746ce4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_65c7571232e447b498663b98ac05912bf610bb5249b40f0ef445cb8a746ce4df->leave($__internal_65c7571232e447b498663b98ac05912bf610bb5249b40f0ef445cb8a746ce4df_prof);

        
        $__internal_ac33626a264bc9b76961a559134a7e2c137eab3230e2179d76ef5cbd9f1048b0->leave($__internal_ac33626a264bc9b76961a559134a7e2c137eab3230e2179d76ef5cbd9f1048b0_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Back:mesdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/mesdemandes.html.twig");
    }
}
